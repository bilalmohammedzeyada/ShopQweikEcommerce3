<?php

namespace App\Controllers\Admin;

use System\Controller;

class SalesController extends Controller
{
    public function index()
    {
        $this->html->setTitle('المبيعات ');

        $data['sales'] = $this->load->model('Sales')->allSales();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/sales/list', $data);

        return $this->adminLayout->render($view);
    }

    /**
    * Open Users  Form
    *
    * @return string
    */
    public function add()
    {
        return $this->form();
    }

    
    public function edit($id)
    {
        $salesModel = $this->load->model('Sales');

        if (! $salesModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $sale = $salesModel->get($id);

        return $this->form($sale);
    }

     /**
     * Display Form
     *
     * @param \stdClass $user
     */
    private function form($sale = null)
    {
        if ($sale) {
            // editing form
            $data['target'] = 'edit-sale-' . $sale->id;

            $data['action'] = $this->url->link('/admin/sales/save/' . $sale->id);

            $data['heading'] = 'Edit ' . $sale->first_name . ' ' . $sale->last_name;
        }

        $sale = (array) $sale;

        $data['status'] = array_get($sale, 'status', 'enabled');
        $data['id'] = array_get($sale, 'id');

        return $this->view->render('admin/sales/form', $data);
    }

    /**
    * Submit for creating new user
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Sales')->update($id);

            $json['success'] = 'تم تحديث الطلبية بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/sales');
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
        $salesModel = $this->load->model('Sales');

        if (! $salesModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $salesModel->delete($id);

        $json['success'] = 'تم حذف الطلبية بنجاح';

        return $this->json($json);
    }

    private function isValid($id = null)
    {
        $this->validator->required('status', 'اختر حالة الطلبية');
        return $this->validator->passes();
    }
}