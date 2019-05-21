<?php

namespace App\Controllers\Blog;

use System\Controller;

class EasycheckoutController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {
        $this->blogLayout->title('Login');


        // disable sidebar
        $this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');
        $this->blogLayout->disable('footer');
		$data['title'] = $this->html->getTitle();

		$loginModel = $this->load->model('Login');

        // disable sidebar

        if ($loginModel->isLogged()) {
        $data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;
		$data['Banks'] = $this->load->model('Banks')->all();
		$data['countPrice'] = $this->load->model('Checkout')->countPrice();
		$data['site_name'] = $this->load->model('Settings')->get('site_name');
		$data['phone'] = $this->load->model('Settings')->get('phone');
		$data['gifts'] = $this->load->model('Settings')->get('gifts');
		$data['shipments'] = $this->load->model('Settings')->get('shipments');
		$data['email'] = $this->load->model('Settings')->get('email');
		$data['msg'] = $this->load->model('Settings')->get('msg');
		$data['price_shipments_pay_hand'] = $this->load->model('Settings')->get('price_shipments_pay_hand');
		$data['discount_price'] = $this->load->model('Settings')->get('discount_price');
		$data['shipments_price'] = $this->load->model('Settings')->get('shipments_price');
		$data['cartsbuys'] = $this->load->model('Checkout')->all();
		$data['carts'] = $this->load->model('Checkout')->all();
        $data['errors'] = $this->errors;

        
        $view = $this->view->render('blog/checkout/easycheckout', $data);
		return $this->blogLayout->render($view);
		} else {
			return $this->url->redirectTo('/customer/account/login');
		}
    }
	
	public function confirmOrder()
	{
		$json = [];
        if ($this->isValid()) {
			$data['success'] = 'dd';
            // it means there are no errors in form validation
            $this->load->model('Easycheckout')->create();

            $json['success'] = 'لقد تمت العملية بنجاح';

            //$json['redirectTo'] = $this->url->link('/sales/order/history');
		
			return $this->url->redirectTo('/sales/order/history', $data);
        } else {
            //it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
	}
	
	private function isValid()
    {
        $this->validator->required('first_name', 'First Name is Required');
        $this->validator->required('last_name', 'Last Name is Required'); 
        $this->validator->required('email', 'Company is Required');
        $this->validator->required('mobile_number', 'Mobile Number is Required');
        $this->validator->required('postcode', 'Zip Code is Required');
        $this->validator->required('country', 'Country is Required');
        $this->validator->required('city', 'City is Required');
        $this->validator->required('region', 'Region is Required');
        $this->validator->required('street', 'Street is Required');
        $this->validator->required('building_number', 'Building number is Required');
        $this->validator->required('mobile_number', 'Building number is Required');
        //$this->validator->required('country_code', 'Building number is Required');

        return $this->validator->passes();
    }
}