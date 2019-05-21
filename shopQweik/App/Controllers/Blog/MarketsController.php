<?php

namespace App\Controllers\Blog;

use System\Controller;

class MarketsController extends Controller
{
     /**
     * Display Dashboard Page
     *
     * @return mixed
     */
    public function index($title)
    {
        $this->html->setTitle('متجر');
		$market = $this->load->model('Seller')->getMarketsWithTitle($title);
		$seller_id = $market->user_id;
		if($market){
			$data['market'] = $market;
			$data['seller_id'] = $market->user_id;
			
			$data['POSTِAll_Seller'] = $this->load->model('Posts')->getAllPostsWithSellerId($seller_id);
			$data['POST_Seller'] = $this->load->model('Posts')->getPostsWithSellerId($seller_id);
			$data['POSTBestSeller_Seller'] = $this->load->model('Posts')->getPostsBestSellerWithSellerId($seller_id);
			$data['seller_Slider'] = $this->load->model('Ads')->SellerSliders($seller_id);
			$data['Sellerbanners'] = $this->load->model('Ads')->Sellerbanners($seller_id);
			
			if($market->template_id == 1){
				$view = $this->view->render('users/main/markets1', $data);
			} else if($market->template_id == 2){
				$view = $this->view->render('users/main/markets2', $data);
			} else if($market->template_id == 3){
				$view = $this->view->render('users/main/markets3', $data);
			} else if($market->template_id == 4){
				$view = $this->view->render('users/main/markets4', $data);
			}
		} else {
			return $this->url->redirectTo('/');
		}		
        //return $this->blogLayout->render($view);
        return $view;
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
	
	
	public function shopdesign()
    {
		$loginModel = $this->load->model('Login');
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
        $this->validator->required('maroof_link', 'ضع الرابط لمعروف');
        $this->validator->required('shipping_way', 'طريقة الشحن');
        $this->validator->required('shop_desc', 'قم بكتابة وضف');
        $this->validator->required('after_sale', 'ما بعد الخدمة مطلوب');

        return $this->validator->passes();
    }
}