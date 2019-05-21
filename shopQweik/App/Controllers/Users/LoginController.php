<?php

namespace App\Controllers\Users;

use System\Controller;

class LoginController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {    
		$data['ads'] = $this->load->model('Ads')->enabled();	
        $loginModel = $this->load->model('Loginseller');

        if ($loginModel->isLogged()) {
            return $this->url->redirectTo('/seller');
        }

        $data['errors'] = $this->errors;

        return $this->view->render('users/users/login', $data);
    }

    /**
    * Submit Login form
    *
    * @return mixed
    */
    public function submit()
    {
        if ($this->isValid()) {
            $loginModel = $this->load->model('Loginseller');

            $loggedInUser = $loginModel->user();

            if ($this->request->post('remember')) {
                // save login data in cookie
                $this->cookie->set('loginSeller', $loggedInUser->code);
            } else {
                // save login data in session
                $this->session->set('loginSeller', $loggedInUser->code);
            }

            $json = [];

            $json['success']  = 'Welcome Back ' . $loggedInUser->first_name;

            $json['redirect'] = $this->url->link('/seller');

            return $this->json($json);
        } else {
            $json = [];

            $json['errors'] = implode('<br>', $this->errors);

            return $this->json($json);
        }
    }

    /**
    * Validate Login Form
    *
    * @return bool
    */
    private function isValid()
    {
        $email = $this->request->post('email');
        $password = $this->request->post('password');

        if (! $email) {
            $this->errors[] = 'Please Insert Email address';
        } elseif (! filter_var($email , FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = 'Please Insert Valid Email';
        }

        if (! $password) {
            $this->errors[] = 'Please Insert Password';
        }

        if (! $this->errors) {
            $loginModel = $this->load->model('Loginseller');

            if (! $loginModel->isValidLogin($email, $password)) {
                $this->errors[] = 'Invalid Login Data';
            }
        }

        return empty($this->errors);
    }
}