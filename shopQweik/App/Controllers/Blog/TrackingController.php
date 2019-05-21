<?php

namespace App\Controllers\Blog;

use System\Controller;

class TrackingController extends Controller
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
		//$mobile = $this->app->request->get('mobile');
		$data['order'] = $this->request->post('order_number');
		$data['mobile'] = $this->request->post('mobile_number');
		//$order_number = $this->app->request->get('order_number');
		$data['url'] = $this->url->link('/detrack/tracking/index/' . '?mobile=' . $data['mobile'] . '&order_number=' . $data['order']);
		
		
		if($data['order'] && $data['mobile']){
			 $orders = $this->load->model('Orders')->getOrders($data['order'], $data['mobile']);
			$data['orders'] = $orders;
			$view = $this->view->render('blog/footer/track', $data);
		} else {
			$view = $this->view->render('blog/footer/tracking', $data);
		}
        return $this->blogLayout->render($view);
    }
}