<?php

namespace App\Controllers\Blog;

use System\Controller;

class CheckoutController extends Controller
{
    /**
    * Display Ads  List
    *
    * @return mixed
    */
    public function index()
    {
		$this->html->setTitle($this->settings->get('site_name'));
		$this->blogLayout->disable('sidebar');
		$this->blogLayout->disable('rightsidebar');
		$this->blogLayout->disable('rightsidebar2');
		
		$loginModel = $this->load->model('Login');

        // disable sidebar

        //if ($loginModel->isLogged()) {
			$data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;
			$data['errors'] = $this->errors;
			
			$data['countPrice'] = $this->load->model('Checkout')->countPrice();
			$data['countquentity'] = $this->load->model('Checkout')->countquentity();
			$data['price_shipments_pay_hand'] = $this->load->model('Settings')->get('price_shipments_pay_hand');
			$data['discount_price'] = $this->load->model('Settings')->get('discount_price');
			$data['shipments_price'] = $this->load->model('Settings')->get('shipments_price');
			$data['carts'] = $this->load->model('Checkout')->all();
			$data['cartPrices'] = $this->load->model('Checkout')->all();
			$data['ads'] = $this->load->model('Ads')->enabled();
			$data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;
			
				$view = $this->view->render('blog/checkout/cart', $data);
		

			return $this->blogLayout->render($view);
			
    }

    /**
    * Open Ads  Form
    *
    * @return string
    */
    public function add()
    {
        return $this->form();
    }

    /**
    * Submit for creating new ad
    *
    * @return string | json
    */
    public function submit()
    {
		$loginModel = $this->load->model('Login');
		$data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;
		$code =  $this->request->post('code');
		if(!empty($this->request->post('quantity'))) {
			$productByCode = $this->load->model('Checkout')->getProductWithid($code);
			/* if($productByCode->price2 == 0 || empty($productByCode->price2)) {
				$price = $productByCode->price1;
			} else {
				$price = $productByCode->price2;
			} */
			if($productByCode->price2 == 0 || empty($productByCode->price2)) {
				$itemArray = array($productByCode->code=>array('title'=>$productByCode->title, 'price'=>$productByCode->price1, 'quantity'=>$this->request->post('quantity'), 'image'=>$productByCode->image,'en_title'=>$productByCode->en_title,'product_id'=>$productByCode->id,'code'=>$productByCode->code,'weight'=>$productByCode->weight,'userId'=>$data['user']->id,'seller_id'=>$productByCode->seller_id));
			} else {
				$itemArray = array($productByCode->code=>array('title'=>$productByCode->title, 'price'=>$productByCode->price2, 'quantity'=>$this->request->post('quantity'), 'image'=>$productByCode->image,'en_title'=>$productByCode->en_title,'product_id'=>$productByCode->id,'code'=>$productByCode->code,'weight'=>$productByCode->weight,'userId'=>$data['user']->id,'seller_id'=>$productByCode->seller_id));
			}
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode->code,array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode->code == $k) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += $this->request->post('quantity');
						}
					}
				} else {
					if($productByCode->price2 == 0 || empty($productByCode->price2)) {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					}
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
		 return $this->url->redirectTo('/checkout/cart');
    }

     /**
     * Display Edit Form
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $adsModel = $this->load->model('Ads');

        if (! $adsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $ad = $adsModel->get($id);

        return $this->form($ad);
    }

    private function form($ad = null)
    {
        if ($ad) {
            // editing form
            $data['target'] = 'edit-ad-' . $ad->id;

            $data['action'] = $this->url->link('/admin/ads/save/' . $ad->id);

            $data['heading'] = 'Edit ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-ad-form';

            $data['action'] = $this->url->link('/admin/ads/submit');

            $data['heading'] = 'Add New Ad';
        }

        $ad = (array) $ad;

        $data['link'] = array_get($ad, 'link');
        $data['name'] = array_get($ad, 'name');
        $data['ad_page'] = array_get($ad, 'page');
        $data['status'] = array_get($ad, 'status', 'enabled');

        $data['start_at'] = ! empty($ad['start_at']) ? date('d-m-Y', $ad['start_at']) : false;
        $data['end_at'] = ! empty($ad['end_at']) ? date('d-m-Y', $ad['end_at']) : false;

        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/images/' . $ad['image']);
        }

        $data['pages'] = $this->getPermissionPages();

        return $this->view->render('admin/ads/form', $data);
    }

    
    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Ads')->update($id);

            $json['success'] = 'Ads  Has Been Updated Successfully';

            $json['redirectTo'] = $this->url->link('/admin/ads');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }
    public function deleteid()
    {
        if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($this->app->request->get('code') == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
		return $this->url->redirectTo('/checkout/cart');
    }
	
	public function emptycart()
    {
        unset($_SESSION["cart_item"]);
		return $this->url->redirectTo('/checkout/cart');
    }
	
	
	public function delete($id)
    {
        $CheckoutModel = $this->load->model('Checkout');

        if (! $CheckoutModel->exists($id)) {
           // return $this->url->redirectTo('/404');
        }

        $CheckoutModel->delete($id);

        $json['success'] = 'تم حذف المنتج بنجاح';
		return $this->url->redirectTo('/checkout/cart');
        return $this->json($json);
    }

    private function isValid($id = null)
    {
        $this->validator->required('name');
        $this->validator->required('link');
        $this->validator->required('page');
        $this->validator->required('start_at');
        $this->validator->required('end_at');

        if (is_null($id)) {
            $this->validator->requiredFile('image')->image('image');
        } else {
            $this->validator->image('image');
        }

        return $this->validator->passes();
    }
	
	
	
	public function plus($id)
    {
        $json = [];
		$loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()){
        //if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Checkout')->increaseQuantity($id);

            //$json['success'] = 'Users  Has Been Updated Successfully';
			
            $json['redirectTo'] = $this->url->link('/checkout/cart');
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