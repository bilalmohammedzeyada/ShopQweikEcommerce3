<?php

namespace App\Models;

use System\Model;

class PhotographyModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'photography';

     /**
     * Get Enabled Ads for the current page
     *
     * @return array
     */
    public function photography($id)
    {
		return $this->select('p.*')->from('photography p')->where('p.seller_id=?',$id)->fetchAll();
    }
	 
	public function create($seller_id)
    {
        $this->data('name', $this->request->post('name'))
             ->data('mobile', $this->request->post('mobile'))
             ->data('email', $this->request->post('email'))
             ->data('n_product', $this->request->post('n_product'))
             ->data('desc_product', $this->request->post('desc_product'))
             ->data('seller_id', $seller_id)
             ->insert('company_ship');
    }
     
    public function update($id)
    {

        $this->data('name', $this->request->post('name'))
             ->data('mobile', $this->request->post('mobile'))
             ->data('email', $this->request->post('email'))
             ->data('n_product', $this->request->post('n_product'))
             ->data('desc_product', $this->request->post('desc_product'))
             ->where('id=?' , $id)
             ->update('photography');
    }
}