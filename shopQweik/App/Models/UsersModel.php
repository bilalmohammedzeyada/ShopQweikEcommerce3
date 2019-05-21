<?php

namespace App\Models;

use System\Model;

class UsersModel extends Model
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
        /* $image = $this->uploadImage();

        if ($image) {
            $this->data('image', $image);
        } */
		
		$mobile = $this->request->post('mobile_country_code');
		$mobile .= $this->request->post('mobile_number');
				
		$code = sha1($now . mt_rand());
		
        $this->data('first_name', $this->request->post('first_name'))
             ->data('last_name', $this->request->post('last_name'))
             ->data('mobile_number', $mobile)
             ->data('is_subscribed', $this->request->post('is_subscribed'))
             ->data('users_group_id', $this->request->post('users_group_id'))
             ->data('email', $this->request->post('email'))
             ->data('password', password_hash($this->request->post('password'), PASSWORD_DEFAULT))
             ->data('status', $this->request->post('status'))
             ->data('gender', $this->request->post('gender'))
             ->data('ip', $this->request->server('REMOTE_ADDR'))
             ->data('created', $now = time())
             ->data('code', $code)
             ->insert('users');
				$data['site_name'] = $this->load->model('Settings')->get('site_name');
				$data['site_email'] = $this->load->model('Settings')->get('site_email');
				$to = $this->request->post('email');
				$from = $data['site_email'];
				$subject = "رابط اعادة كلمة المرور في موقع  ";
				$subject .= $data['site_name'];
				$message = "رابط اعادة كلمة المرور في موقع  هو:";
				$message .= $this->url->link('/active/') . "/".  $code;
				$this->helper->sendMail($to, $from, $subject, $message);
				/* $filename = 'accounts.txt';
				$fp = fopen($filename, 'a+');
				fwrite ($fp, $this->request->post('email') . "," . $this->request->post('mobile_number') . "\n");
				$fclose ($fp); */
						
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
    public function update($id, $usersGroupId = null)
    {
        $image = $this->uploadImage();

        if ($image) {
            $this->data('image', $image);
        }

        $password = $this->request->post('password');

        if ($password) {
            $this->data('password', password_hash($password, PASSWORD_DEFAULT));
        }

        if (is_null($usersGroupId)) {
            $usersGroupId = $this->request->post('users_group_id');
        }

        $this->data('first_name', $this->request->post('first_name'))
             ->data('last_name', $this->request->post('last_name'))
             ->data('users_group_id', $usersGroupId)
             ->data('email', $this->request->post('email'))
             ->data('status', $this->request->post('status'))
             ->data('gender', $this->request->post('gender'))
             ->data('birthday', strtotime($this->request->post('birthday')))
             ->where('id=?' , $id)
             ->update('users');
    }
	
	public function updateUser($id)
    {
        $this->data('first_name', $this->request->post('first_name'))
             ->data('last_name', $this->request->post('last_name'))
             ->data('sDay', $this->request->post('sDay'))
             ->data('sMonth', $this->request->post('sMonth'))
             ->data('sYear', $this->request->post('sYear'))
             ->data('mobile_number', $this->request->post('mobile_number'))
             ->data('alternative_number', $this->request->post('alternative_number'))
             ->data('co_code1', $this->request->post('co_code1'))
             ->data('gender', $this->request->post('gender'))
             ->where('id=?' , $id)
             ->update('users');
    }
	
	public function updatePassword()
    {
		$loginModel = $this->load->model('Login');
		$loggedInUser = $loginModel->user();
		$id = $loggedInUser->id;
		$getPas = $this->where('id=?', $id)->fetch($this->table);
		
        $password = $this->request->post('password');
        $passwordash = password_hash($password, PASSWORD_DEFAULT);
        $password_new = $this->request->post('new_password');
        $passwor_newdash = password_hash($password_new, PASSWORD_DEFAULT);
		if($getPas->password == $passwordash){
			if ($password_new) {
				$this->data('password', $passwor_newdash);
			}
			$this->data('id', $id)
				 ->where('id=?' , $id)
				 ->update('users');
		} 
    }
	
}