<?php

namespace App\Controllers\Admin;

use System\Controller;

class SettingsController extends Controller
{
    /**
    * Display Settings Form
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('الأعدادات');

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;
        $data['errors'] = $this->session->has('errors') ? $this->session->pull('errors') : null;

        $settingsModel = $this->load->model('Settings');

        $settingsModel->loadAll();

        $data['action'] = $this->url->link('/admin/settings/save');

        $data['site_name'] = $this->request->post('site_name') ?: $settingsModel->get('site_name');
        $data['site_email'] = $this->request->post('site_email') ?: $settingsModel->get('site_email');
        $data['site_status'] = $this->request->post('site_status') ?: $settingsModel->get('site_status');
        $data['site_close_msg'] = $this->request->post('site_close_msg') ?: $settingsModel->get('site_close_msg');
        $data['msg'] = $this->request->post('msg') ?: $settingsModel->get('msg');
		$data['phone'] = $this->request->post('phone') ?: $settingsModel->get('phone');
		$data['gifts'] = $this->request->post('gifts') ?: $settingsModel->get('gifts');
		$data['shipments'] = $this->request->post('shipments') ?: $settingsModel->get('shipments');
		$data['about'] = $this->request->post('about') ?: $settingsModel->get('about');
		$data['price_shipments_pay_hand'] = $this->request->post('price_shipments_pay_hand') ?: $settingsModel->get('price_shipments_pay_hand');
		$data['discount_price'] = $this->request->post('discount_price') ?: $settingsModel->get('discount_price');
		$data['shipments_price'] = $this->request->post('shipments_price') ?: $settingsModel->get('shipments_price');
		$data['fb'] = $this->request->post('fb') ?: $settingsModel->get('fb');
		$data['tw'] = $this->request->post('tw') ?: $settingsModel->get('tw');
		$data['snap'] = $this->request->post('snap') ?: $settingsModel->get('snap');
		$data['tube'] = $this->request->post('tube') ?: $settingsModel->get('tube');
		$data['ins'] = $this->request->post('ins') ?: $settingsModel->get('ins');
		$data['wht'] = $this->request->post('wht') ?: $settingsModel->get('wht');
		$data['keywords'] = $this->request->post('keywords') ?: $settingsModel->get('keywords');
		
        $data['description'] = $this->request->post('description') ?: $settingsModel->get('description');

        $view = $this->view->render('admin/settings/form', $data);

        return $this->adminLayout->render($view);
    }

    /**
    * Submit for creating new ad
    *
    * @return string | json
    */
    public function save()
    {
        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Settings')->updateSettings();

            $this->session->set('success', 'تم تحديث الأعدادات بنجاح');

            $this->url->redirectTo('/admin/settings');
        } else {
            // it means there are errors in form validation
            $this->session->set('errors', $this->validator->flattenMessages());
            return $this->index();
        }
    }

     /**
     * Validate the form
     *
     * @param int $id
     * @return bool
     */
    private function isValid($id = null)
    {
        $this->validator->required('site_name', 'أسم الموقع مطلوب');
        $this->validator->required('site_email', 'بريد مدير الموقع مطلوب');
        $this->validator->required('site_status', 'حالة الموقع مطلوبة');
        $this->validator->required('site_close_msg', 'Site Close Message Is Required');
        $this->validator->required('phone', 'Phone Number Message Is Required');
        $this->validator->required('gifts', 'Gifts Message Is Required');
        $this->validator->required('shipments', 'shipments Message Is Required');
        $this->validator->required('msg', 'Message Is Required');
        $this->validator->required('about', 'Message Is Required');
        $this->validator->required('price_shipments_pay_hand', 'Price Shipments By Hand Is Required');
        $this->validator->required('discount_price', 'Discount Price Is Required');
        $this->validator->required('shipments_price', 'Shipments Price Is Required');
        $this->validator->required('fb', 'Facebook link Is Required');
        $this->validator->required('tw', 'Twitter link Is Required');
        $this->validator->required('tube', 'Youtube link Is Required');
        $this->validator->required('snap', 'Snap Chat link Is Required');
        $this->validator->required('ins', 'Instagram link Is Required');
        $this->validator->required('wht', 'Whatsapp link Is Required');
        $this->validator->required('keywords', 'الكلمات المفتاحية مطلوبة');
        $this->validator->required('description', 'وصف الموقع مطلوب');


        return $this->validator->passes();
    }
}