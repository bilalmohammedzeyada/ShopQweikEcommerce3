<?php

namespace App\Controllers\Admin;

use System\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $this->html->setTitle('المنتجات');

        $data['posts'] = $this->load->model('Posts')->all();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/posts/list', $data);

        return $this->adminLayout->render($view);
    }
	
    public function add()
    {
        return $this->form();
    }
	
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Posts')->create();

            $json['success'] = 'تم أضافة المنتج بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/posts');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

    public function edit($id)
    {
        $postsModel = $this->load->model('Posts');

        if (! $postsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $post = $postsModel->get($id);

        return $this->form($post);
    }

     
    private function form($post = null)
    {
        if ($post) {
            // editing form
            $data['target'] = 'edit-post-' . $post->id;

            $data['action'] = $this->url->link('/admin/posts/save/' . $post->id);

            $data['heading'] = 'تعديل بيانات المنتج ' . $post->title;
        } else {
            // adding form
            $data['target'] = 'add-post-form';

            $data['action'] = $this->url->link('/admin/posts/submit');

            $data['heading'] = 'إضافة منتج جديد';
        }

        $post = (array) $post;

        $data['title'] = array_get($post, 'title');
        $data['category_id'] = array_get($post, 'category_id');
        $data['status'] = array_get($post, 'status', 'enabled');
        $data['details'] = array_get($post, 'details');
        $data['tags'] = array_get($post, 'tags');
        $data['en_title'] = array_get($post, 'en_title');
        $data['desc_en_title'] = array_get($post, 'desc_en_title');
        $data['price1'] = array_get($post, 'price1');
        $data['price2'] = array_get($post, 'price2');
        $data['shipments_price'] = array_get($post, 'shipments_price');
        $data['weight'] = array_get($post, 'weight');
        $data['brands_title'] = array_get($post, 'brands');
        $data['id'] = array_get($post, 'id');
        $data['details_en'] = array_get($post, 'details_en');
        $data['after_details_en'] = array_get($post, 'after_details_en');
        $data['barcode'] = array_get($post, 'barcode');
        $data['depot_slot'] = array_get($post, 'depot_slot');
        $data['stock_alarm'] = array_get($post, 'stock_alarm');
        $data['stock'] = array_get($post, 'stock');

        $data['image'] = '';
        $data['imageOne'] = '';
        $data['imageTwo'] = '';
        $data['imageThree'] = '';
        $data['related_posts'] = [];

        if ($post['related_posts']) { // change this condition
            $data['related_posts'] = explode(',', $post['related_posts']);
        }

        if (! empty($post['image'])) {
            $data['image'] = $this->url->link('public/images/' . $post['image']);
        }
		
		if (! empty($post['imageOne'])) {
            $data['imageOne'] = $this->url->link('public/blog/images/posts/' . $post['imageOne']);
        }
		
		if (! empty($post['imageTwo'])) {
            $data['imageTwo'] = $this->url->link('public/blog/images/posts/' . $post['imageTwo']);
        }
		
		if (! empty($post['imageThree'])) {
            $data['imageThree'] = $this->url->link('public/blog/images/posts/' . $post['imageThree']);
        }

        $data['subcategories'] = $this->load->model('Categories')->getCategoryForHeaderWithId($id);
        $data['categories'] = $this->load->model('Categories')->all();
        $data['brands'] = $this->load->model('Brands')->all();
        $data['posts'] = $this->load->model('Posts')->all();

        return $this->view->render('admin/posts/form', $data);
    }

    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            $this->load->model('Posts')->update($id);

            $json['success'] = 'تم تعديل بيانات المنتج بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/posts');
        } else {
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

    public function delete($id)
    {
        $postsModel = $this->load->model('Posts');

        if (! $postsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $postsModel->delete($id);

        $json['success'] = 'تم حذف المنتج بنجاح';

        return $this->json($json);
    }

    private function isValid($id = null)
    {
        $this->validator->required('title');
        $this->validator->required('desc_en_title');
        $this->validator->required('details');
        $this->validator->required('tags');
        $this->validator->required('en_title');
        $this->validator->required('price1');
        $this->validator->required('price2');
        $this->validator->required('shipments_price');
        $this->validator->required('weight');

        if (is_null($id)) {
            $this->validator->requiredFile('image')->image('image');
            $this->validator->requiredFile('imageOne')->image('imageOne');
            $this->validator->requiredFile('imageTwo')->image('imageTwo');
            $this->validator->requiredFile('imageThree')->image('imageThree');
        } else {
            $this->validator->image('image');
            $this->validator->image('imageOne');
            $this->validator->image('imageTwo');
            $this->validator->image('imageThree');
        }

        return $this->validator->passes();
    }
}