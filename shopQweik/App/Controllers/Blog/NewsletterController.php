<?php

namespace App\Controllers\Blog;

use System\Controller;

class NewsletterController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {
		
		$this->blogLayout->title('ضبط الرسائل الإخبارية');

        $loginModel = $this->load->model('Login');

         $this->blogLayout->disable('sidebar');
        //$this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        if ($loginModel->isLogged()) {
			$data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;
			$data['errors'] = $this->errors;
			
			
			$view = $this->view->render('blog/sales/newsletter', $data);

			return $this->blogLayout->render($view);
		} else {
			 return $this->url->redirectTo('/');
		}
    }
	
	public function save()
	{
		 $json = [];
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()) {
				$this->load->model('Active')->isSubsecribe();
				if($this->request->post('is_subscribed') == 1){
					$json['success'] = 'تم الاشتراك في النشرة البريدية';
				} else {
					$json['errors'] = 'لم يتم الأشتراك في النشرة البريدية';
				}

				$json['redirectTo'] = $this->url->link('/newsletter/manage/');
			
        }

			return $this->json($json);
	}
}