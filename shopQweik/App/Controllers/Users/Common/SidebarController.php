<?php

namespace App\Controllers\Users\Common;

use System\Controller;

class SidebarController extends Controller
{
    public function index()
    {
		$data['seller'] = $this->load->model('Loginseller')->user();
		$market = $this->load->model('Seller')->getMarketsWithSellerIdBySellerId($data['seller']->id);
		$seller_id = $market->user_id;
		if($market){
			$data['market'] = $market;
			$data['seller_id'] = $market->user_id;
		}
		
        return $this->view->render('users/common/sidebar', $data);
    }
}