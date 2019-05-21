<?php

namespace App\Models;

use System\Model;

class AdsModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'ads';

     /**
     * Get Enabled Ads for the current page
     *
     * @return array
     */
     public function inHomeSpecial()
     {
         $currentRoute = $this->route->getCurrentRouteUrl();

         $now = time();

         return $this->where('in_home=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 'enabled', $now, $now)
		 ->orderBy('id', 'DESC')
		 ->limit(12)
		 ->fetchAll($this->table);
     }
     
     
     public function enabled()
     {
         $currentRoute = $this->route->getCurrentRouteUrl();

         $now = time();

         return $this->where('in_home=? AND status=? AND page=? AND start_at <= ? AND end_at >= ?', 0, 'enabled', $currentRoute, $now, $now)
		 ->limit(12)
		 ->fetchAll($this->table);
     }
	 
	 
	 public function inHome()
     {
         $currentRoute = $this->route->getCurrentRouteUrl();

         $now = time();

         return $this->where('is_special=? AND status=? AND start_at <= ? AND end_at >= ?', 1, 'enabled', $now, $now)
		 ->orderBy('id', 'DESC')
		 ->limit(4)
		 ->fetchAll($this->table);
     }
	 
	 
	public function SellerAds($seller_id)
     {
         $now = time();

         return $this->where('seller_id=? AND status=? AND start_at <= ? AND end_at >= ?', $seller_id, 'enabled', $now, $now)
		 ->orderBy('id', 'DESC')
		 ->fetchAll($this->table);
    }
	
	public function SellerSliders($seller_id)
     {
         $now = time();

         return $this->where('seller_id=? AND seller_slider=? AND status=? AND start_at <= ? AND end_at >= ?', $seller_id, 1, 'enabled', $now, $now)
		 ->orderBy('id', 'DESC')
		 ->fetchAll($this->table);
    }
	 
	 public function Sellerbanners($seller_id)
     {
         $now = time();

         return $this->where('seller_id=? AND seller_banner=? AND status=? AND start_at <= ? AND end_at >= ?', $seller_id, 1, 'enabled', $now, $now)
		 ->orderBy('id', 'DESC')
		 ->fetchAll($this->table);
     }
	 

     /**
     * Create New Ad
     *
     * @return void
     */
    public function create()
    {
        $image = $this->uploadImage();

        if ($image) {
            $this->data('image', $image);
        }

        $this->data('name', $this->request->post('name'))
             ->data('link', $this->request->post('link'))
             ->data('en_title', $this->request->post('en_title'))
             ->data('start_at', strtotime($this->request->post('start_at')))
             ->data('end_at', strtotime($this->request->post('end_at')))
             ->data('status', $this->request->post('status'))
             ->data('page', $this->request->post('page'))
             ->data('in_home', $this->request->post('in_home'))
             ->data('is_special', $this->request->post('is_special'))
             ->data('seller_id', $this->request->post('seller_id'))
             ->data('seller_slider', $this->request->post('seller_slider'))
             ->data('seller_banner', $this->request->post('seller_banner'))
             ->data('created', time())
             ->insert('ads');
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

         return $image->moveTo($this->app->file->toPublic('blog/images'));
     }

     /**
     * Update Ads Record By Id
     *
     * @param int $id
     * @return void
     */
    public function update($id)
    {
        $image = $this->uploadImage();

        if ($image) {
            $this->data('image', $image);
        }

        $this->data('name', $this->request->post('name'))
             ->data('link', $this->request->post('link'))
             ->data('en_title', $this->request->post('en_title'))
             ->data('start_at', strtotime($this->request->post('start_at')))
             ->data('end_at', strtotime($this->request->post('end_at')))
             ->data('status', $this->request->post('status'))
             ->data('page', $this->request->post('page'))
             ->data('in_home', $this->request->post('in_home'))
             ->data('is_special', $this->request->post('is_special'))
             ->data('seller_slider', $this->request->post('seller_slider'))
             ->data('seller_banner', $this->request->post('seller_banner'))
             ->where('id=?' , $id)
             ->update('ads');
    }
}