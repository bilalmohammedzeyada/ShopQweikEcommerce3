<?php

namespace App\Controllers\Users;

use System\Controller;

class FinanceController extends Controller
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
            return $this->url->redirectTo('/');
        } 
        $this->html->setTitle('قائمة المنتجات');
		
        $view = $this->view->render('users/main/finance');

        return $this->usersLayout->render($view);
    }
	
	public function submit()
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
	
	
	public function add()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
        $this->html->setTitle('أضف منتجك');
		$data['categories'] = $this->load->model('Categories')->getCatForHeader();
		$data['brands'] = $this->load->model('Brands')->all();
        $view = $this->view->render('users/main/addgoods', $data);

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
        $this->validator->required('maroof_link', 'ضع الرابط لمعروف');
        $this->validator->required('shipping_way', 'طريقة الشحن');
        $this->validator->required('shop_desc', 'قم بكتابة وضف');
        $this->validator->required('after_sale', 'ما بعد الخدمة مطلوب');

        return $this->validator->passes();
    }
}