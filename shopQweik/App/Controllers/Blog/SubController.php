<?php

namespace App\Controllers\Blog;

use System\Controller;

class SubController extends Controller
{
     /**
     * Display Home Page
     *
     * @return mixed
     */
    public function index()
    {
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');
		$data['email'] = $this->request->post('email');
		$data['url'] = $this->url->link('/sub' . '?email=' . $data['email']);
		if($data['email']){
			 $data['success'] = "تم اشتراك في القائمة البريدية";
			$view = $this->view->render('blog/sub', $data);
		} else {
			$data['error'] = "لم تقم باضافة ايميل للاشتراك بالقائمة البريدية";
			$view = $this->view->render('blog/sub', $data);
		}
        return $this->blogLayout->render($view);
    }
	
	public function submit()
	{
        $json = [];
            $this->load->model('Sub')->create();
        if ($this->isValid()) {
            $json['success'] = 'م اشتراك في القائمة البريدية';

            $json['redirectTo'] = $this->url->link('/');
        } else {
            // it means there are errors in form validation
             $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
	}
	
	private function isValid($id = null)
    {
        $this->validator->required('email', 'البريد الألكتروني مطلوب');
        return $this->validator->passes();
    }
}