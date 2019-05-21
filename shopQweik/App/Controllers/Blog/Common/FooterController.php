<?php

namespace App\Controllers\Blog\Common;

use System\Controller;

class FooterController extends Controller
{
    public function index()
    {
        $data['user'] = $this->load->model('Login')->user();
		$data['site_name'] = $this->load->model('Settings')->get('site_name');
		$data['phone'] = $this->load->model('Settings')->get('phone');
		$data['gifts'] = $this->load->model('Settings')->get('gifts');
		$data['shipments'] = $this->load->model('Settings')->get('shipments');
		$data['email'] = $this->load->model('Settings')->get('email');
		$data['msg'] = $this->load->model('Settings')->get('msg');
		$data['fb'] = $this->load->model('Settings')->get('fb');
		$data['tw'] = $this->load->model('Settings')->get('tw');
		$data['snap'] = $this->load->model('Settings')->get('snap');
		$data['tube'] = $this->load->model('Settings')->get('tube');
		$data['ins'] = $this->load->model('Settings')->get('ins');
		$data['wht'] = $this->load->model('Settings')->get('wht');
        return $this->view->render('blog/common/footer', $data);
    }
}