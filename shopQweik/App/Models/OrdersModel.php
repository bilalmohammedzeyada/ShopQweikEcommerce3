<?php

namespace App\Models;

use System\Model;

class OrdersModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'sales';

    
    public function getOrders($code, $mobile)
    {
        $post = $this->select('p.*')
                     ->from('sales p')
                     ->where('p.code=? AND p.mobile=?', $code, $mobile)
                     ->fetch();

        if (! $post) return null;
        return $post;
    }
	
	
	public function getPosts($id)
    {
        $post = $this->select('p.*')
                     ->from('posts p')
                     ->where('p.id=?', $id)
                     ->fetch();

        if (! $post) return null;
        return $post;
    }
	
	
	public function getOrdersCoupon($id)
    {
        $post = $this->select('p.*')
                     ->from('orders p')
                     ->where('p.product_id=?', $id)
                     ->fetch();

        if (! $post) return null;
        return $post;
    }
}