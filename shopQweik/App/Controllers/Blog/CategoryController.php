<?php

namespace App\Controllers\Blog;

use System\Controller;

class CategoryController extends Controller
{
     /**
     * Display Category Page
     *
     * @param string name
     * @param int $id
     * @return mixed
     */
    public function index($title, $id)
    {
		// disable sidebar
        $this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
		//$data['categories'] = $this->load->model('Categories')->getEnabledCategoriesWithNumberOfTotalPosts();
		$data['subcategories'] = $this->load->model('Categories')->getCategoryForHeaderWithId($id);
	
		//$data['enabledJustOne'] = $this->load->model('Ads')->enabledJustOne();
		$data['ads'] = $this->load->model('Ads')->enabled();
		
		$loginModel = $this->load->model('Login');

        //$loggedInUser = $loginModel->user();
		
		$data['user'] = $loginModel->isLogged() ? $loginModel->user() : null;
		$sort = $this->app->request->get('sort');
		if($sort){
			$category = $this->load->model('Categories')->getCategoryWithPostsUseSort($id, $sort);
		} else {
			$category = $this->load->model('Categories')->getCategoryWithPosts($id);
		}
		
        if (! $category) {
            return $this->url->redirectTo('/404');
        }

        $this->html->setTitle($category->name);

        if ($category->posts) {
            $category->posts = array_chunk($category->posts, 2);
        } else {
            if ($this->pagination->page() != 1) {
                // then just redirect him to the first page of the category
                // regardless there is posts or not in that category
                return $this->url->redirectTo("/category/$title/$id");
            }
        }

        $data['category'] = $category;
		$data['ads'] = $this->load->model('Ads')->enabled();
		$data['brands'] = $this->load->model('Brands')->getEnableBrands($id);
        $postController = $this->load->controller('Blog/Post');
		

        // the idea here as follows:
        // first we will pass the $post variable to $post_box variable
        // in the view file
        // why ? because $post_box is an anonymous function
        // when calling it, it will call the "box" method
        // from the post controller
        // so it will pass to it the "$post" variable to be used in the
        // post-box view
        /* $data['post_box'] = function ($post) use ($postController) {
            return $postController->box($post);
        }; */

        $data['url'] = $this->url->link('/category/' . seo($category->title) . '/' . $category->id . '?page=');

        // Pagination steps
        // first we will get total posts for the category
        // and we will limit the grabbed posts for the category
        // i.e total posts in the Politics Category is 90
        // we will limit our grabbed posts from Politics Category to be 10
        // 90 => total Items
        // 10 => Items Per Page => limit
        // 1 => current page
        // offset = Items Per Page * (current page - 1)
        // last page => total pages = total items / items per page
        // 9 => total Pages => Last Page
        // i.e 2
        // we will limit our grabbed posts from Politics Category to be 10
        // Total Posts in Politics Category is 87
        // starting from the offset
        // assuming that the current page is 1
        // then our offset will be 10 * (1 - 1) = 0
        // assuming that the current page is 2
        // then our offset will be 10 * (2 - 1) = 10
        // last page => total pages = total items / items per page
        // last page = 87 / 10 => 8.7
        // last page = ceil(87 / 10) = 9 => round up
        // previous page
        // first page
        // next page
        // last page
        $data['pagination'] = $this->pagination->paginate();

        $view = $this->view->render('blog/category', $data);

        return $this->blogLayout->render($view);
    }
}