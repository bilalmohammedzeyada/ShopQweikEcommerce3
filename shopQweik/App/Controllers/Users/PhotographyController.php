<?php

namespace App\Controllers\Users;

use System\Controller;

class PhotographyController extends Controller
{
    /**
    * Display Ads  List
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('تصوير المنتج');
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
        $data['photographys'] = $this->load->model('Photography')->photography($id);

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('users/photography/list', $data);

        return $this->usersLayout->render($view);
    }

    public function add()
    {
        return $this->form();
    }
	
	public function submit()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		
        $json = [];
		
        if ($this->isValid()) {
			
            // it means there are no errors in form validation
            $this->load->model('Photography')->create($id);

            $json['success'] = 'تم إضافة شركة شحن جديدة';

            $json['redirectTo'] = $this->url->link('/seller/Photography');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }
	
	
    public function edit($id)
    {
        $adsModel = $this->load->model('Photography');

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
            $data['target'] = 'edit-photography-' . $ad->id;

            $data['action'] = $this->url->link('/seller/photography/save/' . $ad->id);

            $data['heading'] = 'Edit ';
        } else {
            // adding form
            $data['target'] = 'add-photography-form';

            $data['action'] = $this->url->link('/seller/photography/submit');

            $data['heading'] = 'أضافة تصوير منتج ';
        }

        $ad = (array) $ad;

        $data['name'] = array_get($ad, 'name');
        $data['mobile'] = array_get($ad, 'mobile');
        $data['email'] = array_get($ad, 'email');
        $data['n_product'] = array_get($ad, 'n_product');
        $data['desc_product'] = array_get($ad, 'desc_product');

        return $this->view->render('users/photography/form', $data);
    }

    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Photography')->update($id);

            $json['success'] = 'تم تحديث البيانات بنجاح';

            $json['redirectTo'] = $this->url->link('/seller/photography');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }
	
	public function delete($id)
    {
        $PhotographyModel = $this->load->model('Photography');

        if (! $PhotographyModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $PhotographyModel->delete($id);

        $json['success'] = 'تم حذف بيانات شركة الشحن بنجاح';

        return $this->json($json);
    }

    private function isValid($id = null)
    {
        $this->validator->required('name');
        $this->validator->required('mobile');
        $this->validator->required('email');
        $this->validator->required('n_product');
        $this->validator->required('desc_product');
		
        return $this->validator->passes();
    }
}