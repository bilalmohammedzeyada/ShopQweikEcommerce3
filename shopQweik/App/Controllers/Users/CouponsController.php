<?php

namespace App\Controllers\Users;

use System\Controller;

class CouponsController extends Controller
{
    /**
    * Display Posts  List
    *
    * @return mixed
    */
    public function index()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
        $this->html->setTitle('الكوبونات');

        $data['Coupons'] = $this->load->model('Coupons')->getAllDataWithSeller($id);

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('users/coupons/list', $data);

        return $this->usersLayout->render($view);
    }

    /**
    * Open Posts  Form
    *
    * @return string
    */
    public function add()
    {
        return $this->form();
    }

    /**
    * Submit for creating new post
    *
    * @return string | json
    */
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Coupons')->create();

            $json['success'] = 'تم انشاء كوبون جديد';

            $json['redirectTo'] = $this->url->link('/seller/coupons');
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
        $couponsModel = $this->load->model('Coupons');

        if (! $couponsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $coupon = $couponsModel->get($id);

        return $this->form($coupon);
    }

     /**
     * Display Form
     *
     * @param \stdClass $brand
     */
    private function form($coupon = null)
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		//$id = $loggedInSeller->id;
        if ($coupon) {
            // editing form
            $data['target'] = 'edit-coupon-' . $coupon->id;

            $data['action'] = $this->url->link('/seller/coupons/save/' . $coupon->id);

            $data['heading'] = 'تعديل بيانات كوبون  ' . $coupon->coupon_name;
        } else {
            // adding form
            $data['target'] = 'add-coupon-form';

            $data['action'] = $this->url->link('/seller/coupons/submit');

            $data['heading'] = 'إضافة كوبون جديد';
        }

        $coupon = (array) $coupon;

        $data['coupon_name'] = array_get($coupon, 'coupon_name');
        $data['coupon_price'] = array_get($coupon, 'coupon_price');
        $data['seller_id'] = $loggedInSeller->id;

        return $this->view->render('users/coupons/form', $data);
    }

    /**
    * Submit for creating new post
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Coupons')->update($id);

            $json['success'] = 'تم تعديل بيانات الكوبون بنجاح';

            $json['redirectTo'] = $this->url->link('/seller/coupons');
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
        $CouponsModel = $this->load->model('Coupons');

        if (! $CouponsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $CouponsModel->delete($id);

        $json['success'] = 'تم حذف الكوبون بنجاح';

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
        $this->validator->required('coupon', 'اسم كوبون الخصم مطلوب');
		$this->validator->unique('coupon', ['coupon_discount', 'coupon_name']);
        $this->validator->required('price', 'سعر كوبون الخصم مطلوب');

        return $this->validator->passes();
    }
}