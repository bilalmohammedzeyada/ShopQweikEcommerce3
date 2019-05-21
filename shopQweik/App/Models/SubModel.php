<?php

namespace App\Models;

use System\Model;

class SubModel extends Model
{
	public function all()
    {
          return $this->select('p.*')
                    ->from('sub p')
                    ->fetchAll();
    }
	
    public function create()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();

        $this->data('email', $this->request->post('email'))
             ->data('user_id', $loggedInUser->id)
             ->insert('sub');
    }
}