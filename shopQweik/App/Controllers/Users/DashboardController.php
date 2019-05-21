<?php

namespace App\Controllers\Users;

use System\Controller;

class DashboardController extends Controller
{
     /**
     * Display Dashboard Page
     *
     * @return mixed
     */
    public function index()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/seller/login');
        } 
		
		$loggedInSeller = $loginModel->user();
		
		
		if(! $seller){
			//return $this->url->redirectTo('/seller/login');
		} else {
			
		}
		//echo $seller->shop_name;
		
		//echo $loggedInSeller->id;
        $this->html->setTitle('إدارة المتجر');
		
		
			$seller = $this->load->model('Seller')->getDataShoping($loggedInSeller->id);
		if ($seller) {
			$seller = (array) $seller;
			
			$data['id'] = array_get($seller, 'id');
			$data['shop_name'] = array_get($seller, 'shop_name');
			$data['template_id'] = array_get($seller, 'template_id');
			$data['country'] = array_get($seller, 'country');
			$data['province'] = array_get($seller, 'province');
			$data['city'] = array_get($seller, 'city');
			$data['district'] = array_get($seller, 'district');
			$data['address'] = array_get($seller, 'address');
			$data['postal_code'] = array_get($seller, 'postal_code');
			$data['maroof_link'] = array_get($seller, 'maroof_link');
			$data['shipping_way'] = array_get($seller, 'shipping_way');
			$data['shop_desc'] = array_get($seller, 'shop_desc');
			$data['after_sale'] = array_get($seller, 'after_sale');

			$data['shop_logo'] = '';

			if (! empty($seller['shop_logo'])) {
				// default path to upload ad image : public/images
				$data['shop_logo'] = $this->url->link('public/blog/images/logos/' . $seller['shop_logo']);
			}
		} else {
			$data['success'] = '';
		}
        $view = $this->view->render('users/main/dashboard', $data);

        return $this->usersLayout->render($view);
    }
	
	public function submitShopsetting()
	{
		$json = [];
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/seller/login');
        } 
		
		
		$loggedInSeller = $loginModel->user();
		$userId = $loggedInSeller->id;
		$is_find = $this->load->model('Seller')->getDataShoping($userId);
		
		if(! $is_find){
			if ($this->isValid()) {
				// it means there are no errors in form validation
				$this->load->model('Seller')->createMarket($userId);

				$json['success'] = 'تم انشاء متجر خاص بك';

				$json['redirectTo'] = $this->url->link('/seller/Index/shopsetting');
			} else {
				// it means there are errors in form validation
				$json['errors'] = $this->validator->flattenMessages();
			}
		} else {
			$id = $is_find->id;
			if ($this->isValid($id)) {
				// it means there are no errors in form validation
				$this->load->model('Seller')->update($id, $userId);

				$json['success'] = 'تم تحديث بيانات الاعلان بنجاح';

				$json['redirectTo'] = $this->url->link('/seller/Index/shopsetting');
			} else {
				// it means there are errors in form validation
				$json['errors'] = $this->validator->flattenMessages();
			}			
		}
		
        return $this->json($json);
	}
	
	
	public function shopdesign()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
        $this->html->setTitle('إدارة المتجر');
		
        $view = $this->view->render('users/main/shopdesign');

        return $this->usersLayout->render($view);
    }
	
	public function submitShopdesign()
	{
		$json = [];

        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Seller')->createMarket();

            $json['success'] = 'تم انشاء متجر خاص بك';

            $json['redirectTo'] = $this->url->link('/seller/Index/shopsetting');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
	}
	
	
	
	
	
	
	private function isValid($id = null)
    {
		//`id`, `shop_name`, `shop_logo`, `template_id`, `country`, `province`, `city`, `district`, `address`, `postal_code`, `maroof_link`, `shipping_way`, `shop_desc`, `after_sale`, `user_id`
		
		
        $this->validator->required('shop_name', 'اسم المتجر مطلوب');
        $this->validator->required('template_id',' قم باختيار تصميم متجرك');
        $this->validator->required('country', 'قم باختيار الدولة');
        $this->validator->required('province', 'قم باختيار المنطقة');
        $this->validator->required('city', 'قم باختيار المدينة');
        $this->validator->required('district', 'قم باختيار الحي');
        $this->validator->required('address', 'قم باختيار العنوان');
        $this->validator->required('postal_code', 'قم بكتابة الرمز البريدي');
        $this->validator->required('shipping_way', 'طريقة الشحن');
        $this->validator->required('shop_desc', 'قم بكتابة وضف');
        $this->validator->required('after_sale', 'ما بعد الخدمة مطلوب');
		
		 if (is_null($id)) {
            $this->validator->requiredFile('image')->image('image');
        } else {
            $this->validator->image('image');
        }

        return $this->validator->passes();
    }
}