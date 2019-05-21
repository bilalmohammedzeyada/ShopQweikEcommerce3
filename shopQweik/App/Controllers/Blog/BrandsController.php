<?php

namespace App\Controllers\Blog;

use System\Controller;

class BrandsController extends Controller
{
     /**
     * Display Home Page
     *
     * @return mixed
     */
    public function index($title, $id)
    {
		$data['ads'] = $this->load->model('Ads')->enabled();
		$this->blogLayout->disable('rightsidebar');
		$this->blogLayout->disable('rightsidebar2');
		$this->blogLayout->disable('sidebar');

		
		$loginModel = $this->load->model('Login');

        //$loggedInUser = $loginModel->user();
		
		$data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;
		$products = $this->load->model('Brands')->getPostWithComments($id);

        if (! $products) {
            return $this->url->redirectTo('/404');
        }

        $this->html->setTitle($products->title);

        $data['products'] = $products;

        $view = $this->view->render('blog/brand/brand', $data);

        return $this->blogLayout->render($view);
    }
}