<?php

namespace App\Models;

use System\Model;

class AdshomeModel extends Model
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
     public function firstAds()
     {

		$now = time();

		return $this->where('in_home=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 'enabled', $now, $now)
		->orderBy('id', 'DESC')
		->limit(5)
		->fetchAll($this->table);
     }
	 
	 public function firstB()
     {

		$now = time();

		return $this->where('in_home=? AND is_first_banner=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 1, 'enabled', $now, $now)
		->orderBy('id', 'DESC')
		->limit(5)
		->fetchAll($this->table);
     }
	 
	 public function secondB()
     {

		$now = time();

		return $this->where('in_home=? AND is_second_banner=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 1, 'enabled', $now, $now)
		->orderBy('id', 'DESC')
		->limit(3)
		->fetchAll($this->table);
     }
	 
	 public function thirdB()
     {

		$now = time();

		return $this->where('in_home=? AND is_third_banner=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 1, 'enabled', $now, $now)
		->orderBy('id', 'DESC')
		->limit(3)
		->fetchAll($this->table);
     }
	 
     
	public function firstSlider()
	{
	$now = time();

	 return $this->where('in_home=? AND is_first_slider=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 1, 'enabled', $now, $now)
		->orderBy('id', 'DESC')
	 ->limit(5)
	 ->fetchAll($this->table);
	}
	
	public function firstbanner()
	{
	$now = time();

	 return $this->where('in_home=? AND is_first_banner=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 1, 'enabled', $now, $now)
	 ->orderBy('id', 'DESC')
	 ->limit(30)
	 ->fetchAll($this->table);
	}
	
	public function secondbanner()
	{
	$now = time();

	 return $this->where('in_home=? AND is_second_banner=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 1, 'enabled', $now, $now)
	 ->orderBy('id', 'DESC')
	 ->limit(30)
	 ->fetchAll($this->table);
	}
	
	public function thirdbanner()
	{
	$now = time();

	 return $this->where('in_home=? AND is_third_banner=? AND status=?  AND start_at <= ? AND end_at >= ?', 1, 1, 'enabled', $now, $now)
	 ->orderBy('id', 'DESC')
	 ->limit(30)
	 ->fetchAll($this->table);
	}
     
	 
     
    public function enabled()
     {
         $currentRoute = $this->route->getCurrentRouteUrl();

         $now = time();

         return $this->where('status=? AND page=? AND start_at <= ? AND end_at >= ?', 'enabled', $currentRoute, $now, $now)
		 ->limit(12)
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
             ->data('ads_desc', $this->request->post('ads_desc'))
             ->data('in_home', 1)
             ->data('is_special', $this->request->post('is_special'))
             ->data('is_first_slider', $this->request->post('is_first_slider'))
			 ->data('is_first_banner', $this->request->post('is_first_banner'))
             ->data('is_second_banner', $this->request->post('is_second_banner'))
             ->data('is_third_banner', $this->request->post('is_third_banner'))
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
             ->data('ads_desc', $this->request->post('ads_desc'))
             ->data('in_home', 1)
			 ->data('is_special', $this->request->post('is_special'))
             ->data('is_first_slider', $this->request->post('is_first_slider'))
             ->data('is_first_banner', $this->request->post('is_first_banner'))
             ->data('is_second_banner', $this->request->post('is_second_banner'))
             ->data('is_third_banner', $this->request->post('is_third_banner'))
             ->where('id=?' , $id)
             ->update('ads');
    }
}