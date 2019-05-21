<?php

namespace App\Models;

use System\Model;

class LoginsellerModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'seller';

     /**
     * User Data
     *
     * @var mixed
     */
    private $user;

    /**
    * Logged In User
    *
    * @var \stdClass
    */

    /**
    * Determine if the given login data is valid
    *
    * @param string $email
    * @param string $password
    * @return bool
    */
    public function isValidLogin($email, $password)
    {
        $user = $this->where('contact_email=?' , $email)->fetch($this->table);

        if (! $user) {
            return false;
        }

        $this->user = $user;

        return password_verify($password, $user->password);
    }
	
	public function isValidforgot($email)
    {
        $user = $this->where('contact_email=?' , $email)->fetch($this->table);

        if (! $user) {
            return false;
        }

        $this->user = $user;
		return $this->user;
        //return password_verify($password, $user->password);
    }

    /**
    * Get Logged In User data
    *
    * @return \stdClass
    */
    public function user()
    {
        return $this->user;
    }

    /**
    * Determine whether the user is logged in
    *
    * @return bool
    */
    public function isLogged()
    {
        if ($this->cookie->has('loginSeller')) {
            $code = $this->cookie->get('loginSeller');
            //$code = ''; // just for now
        } elseif ($this->session->has('loginSeller')) {
            $code = $this->session->get('loginSeller');
        } else {
            $code = '';
        }

        $user = $this->where('code=?' , $code)->fetch($this->table);

        if (! $user) {
            return false;
        }

        $this->user = $user;

        return true;
    }
}