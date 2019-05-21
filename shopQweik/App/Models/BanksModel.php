<?php

namespace App\Models;

use System\Model;

class BanksModel extends Model
{
     
    protected $table = 'banks';

    public function all()
    {
		return $this->select('p.*')
                    ->from('banks p')
                    ->fetchAll();
    }
	
    public function create()
    {
			$this->data('banks_name', $this->request->post('banks_name'))
             ->data('account_name', $this->request->post('account_name'))
             ->data('account_number', $this->request->post('account_number'))
             ->data('banks_iban', $this->request->post('banks_iban'))
             ->insert('banks');
    }


    public function update($id)
    {

        $this->data('banks_name', $this->request->post('banks_name'))
             ->data('account_name', $this->request->post('account_name'))
             ->data('account_number', $this->request->post('account_number'))
             ->data('banks_iban', $this->request->post('banks_iban'))
             ->where('id=?' , $id)
             ->update('banks');
    }
}