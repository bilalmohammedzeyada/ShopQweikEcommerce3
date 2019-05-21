<?php

namespace App\Controllers\Users;

use System\Controller;

class ProfileController extends Controller
{
	
	public function index()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/seller/login');
        } 
		
		$loggedInSeller = $loginModel->user();
		$sellerData = $this->load->model('Seller')->getDataSeller($loggedInSeller->id);
		if ($sellerData) {
			$sellerData = (array) $sellerData;
			$data['id'] = array_get($sellerData, 'id');
			$data['username'] = array_get($sellerData, 'username');
			$data['contact_name'] = array_get($sellerData, 'contact_name');
			$data['holder_name'] = array_get($sellerData, 'holder_name');
			$data['commercial_registration_no'] = array_get($sellerData, 'commercial_registration_no');
			$data['contact_phone'] = array_get($sellerData, 'contact_phone');
			$data['contact_email'] = array_get($sellerData, 'contact_email');
			$data['bank_name'] = array_get($sellerData, 'bank_name');
			$data['bank_account'] = array_get($sellerData, 'bank_account');
			$data['iban_account'] = array_get($sellerData, 'iban_account');
			$data['tax_license_no'] = array_get($sellerData, 'tax_license_no');

			$data['copy_commercial_registration_no'] = '';
			$data['brand_license_img'] = '';
			$data['tax_license_img'] = '';

			if (! empty($sellerData['copy_commercial_registration_no'])) {
				$data['copy_commercial_registration_no'] = $this->url->link('public/users/images/data/' . $sellerData['copy_commercial_registration_no']);
			}
			
			if (! empty($sellerData['tax_license_img'])) {
				$data['tax_license_img'] = $this->url->link('public/users/images/data/' . $sellerData['tax_license_img']);
			}
			
			if (! empty($sellerData['brand_license_img'])) {
				$data['brand_license_img'] = $this->url->link('public/users/images/data/' . $sellerData['brand_license_img']);
			}
			
			
		} else {
			$data['success'] = '';
		}
		
        $this->html->setTitle('إدارة المتجر');
		$view = $this->view->render('users/main/profile', $data);

        return $this->usersLayout->render($view);
    }
	
	
	
    /**
    * Submit for creating new user
    *
    * @return string | json
    */
    public function update()
    {
        $json = [];
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/seller/login');
        } 
		
		$loggedInSeller = $loginModel->user();
		$userId = $loggedInSeller->id;
		$is_find = $this->load->model('Seller')->getDataSeller($userId);
		
		$this->load->model('Seller')->updateSellerProfile($userId);

		$json['success'] = 'تم تحديث بيانات الاعلان بنجاح';

		$json['redirectTo'] = $this->url->link('/seller/Index/profile');
		
        return $this->json($json);
		
		
    }
	
	
	public function pwd()
	{
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
        $this->html->setTitle('تغيير كلمة المرور');
		
        $view = $this->view->render('users/main/pwd');

        return $this->usersLayout->render($view);
	}
	
}