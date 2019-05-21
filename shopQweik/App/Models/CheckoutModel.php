<?php

namespace App\Models;

use System\Model;

class CheckoutModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'orders';
	
	
	public function getProductWithid($code)
    {
        return $this->select('*')
					->from('posts')
					->where('code=?', $code)
					->fetch();
    }
	
	
	public function all2()
    {
          return $this->select('p.*')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->join('LEFT JOIN users u ON p.user_id=u.id')
                    ->fetchAll();
    }
	
	/* public function countCart()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        return $this->select('COUNT(*) AS total')
					->from('orders')
					->where('user_id=? AND is_active=?', $loggedInUser->id, 1)
					->fetch();
    } */
	
	public function countPrice()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        return $this->select('SUM((product_price * quantity) - discoupon) AS total_price')
					->from('orders')
					->where('user_id=? AND is_active=?', $loggedInUser->id, 1)
					->fetch();
    }
	
	public function countquentity()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        return $this->select('SUM(quantity) AS total_quantity')
					->from('orders')
					->where('user_id=? AND is_active=?', $loggedInUser->id, 1)
					->fetch();
    }
	
	
	public function all()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        return $this->select('o.*','p.image AS `img`')
                    ->from('orders o')
					->join('LEFT JOIN posts p ON o.product_id=p.id')
                    ->where('o.user_id=? AND o.is_active=?', $loggedInUser->id, 1)
                    ->orderBy('o.id', 'ASC')
                    ->fetchAll();
    }
	
	
    public function create()
    {
		$co =  $this->select('*')
                    ->from('coupon_discount')
                    ->where('coupon_name=?' , $this->request->post('coupon'))
                    ->fetch();
		
		if($co){
			$this->data('coupon', $co->coupon_name)
				->data('discoupon', $co->coupon_price);
		} else {
			$this->data('coupon', ' ')
				->data('discoupon', ' ');
		}
		

        $this->data('user_id', $this->request->post('user_id'))
             ->data('product_id', $this->request->post('product_id'))
             ->data('product_title', $this->request->post('product_title'))
             ->data('product_en_title', $this->request->post('product_en_title'))
             ->data('product_price', $this->request->post('product_price'))
             ->data('weight', $this->request->post('weight'))
             ->data('quantity', $this->request->post('quantity'))
             
             ->insert('orders');
    }

	
	public function increaseQuantity($id)
    {
		$quantity = $this->request->post('quantity_cart_id');
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        $this->data('quantity', $quantity)
             ->where('id=? AND user_id=?', $id, $loggedInUser->id)
             ->update('orders');
    }
	
	public function decreaseQuantity($id)
    {
        $this->data('quantity', $this->request->post('quantity'))
             ->where('id=?' , $id)
             ->update('orders');
    }
	
	
}