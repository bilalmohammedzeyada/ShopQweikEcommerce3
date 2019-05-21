<?php

namespace App\Controllers\Blog;

use System\Controller;

class CustomerController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {
        $this->blogLayout->title('تسجيل الدخول');

        $loginModel = $this->load->model('Login');

        $this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        if ($loginModel->isLogged()) {
            return $this->url->redirectTo('/customer/account/index');
        }

        $data['errors'] = $this->errors;
		
		
        $view = $this->view->render('blog/account/login', $data);

        return $this->blogLayout->render($view);
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

            $json['success']  = 'مرحبا بعودتك ' . $loggedInUser->first_name;

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
		$this->blogLayout->title('البيانات الشخصية');
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
	
	public function edituser($id)
    {
		$this->blogLayout->title('البيانات الشخصية');
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()){
			
			$usersModel = $this->load->model('Users');

			if (! $usersModel->exists($id)) {
				return $this->url->redirectTo('/404');
			}

			$user = $usersModel->get($id);

			return $this->formto($user);
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

            $data['heading'] = 'تعديل بيانات العضو ' . $user->first_name . ' ' . $user->last_name;
        } else {
            // adding form
            $data['target'] = 'add-user-form';

            $data['action'] = $this->url->link('/customer/account/submit/');

            $data['heading'] = 'إضافة عضو جديد';
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

            $json['success'] = 'تم تعديل بيانات العضو بنجاح';

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
	
	
	
	private function formto($user = null)
    {
        if ($user) {
            // editing form
            $data['target'] = 'edit-user-' . $user->id;

            $data['action'] = $this->url->link('/customer/account/saveuser/' . $user->id);

            $data['heading'] = 'تعديل بيانات العضو ' . $user->first_name . ' ' . $user->last_name;
        } else {
            // adding form
            $data['target'] = 'add-user-form';

            $data['action'] = $this->url->link('/customer/account/submit/');

            $data['heading'] = 'إضافة عضو جديد';
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
    public function saveuser($id)
    {
        $json = [];
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()){
        //if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Users')->updateUser($id);

            $json['success'] = 'تم تعديل بيانات العضو بنجاح';

            $json['redirectTo'] = $this->url->link('/customer/account/edituser/' . $id);
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
            $this->errors[] = 'الرجاء وضع البريد الإلكتروني';
        } elseif (! filter_var($email , FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = 'يرجى إدخال بريد إلكتروني صالح';
        }

        if (! $password) {
            $this->errors[] = 'يرجى إدخال كلمة المرور';
        }

        if (! $this->errors) {
            $loginModel = $this->load->model('Login');

            if (! $loginModel->isValidLogin($email, $password)) {
                $this->errors[] = 'بيانات تسجيل الدخول غير صالحة';
            }
        }

        return empty($this->errors);
    }
	
	public function pass()
    {
        $this->blogLayout->title('تغيير كلمة المرور');

        $loginModel = $this->load->model('Login');

        $this->blogLayout->disable('sidebar');
        //$this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        if (!$loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        }

        $data['errors'] = $this->errors;
		
		
        $view = $this->view->render('/blog/account/password', $data);

        return $this->blogLayout->render($view);
    }
	
	public function changepassword()
	{
		$json = [];
		$loginModel = $this->load->model('Login');
		$loggedInUser = $loginModel->user();
		$id = $loggedInUser->id;
        if ($loginModel->isLogged()){
			if ($this->isValids()) {
				// it means there are no errors in form validation
				
				$this->load->model('Users')->updatePassword();

				$json['success'] = 'تم تحديث كلمة المرور';

				$json['redirectTo'] = $this->url->link('/customer/account/changepass');
			} else {
				// it means there are errors in form validation
				$json['errors'] = $this->validator->flattenMessages();
			}

		} else {
			$json['errors'] = "كلمة المرور القديمة خاطئة.";
		}
			return $this->json($json);
	}
	
	private function isValids()
    {
		$this->validator->required('password')->minLen('password', 8);        
		
		$this->validator->required('new_password')->minLen('new_password', 8)->match('new_password', 'confirm_password', 'كلمات المرور غير متطابقة');        
		
		
        return $this->validator->passes();
    }
	
}