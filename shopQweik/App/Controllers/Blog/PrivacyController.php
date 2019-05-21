<?php

namespace App\Controllers\Blog;

use System\Controller;

class PrivacyController extends Controller
{
     /**
     * Display Home Page
     *
     * @return mixed
     */
    public function index()
    {
		//$this->blogLayout->disable('sidebar');
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');
		
		
        $data['about'] = $this->load->model('Settings')->get('about');
        

        // i will use getOutput() method just to display errors
        // as i'm using php 7 which is throwing all errors as exceptions
        // which won't be thrown through the __toString() method
        $view = $this->view->render('blog/privacy', $data);

        return $this->blogLayout->render($view);
    }
}