<?php

namespace App\Models;

use System\Model;

class ShippingModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'company_ship';
     /**
     * Create New Ad
     *
     * @return void
     */
	 
	public function allShip()
	{
		$loginModel = $this->load->model('Loginseller');
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		return $this->select('p.*')->from('company_ship p')->where('p.seller_id=?',$id)->fetchAll();
	}
	 
    public function create($seller_id)
    {
        $image = $this->uploadImage();
        if ($image) {
            $this->data('image', $image);
        }
        $this->data('co_name', $this->request->post('co_name'))
             ->data('co_world', $this->request->post('co_world'))
             ->data('co_city', $this->request->post('co_city'))
             ->data('co_price', $this->request->post('co_price'))
             ->data('co_duration', $this->request->post('co_duration'))
             ->data('co_payment_way', $this->request->post('co_payment_way'))
             ->data('details', $this->request->post('details'))
             ->data('seller_id', $seller_id)
             ->insert('company_ship');
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

         return $image->moveTo($this->app->file->toPublic('blog/images/companey'));
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

        $this->data('co_name', $this->request->post('co_name'))
             ->data('co_world', $this->request->post('co_world'))
             ->data('co_city', $this->request->post('co_city'))
             ->data('co_price', $this->request->post('co_price'))
             ->data('co_duration', $this->request->post('co_duration'))
             ->data('co_payment_way', $this->request->post('co_payment_way'))
             ->data('details', $this->request->post('details'))
             ->where('id=?' , $id)
             ->update('company_ship');
    }
}