<?php

namespace App\Controllers\Blog;

use System\Controller;

class ActiveController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index($title)
    {
		$data['ads'] = $this->load->model('Ads')->enabled();
        $this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('sidebar');
		
        $loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()) {
            return $this->url->redirectTo('/customer/account/index');
        }

        $data['errors'] = $this->errors;
		
		$data['active'] = $this->load->model('Active')->activeAccountWithHaveCode($title);

         if (! $data['active']) {
            return $this->url->redirectTo('/404');
        } 
		
        $view = $this->view->render('blog/account/active', $data);

        return $this->blogLayout->render($view); 
    }
	
	
	public function change($code)
    {
        $this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('sidebar');
		
        $loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()) {
            return $this->url->redirectTo('/customer/account/index');
        }

        $data['errors'] = $this->errors;
		
		$data['active'] = $this->load->model('Active')->changePassword($code);

         if (! $data['active']) {
            return $this->url->redirectTo('/404');
        } 
		
        $view = $this->view->render('blog/account/change', $data);

        return $this->blogLayout->render($view); 
    }
}