<?php

namespace App\Models;

use System\Model;

class SellerModel extends Model
{
     
    protected $table = 'markets';

    public function getMarketsWithTitle($title)
    {
		return $this->select('ma.*', 's.*')
                    ->from('markets ma')
					->join('LEFT JOIN seller s ON s.id=ma.user_id')
					->where('ma.shop_name=?', $title)
                    ->fetch();
    }
    
    
    public function getMarketsWithSellerIdBySellerId($id)
    {
		return $this->select('ma.*', 's.*')
                    ->from('markets ma')
					->join('LEFT JOIN seller s ON s.id=ma.user_id')
					->where('ma.user_id=?', $id)
                    ->fetch();
    }
	
	public function getDataSeller($id)
    {
		return $this->select('se.*')
                    ->from('seller se')
					->where('se.id=?', $id)
                    ->fetch();
    }
	
	
	public function getDataShoping($id)
    {
		return $this->select('ma.*')
                    ->from('markets ma')
					->where('ma.user_id=?', $id)
                    ->fetch();
    }
	
    public function createMarket($id)
    {
		 $image = $this->uploadImage();

        if ($image) {
            $this->data('shop_logo', $image);
        }
		
		$this->data('shop_name', $this->request->post('shop_name'))
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
		 ->data('user_id', $id)
		 ->insert('markets');
    }
	
	private function uploadImage()
     {
         $image = $this->request->file('image');

         if (! $image->exists()) {
             return '';
         }

         return $image->moveTo($this->app->file->toPublic('blog/images/logos'));
     }
	 
	 
	 private function uploadImageThree()
     {
         $imageThree = $this->request->file('imageThree');

         if (! $imageThree->exists()) {
             return '';
         }

         return $imageThree->moveTo($this->app->file->toPublic('users/images/data'));
     }
	 
	 private function uploadImageOne()
     {
         $imageOne = $this->request->file('imageOne');

         if (! $imageOne->exists()) {
             return '';
         }

         return $imageOne->moveTo($this->app->file->toPublic('users/images/data'));
     }
	 
	 
	 private function uploadImageTwo()
     {
         $imageTwo = $this->request->file('imageTwo');

         if (! $imageTwo->exists()) {
             return '';
         }

         return $imageTwo->moveTo($this->app->file->toPublic('users/images/data'));
     }
	 


    public function update($id, $userId)
    {
		 $image = $this->uploadImage();

        if ($image) {
            $this->data('shop_logo', $image);
        }

        $this->data('shop_name', $this->request->post('shop_name'))
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
		 ->data('user_id', $userId)
		 ->where('id=?' , $id)
         ->update('markets');
    }
	
	public function createNewSeller()
    {		
		$code = sha1($now . mt_rand());
		$this->data('contact_email', $this->request->post('email'))
			->data('code', $code)
			->data('is_active', 1)
			->data('is_seller', $this->request->post('is_seller'))
			->data('password', password_hash($this->request->post('password'), PASSWORD_DEFAULT))
			->data('ip', $this->request->server('REMOTE_ADDR'))
			->data('created', $now = time())
			->insert('seller');
	}
	
	public function updateSellerProfile($id)
    {
		$imageThree = $this->uploadImageThree();

        if ($imageThree) {
            $this->data('copy_commercial_registration_no', $imageThree);
        }
		
		$imageOne = $this->uploadImageOne();

        if ($imageOne) {
            $this->data('tax_license_img', $imageOne);
        }
		
		$imageTwo = $this->uploadImageTwo();

        if ($imageTwo) {
            $this->data('brand_license_img', $imageTwo);
        }
		
		$this->data('contact_name', $this->request->post('contact_name'))
			->data('holder_name', $this->request->post('holder_name'))
			->data('commercial_registration_no', $this->request->post('commercial_registration_no'))
			->data('contact_phone', $this->request->post('contact_phone'))
			->data('bank_name', $this->request->post('bank_name'))
			->data('bank_account', $this->request->post('bank_account'))
			->data('iban_account', $this->request->post('iban_account'))
			->data('tax_license_no', $this->request->post('tax_license_no'))
			->where('id=?' , $id)
			->update('seller');
    }
	
	public function countAllOrderForSeller($id)
    {	
        return $this->select('COUNT(*) AS total')
					->from('sales')
					->where('seller_name_id=?', $id)
					->fetch();
    }
	
	public function countAllOrderPindingsForSeller($id)
    {	
        return $this->select('COUNT(*) AS total')
					->from('sales')
					->where('seller_name_id=? AND status=?', $id, 0)
					->fetch();
    }
	
	public function countAllOrderDoneForSeller($id)
    {	
        return $this->select('COUNT(*) AS total')
					->from('sales')
					->where('seller_name_id=? AND status=?', $id, 1)
					->fetch();
    }
	
	public function countAllOrderCancelForSeller($id)
    {	
        return $this->select('COUNT(*) AS total')
					->from('sales')
					->where('seller_name_id=? AND status=?', $id, 2)
					->fetch();
    }
	
}