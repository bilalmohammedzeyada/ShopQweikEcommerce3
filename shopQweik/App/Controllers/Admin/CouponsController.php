<?php

namespace App\Controllers\Admin;

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
        $this->html->setTitle('الكوبونات');

        $data['Coupons'] = $this->load->model('Coupons')->all();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/coupons/list', $data);

        return $this->adminLayout->render($view);
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

            $json['redirectTo'] = $this->url->link('/admin/coupons');
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
        if ($coupon) {
            // editing form
            $data['target'] = 'edit-coupon-' . $coupon->id;

            $data['action'] = $this->url->link('/admin/coupons/save/' . $coupon->id);

            $data['heading'] = 'تعديل بيانات كوبون  ' . $coupon->coupon_name;
        } else {
            // adding form
            $data['target'] = 'add-coupon-form';

            $data['action'] = $this->url->link('/admin/coupons/submit');

            $data['heading'] = 'إضافة كوبون جديد';
        }

        $coupon = (array) $coupon;

        $data['coupon_name'] = array_get($coupon, 'coupon_name');
        $data['coupon_price'] = array_get($coupon, 'coupon_price');

        return $this->view->render('admin/coupons/form', $data);
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

            $json['redirectTo'] = $this->url->link('/admin/coupons');
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
        $this->validator->required('coupon');
        $this->validator->required('price');

        return $this->validator->passes();
    }
}