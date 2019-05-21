<?php

namespace App\Controllers\Blog;

use System\Controller;

class SalesController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {
        $this->blogLayout->title('طلباتي');

        $loginModel = $this->load->model('Login');

        // disable sidebar
        $this->blogLayout->disable('sidebar');
        //$this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        if ($loginModel->isLogged()) {
			$data['errors'] = $this->errors;
			$data['sales'] = $this->load->model('Sales')->all();
			
			$view = $this->view->render('blog/sales/history', $data);

			return $this->blogLayout->render($view);
		} else {
			 return $this->url->redirectTo('/');
		}
    }

    /**
    * Submit Login form
    *
    * @return mixed
    */
    public function submit()
    {
        if ($this->isValid()) {
            $loginModel = $this->load->model('Login');

            $loggedInUser = $loginModel->user();

            if ($this->request->post('remember')) {
                // save login data in cookie
                $this->cookie->set('login', $loggedInUser->code);
            } else {
                // save login data in session
                $this->session->set('login', $loggedInUser->code);
            }

            $json = [];

            $json['success']  = 'Welcome Back ' . $loggedInUser->first_name;

            $json['redirectTo'] = $this->url->link('/customer/account/index');

            return $this->json($json);
        } else {
            $json = [];

            $json['errors'] = implode('<br>', $this->errors);

            return $this->json($json);
        }
    }
	
	
	/**
     * Display Edit Form
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()){
			
			$salesModel = $this->load->model('Sales');

			if (! $salesModel->exists($id)) {
				return $this->url->redirectTo('/404');
			}

			$order = $salesModel->get($id);

			return $this->form($order);
		} else {
			return $this->url->redirectTo('/');
		}
    }
	
	
	public function order_id($id)
    {
		$this->blogLayout->title('عرض الطلب');
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()){
			
			$salesModel = $this->load->model('Sales');

			if (! $salesModel->exists($id)) {
				return $this->url->redirectTo('/404');
			}

			$order = $salesModel->get($id);

			return $this->form($order);
		} else {
			return $this->url->redirectTo('/');
		}
    }

     /**
     * Display Form
     *
     * @param \stdClass $user
     */
    private function form($order = null)
    {
        if ($order) {
            // editing form
            $data['target'] = 'edit-order-' . $order->id;

            $data['action'] = $this->url->link('/customer/account/save/' . $order->id);

            $data['heading'] = 'Edit ' . $order->first_name . ' ' . $order->last_name;
        } else {
            // adding form
            $data['target'] = 'add-order-form';

            $data['action'] = $this->url->link('/customer/account/submit/');

            $data['heading'] = 'Add New order';
        }

        $order = (array) $order;
		//`id`, `first_name`, `last_name`, `email`, `country`, `city`, `region`, `street`, `building_number`, `post_code`, `co_country`, `mobile`, `shipping_method`, `payment_method`, `total_price`, `product_title`, `price`, `weight`, `quantity`, `product_id`, `code`, `created`, `status`, `user_id`
		$data['shipments_price'] = $this->load->model('Settings')->get('shipments_price');
		$data['price_shipments_pay_hand'] = $this->load->model('Settings')->get('price_shipments_pay_hand');
        $data['first_name'] = array_get($order, 'first_name');
        $data['last_name'] = array_get($order, 'last_name');
        $data['email'] = array_get($order, 'email');
        $data['country'] = array_get($order, 'country');
        $data['city'] = array_get($order, 'city');
        $data['region'] = array_get($order, 'region');
        $data['street'] = array_get($order, 'street');
        $data['building_number'] = array_get($order, 'building_number');
        $data['post_code'] = array_get($order, 'post_code');
        $data['co_country'] = array_get($order, 'co_country');
        $data['mobile'] = array_get($order, 'mobile');
        $data['shipping_method'] = array_get($order, 'shipping_method');
        $data['payment_method'] = array_get($order, 'payment_method');
        $data['total_price'] = array_get($order, 'total_price');
        $data['product_title'] = array_get($order, 'product_title');
        $data['product_title'] = array_get($order, 'product_title');
        $data['price'] = array_get($order, 'price');		
        $data['weight'] = array_get($order, 'weight');		
        $data['quantity'] = array_get($order, 'quantity');		
        $data['product_id'] = array_get($order, 'product_id');		
        $data['code'] = array_get($order, 'code');		
        $data['created'] = array_get($order, 'created');		
        $data['user_id'] = array_get($order, 'user_id');		
        $data['status'] = array_get($order, 'status');
        $data['id'] = array_get($order, 'id');
		$view = $this->view->render('blog/sales/order', $data);

        return $this->blogLayout->render($view, $data);
    }

    /**
    * Submit for creating new user
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()){
        //if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Sales')->update($id);

            $json['success'] = 'Users  Has Been Updated Successfully';

            $json['redirectTo'] = $this->url->link('/customer/account/edit/' . $id);
        //} else {
            // it means there are errors in form validation
          //  $json['errors'] = $this->validator->flattenMessages();
        //}

        return $this->json($json);
		} else {
			return $this->url->redirectTo('/');
		}
    }
}