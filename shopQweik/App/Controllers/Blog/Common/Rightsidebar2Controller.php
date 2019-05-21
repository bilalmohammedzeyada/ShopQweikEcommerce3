<?php

namespace App\Controllers\Blog\Common;

use System\Controller;

class RightSidebar2Controller extends Controller
{
    public function index()
    {
        $data['categories'] = $this->load->model('Categories')->getEnabledCategoriesWithNumberOfTotalPosts();
        $data['cats'] = $this->load->model('Categories')->getEnabledCategoriesWithNumberOfTotalPosts();
		$data['countbrands'] = $this->load->model('Categories')->CountBrands();
		//$data['countCarts'] = $this->load->model('Checkout')->countCart();
		$loginModel = $this->load->model('Login');
        //$data['ads'] = $this->load->model('Ads')->enabled();
		//if ($loginModel->isLogged()) {
			$data['user'] = $this->load->model('Login')->user();
			return $this->view->render('blog/common/rightsidebar2', $data);
		//}
    }
}