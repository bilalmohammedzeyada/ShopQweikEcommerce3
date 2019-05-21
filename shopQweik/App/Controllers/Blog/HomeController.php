<?php

namespace App\Controllers\Blog;

use System\Controller;

class HomeController extends Controller
{
    public function index()
    {
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');
		$data['inHome'] = $this->load->model('Ads')->inHome();
		$data['firstB'] = $this->load->model('Adshome')->firstB();
		$data['secondB'] = $this->load->model('Adshome')->secondB();
		$data['thirdB'] = $this->load->model('Adshome')->thirdB();
		$data['firstSliders'] = $this->load->model('Adshome')->firstSlider();

        $data['posts'] = $this->load->model('Posts')->latest();
        $data['bestsellers'] = $this->load->model('Posts')->chooseDestSeller();
		
		$data['categoriesImages'] = $this->load->model('Categories')->getCatForHeader();
		$data['categories'] = $this->load->model('Categories')->getEnabledCategoriesWithNumberOfTotalPosts();
		$data['categorys'] = $this->load->model('Categories')->getCategoryForHeader();
		$data['subcategorys'] = $this->load->model('Categories')->getSubCategoryForHeader();

        $this->html->setTitle($this->settings->get('site_name'));

        $postController = $this->load->controller('Blog/Post');

        $data['post_box'] = function ($post) use ($postController) {
            return $postController->box($post);
        };
		
		$data['post_box2'] = function ($post2) use ($postController) {
            return $postController->box($post2);
        };

        // i will use getOutput() method just to display errors
        // as i'm using php 7 which is throwing all errors as exceptions
        // which won't be thrown through the __toString() method
		
		
		
		$data['show_menu'] = $this->show_menu();
		
		
        $view = $this->view->render('blog/home', $data);

        return $this->blogLayout->render($view);
    }
	
	public function send()
	{
		$data['userCommentFound'] = $this->load->model('Posts')->userCommentFound();
		
		if($data['userCommentFound']->userfound <= 0){
			$this->load->model('Posts')->addNewComment();
		echo "تم اضافة التعليق";
		} else {
			echo "لقد قمت بالتقييم والتعليق مسبقا";
		}
	}
	
	public function getData()
	{
		$data['comments'] = $this->load->model('Posts')->getData();
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        return $this->view->render('blog/comments/getdata', $data);
	}
	
	public function getmode()
	{
		$data['comments'] = $this->load->model('Posts')->getmode();
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        return $this->view->render('blog/getmode', $data);
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