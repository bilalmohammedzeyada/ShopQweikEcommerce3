<?php

namespace App\Controllers\Admin;

use System\Controller;

class SlidersController extends Controller
{
    /**
    * Display Ads  List
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('الاعلانات');

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;
		$data['firstSliders'] = $this->load->model('Adshome')->firstSlider();
        $view = $this->view->render('admin/sliders/list', $data);

        return $this->adminLayout->render($view);
    }

    /**
    * Open Ads  Form
    *
    * @return string
    */
    public function add()
    {
        return $this->form();
    }

    /**
    * Submit for creating new ad
    *
    * @return string | json
    */
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Ads')->create();

            $json['success'] = 'تم انشاء اعلان في السلايدر بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/sliders');
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
        $adsModel = $this->load->model('Ads');

        if (! $adsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $ad = $adsModel->get($id);

        return $this->form($ad);
    }

     /**
     * Display Form
     *
     * @param \stdClass $ad
     */
    private function form($ad = null)
    {
        if ($ad) {
            // editing form
            $data['target'] = 'edit-firstSlider-' . $ad->id;

            $data['action'] = $this->url->link('/admin/sliders/save/' . $ad->id);

            $data['heading'] = 'Edit ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-firstSlider-form';

            $data['action'] = $this->url->link('/admin/sliders/submit');

            $data['heading'] = ' إضافة إعلان جديد في السلايدر';
        }

        $ad = (array) $ad;

        $data['link'] = array_get($ad, 'link');
        $data['name'] = array_get($ad, 'name');
        $data['en_title'] = array_get($ad, 'en_title');
        $data['ad_page'] = array_get($ad, 'page');
        $data['in_home'] = array_get($ad, 'in_home');
         $data['is_special'] = array_get($ad, 'is_special');
        $data['status'] = array_get($ad, 'status', 'enabled');
        $data['is_first_slider'] = array_get($ad, 'is_first_slider');

        $data['start_at'] = ! empty($ad['start_at']) ? date('d-m-Y', $ad['start_at']) : false;
        $data['end_at'] = ! empty($ad['end_at']) ? date('d-m-Y', $ad['end_at']) : false;

        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/images/' . $ad['image']);
        }

        $data['pages'] = $this->getPermissionPages();

        return $this->view->render('admin/sliders/form', $data);
    }

     /**
     * Get All Permission Pages
     *
     * @return array
     */
     private function getPermissionPages()
     {
         $permissions = [];

         foreach ($this->route->routes() AS $route) {
             if (strpos($route['url'], '/admin') !== 0) {
                 $permissions[] = $route['url'];
             }
         }

         return $permissions;
     }

    /**
    * Submit for creating new ad
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Ads')->update($id);

            $json['success'] = 'تم تحديث بيانات السلايدر بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/sliders');
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
        $adsModel = $this->load->model('Ads');

        if (! $adsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $adsModel->delete($id);

        $json['success'] = 'تم حذف الاعلان بنجاح';

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
        $this->validator->required('name');
        $this->validator->required('link');
        $this->validator->required('en_title');
        $this->validator->required('page');
        $this->validator->required('start_at');
        $this->validator->required('end_at');

        if (is_null($id)) {
            $this->validator->requiredFile('image')->image('image');
        } else {
            $this->validator->image('image');
        }

        return $this->validator->passes();
    }
}