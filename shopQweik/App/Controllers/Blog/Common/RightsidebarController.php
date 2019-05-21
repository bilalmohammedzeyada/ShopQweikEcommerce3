<?php

namespace App\Controllers\Blog\Common;

use System\Controller;

class RightSidebarController extends Controller
{
    public function index()
    {
        $data['categories'] = $this->load->model('Categories')->getEnabledCategoriesWithNumberOfTotalPosts();
		$loginModel = $this->load->model('Login');
        //$data['ads'] = $this->load->model('Ads')->enabled();
		if ($loginModel->isLogged()) {
			$data['user'] = $this->load->model('Login')->user();
			return $this->view->render('blog/common/rightsidebar', $data);
		}
    }
}