<?php

namespace App\Controllers\Blog;

use System\Controller;

class PostvController extends Controller
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
		
		
        $arr= null;
			if(isset($_SESSION['cart'])){
				foreach($_SESSION['cart'] as $key => $value){
				$arr[] = $key;
				}
			}
			// var_dump($arr);
			//get product info
			$cart = $this->model('M_Cart');
			$items = $cart->getInfoProduct($arr);
        //$view = $this->view->render('blog/about', $data);

       // return $this->blogLayout->render($view);
    }
}