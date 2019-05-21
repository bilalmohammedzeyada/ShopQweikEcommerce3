<?php

namespace App\Controllers\Users;

use System\Controller;

class AdsController extends Controller
{
    /**
    * Display Ads  List
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('الاعلانات');
		$loginModel = $this->load->model('Loginseller');
		$loggedInSeller = $loginModel->user();
		$seller_id = $loggedInSeller->id;
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
        $data['ads'] = $this->load->model('Ads')->SellerAds($seller_id);

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('users/ads/list', $data);

        return $this->usersLayout->render($view);
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

            $json['success'] = 'Ad Has Been Created Successfully';

            $json['redirectTo'] = $this->url->link('/seller/ads');
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
		$loginModel = $this->load->model('Loginseller');
		$loggedInSeller = $loginModel->user();
		$data['id'] = $loggedInSeller->id;
		$seller_id = $loggedInSeller->id;
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
        if ($ad) {
            // editing form
            $data['target'] = 'edit-ad-' . $ad->id;

            $data['action'] = $this->url->link('/seller/ads/save/' . $ad->id);

            $data['heading'] = 'Edit ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-ad-form';

            $data['action'] = $this->url->link('/seller/ads/submit');

            $data['heading'] = 'إضافة إعلان جديد';
        }

        $ad = (array) $ad;

        $data['link'] = array_get($ad, 'link');
        $data['name'] = array_get($ad, 'name');
        $data['en_title'] = array_get($ad, 'en_title');
        $data['ad_page'] = array_get($ad, 'page');
        $data['status'] = array_get($ad, 'status', 'enabled');
        $data['seller_id'] = $seller_id;
        $data['seller_slider'] = array_get($ad, 'seller_slider');
        $data['seller_banner'] = array_get($ad, 'seller_banner');

        $data['start_at'] = ! empty($ad['start_at']) ? date('d-m-Y', $ad['start_at']) : false;
        $data['end_at'] = ! empty($ad['end_at']) ? date('d-m-Y', $ad['end_at']) : false;

        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/images/' . $ad['image']);
        }

        return $this->view->render('users/ads/form', $data);
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

            $json['success'] = 'تم تحديث بيانات الاعلان بنجاح';

            $json['redirectTo'] = $this->url->link('/seller/ads');
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
        //$this->validator->required('page');
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