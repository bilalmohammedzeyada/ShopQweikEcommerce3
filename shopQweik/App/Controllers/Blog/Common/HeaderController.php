<?php

namespace App\Controllers\Blog\Common;

use System\Controller;

class HeaderController extends Controller
{
    public function index()
    {
        $data['title'] = $this->html->getTitle();

        $loginModel = $this->load->model('Login');

        $data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;

        $data['cats'] = $this->load->model('Categories')->getCatForHeader();
		
		$data['site_name'] = $this->load->model('Settings')->get('site_name');
		$data['phone'] = $this->load->model('Settings')->get('phone');
		$data['gifts'] = $this->load->model('Settings')->get('gifts');
		$data['shipments'] = $this->load->model('Settings')->get('shipments');
		$data['email'] = $this->load->model('Settings')->get('email');
		$data['msg'] = $this->load->model('Settings')->get('msg');
		$data['wht'] = $this->load->model('Settings')->get('wht');
		$data['keywords'] = $this->load->model('Settings')->get('keywords');
		$data['description'] = $this->load->model('Settings')->get('description');
	    //$data['show_menu'] = $this->show_menu();
        return $this->view->render('blog/common/header', $data)->getOutput();
    }
    
    public function connection()
	{
		$connectionData3 = $this->app->file->call('config.php');
		extract($connectionData3);
		$data['server'] = $server;
		$data['dbname'] = $dbname;
		$data['dbuser'] = $dbuser;
		$data['dbpass'] = $dbpass;
		$connection = mysqli_connect( $server, $dbuser, $dbpass, $dbname);
		
		if(!$connection){
			die('failed The Connection');
		} 
		
		return $connection;
	}
	
	
	public function show_menu()
	{
		$connection = $this->connection();
		
		$menus = '<div class="arrow_box"></div>';
		$menus .= $this->generate_multilevel_menus($connection);
		
		return $menus;
	}
	
	
	public function generate_multilevel_menus($connection, $parent_id = null)
	{
		$menu = "";
		$sql = "";
		if(is_null($parent_id)){
			$sqls = $this->load->model('Categories')->getCatForHeader();
		} else {
			$sqls = $this->load->model('Categories')->getCategoryForHeaderWithParentid($parent_id);
		}
		$menu = '';
		foreach($sqls as $sql){
			if($sql->title){
				$menu .='<li><a class="category" href="'. url('category/' . seo($sql->title) . '/' . $sql->id) .'">'. $sql->name .'</a>';
			} else {
				$menu .='<li><a class="" href="#">'. $sql->name .'</a>';
			}
			$menu .= '<ul class="dropdown">'. $this->generate_multilevel_menus($connection, $sql->id).'</ul>';
			
			$menu .= '</li>';
		}
		return $menu;
	}
}