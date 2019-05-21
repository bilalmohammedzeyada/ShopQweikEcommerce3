<?php

namespace App\Models;

use System\Model;

class AddressModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'users';

    /**
    * Get All Users
    *
    * @return array
    */
    public function all()
    {
        return $this->select('u.*', 'ug.name AS `group`')->from('users u')
                    ->join('LEFT JOIN users_groups ug ON u.users_group_id=ug.id')
                    ->fetchAll();
    }

     /**
     * Create New User
     *
     * @return void
     */
    public function create()
    {
        $image = $this->uploadImage();

        if ($image) {
            $this->data('image', $image);
        }

		$birthday = $this->request->post('sDay');
		$birthday .= '-';
		$birthday .= $this->request->post('sMonth');
		$birthday .= '-';
		$birthday .= $this->request->post('sYear');
		
		$mobile = $this->request->post('mobile_country_code');
		$mobile .= $this->request->post('mobile_number');
		
		$alternative_number = $this->request->post('alternative_country_code');
		$alternative_number .= $this->request->post('alternative_number');
		
        $this->data('first_name', $this->request->post('first_name'))
             ->data('last_name', $this->request->post('last_name'))
             ->data('mobile_number', $mobile)
             ->data('alternative_number', $alternative_number)
             ->data('is_subscribed', $this->request->post('is_subscribed'))
             ->data('sMonth', $this->request->post('sMonth'))
             ->data('sYear', $this->request->post('sYear'))
             ->data('sDay', $this->request->post('sDay'))
             ->data('users_group_id', $this->request->post('users_group_id'))
             ->data('email', $this->request->post('email'))
             ->data('password', password_hash($this->request->post('password'), PASSWORD_DEFAULT))
             ->data('status', $this->request->post('status'))
             ->data('gender', $this->request->post('gender'))
             ->data('birthday', $birthday)
             ->data('ip', $this->request->server('REMOTE_ADDR'))
             ->data('created', $now = time())
             ->data('code', sha1($now . mt_rand()))
             ->insert('users');
    }

     /**
     * Upload User Image
     *
     * @return string
     */
     private function uploadImage()
     {
         $image = $this->request->file('image');

         if (! $image->exists()) {
             return '';
         }

         return $image->moveTo($this->app->file->toPublic('images'));
     }

     /**
     * Update Users Record By Id
     *
     * @param int $id
     * @param int $usersGroupId
     * @return void
     */
    public function update($id)
    {
        $this->data('mobile_number', $this->request->post('mobile_number'))
             ->data('co_code1', $this->request->post('telephone_country_code'))
             ->data('country', $this->request->post('country'))
             ->data('city', $this->request->post('city'))
             ->data('street', $this->request->post('street'))
             ->data('region', $this->request->post('region'))
             ->data('building_number', $this->request->post('building_number'))
             ->data('zipcode', $this->request->post('zipcode'))
             ->where('id=?' , $id)
             ->update('users');
    }
}