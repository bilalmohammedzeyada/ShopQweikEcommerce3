<?php

namespace App\Controllers\Blog;

use System\Controller;

class BrandController extends Controller
{
     /**
     * Display Home Page
     *
     * @return mixed
     */
    public function index()
    {
		$data['ads'] = $this->load->model('Ads')->enabled();
		$this->blogLayout->disable('header');
		$this->blogLayout->disable('footer');
		$this->blogLayout->disable('rightsidebar');
		$this->blogLayout->disable('sidebar');
        $data['posts'] = $this->load->model('Posts')->latest();

        $this->html->setTitle($this->settings->get('site_name'));

        $postController = $this->load->controller('Blog/Post');
		$data['errors'] = $this->errors;
        // i will use getOutput() method just to display errors
        // as i'm using php 7 which is throwing all errors as exceptions
        // which won't be thrown through the __toString() method
        $view = $this->view->render('blog/brand/brand', $data);

        return $this->blogLayout->render($view);
    }
}