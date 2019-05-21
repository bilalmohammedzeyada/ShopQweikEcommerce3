<?php

namespace App\Models;

use System\Model;

class SalesModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'sales';
	
	public function allSales()
    {
          return $this->select('p.*')
                    ->from('sales p')
                    ->fetchAll();
    }
	
	
	public function all2()
    {
          return $this->select('p.*')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->join('LEFT JOIN users u ON p.user_id=u.id')
                    ->fetchAll();
    }
	
	
	public function latest()
    {
        // get the latest added posts
        return $this->select('p.*', 'c.name AS `category`', 'u.first_name', 'u.last_name')
                    ->select('(SELECT COUNT(co.id) FROM comments co WHERE co.post_id=p.id) AS total_comments')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->join('LEFT JOIN users u ON p.user_id=u.id')
                    ->where('p.status=?', 'enabled')
                    ->orderBy('p.id', 'DESC')
                    ->fetchAll();
    }
	
	
	public function countCart()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        return $this->select('COUNT(*) AS total')
					->from('orders')
					->where('user_id=? AND is_active=?', $loggedInUser->id, 1)
					->fetch();
    }
	
	
	public function countPrice()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        return $this->select('SUM(product_price * quantity) AS total_price')
					->from('orders')
					//->where('user_id=?', $loggedInUser->id)
					->where('user_id=? AND is_active=?', $loggedInUser->id, 1)
					->fetch();
    }
	
	public function countquentity()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        return $this->select('SUM(quantity) AS total_quantity')
					->from('orders')
					//->where('user_id=?', $loggedInUser->id)
					->where('user_id=? AND is_active=?', $loggedInUser->id, 1)
					->fetch();
    }
	
	
	public function all()
    {
		$loginModel = $this->load->model('Login');
		$loggedInUser = $loginModel->user();
        return $this->select('o.*')
                    ->from('sales o')
					//->join('LEFT JOIN posts p ON o.product_id=p.id')
                    ->where('o.email=?', $loggedInUser->email)
                    ->orderBy('o.id', 'ASC')
                    ->fetchAll();
    }
	
	
	public function allReviews()
    {
		$loginModel = $this->load->model('Login');
		$loggedInUser = $loginModel->user();
        return $this->select('o.*')
                    ->from('comments o')
					//->join('LEFT JOIN posts p ON o.product_id=p.id')
                    ->where('o.user_id=?', $loggedInUser->id)
                    ->orderBy('o.id', 'ASC')
                    ->fetchAll();
    }
	
	

     /**
     * Get Enabled Ads for the current page
     *
     * @return array
     */
     public function enabled()
     {
         $currentRoute = $this->route->getCurrentRouteUrl();

         $now = time();

         return $this->where('status=? AND page=? AND start_at <= ? AND end_at >= ?', 'enabled', $currentRoute, $now, $now)->fetchAll($this->table);
     }

     /**
     * Create New Ad
     *
     * @return void
     */
    public function create()
    {
		$loginModel = $this->load->model('Login');

        $loggedInUser = $loginModel->user();
		
        $this->data('user_id', $this->request->post('user_id'))
             ->data('product_id', $this->request->post('product_id'))
             ->data('product_title', $this->request->post('product_title'))
             ->data('product_en_title', $this->request->post('product_en_title'))
             ->data('product_price', $this->request->post('product_price'))
             ->data('weight', $this->request->post('weight'))
             ->data('quantity', $this->request->post('quantity'))
             ->insert('orders');
    }

     /**
     * Upload Ad Image
     *
     * @return string
     */
     private function uploadImage()
     {
         $image = $this->request->file('image');

         if (! $image->exists()) {
             return '';
         }

         return $image->moveTo($this->app->file->toPublic('images'));
     }

     /**
     * Update Ads Record By Id
     *
     * @param int $id
     * @return void
     */
    public function update($id)
    {
        $this->data('status', $this->request->post('status'))
             ->where('id=?' , $id)
             ->update('sales');
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