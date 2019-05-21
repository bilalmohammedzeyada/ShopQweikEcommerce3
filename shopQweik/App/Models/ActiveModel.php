<?php

namespace App\Models;

use System\Model;

class ActiveModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'users';

     /**
     * Get Category With Posts
     *
     * @param int $id
     * @return array
     */
    public function activeAccountWithHaveCode($title)
    {
        $active = $this->where('code=?', $title)->fetch($this->table);

        if (! $active) return [];

        $this->data('is_active', 1)
             ->where('code=?' , $title)
             ->update('users');
		return $active;
    }
	
	public function changePassword($code, $pass)
    {
        //$active = $this->where('code=?', $code)->fetch($this->table);

        /* if (! $active) return [];
		$now = time() + rand(0, 999);
		$str = substr($now, 0, 20);
		$codePass = sha1($str . mt_rand());
		 */

        $this->data('password', $pass)
			 ->where('code=?', $code)
             ->update('users');
		//return $active;
    }
	
	
	public function activeAccountCode($email)
    {
        $codeForgot = $this->where('email=?', $email)->fetch($this->table);

        if (! $codeForgot) return [];
		return $codeForgot;
    }
	
	public function isSubsecribe()
    {
		
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
				
        $this->data('is_subscribed', $this->request->post('is_subscribed'))
             ->where('id=?' , $loggedInUser->id)
             ->update('users');
    }
}