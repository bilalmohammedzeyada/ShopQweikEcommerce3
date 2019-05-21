<?php

namespace App\Controllers\Blog;

use System\Controller;

class ForgotpasswordController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {
        $this->blogLayout->title('Login');

        $loginModel = $this->load->model('Login');

        // disable sidebar
        $this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        if ($loginModel->isLogged()) {
            return $this->url->redirectTo('/customer/account/index');
        }

        $data['errors'] = $this->errors;

        $view = $this->view->render('blog/account/forgotpassword', $data);

        return $this->blogLayout->render($view);
    }

    /**
    * Submit Login form
    *
    * @return mixed
    */
    public function submit()
    {
        //if ($this->isValid()) {
            $loginModel = $this->load->model('Login');

            $loggedInUser = $loginModel->user();
			$data['site_name'] = $this->load->model('Settings')->get('site_name');
			$data['site_email'] = $this->load->model('Settings')->get('site_email');
			$data['codeForgot'] = $this->load->model('Active')->activeAccountCode($this->request->post('email'));

         if (! $data['codeForgot']) {
            return $this->url->redirectTo('/404');
        } 
            $json = [];
			//$this->request->post('email');
			if($this->request->post('email')){
				
				$now = time() + rand(0, 999);
				$str = substr($now, 0, 5);
				$codePass = sha1($str . mt_rand());
				$pass = password_hash($codePass, PASSWORD_DEFAULT);
				$this->load->model('Active')->changePassword($data['codeForgot']->code, $pass);

				
				$to = $this->request->post('email');
				$from = $data['site_email'];
				$subject = "رابط اعادة كلمة المرور في موقع  ";
				$subject .= $data['site_name'];
				//$message = "رابط اعادة كلمة المرور في موقع  هو:";
				//$message .= $this->url->link('/active/') . "/".  $data['codeForgot']->code;
				//$message .= "<br />";
				$message .= "كلمة المرور هي ";
				$message .= nl2br($codePass);
				$str = "اذا كان هنالك حساب مرتبط بالبريد الالكتروني التالي";
				$str .= " ";
				$str .= $this->request->post('email');
				$str .= " ";
				$str .= "ستصلك رسالة فيها رابط لاسترجاع كلمة المرور.";
				$this->helper->sendMail($to, $from, $subject, $message);
				$json['success']  = $str;
			}

           // $json['redirectTo'] = $this->url->link('/customer/account/index');
        //} else {

            $json['errors'] = implode('<br>', $this->errors);

            return $this->json($json);
        //}
    }

    /**
    * Validate Login Form
    *
    * @return bool
    */
    private function isValid()
    {
        $email = $this->request->post('email');

        if (! $email) {
            $this->errors[] = 'Please Insert Email address';
        } elseif (! filter_var($email , FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = 'Please Insert Valid Email';
        }
		
        /* if (! $this->errors) {
            $loginModel = $this->load->model('Login');

            if (! $loginModel->isValidforgot($email)) {
                $this->errors[] = 'Invalid Login Data';
            }
        } */

        return empty($this->errors);
    }
}