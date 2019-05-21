<?php

namespace App\Controllers\Blog;

use System\Controller;

class SearchController extends Controller
{
     /**
     * Display Home Page
     *
     * @return mixed
     */
    public function index()
    {
		//$this->blogLayout->disable('sidebar');
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
		$this->blogLayout->disable('rightsidebar2');
		$data['q'] = $this->request->post('q');
		$data['url'] = $this->url->link('/search/' . '?q=' . $data['q']);
		
		
		if($data['q']){
			 $searchs = $this->load->model('Search')->getPosts($data['q']);
			$data['searchs'] = $searchs;
			$view = $this->view->render('blog/searchs/search', $data);
		} else {
			$view = $this->view->render('blog/searchs/searchs', $data);
		}
        return $this->blogLayout->render($view);
    }
}