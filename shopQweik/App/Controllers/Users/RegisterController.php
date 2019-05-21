<?php

namespace App\Controllers\Users;

use System\Controller;

class RegisterController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {                  
        $loginModel = $this->load->model('Loginseller');

        if ($loginModel->isLogged()) {
            return $this->url->redirectTo('/seller');
        }

        $data['errors'] = $this->errors;

        return $this->view->render('users/users/register', $data);
    }

    /**
    * Submit Login form
    *
    * @return mixed
    */
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {

            // set the users group id for the registered user
            // to be the id of the "users" group
            $this->request->setPost('is_seller', 1);

            // it means there are no errors in form validation
            $this->load->model('Seller')->createNewSeller();
			
            $json['success'] = 'تم إنشاء حساب تاجر جديد';

            $json['redirectTo'] = $this->url->link('/seller/login');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

    /**
    * Validate Login Form
    *
    * @return bool
    */
    private function isValid()
    {
        $this->validator->required('email', 'البريد الألكتروني مطلوب');
		$this->validator->required('password')->minLen('password', 8)->match('password', 'confirm_password', 'كلمات المرور غير متطابقة');        
		$this->validator->required('email')->email('email');
        $this->validator->unique('email', ['seller', 'contact_email']);
		
        return $this->validator->passes();
    }
}