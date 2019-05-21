<?php

namespace App\Models;

use System\Model;

class CouponsModel extends Model
{
	protected $table = 'coupon_discount';
	public function all()
    {
        return $this->select('p.*')->from('coupon_discount p')->fetchAll();
    }
	
	public function getAllDataWithSeller($id)
    {
        return $this->select('p.*')->from('coupon_discount p')->where('p.seller_id=?', $id)->fetchAll();
    }
	
	
    public function create()
    {
        $this->data('coupon_name', $this->request->post('coupon'))
			 ->data('coupon_price', $this->request->post('price'))
			 ->data('seller_id', $this->request->post('seller_id'))
			 ->insert('coupon_discount');
    }

    public function update($id)
    {
        $this->data('coupon_name', $this->request->post('coupon'))
			 ->data('coupon_price', $this->request->post('price'))
			 ->data('seller_id', $this->request->post('seller_id'))
			 ->where('id = ?', $id)
			 ->update('coupon_discount');
    }
	
	
	public function updateProduct($id)
    {
		$coupon = array_filter($this->request->post('coupon'));
		$id = array_filter($this->request->post('id'));
        $this->data('coupon', $this->request->post('coupon'))->where('id = ?', $id)->update('orders');
    }
	
}