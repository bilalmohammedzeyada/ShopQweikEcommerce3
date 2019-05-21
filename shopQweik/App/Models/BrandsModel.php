<?php

namespace App\Models;

use System\Model;

class BrandsModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'brands';

    /**
    * Get All Posts
    *
    * @return array
    */
    public function all()
    {
		return $this->select('p.*', 'c.name AS `category`')
                    ->from('brands p')
                    ->join('LEFT JOIN categories c ON p.cat_id=c.id')
                    ->fetchAll();
    }
	
	
	public function getEnableBrands($id)
    {
        

        if (! $this->app->isSharing('enabled-brands')) {
           
            $brands = $this->select('b.id', 'b.cat_id', 'b.title', 'b.en_title')
                               ->from('brands b')
                              ->where('b.cat_id=?' , $id)
                               ->fetchAll();

            $this->app->share('enabled-brands', $brands);
        }

        return $this->app->get('enabled-brands');
    }

     /**
     * Create New Post
     *
     * @return void
     */
    public function create()
    {
        $image = $this->uploadImage();

       if ($image) {
            $this->data('image', $image);
        } 

        $user = $this->load->model('Login')->user();

        $this->data('title', $this->request->post('title'))
             ->data('en_title', $this->request->post('en_title'))
             ->data('cat_id', $this->request->post('category_id'))
             ->insert('brands');
    }

     private function uploadImage()
     {
         $image = $this->request->file('image');

         if (! $image->exists()) {
             return '';
         }

         return $image->moveTo($this->app->file->toPublic('images'));
     }

    public function update($id)
    {
        $image = $this->uploadImage();

        if ($image) {
            $this->data('image', $image);
        }

        $this->data('title', $this->request->post('title'))
             ->data('en_title', $this->request->post('en_title'))
             ->data('cat_id', $this->request->post('category_id'))
             ->where('id=?' , $id)
             ->update('brands');
    }
	
	public function getPostWithComments($id)
    {
        $post = $this->select('p.*', 'c.name AS `category`')
                     ->from('posts p')
                     ->join('LEFT JOIN categories c ON p.category_id=c.id')
                     ->where('p.id=? AND p.status=?', $id, 'enabled')
                     ->fetch();

        if (! $post) return null;

        return $post;
    }
}