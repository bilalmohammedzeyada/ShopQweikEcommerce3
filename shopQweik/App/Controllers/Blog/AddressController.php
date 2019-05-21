<?php

namespace App\Controllers\Blog;

use System\Controller;

class AddressController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {
		$data['ads'] = $this->load->model('Ads')->enabled();
        $this->blogLayout->title('العنوان');

        $loginModel = $this->load->model('Login');

        // disable sidebar

        if ($loginModel->isLogged()) {
			$data['errors'] = $this->errors;
			$data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;
			$view = $this->view->render('blog/account/indexaddress', $data);
			return $this->blogLayout->render($view);

        } else {
			return $this->url->redirectTo('/');
		}

    }
	
	public function newaddress()
    {
        $this->blogLayout->title('سجل العناوين');

        $loginModel = $this->load->model('Login');

        // disable sidebar

        if ($loginModel->isLogged()) {
			$data['errors'] = $this->errors;
			$data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;
			$view = $this->view->render('blog/account/address', $data);
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
    public function submit($id)
    {
        $json = [];
		$loginModel = $this->load->model('Login');

        // disable sidebar

        if ($loginModel->isLogged()) {
			if ($this->isValid()) {

				// it means there are no errors in form validation
				$this->load->model('Address')->update($id);

				$json['success'] = 'Adress Has Been Created Successfully';

				$json['redirectTo'] = $this->url->link('/customer/address/new');
			} else {
            // it means there are errors in form validation
				$json['errors'] = $this->validator->flattenMessages();
        }

			return $this->json($json);

        } else {
			return $this->url->redirectTo('/');
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
        $usersModel = $this->load->model('Users');

        if (! $usersModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $user = $usersModel->get($id);

        return $this->form($user);
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
		$loginModel = $this->load->model('Login');

        // disable sidebar

			$json = [];
        if ($loginModel->isLogged()) {

        //if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Address')->update($id);

            $json['success'] = 'Users  Has Been Updated Successfully';

            $json['redirectTo'] = $this->url->link('/customer/address/new');
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
        /* $this->validator->required('first_name', 'First Name is Required');
        $this->validator->required('last_name', 'Last Name is Required'); */
        $this->validator->required('company', 'Company is Required');
        $this->validator->required('mobile_number', 'Mobile Number is Required');
        $this->validator->required('fax', 'Fax is Required');
        $this->validator->required('country', 'Country is Required');
        $this->validator->required('city', 'City is Required');
        $this->validator->required('region', 'Region is Required');
        $this->validator->required('street', 'Street is Required');
        $this->validator->required('building_number', 'Building number is Required');

        return $this->validator->passes();
    }
}