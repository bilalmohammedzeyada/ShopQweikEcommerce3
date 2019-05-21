<?php

namespace App\Models;

use System\Model;

class GoodsModel extends Model
{
     

    public function all()
    {
		return $this->select('p.*')
                    ->from('banks p')
                    ->fetchAll();
    }
	
    public function createMarket()
    {
		//`id`, `shop_name`, `shop_logo`, `template_id`, `country`, `province`, `city`, `district`, `address`, `postal_code`, `maroof_link`, `shipping_way`, `shop_desc`, `after_sale`, `user_id`
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
		$this->data('shop_name', $this->request->post('shop_name'))
		 ->data('shop_logo', $this->request->post('shop_logo'))
		 ->data('template_id', $this->request->post('template_id'))
		 ->data('country', $this->request->post('country'))
		 ->data('province', $this->request->post('province'))
		 ->data('city', $this->request->post('city'))
		 ->data('district', $this->request->post('district'))
		 ->data('address', $this->request->post('address'))
		 ->data('postal_code', $this->request->post('postal_code'))
		 ->data('maroof_link', $this->request->post('maroof_link'))
		 ->data('shipping_way', $this->request->post('shipping_way'))
		 ->data('shop_desc', $this->request->post('shop_desc'))
		 ->data('after_sale', $this->request->post('after_sale'))
		 ->data('user_id', $loggedInUser->id)
		 ->insert('seller');
    }


    public function update($id)
    {

        $this->data('banks_name', $this->request->post('banks_name'))
             ->data('account_name', $this->request->post('account_name'))
             ->data('account_number', $this->request->post('account_number'))
             ->data('banks_iban', $this->request->post('banks_iban'))
             ->where('id=?' , $id)
             ->update('banks');
    }
}