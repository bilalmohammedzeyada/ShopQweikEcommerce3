<?php

namespace App\Models;

use System\Model;

class CategoriesModel extends Model
{
     /**
     * Table name
     *
     * @var string
     */
    protected $table = 'categories';
    protected $stable = 'sub_categories';

     /**
     * Create New Category Record
     *
     * @return void
     */
    public function create()
    {
		$image = $this->uploadImage();
		if ($image) {
            $this->data('image', $image);
        }
        $this->data('name', $this->request->post('name'))
             ->data('title', $this->request->post('title'))
             ->data('status', $this->request->post('status'))
			 ->data('parent_id', $this->request->post('parent_id'))
             ->insert($this->table);
    }
	
	public function screate()
    {
		$image = $this->uploadImage();
		if ($image) {
            $this->data('image', $image);
        }
        $this->data('name', $this->request->post('name'))
             ->data('title', $this->request->post('title'))
             ->data('status', $this->request->post('status'))
             ->data('parent_id', $this->request->post('parent_id'))
             ->insert($this->stable);
    }
	
	public function CountBrands2()
    {
		$loginModel = $this->load->model('Login');

		$loggedInUser = $loginModel->user();
		
        return $this->select('COUNT(*) AS total')
					->from('orders')
					->where('user_id=?', $loggedInUser->id)
					->fetch();
    }
	
	
	public function CountBrands()
    {
        // get the latest added posts
        return $this->select('p.*')
                    ->select('(SELECT COUNT(co.id) FROM brands co WHERE co.cat_id=p.id) AS total_brands')
                    ->from('categories p')
                    ->fetch();
    }
	

     /**
     * Update Category Record By Id
     *
     * @param int $id
     * @return void
     */
    public function update($id)
    {
		$image = $this->uploadImage();
		if ($image) {
            $this->data('image', $image);
        }
        $this->data('name', $this->request->post('name'))
			 ->data('title', $this->request->post('title'))
             ->data('status', $this->request->post('status'))
			 ->data('parent_id', $this->request->post('parent_id'))
             ->where('id=?', $id)
             ->update($this->table);
    }
	
	public function supdate($id)
    {
		$image = $this->uploadImage();
		if ($image) {
            $this->data('image', $image);
        }
        $this->data('name', $this->request->post('name'))
			 ->data('title', $this->request->post('title'))
             ->data('status', $this->request->post('status'))
             ->data('parent_id', $this->request->post('parent_id'))
             ->where('id=?', $id)
             ->update($this->stable);
    }

     /**
     * Get enabled categories with total number of posts for each category
     *
     * @return array
     */
    public function getEnabledCategoriesWithNumberOfTotalPosts()
    {
        // share the categories in the application to not call it twice in same request

        if (! $this->app->isSharing('enabled-categories')) {
            // first we will get the enabled categories
            // and we will add another condition that total number of posts
            // for each category
            // should be more than zero
            $categories = $this->select('root.id as root_id', 'root.name as root_name', 'root.title as root_title','root1.name as root1_name','root2.name as root2_name')
                               ->from('categories root')
								->join('LEFT OUTER JOIN categories root1 ON root1.parent_id=root.id')
								->join('LEFT OUTER JOIN categories root2 ON root2.parent_id=root1.id')
								//->join('LEFT OUTER JOIN categories root3 ON root3.parent_id=root2.id')
                               ->where('root.status=? AND root.parent_id=?' , 'enabled', 0)
							   ->orderBy('root_name')
							   ->orderBy('root1_name')
							   ->orderBy('root2_name')
                               ->fetchAll();

            $this->app->share('enabled-categories', $categories);
        }

        return $this->app->get('enabled-categories');
    }

     /**
     * Get Category With Posts
     *
     * @param int $id
     * @return array
     */
    public function getCategoryWithPosts($id)
    {
        $category = $this->where('id=? AND status=?', $id, 'enabled')->fetch($this->table);

        if (! $category) return [];

        // We Will get the current page
        $currentPage = $this->pagination->page();
        // We Will get the items Per Page
        $limit = $this->pagination->itemsPerPage();

        // Set our offset
        $offset = $limit * ($currentPage - 1);

        $category->posts = $this->select('p.*', 'u.first_name', 'u.last_name')
                                ->select('(SELECT COUNT(co.id) FROM comments co WHERE co.post_id=p.id) AS total_comments')
                                ->from('posts p')
                                ->join('LEFT JOIN users u ON p.user_id=u.id')
                                ->where('p.category_id=? AND p.status=?', $id, 'enabled')
                                ->orderBy('p.id', 'DESC')
                                ->limit($limit, $offset)
                                ->fetchAll();

        // Get total posts for pagination
        $totalPosts = $this->select('COUNT(id) AS `total`')
                                ->from('posts')
                                ->where('category_id=? AND status=?', $id, 'enabled')
                                ->orderBy('id', 'DESC')
                                ->fetch();

        if ($totalPosts) {
            $this->pagination->setTotalItems($totalPosts->total);
        }

        return $category;
    } 
	
	public function getCategoryWithPostsUseSort($id, $sort)
    {
        $category = $this->where('id=? AND status=?', $id, 'enabled')->fetch($this->table);

        if (! $category) return [];

        // We Will get the current page
        $currentPage = $this->pagination->page();
        // We Will get the items Per Page
        $limit = $this->pagination->itemsPerPage();

        // Set our offset
        $offset = $limit * ($currentPage - 1);

        $category->posts = $this->select('p.*', 'u.first_name', 'u.last_name')
                                ->select('(SELECT COUNT(co.id) FROM comments co WHERE co.post_id=p.id) AS total_comments')
                                ->from('posts p')
                                ->join('LEFT JOIN users u ON p.user_id=u.id')
                                ->where('p.category_id=? AND p.status=? AND brands=?', $id, 'enabled', $sort)
                                ->orderBy('p.id', 'DESC')
                                ->limit($limit, $offset)
                                ->fetchAll();

        // Get total posts for pagination
        $totalPosts = $this->select('COUNT(id) AS `total`')
                                ->from('posts')
                                ->where('category_id=? AND status=? AND brands=?', $id, 'enabled', $sort)
                                ->orderBy('id', 'DESC')
                                ->fetch();

        if ($totalPosts) {
            $this->pagination->setTotalItems($totalPosts->total);
        }

        return $category;
    }
	
	public function getCatForHeader()
	{
		return $this->select('ca.*')
					->from('categories ca')
					->where('ca.parent_id=?', 0)
					->orderBy('ca.id', 'ASC')
					->fetchAll();
	}
	
	public function getCategoryForHeader()
	{
		return $this->select('ca.*')
					->from('categories ca')
					->where('ca.parent_id > ?', 0)
					->orderBy('ca.id', 'ASC')
					->fetchAll();
	}
	
	public function getCategoryForHeaderWithParentid($parent_id)
	{
		return $this->select('ca.*')
					->from('categories ca')
					->where('ca.parent_id = ?', $parent_id)
					->orderBy('ca.id', 'ASC')
					->fetchAll();
	}
	
	
	public function getCategoryForHeaderWithId($id)
	{
		return $this->select('*')
					->from('categories')
					->where('parent_id=?',$id)
					->fetchAll();
	}
	
	public function getSubCategoryForHeader()
	{
		return $this->select('ca.*', 'sub.name As sub_name')
					->join('LEFT JOIN categories sub ON ca.id=sub.parent_id')
					->from('categories ca')
					//->where('sub.parent_id=ca.id')
					->where('sub.parent_id=?', 2)
					->orderBy('ca.id', 'ASC')
					->fetchAll();
	}
	
	private function uploadImage()
     {
         $image = $this->request->file('image');
         

         if (! $image->exists()) {
             return '';
         }

			return $image->moveTo($this->app->file->toPublic('blog/images/categories'));
     }
}