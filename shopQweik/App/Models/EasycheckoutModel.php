<?php

namespace App\Models;

use System\Model;

class EasycheckoutModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'sales';

     /**
     * Create New Users Group Record
     *
     * @return void
     */
    public function create()
    {
		$loginModel = $this->load->model('Login');
		$loggedInUser = $loginModel->user();
        /* $usersGroupId = $this->data('name', $this->request->post('name'))
                             //->data('status', $this->request->post('status'))
                             ->insert($this->table)->lastId(); */

        // Remove any empty values in the array
        $title = array_filter($this->request->post('product_title'));
        $price = array_filter($this->request->post('price'));
        $code = array_filter($this->request->post('code'));
        $total_price = array_filter($this->request->post('total_price'));
        $weight = array_filter($this->request->post('weight'));
        $quantity = array_filter($this->request->post('quantity'));
        $seller_id = array_filter($this->request->post('seller_id'));
        $product_id = array_filter($this->request->post('product_id'));
        $user_id = array_filter($this->request->post('user_id'));
        $first_name = $this->request->post('first_name');
        $last_name = $this->request->post('last_name');
        $email = $this->request->post('email');
        $country = $this->request->post('country');
        $city = $this->request->post('city');
        $region = $this->request->post('region');
        $street = $this->request->post('street');
        //$building_number = $this->request->post('building_number');
        $postcode = $this->request->post('postcode');
        $country_code = $this->request->post('country_code');
        $mobile_number = $this->request->post('mobile_number');
        $shipping_method = $this->request->post('shipping_method');
        $payment = $this->request->post('payment');
		$now = time() . rand(0, 1000);
		//$array = array_merge($pages, $prices);
		//$count = sizeof($array);
		foreach ( $title AS $key => $value) {
			
				//foreach($prices as $price)
				//{
					$this->data('first_name', $first_name)
					->data('last_name', $last_name)
					->data('email', $email)
					->data('country', $country)
					->data('city', $city)
					->data('region', $region)
					->data('street', $street)
					//->data('building_number', $building_number)
					->data('post_code', $postcode)
					->data('co_country', $country_code)
					->data('mobile', $mobile_number)
					->data('shipping_method', $shipping_method)
					->data('payment_method', $payment)
					->data('product_title', $value)
					 ->data('price', $price[$key])
					 ->data('total_price', $total_price[$key])
					 ->data('weight', $weight[$key])
					 ->data('quantity', $quantity[$key])
					 ->data('product_id', $product_id[$key])
					 ->data('seller_name_id', $seller_id[$key])
					 ->data('code', $now)
					 ->data('created', date('Y-m-d'))
					 ->data('status', 0)
					 ->data('user_id', $user_id[$key])
					 ->insert('sales');
					 
					 
					 
					 

        $post = $this->load->model('Posts')->get($product_id[$key]);
         $post = (array) $post;

         $data['is_bestseller'] = array_get($post, 'is_bestseller');
       // return $this->form($post);
					 $add = $data['is_bestseller'] + 1;
					 
					 $orders = $this->load->model('Orders')->getPosts($product_id[$key]);
					 
					 $this->data('is_bestseller', $add)
					 //->data('status', $this->request->post('status'))
					 ->where('id=?', $orders->id)
					 ->update('posts');
					 
					 
				if(!empty($_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($code[$key] == $k)
								unset($_SESSION["cart_item"][$k]);				
							if(empty($_SESSION["cart_item"]))
								unset($_SESSION["cart_item"]);
					}
				}
				
				$data['site_email'] = $this->load->model('Settings')->get('site_email');
				$to = $this->request->post('email');
				$from = $data['site_email'];
				$subject = "لقد قمت بشراء المنتج";
				$subject .= " " . $value;
				$subject .= " -- " ;
				$message = "لقد قمت بشراء المنتج";
				$message .= " " . $value . "    --- ";
				$message .= "بسعر ". $price[$key];
				$message .= "-----";
				$this->helper->sendMail($to, $from, $subject, $message);
        }
    }

}