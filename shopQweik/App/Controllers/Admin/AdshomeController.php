<?php

namespace App\Controllers\Admin;

use System\Controller;

class AdshomeController extends Controller
{
    /**
    * Display Ads  List
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('اعلانات الصفحة الرئييسة');

        $data['ads'] = $this->load->model('Adshome')->firstAds();
        $data['firstSliders'] = $this->load->model('Adshome')->firstSlider();
        $data['firstbanner'] = $this->load->model('Adshome')->firstbanner();
        $data['secondbanner'] = $this->load->model('Adshome')->secondbanner();
        $data['thirdbanner'] = $this->load->model('Adshome')->thirdbanner();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/adshome/list', $data);

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
	
	public function addslider()
    {
        return $this->formslider();
    }
	
	
	public function addfirstbanner()
    {
        return $this->formfirstbanner();
    }
	
	public function addsecondbanner()
    {
        return $this->formsecondbanner();
    }
	
	public function addthirdbanner()
    {
        return $this->formthirdbanner();
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
            $this->load->model('Adshome')->create();

            $json['success'] = 'تم انشاء الاعلان بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/adshome');
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
        $adsModel = $this->load->model('Adshome');

        if (! $adsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $ad = $adsModel->get($id);

        return $this->form($ad);
    }
	
	public function editthirdbanner($id)
    {
        $adsModel = $this->load->model('Adshome');

        if (! $adsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $ad = $adsModel->get($id);

        return $this->formthirdbanner($ad);
    }
	
	public function editfirstbanner($id)
    {
        $adsModel = $this->load->model('Adshome');

        if (! $adsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $ad = $adsModel->get($id);

        return $this->formfirstbanner($ad);
    }
	
	public function editsecondbanner($id)
    {
        $adsModel = $this->load->model('Adshome');

        if (! $adsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $ad = $adsModel->get($id);

        return $this->formsecondbanner($ad);
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
            $data['target'] = 'edit-ad-' . $ad->id;

            $data['action'] = $this->url->link('/admin/adshome/save/' . $ad->id);

            $data['heading'] = 'Edit ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-ad-form';

            $data['action'] = $this->url->link('/admin/adshome/submit');

            $data['heading'] = 'إضافة إعلان جديد';
        }

        $ad = (array) $ad;

        $data['link'] = array_get($ad, 'link');
        $data['name'] = array_get($ad, 'name');
        $data['ads_desc'] = array_get($ad, 'ads_desc');
        $data['en_title'] = array_get($ad, 'en_title');
        $data['ad_page'] = array_get($ad, 'page');
        $data['in_home'] = array_get($ad, 'in_home');
		$data['is_special'] = array_get($ad, 'is_special');
		$data['is_first_slider'] = array_get($ad, 'is_first_slider');
        $data['status'] = array_get($ad, 'status', 'enabled');

        $data['start_at'] = ! empty($ad['start_at']) ? date('d-m-Y', $ad['start_at']) : false;
        $data['end_at'] = ! empty($ad['end_at']) ? date('d-m-Y', $ad['end_at']) : false;

        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/images/' . $ad['image']);
        }

        $data['pages'] = $this->getPermissionPages();

        return $this->view->render('admin/adshome/form', $data);
    }    
	
	private function formslider($ad = null)
    {
        if ($ad) {
            // editing form
            $data['target'] = 'edit-adslider-' . $ad->id;

            $data['action'] = $this->url->link('/admin/adshome/save/' . $ad->id);

            $data['heading'] = 'Edit ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-adslider-form';

            $data['action'] = $this->url->link('/admin/adshome/submit');

            $data['heading'] = 'إضافة إعلان جديد';
        }

        $ad = (array) $ad;

        $data['link'] = array_get($ad, 'link');
        $data['name'] = array_get($ad, 'name');
        $data['ads_desc'] = array_get($ad, 'ads_desc');
        $data['en_title'] = array_get($ad, 'en_title');
        $data['ad_page'] = array_get($ad, 'page');
        $data['in_home'] = array_get($ad, 'in_home');
		$data['is_special'] = array_get($ad, 'is_special');
		$data['is_first_slider'] = array_get($ad, 'is_first_slider');
		$data['is_first_banner'] = array_get($ad, 'is_first_banner');
		$data['is_second_banner'] = array_get($ad, 'is_second_banner');
		$data['is_third_banner'] = array_get($ad, 'is_third_banner');
        $data['status'] = array_get($ad, 'status', 'enabled');

        $data['start_at'] = ! empty($ad['start_at']) ? date('d-m-Y', $ad['start_at']) : false;
        $data['end_at'] = ! empty($ad['end_at']) ? date('d-m-Y', $ad['end_at']) : false;

        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/images/' . $ad['image']);
        }

        $data['pages'] = $this->getPermissionPages();

        return $this->view->render('admin/adshome/firstslider', $data);
    }

	
	private function formfirstbanner($ad = null)
    {
        if ($ad) {
            // editing form
            $data['target'] = 'edit-firstbanner-' . $ad->id;

            $data['action'] = $this->url->link('/admin/adshome/save/' . $ad->id);

            $data['heading'] = 'Edit ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-firstbanner-form';

            $data['action'] = $this->url->link('/admin/adshome/submit');

            $data['heading'] = 'إضافة إعلان جديد';
        }

        $ad = (array) $ad;

        $data['link'] = array_get($ad, 'link');
        $data['name'] = array_get($ad, 'name');
        $data['ads_desc'] = array_get($ad, 'ads_desc');
        $data['en_title'] = array_get($ad, 'en_title');
        $data['ad_page'] = array_get($ad, 'page');
        $data['in_home'] = array_get($ad, 'in_home');
		$data['is_special'] = array_get($ad, 'is_special');
		$data['is_first_slider'] = array_get($ad, 'is_first_slider');
		$data['is_first_banner'] = array_get($ad, 'is_first_banner');
		$data['is_second_banner'] = array_get($ad, 'is_second_banner');
		$data['is_third_banner'] = array_get($ad, 'is_third_banner');
        $data['status'] = array_get($ad, 'status', 'enabled');

        $data['start_at'] = ! empty($ad['start_at']) ? date('d-m-Y', $ad['start_at']) : false;
        $data['end_at'] = ! empty($ad['end_at']) ? date('d-m-Y', $ad['end_at']) : false;

        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/images/' . $ad['image']);
        }

        $data['pages'] = $this->getPermissionPages();

        return $this->view->render('admin/adshome/firstbanner', $data);
    }

	
	
	
	private function formsecondbanner($ad = null)
    {
        if ($ad) {
            // editing form
            $data['target'] = 'edit-secondbanner-' . $ad->id;

            $data['action'] = $this->url->link('/admin/adshome/save/' . $ad->id);

            $data['heading'] = 'Edit ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-secondbanner-form';

            $data['action'] = $this->url->link('/admin/adshome/submit');

            $data['heading'] = 'إضافة إعلان جديد';
        }

        $ad = (array) $ad;

        $data['link'] = array_get($ad, 'link');
        $data['name'] = array_get($ad, 'name');
        $data['ads_desc'] = array_get($ad, 'ads_desc');
        $data['en_title'] = array_get($ad, 'en_title');
        $data['ad_page'] = array_get($ad, 'page');
        $data['in_home'] = array_get($ad, 'in_home');
		$data['is_special'] = array_get($ad, 'is_special');
		$data['is_first_slider'] = array_get($ad, 'is_first_slider');
		$data['is_first_banner'] = array_get($ad, 'is_first_banner');
		$data['is_second_banner'] = array_get($ad, 'is_second_banner');
		$data['is_third_banner'] = array_get($ad, 'is_third_banner');
        $data['status'] = array_get($ad, 'status', 'enabled');

        $data['start_at'] = ! empty($ad['start_at']) ? date('d-m-Y', $ad['start_at']) : false;
        $data['end_at'] = ! empty($ad['end_at']) ? date('d-m-Y', $ad['end_at']) : false;

        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/images/' . $ad['image']);
        }

        $data['pages'] = $this->getPermissionPages();

        return $this->view->render('admin/adshome/secondbanner', $data);
    }

	
	
	
	private function formthirdbanner($ad = null)
    {
        if ($ad) {
            // editing form
            $data['target'] = 'edit-thirdbanner-' . $ad->id;

            $data['action'] = $this->url->link('/admin/adshome/save/' . $ad->id);

            $data['heading'] = 'Edit ' . $ad->title;
        } else {
            // adding form
            $data['target'] = 'add-thirdbanner-form';

            $data['action'] = $this->url->link('/admin/adshome/submit');

            $data['heading'] = 'إضافة إعلان جديد';
        }

        $ad = (array) $ad;

        $data['link'] = array_get($ad, 'link');
        $data['name'] = array_get($ad, 'name');
        $data['ads_desc'] = array_get($ad, 'ads_desc');
        $data['en_title'] = array_get($ad, 'en_title');
        $data['ad_page'] = array_get($ad, 'page');
        $data['in_home'] = array_get($ad, 'in_home');
		$data['is_special'] = array_get($ad, 'is_special');
		$data['is_first_slider'] = array_get($ad, 'is_first_slider');
		$data['is_first_banner'] = array_get($ad, 'is_first_banner');
		$data['is_second_banner'] = array_get($ad, 'is_second_banner');
		$data['is_third_banner'] = array_get($ad, 'is_third_banner');
        $data['status'] = array_get($ad, 'status', 'enabled');

        $data['start_at'] = ! empty($ad['start_at']) ? date('d-m-Y', $ad['start_at']) : false;
        $data['end_at'] = ! empty($ad['end_at']) ? date('d-m-Y', $ad['end_at']) : false;

        $data['image'] = '';

        if (! empty($ad['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/images/' . $ad['image']);
        }

        $data['pages'] = $this->getPermissionPages();

        return $this->view->render('admin/adshome/thirdbanner', $data);
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
            $this->load->model('Adshome')->update($id);

            $json['success'] = 'تم تحديث بيانات الاعلان بنجاح';

            $json['redirectTo'] = $this->url->link('/admin/adshome');
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
        $adsModel = $this->load->model('Adshome');

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
        $this->validator->required('ads_desc');
        $this->validator->required('link');
        $this->validator->required('en_title');
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