<?php

namespace App\Models;

use System\Model;

class PostsModel extends Model
{
    protected $table = 'posts';

    public function all()
    {
          return $this->select('p.*', 'c.name AS `category`', 'u.first_name', 'u.last_name')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->join('LEFT JOIN users u ON p.user_id=u.id')
                    ->fetchAll();
    }
	
	public function all2()
    {
        return $this->select('p.*', 'c.name AS `category`', 'u.first_name', 'u.last_name')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->fetchAll();
    }
	
    public function getPostWithComments($id)
    {
        $post = $this->select('p.*', 'c.name AS `category`', 'u.first_name', 'u.last_name', 'u.image AS userImage','con.rating')
		->select('(SELECT COUNT(con.id) FROM comments con WHERE p.id=con.post_id) AS total_comments')
                     ->from('posts p')
                     ->join('LEFT JOIN categories c ON p.category_id=c.id')
                     ->join('LEFT JOIN users u ON p.user_id=u.id')
                     ->join('LEFT JOIN comments conm ON p.id=conm.post_id')
                     ->where('p.id=? AND p.status=?', $id, 'enabled')
                     ->fetch();

        if (! $post) return null;

        $post->comments = $this->select('c.*', 'u.first_name', 'u.last_name', 'u.image AS userImage')
                               ->from('comments c')
                               ->join('LEFT JOIN users u ON c.user_id=u.id')
                               ->where('c.post_id=?', $id)
                               ->fetchAll();

        return $post;
    }

    public function latest()
    {
        return $this->select('p.*', 'c.name AS `category`', 'u.first_name', 'u.last_name')
                    ->select('(SELECT COUNT(co.id) FROM comments co WHERE co.post_id=p.id) AS total_comments')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->join('LEFT JOIN users u ON p.user_id=u.id')
                    ->where('p.seller_id=? AND p.status=?', 0, 'enabled')
                    ->orderBy('p.id', 'DESC')
                    ->fetchAll();
    }
	
	
	public function getPostsWithSellerId($seller_id)
    {
        return $this->select('p.*', 'c.name AS `category`')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->where('p.seller_id=? AND p.status=?', $seller_id, 'enabled')
                    ->orderBy('p.id', 'DESC')
					->limit(13)
                    ->fetchAll();
    }
	
	
	public function getPostsBestSellerWithSellerId($seller_id)
    {
        return $this->select('p.*', 'c.name AS `category`')
                    ->select('(SELECT COUNT(co.id) FROM comments co WHERE co.post_id=p.id) AS total_comments')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->where('p.seller_id=? AND p.status=? AND p.is_bestseller>=?', $seller_id, 'enabled', 10)
                    ->orderBy('p.id', 'DESC')
					->limit(13)
                    ->fetchAll();
    }
	
	
	public function getAllPostsWithSellerId($seller_id)
    {
        return $this->select('p.*', 'c.name AS `category`')
                    ->select('(SELECT COUNT(co.id) FROM comments co WHERE co.post_id=p.id) AS total_comments')
                    ->from('posts p')
                    ->join('LEFT JOIN categories c ON p.category_id=c.id')
                    ->where('p.seller_id=? AND p.status=?', $seller_id, 'enabled')
                    ->orderBy('p.id', 'DESC')
					->limit(13)
                    ->fetchAll();
    }
	
	
	
	
	public function chooseDestSeller()
    {
        return $this->select('p.*')
                    ->from('posts p')
                    ->where('p.is_bestseller >= ?', 10)
                    ->orderBy('p.id', 'DESC')
                    ->limit(10)
                    ->fetchAll();
    }
	
	
	public function getPostSellerId($id)
    {
        return $this->select('p.*')
                    ->from('posts p')
					->where('p.seller_id=? AND p.status=?', $id, 'enabled')
                    ->orderBy('p.id', 'DESC')
                    ->fetchAll();
    }
	
	public function getPostDisActiveSellerId($id)
    {
        return $this->select('p.*')
                    ->from('posts p')
					->where('p.seller_id=? AND p.status=?', $id, 'disabled')
                    ->orderBy('p.id', 'DESC')
                    ->fetchAll();
    }
	
	public function choosenew()
    {
        return $this->select('p.*')
                    ->from('posts p')
                    ->orderBy('p.id', 'DESC')
                    ->limit(15)
                    ->fetchAll();
    }
	
	
	public function chooselatest()
    {
        return $this->select('p.*')
                    ->from('posts p')
                    ->where('p.status=?', 'enabled')
                    ->orderBy('p.id', 'DESC')
                    ->limit(3)
                    ->fetchAll();
    }
	
    public function create()
    {
        $image = $this->uploadImage();
        $imageOne = $this->uploadImage2();
        $imageTwo = $this->uploadImage3();
        $imageThree = $this->uploadImage4();

        if ($image|| $imageOne || $imageTwo || $imageThree) {
            $this->data('image', $image);
            $this->data('imageOne', $imageOne);
            $this->data('imageTwo', $imageTwo);
            $this->data('imageThree', $imageThree);
        }
		$now = time();
        $user = $this->load->model('Login')->user();
        $seller = $this->load->model('Loginseller')->user();
		$code = sha1($now . mt_rand());
        $this->data('title', $this->request->post('title'))
			->data('details', $this->request->post('details'))
			->data('category_id', $this->request->post('category_id'))
			->data('user_id', $user->id)
			->data('tags', $this->request->post('tags'))
			->data('desc_en_title', $this->request->post('desc_en_title'))
			->data('en_title', $this->request->post('en_title'))
			->data('price1', $this->request->post('price1'))
			->data('price2', $this->request->post('price2'))
			->data('shipments_price', $this->request->post('shipments_price'))
			->data('weight', $this->request->post('weight'))
			->data('brands', $this->request->post('brands_id'))
			->data('related_posts', implode(',', array_filter((array) $this->request->post('related_posts') , 'is_numeric')))
			->data('status', $this->request->post('status'))
			->data('stock', $this->request->post('stock'))
			->data('stock_alarm', $this->request->post('stock_alarm'))
			->data('depot_slot', $this->request->post('depot_slot'))
			->data('details_en', $this->request->post('details_en'))
			->data('after_details_en', $this->request->post('after_details_en'))
			->data('barcode', $this->request->post('barcode'))
			->data('created', $now = time())
			->data('code', $code)
			->insert('posts');
    }

	private function uploadImage()
	{
		$image = $this->request->file('image');
		if (! $image->exists()) {
		return '';
		}
		return $image->moveTo($this->app->file->toPublic('blog/images/posts'));
	}
     
	private function uploadImage2()
	{
		$imageOne = $this->request->file('imageOne');

		if (! $imageOne->exists()) {
		return '';
		}
		return $imageOne->moveTo($this->app->file->toPublic('blog/images/posts'));
	}

     
	private function uploadImage3()
	{
		$imageTwo = $this->request->file('imageTwo');

		if (! $imageTwo->exists()) {
		return '';
		}

		return $imageTwo->moveTo($this->app->file->toPublic('blog/images/posts'));
	}
     
     
	private function uploadImage4()
	{
		$imageThree = $this->request->file('imageThree');
		if (! $imageThree->exists()) {
		return '';
		}
		return $imageThree->moveTo($this->app->file->toPublic('blog/images/posts'));
	}
     
    public function update($id)
    {
        $image = $this->uploadImage();
        $imageOne = $this->uploadImage2();
       $imageTwo = $this->uploadImage3();
       $imageThree = $this->uploadImage4();

        if ($image || $imageOne || $imageTwo || $imageThree) {
            $this->data('image', $image);
            $this->data('imageOne', $imageOne);
            $this->data('imageTwo', $imageTwo);
            $this->data('imageThree', $imageThree);
        }

        $this->data('title', $this->request->post('title'))
             ->data('details', $this->request->post('details'))
             ->data('category_id', $this->request->post('category_id'))
             ->data('tags', $this->request->post('tags'))
             ->data('desc_en_title', $this->request->post('desc_en_title'))
             ->data('en_title', $this->request->post('en_title'))
             ->data('price1', $this->request->post('price1'))
             ->data('price2', $this->request->post('price2'))
             ->data('shipments_price', $this->request->post('shipments_price'))
             ->data('weight', $this->request->post('weight'))
             ->data('k_weight', $this->request->post('k_weight'))
             ->data('brands', $this->request->post('brands_id'))
             ->data('status', $this->request->post('status'))
             ->data('related_posts', implode(',', array_filter((array) $this->request->post('related_posts') , 'is_numeric')))
			 ->data('stock', $this->request->post('stock'))
             ->data('stock_alarm', $this->request->post('stock_alarm'))
             ->data('depot_slot', $this->request->post('depot_slot'))
             ->data('details_en', $this->request->post('details_en'))
             ->data('after_details_en', $this->request->post('after_details_en'))
			 ->data('barcode', $this->request->post('barcode'))
             ->where('id=?' , $id)
             ->update('posts');
    }

    public function addNewComment()
    {
		return  $this->data('user_id', $this->request->post('userid'))
			->data('post_id', $this->request->post('postid'))
			->data('email', $this->request->post('email'))
			->data('title', $title)
			->data('comment', $this->request->post('message'))
			->data('name', $this->request->post('name'))
			->data('title_post', $this->request->post('title_post'))
			->data('rating', $this->request->post('rating'))
			->data('status', 'enabled')
			->data('ip', $this->request->server('REMOTE_ADDR'))
			->data('created', date('Y-m-d'))
			->insert('comments');
    }
	
	public function getData()
	{
		$selectid = $this->request->post('selectid') ? $this->request->post('selectid') : 10;
        return $this->select('p.*')
                    ->from('comments p')
                    ->where('p.post_id=? AND p.status=?', $this->request->post('postid'), 'enabled')
                    ->orderBy('p.id', 'DESC')
                    ->fetchAll();
	}
	
	public function getmode()
	{
		$selectid = $this->request->post('selectid') ? $this->request->post('selectid') : 10;
        return $this->select('p.*')
                    ->from('comments p')
                    ->where('p.post_id=? AND p.status=?', $this->request->post('postid'), 'enabled')
                    ->orderBy('p.id', 'DESC')
                    ->fetchAll();
	}
	
	public function userCommentFound()
	{
		
        return $this->select('COUNT(user_id) AS userfound')
					->from('comments')
					->where('user_id=? AND post_id=?', $this->request->post('userid'), $this->request->post('postid'))
					->fetch();
	}
	
	public function getAllCommentsWithSellerId($id)
    {
        return $this->select('c.*')
                    ->from('comments c')
                    ->where('c.seller_id=?',$id)
                    ->orderBy('c.id', 'DESC')
                    ->limit(20)
                    ->fetchAll();
    }
	
	
	
	public function getAllOrderWithSellerId($id)
    {
        return $this->select('o.*')
                    ->from('sales o')
                    ->where('o.seller_name_id=?',$id)
                    ->orderBy('o.id', 'DESC')
                    ->limit(20)
                    ->fetchAll();
    }
	
	public function getAllOrderWithSellerIdPending($id)
    {
        return $this->select('o.*')
                    ->from('sales o')
                    ->where('o.seller_name_id=? AND o.status=?',$id, 0)
                    ->orderBy('o.id', 'DESC')
                    ->limit(20)
                    ->fetchAll();
    }
	
	public function getAllOrderWithSellerIdDone($id)
    {
        return $this->select('o.*')
                    ->from('sales o')
                    ->where('o.seller_name_id=? AND o.status=?',$id, 1)
                    ->orderBy('o.id', 'DESC')
                    ->limit(20)
                    ->fetchAll();
    }
	
	public function getAllOrderWithSellerIdCancel($id)
    {
        return $this->select('o.*')
                    ->from('sales o')
                    ->where('o.seller_name_id=? AND o.status=?',$id, 2)
                    ->orderBy('o.id', 'DESC')
                    ->limit(20)
                    ->fetchAll();
    }
	
	public function countPrice($id)
    {
        return $this->select('SUM((total_price)) AS total_price')
					->from('sales')
					->where('seller_name_id=? AND status=?', $id, 1)
					->fetch();
    }
	
	public function countAllOrderStatusFailed($id)
    {
        return $this->select('COUNT(*) AS totalfailed')
					->from('sales')
					->where('seller_name_id=? AND status=?', $id, 0)
					->fetch();
    }
	
	public function countAllOrderStatusDone($id)
    {
        return $this->select('COUNT(*) AS totaldone')
					->from('sales')
					->where('seller_name_id=? AND status=?', $id, 1)
					->fetch();
    }
	
	public function getbrandsList($brands)
    {
         $seller = $this->load->model('Loginseller')->user();
         $id = $seller->id;
        return $this->select('p.*')
                    ->from('posts p')
                    ->where('p.seller_id=? AND p.brands=?', $id, $brands)
                    ->orderBy('p.id', 'DESC')
                    ->limit(30)
                    ->fetchAll();
    }
	
	public function getNamesList($title)
    {
        $seller = $this->load->model('Loginseller')->user();
         $id = $seller->id;
        return $this->select('p.*')
                    ->from('posts p')
                    ->where('p.seller_id=? AND p.title=?', $id, $title)
                    ->orderBy('p.id', 'DESC')
                    ->limit(30)
                    ->fetchAll();
    }
	
	public function getCodesList($code)
    {
        $seller = $this->load->model('Loginseller')->user();
         $id = $seller->id;
        return $this->select('p.*')
                    ->from('posts p')
                    ->where('p.seller_id=? AND p.code=?', $id, $code)
                    ->orderBy('p.id', 'DESC')
                    ->limit(30)
                    ->fetchAll();
    }
	
	public function getDisplayList($st)
    {
        $seller = $this->load->model('Loginseller')->user();
         $id = $seller->id;
        return $this->select('p.*')
                    ->from('posts p')
                    ->where('p.seller_id=? AND p.status=?', $id, $st)
                    ->orderBy('p.id', 'DESC')
                    ->limit(30)
                    ->fetchAll();
    }
	
	public function getAuditList($st)
    {
        $seller = $this->load->model('Loginseller')->user();
         $id = $seller->id;
        return $this->select('p.*')
                    ->from('posts p')
                    ->where('p.seller_id=? AND p.is_accept=?', $id, $st)
                    ->orderBy('p.id', 'DESC')
                    ->limit(30)
                    ->fetchAll();
    }
	
	public function getAllPostList($id, $brands, $names, $codes, $disp_status, $audit_status)
    {
        return $this->select('p.*')
                    ->from('posts p')
                    ->where('p.seller_id=? AND p.brands=? OR p.title=? OR p.code=? OR p.status=? OR p.is_accept=?', $id, $brands, $names, $codes, $disp_status, $audit_status)
                    ->orderBy('p.id', 'DESC')
                    ->limit(30)
                    ->fetchAll();
    }
	
	public function createPosts($seller_id)
    {
        $image = $this->uploadImage();
        $imageOne = $this->uploadImage2();
        $imageTwo = $this->uploadImage3();
        $imageThree = $this->uploadImage4();

        if ($image|| $imageOne || $imageTwo || $imageThree) {
            $this->data('image', $image);
            $this->data('imageOne', $imageOne);
            $this->data('imageTwo', $imageTwo);
            $this->data('imageThree', $imageThree);
        }
		$now = time();
        //$user = $this->load->model('Login')->user();
        $seller = $this->load->model('Loginseller')->user();
		$code = sha1($now . mt_rand());
        $this->data('title', $this->request->post('title'))
			->data('details', $this->request->post('details'))
			->data('category_id', $this->request->post('category_id'))
			//->data('user_id', $user->id)
			->data('tags', $this->request->post('tags'))
			->data('desc_en_title', $this->request->post('desc_en_title'))
			->data('en_title', $this->request->post('en_title'))
			->data('price1', $this->request->post('price1'))
			->data('price2', $this->request->post('price2'))
			->data('shipments_price', $this->request->post('shipments_price'))
			->data('weight', $this->request->post('weight'))
			->data('k_weight', $this->request->post('k_weight'))
			->data('brands', $this->request->post('brands_id'))
			->data('related_posts', implode(',', array_filter((array) $this->request->post('related_posts') , 'is_numeric')))
			->data('status', $this->request->post('status'))
			->data('stock', $this->request->post('stock'))
			->data('stock_alarm', $this->request->post('stock_alarm'))
			->data('depot_slot', $this->request->post('depot_slot'))
			->data('details_en', $this->request->post('details_en'))
			->data('after_details_en', $this->request->post('after_details_en'))
			->data('barcode', $this->request->post('barcode'))
			->data('seller_id', $seller_id)
			->data('created', $now = time())
			->data('code', $code)
			->insert('posts');
    }
	
	public function discount($id)
    {
        $this->data('price2', $this->request->post('discount_price'))
             ->where('seller_id=?' , $id)
             ->update('posts');
    }
	
}