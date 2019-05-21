<?php

namespace App\Controllers\Admin;

use System\Controller;

class CategoriesController extends Controller
{
    /**
    * Display Categories List
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('Categories');

        $data['categories'] = $this->load->model('Categories')->all();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/categories/list', $data);

        return $this->adminLayout->render($view);
    }

    /**
    * Open Categories Form
    *
    * @return string
    */
    public function add()
    {
        return $this->form();
    }

    /**
    * Submit for creating new category
    *
    * @return string | json
    */
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Categories')->create();

            $json['success'] = 'Category Has Been Created Successfully';

            $json['redirectTo'] = $this->url->link('/admin/categories');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     * Display Edit Form
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $categoriesModel = $this->load->model('Categories');

        if (! $categoriesModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $category = $categoriesModel->get($id);

        return $this->form($category);
    }

     /**
     * Display Form
     *
     * @param \stdClass $category
     */
    private function form($category = null)
    {
        if ($category) {
            // editing form
            $data['target'] = 'edit-category-' . $category->id;

            $data['action'] = $this->url->link('/admin/categories/save/' . $category->id);

            $data['heading'] = 'تعديل التصنيف ' . $category->name;
        } else {
            // adding form
            $data['target'] = 'add-category-form';

            $data['action'] = $this->url->link('/admin/categories/submit');

            $data['heading'] = 'أضافة تصنيف جديد';
        }

        $data['name'] = $category ? $category->name : null;
        $data['parent_id'] = $category ? $category->parent_id : null;
        $data['title'] = $category ? $category->title : null;
        $data['status'] = $category ? $category->status : 'enabled';
        $data['status'] = $category ? $category->status : 'enabled';
		$data['categories'] = $this->load->model('Categories')->all();
		
		/* $data['image'] = '';
		
		if (! empty($category->image)) {
            // default path to upload post image : public/images
            $data['image'] = $this->url->link('public/blog/images/categories/' . $category->image);
        } */

        return $this->view->render('admin/categories/form', $data);
    }

    /**
    * Submit for creating new category
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];

        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Categories')->update($id);

            $json['success'] = 'تم تعديل التصنيف بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/categories');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     * Delete Record
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
        $categoriesModel = $this->load->model('Categories');

        if (! $categoriesModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $categoriesModel->delete($id);

        $json['success'] = 'Category Has Been Deleted Successfully';

        return $this->json($json);
    }

     /**
     * Validate the form
     *
     * @return bool
     */
    private function isValid()
    {
        $this->validator->required('name', 'اسم التصنيف مطلوب');
		/* if (is_null($id)) {
            $this->validator->requiredFile('image')->image('image');
        } else {
            $this->validator->image('image');
        } */
        return $this->validator->passes();
    }
}