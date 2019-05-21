<?php

namespace App\Controllers\Users;

use System\Controller;

class ShippingController extends Controller
{
    /**
    * Display Ads  List
    *
    * @return mixed
    */
    public function index()
    {
		$loginModel = $this->load->model('Loginseller');
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
        $this->html->setTitle('شركات الشحن والتوصيل');

        $data['shipping'] = $this->load->model('Shipping')->allShip();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('users/ship/list', $data);

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
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		/* $loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id; */
        $json = [];
		
        if ($this->isValid()) {
			
            // it means there are no errors in form validation
            $this->load->model('Shipping')->create($id);

            $json['success'] = 'تم إضافة شركة شحن جديدة';

            $json['redirectTo'] = $this->url->link('/seller/shipping-delivery');
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
        $adsModel = $this->load->model('Shipping');

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
            $data['target'] = 'edit-ship-' . $ad->id;

            $data['action'] = $this->url->link('/seller/shipping-delivery/save/' . $ad->id);

            $data['heading'] = 'تعديل بيانات شركة الشحن ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-ship-form';

            $data['action'] = $this->url->link('/seller/shipping-delivery/submit');

            $data['heading'] = 'إضافة شركة شحن جديدة';
        }

        $ad = (array) $ad;
 
        $data['co_name'] = array_get($ad, 'co_name');
        $data['co_world'] = array_get($ad, 'co_world');
        $data['co_city'] = array_get($ad, 'co_city');
        $data['co_price'] = array_get($ad, 'co_price');
        $data['co_duration'] = array_get($ad, 'co_duration');
        $data['co_payment_way'] = array_get($ad, 'co_payment_way');
        $data['details'] = array_get($ad, 'details');
			
        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/blog/images/companey/' . $ad['image']);
        }

        return $this->view->render('users/ship/form', $data);
    }

    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Shipping')->update($id);

            $json['success'] = 'تم تحديث بيانات شركة الشحن بنجاح';

            $json['redirectTo'] = $this->url->link('/seller/shipping-delivery');
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
        $adsModel = $this->load->model('Shipping');

        if (! $adsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $adsModel->delete($id);

        $json['success'] = 'تم حذف بيانات شركة الشحن بنجاح';

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
        $this->validator->required('co_name');
        $this->validator->required('co_world');
        $this->validator->required('co_city');
        $this->validator->required('co_price');
        $this->validator->required('co_duration');
        $this->validator->required('co_payment_way');
        $this->validator->required('details');

        if (is_null($id)) {
            $this->validator->requiredFile('image')->image('image');
        } else {
            $this->validator->image('image');
        }

        return $this->validator->passes();
    }
}