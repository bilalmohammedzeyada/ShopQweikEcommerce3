<?php

namespace App\Controllers\Users;

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
        $this->html->setTitle('Settings');

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;
        $data['errors'] = $this->session->has('errors') ? $this->session->pull('errors') : null;

        $settingsModel = $this->load->model('Settings');

        $settingsModel->loadAll();

        $data['action'] = $this->url->link('/users/settings/save');

        $data['site_name'] = $this->request->post('site_name') ?: $settingsModel->get('site_name');
        $data['site_email'] = $this->request->post('site_email') ?: $settingsModel->get('site_email');
        $data['site_status'] = $this->request->post('site_status') ?: $settingsModel->get('site_status');
        $data['site_close_msg'] = $this->request->post('site_close_msg') ?: $settingsModel->get('site_close_msg');
        $data['msg'] = $this->request->post('msg') ?: $settingsModel->get('msg');
		$data['phone'] = $this->request->post('phone') ?: $settingsModel->get('phone');
		$data['gifts'] = $this->request->post('gifts') ?: $settingsModel->get('gifts');
		$data['shipments'] = $this->request->post('shipments') ?: $settingsModel->get('shipments');

        $view = $this->view->render('users/settings/form', $data);

        return $this->usersLayout->render($view);
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

            $this->session->set('success', 'Ad Has Been Created Successfully');

            $this->url->redirectTo('/users/settings');
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
        $this->validator->required('site_name', 'Site Name Is Required');
        $this->validator->required('site_email', 'Site Email Is Required');
        $this->validator->required('site_status', 'Site Status Is Required');
        $this->validator->required('site_close_msg', 'Site Close Message Is Required');
        $this->validator->required('phone', 'Phone Number Message Is Required');
        $this->validator->required('gifts', 'Gifts Message Is Required');
        $this->validator->required('shipments', 'shipments Message Is Required');
        $this->validator->required('msg', 'Message Is Required');

        return $this->validator->passes();
    }
}