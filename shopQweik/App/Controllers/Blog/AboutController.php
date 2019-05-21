<?php

namespace App\Controllers\Blog;

use System\Controller;

class AboutController extends Controller
{
    public function index()
    {
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');
		$data['ads'] = $this->load->model('Ads')->enabled();
        $data['about'] = $this->load->model('Settings')->get('about');
        $view = $this->view->render('blog/about', $data);

        return $this->blogLayout->render($view);
    }
}