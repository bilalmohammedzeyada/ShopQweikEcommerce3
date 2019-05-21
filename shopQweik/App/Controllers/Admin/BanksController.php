<?php

namespace App\Controllers\Admin;

use System\Controller;

class BanksController extends Controller
{
    /**
    * Display Posts  List
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('الحسابات البنكية');

        $data['Banks'] = $this->load->model('Banks')->all();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/banks/list', $data);

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
            $this->load->model('Banks')->create();

            $json['success'] = 'تم إنشاء بنك حساب بنك جديد';

            $json['redirectTo'] = $this->url->link('/admin/banks');
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
        $banksModel = $this->load->model('Banks');

        if (! $banksModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $banks = $banksModel->get($id);

        return $this->form($banks);
    }

     /**
     * Display Form
     *
     * @param \stdClass $brand
     */
    private function form($banks = null)
    {
        if ($banks) {
            // editing form
            $data['target'] = 'edit-bank-' . $banks->id;

            $data['action'] = $this->url->link('/admin/banks/save/' . $banks->id);

            $data['heading'] = 'تعديل بيانات بنك  ' . $banks->banks_name;
        } else {
            // adding form
            $data['target'] = 'add-bank-form';

            $data['action'] = $this->url->link('/admin/banks/submit');

            $data['heading'] = 'أضافة بنك جديد';
        }

        $banks = (array) $banks;

        $data['banks_name'] = array_get($banks, 'banks_name');
        $data['account_name'] = array_get($banks, 'account_name');
        $data['account_number'] = array_get($banks, 'account_number');
        $data['banks_iban'] = array_get($banks, 'banks_iban');
        $data['id'] = array_get($banks, 'id');
        $data['banks'] = $this->load->model('Banks')->all();

        return $this->view->render('admin/banks/form', $data);
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
            $this->load->model('Banks')->update($id);

            $json['success'] = 'تم تعديل بيانات البنك بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/banks');
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
        $brandsModel = $this->load->model('Banks');

        if (! $brandsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $brandsModel->delete($id);

        $json['success'] = 'تم حذف البنك بنجاح';

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
        $this->validator->required('banks_name');
        $this->validator->required('account_name');
        $this->validator->required('account_number');
        $this->validator->required('banks_iban');

        return $this->validator->passes();
    }
}