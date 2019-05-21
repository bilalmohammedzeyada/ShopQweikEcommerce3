<?php

namespace App\Controllers\Admin;

use System\Controller;

class BrandsController extends Controller
{
    
    public function index()
    {
        $this->html->setTitle('الماركات');

        $data['brands'] = $this->load->model('Brands')->all();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/brands/list', $data);

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
            $this->load->model('Brands')->create();

            $json['success'] = 'تم إنشاء ماركة جديدة بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/brands');
        } else {
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     
    public function edit($id)
    {
        $brandsModel = $this->load->model('Brands');

        if (! $brandsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $brand = $brandsModel->get($id);

        return $this->form($brand);
    }

    
    private function form($brand = null)
    {
        if ($brand) {
            // editing form
            $data['target'] = 'edit-brand-' . $brand->id;

            $data['action'] = $this->url->link('/admin/brands/save/' . $brand->id);

            $data['heading'] = 'تعديل بيانات الماركة ' . $brand->title;
        } else {
            // adding form
            $data['target'] = 'add-brand-form';

            $data['action'] = $this->url->link('/admin/brands/submit');

            $data['heading'] = 'أضافة ماركة جديدة';
        }

        $brand = (array) $brand;

        $data['title'] = array_get($brand, 'title');
        $data['en_title'] = array_get($brand, 'en_title');
        $data['cat_id'] = array_get($brand, 'cat_id');
        $data['id'] = array_get($brand, 'id');

        $data['image'] = '';
        $data['related_posts'] = [];

       

        if (! empty($brand['image'])) {
            $data['image'] = $this->url->link('public/images/' . $brand['image']);
        } 

        $data['categories'] = $this->load->model('Categories')->all();

        $data['Brands'] = $this->load->model('Brands')->all();

        return $this->view->render('admin/brands/form', $data);
    }

    
    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            $this->load->model('Brands')->update($id);

            $json['success'] = 'تم حفظ بيانات الماركة';

            $json['redirectTo'] = $this->url->link('/admin/brands');
        } else {
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
        $brandsModel = $this->load->model('Brands');

        if (! $brandsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $brandsModel->delete($id);

        $json['success'] = 'تم حذف الماركة بنجاح';

        return $this->json($json);
    }

     /**
     * Validate the form
     *
     * @param int $id
     * @return bool
     */
    private function isValid($id = null)
    {
        $this->validator->required('title');
        $this->validator->required('en_title');

        if (is_null($id)) {
            $this->validator->requiredFile('image')->image('image');
        } else {
            $this->validator->image('image');
        } 

        return $this->validator->passes();
    }
}