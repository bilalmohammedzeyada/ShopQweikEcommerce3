<?php

namespace App\Controllers\Blog;

use System\Controller;

class AccountController extends Controller
{
     /**
     * Display Registration Page
     *
     * @return mixed
     */
    public function index()
    {
		$data['ads'] = $this->load->model('Ads')->enabled();
		$loginModel = $this->load->model('Login');
        if ($loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        }

        $this->blogLayout->title('تسجيل حساب جديد');

        $view = $this->view->render('blog/account/create');

        // disable sidebar
        $this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        return $this->blogLayout->render($view);
    }

    /**
    * Submit for creating new user
    *
    * @return string | json
    */
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {

            // set the users group id for the registered user
            // to be the id of the "users" group
            $this->request->setPost('users_group_id', 2);

            // it means there are no errors in form validation
            $this->load->model('Users')->create();
			

            $json['success'] = 'تم إنشاء حساب جديد بنجاح';

            $json['redirectTo'] = $this->url->link('/');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     * Validate the form
     *
     * @param int $id
     * @return bool
     */
    private function isValid()
    {
        $this->validator->required('first_name', 'أسمك مطلوب');
        $this->validator->required('last_name', 'أسم العائلة مطلوب');
        $this->validator->required('mobile_number', 'رقم الجوال مطلوب');
		$this->validator->required('password')->minLen('password', 8)->match('password', 'confirm_password', 'كلمات المرور غير متطابقة');        
		$this->validator->required('email')->email('email');
        $this->validator->unique('email', ['users', 'email']);
		
        return $this->validator->passes();
    }
}