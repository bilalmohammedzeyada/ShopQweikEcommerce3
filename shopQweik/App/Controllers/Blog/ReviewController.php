<?php

namespace App\Controllers\Blog;

use System\Controller;

class ReviewController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {
        $this->blogLayout->title('مراجعة المنتجات');

        $loginModel = $this->load->model('Login');

         $this->blogLayout->disable('sidebar');
        //$this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        if ($loginModel->isLogged()) {
			$data['errors'] = $this->errors;
			$data['reviews'] = $this->load->model('Sales')->allReviews();
			
			$view = $this->view->render('blog/sales/review', $data);

			return $this->blogLayout->render($view);
		} else {
			 return $this->url->redirectTo('/');
		}
    }

    /**
    * Submit Login form
    *
    * @return mixed
    */
    public function submit()
    {
        if ($this->isValid()) {
            $loginModel = $this->load->model('Login');

            $loggedInUser = $loginModel->user();

            if ($this->request->post('remember')) {
                // save login data in cookie
                $this->cookie->set('login', $loggedInUser->code);
            } else {
                // save login data in session
                $this->session->set('login', $loggedInUser->code);
            }

            $json = [];

            $json['success']  = 'Welcome Back ' . $loggedInUser->first_name;

            $json['redirectTo'] = $this->url->link('/customer/account/index');

            return $this->json($json);
        } else {
            $json = [];

            $json['errors'] = implode('<br>', $this->errors);

            return $this->json($json);
        }
    }
	
	
	/**
     * Display Edit Form
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()){
			
			$usersModel = $this->load->model('Users');

			if (! $usersModel->exists($id)) {
				return $this->url->redirectTo('/404');
			}

			$user = $usersModel->get($id);

			return $this->form($user);
		} else {
			return $this->url->redirectTo('/');
		}
    }

     /**
     * Display Form
     *
     * @param \stdClass $user
     */
    private function form($user = null)
    {
        if ($user) {
            // editing form
            $data['target'] = 'edit-user-' . $user->id;

            $data['action'] = $this->url->link('/customer/account/save/' . $user->id);

            $data['heading'] = 'Edit ' . $user->first_name . ' ' . $user->last_name;
        } else {
            // adding form
            $data['target'] = 'add-user-form';

            $data['action'] = $this->url->link('/customer/account/submit/');

            $data['heading'] = 'Add New User';
        }

        $user = (array) $user;

        $data['first_name'] = array_get($user, 'first_name');
        $data['last_name'] = array_get($user, 'last_name');
        $data['status'] = array_get($user, 'status', 'enabled');
        $data['users_group_id'] = array_get($user, 'users_group_id');
        $data['email'] = array_get($user, 'email');
        $data['gender'] = array_get($user, 'gender');
        $data['sDay'] = array_get($user, 'sDay');
        $data['sMonth'] = array_get($user, 'sMonth');
        $data['sYear'] = array_get($user, 'sYear');
        $data['mobile_number'] = array_get($user, 'mobile_number');
        $data['alternative_number'] = array_get($user, 'alternative_number');
        $data['co_code1'] = array_get($user, 'co_code1');
        $data['co_code2'] = array_get($user, 'co_code2');
 
        $data['birthday'] = '';
        $data['image'] = '';

        /* if (! empty($user['birthday'])) {
            $data['birthday'] = date('d-m-Y', $user['birthday']);
        }

        if (! empty($user['image'])) {
            // default path to upload user image : public/images
            $data['image'] = $this->url->link('public/images/' . $user['image']);
        } */

        //$data['users_groups'] = $this->load->model('UsersGroups')->all();
		
		$view = $this->view->render('blog/account/form', $data);

        return $this->blogLayout->render($view, $data);
    }

    /**
    * Submit for creating new user
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()){
        //if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Users')->update($id);

            $json['success'] = 'Users  Has Been Updated Successfully';

            $json['redirectTo'] = $this->url->link('/customer/account/edit/' . $id);
        //} else {
            // it means there are errors in form validation
          //  $json['errors'] = $this->validator->flattenMessages();
        //}

        return $this->json($json);
		} else {
			return $this->url->redirectTo('/');
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
            $loginModel = $this->load->model('Login');

            if (! $loginModel->isValidLogin($email, $password)) {
                $this->errors[] = 'Invalid Login Data';
            }
        }

        return empty($this->errors);
    }
	
	/* public function delete($id)
    {
        $reviewsModel = $this->load->model('Ads');

        if (! $reviewsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $reviewsModel->delete($id);

        $json['success'] = 'تم حذف الاعلان بنجاح';

        return $this->json($json);
    } */
}