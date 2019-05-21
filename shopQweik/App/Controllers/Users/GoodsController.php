<?php

namespace App\Controllers\Users;

use System\Controller;

class GoodsController extends Controller
{
	
	protected $table = 'posts';
     /**
     * Display Dashboard Page
     *
     * @return mixed
     */
    public function index()
    {
		$this->html->setTitle('قائمة المنتجات');
		$loginModel = $this->load->model('Loginseller');
		$loggedInSeller = $loginModel->user();
		$data['id'] = $loggedInSeller->id;
		$id = $loggedInSeller->id;
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$brands = $this->request->post('brand');
		$names = $this->request->post('name');
		$codes = $this->request->post('code');
		$audit_status = $this->request->post('audit_status');
		$disp_status = $this->request->post('disp_status');
		if($brands && $names && $codes && $audit_status && $disp_status){
		    
			$data['Lists'] = $this->load->model('Posts')->getAllPostList($id, $brands, $names, $codes, $disp_status, $audit_status);
			$view = $this->view->render('users/goodsSearch/brandsList', $data);
		} else if($brands){
			$data['Lists'] = $this->load->model('Posts')->getbrandsList($brands);
			$view = $this->view->render('users/goodsSearch/brandsList', $data);
		} else if($names){
			$data['Lists'] = $this->load->model('Posts')->getNamesList($names);
			$view = $this->view->render('users/goodsSearch/productList', $data);
		} else if($codes){
			$data['Lists'] = $this->load->model('Posts')->getCodesList($codes);
			$view = $this->view->render('users/goodsSearch/codeList', $data);
		} else if($audit_status){
			$data['Lists'] = $this->load->model('Posts')->getAuditList($audit_status);
			$view = $this->view->render('users/goodsSearch/auditList', $data);
		} else if($disp_status){
			$data['Lists'] = $this->load->model('Posts')->getDisplayList($disp_status);
			$view = $this->view->render('users/goodsSearch/displayList', $data);
		} else {
		    echo $id;
			$view = $this->view->render('users/main/goods');
		}
        return $this->usersLayout->render($view);
    }
	
	public function recycle()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		
        $this->html->setTitle('إستعادة المنتجات');
		
        $view = $this->view->render('users/main/recycle');

        return $this->usersLayout->render($view);
    }
	
	public function submit()
	{
		$json = [];

        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Seller')->createMarket();

            $json['success'] = 'تم انشاء متجر خاص بك';

            $json['redirectTo'] = $this->url->link('/seller/Index/shopsetting');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
	}
	
	
	public function add()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
        $this->html->setTitle('أضف منتجك');
		
		return $this->form();
    }
	
	public function submitShopdesign()
	{
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		
		$json = [];

        if ($this->isValids()) {
            // it means there are no errors in form validation
            $this->load->model('Posts')->createPosts($id);

            $json['success'] = 'تم انشاء متجر خاص بك';

            $json['redirectTo'] = $this->url->link('/seller/Goods/index');
        } else {
            // it means there are errors in form validation
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
	}
	
	
	public function edit($id)
    {
		$this->html->setTitle('تعديل المنتج');
        $goodsModel = $this->load->model('Posts');

        if (! $goodsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $goods = $goodsModel->get($id);

        return $this->form($goods);
    }

     /**
     * Display Form
     *
     * @param \stdClass $ad
     */
    private function form($goods = null)
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$data['seller_id'] = $loggedInSeller->id;
		
        if ($goods) {
            // editing form
            $data['target'] = 'edit-goods-' . $goods->id;

            $data['action'] = $this->url->link('/seller/Goods/index/save/' . $goods->id);

            $data['heading'] = 'تعديل المنتج  ' . $goods->title;
        } else {
            // adding form
            $data['target'] = 'add-goods-form';

            $data['action'] = $this->url->link('/seller/Goods/index/submitShopdesign');

            $data['heading'] = 'أضافة منتج جديد';
        }

        $goods = (array) $goods;
		
        $data['id'] = array_get($goods, 'id');
		$data['title'] = array_get($goods, 'title');
        $data['category_id'] = array_get($goods, 'category_id');
        $data['status'] = array_get($goods, 'status', 'enabled');
        $data['details'] = array_get($goods, 'details');
        $data['tags'] = array_get($goods, 'tags');
        $data['en_title'] = array_get($goods, 'en_title');
        $data['desc_en_title'] = array_get($goods, 'desc_en_title');
        $data['price1'] = array_get($goods, 'price1');
        $data['price2'] = array_get($goods, 'price2');
        $data['weight'] = array_get($goods, 'weight');
        $data['k_weight'] = array_get($goods, 'k_weight');
        $data['brands_title'] = array_get($goods, 'brands');
        $data['stock'] = array_get($goods, 'stock');
        $data['stock_alarm'] = array_get($goods, 'stock_alarm');
        $data['depot_slot'] = array_get($goods, 'depot_slot');
        $data['details_en'] = array_get($goods, 'details_en');
        $data['after_details_en'] = array_get($goods, 'after_details_en');
        $data['barcode'] = array_get($goods, 'barcode');
		$data['categories'] = $this->load->model('Categories')->getCatForHeader();
		$data['brands'] = $this->load->model('Brands')->all();
        $data['image'] = '';
        $data['imageOne'] = '';
        $data['imageTwo'] = '';
        $data['imageThree'] = '';

        if (! empty($goods['image'])) {
            // default path to upload ad image : public/images
            $data['image'] = $this->url->link('public/blog/images/posts/' . $goods['image']);
        }
        if (! empty($goods['imageOne'])) {
            // default path to upload ad image : public/images
            $data['imageOne'] = $this->url->link('public/blog/images/posts/' . $goods['imageOne']);
        }
        if (! empty($goods['imageTwo'])) {
            // default path to upload ad image : public/images
            $data['imageTwo'] = $this->url->link('public/blog/images/posts/' . $goods['imageTwo']);
        }
        if (! empty($goods['imageThree'])) {
            // default path to upload ad image : public/images
            $data['imageThree'] = $this->url->link('public/blog/images/posts/' . $goods['imageThree']);
        }

        $view =  $this->view->render('users/main/addgoods', $data);
        return $this->usersLayout->render($view);
    }


    /**
    * Submit for creating new ad
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];

        //if ($this->isValid($id)) {
            // it means there are no errors in form validation
            $this->load->model('Posts')->update($id);

            $json['success'] = 'تم تعديل بيانات المنتج بنجاح';

            $json['redirectTo'] = $this->url->link('/seller/Goods/index');
        //} else {
            // it means there are errors in form validation
            //$json['errors'] = $this->validator->flattenMessages();
        //}

        return $this->json($json);
    }
	
	public function discount()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
        $json = [];
		$this->load->model('Posts')->discount($id);

		$json['success'] = 'تم اضافة سعر جديد لجميع المنتجات';

		$json['redirectTo'] = $this->url->link('/seller/Goods/index');

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
        $goodsModel = $this->load->model('Posts');

        if (! $goodsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $goodsModel->delete($id);
		return $this->url->redirectTo('/seller/Goods/index');
        $json['success'] = 'تم حذف المنتج بنجاح';
		
        return $this->json($json);
    }
	
	
     /**
     * Delete Record
     *
     * @param int $id
     * @return mixed
     */
    public function deleteOrder($id)
    {
        $ordersModel = $this->load->model('Orders');

        if (! $ordersModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $ordersModel->delete($id);

        $json['success'] = 'تم حذف المنتج بنجاح';
		
        return $this->json($json);
    }
	
	
	public function isactive($id)
    {
        $goodsModel = $this->load->model('Posts');

        if (! $goodsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $goodsModel->isactive($id);
		return $this->url->redirectTo('/seller/Goods/index');
		//$json['redirectTo'] = $this->url->link('/seller/Goods/index');
       // $json['success'] = 'تم حذف المنتج بنجاح';
		
        return $this->json($json);
    }
	
	public function deactive($id)
    {
        $goodsModel = $this->load->model('Posts');

        if (! $goodsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $goodsModel->deactive($id);
		return $this->url->redirectTo('/seller/Goods/index');
		//$json['redirectTo'] = $this->url->link('/seller/Goods/index');
        $json['success'] = 'تم حذف المنتج بنجاح';
		
        return $this->json($json);
    }
	
	
	
	private function isValid($id = null)
    {
        $this->validator->required('shop_name', 'اسم المتجر مطلوب');
        $this->validator->required('template_id',' قم باختيار تصميم متجرك');
        $this->validator->required('country', 'قم باختيار الدولة');
        $this->validator->required('province', 'قم باختيار المنطقة');
        $this->validator->required('city', 'قم باختيار المدينة');
        $this->validator->required('district', 'قم باختيار الحي');
        $this->validator->required('address', 'قم باختيار العنوان');
        $this->validator->required('postal_code', 'قم بكتابة الرمز البريدي');
        $this->validator->required('maroof_link', 'ضع الرابط لمعروف');
        $this->validator->required('shipping_way', 'طريقة الشحن');
        $this->validator->required('shop_desc', 'قم بكتابة وضف');
        $this->validator->required('after_sale', 'ما بعد الخدمة مطلوب');

        return $this->validator->passes();
    }
	
	private function isValids($id = null)
    {
		$this->validator->required('title', 'أسم المنتج مطلوب');
        $this->validator->required('desc_en_title','وصف المنتج بالانجليزي مطلوب');
        $this->validator->required('details', 'وصف المنتج مطلوب');
        $this->validator->required('tags', 'الكلمات المفتاحية مطلوبة');
        $this->validator->required('en_title', 'أسم المنتج بالانجليزي مطلوب');
        $this->validator->required('price1', 'سعر المنتج مطلوب');
        //$this->validator->required('price2');
        $this->validator->required('weight', 'وزن المنتج مطلوب');
        $this->validator->required('stock', 'تحديد المخزون مطلوب');
        $this->validator->required('stock_alarm', 'ضبط تنبيه نقص المخزون مطلوب');
        $this->validator->required('depot_slot', 'مكان التخزين مطلوب');
        $this->validator->required('details_en', 'خدمات ما بعد البيع بالانجليزي مطلوبة');
        $this->validator->required('after_details_en', 'خدمات ما بعد البيع مطلوبة');
        $this->validator->required('barcode', 'الباركود مطلوب');

        return $this->validator->passes();
    }
	
	
	public function order()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		$data['orders'] = $this->load->model('Posts')->getAllOrderWithSellerId($id);
		$data['o_pending'] = $this->load->model('Posts')->getAllOrderWithSellerIdPending($id);
		$data['o_done'] = $this->load->model('Posts')->getAllOrderWithSellerIdDone($id);
		$data['o_cancel'] = $this->load->model('Posts')->getAllOrderWithSellerIdCancel($id);
		$data['allOrders'] = $this->load->model('Seller')->countAllOrderForSeller($id);
		$data['allOrdersPinding'] = $this->load->model('Seller')->countAllOrderPindingsForSeller($id);
		$data['allOrdersDone'] = $this->load->model('Seller')->countAllOrderDoneForSeller($id);
		$data['allOrdersCancel'] = $this->load->model('Seller')->countAllOrderCancelForSeller($id);
        $this->html->setTitle('قائمة المنتجات');
		
        $view = $this->view->render('users/main/order', $data);

        return $this->usersLayout->render($view);
    }
	
	
	public function comment()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		$data['comments'] = $this->load->model('Posts')->getAllCommentsWithSellerId($id);
        $this->html->setTitle('قائمة المنتجات');
		
        $view = $this->view->render('users/main/comment', $data);

        return $this->usersLayout->render($view);
    }
	
	
	
	public function statisticsorder()
    {
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		$data['totalPricce'] = $this->load->model('Posts')->countPrice($id);
		$data['totalFailed'] = $this->load->model('Posts')->countAllOrderStatusFailed($id);
		$data['totalDone'] = $this->load->model('Posts')->countAllOrderStatusDone($id);
        $this->html->setTitle('احصائيات الطلبات');
		
        $view = $this->view->render('users/main/statisticsorder', $data);

        return $this->usersLayout->render($view);
    }
	
	public function goodsList()
	{
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');
		$data['posts'] = $this->load->model('Posts')->getPostSellerId($id);
        $this->html->setTitle('قائمة المنتجات');

        return $this->view->render('users/main/goodsList', $data);
	}
	
	
	public function goodsListdeleted()
	{
		$loginModel = $this->load->model('Loginseller');
        if (! $loginModel->isLogged()) {
            return $this->url->redirectTo('/');
        } 
		$loggedInSeller = $loginModel->user();
		$id = $loggedInSeller->id;
		$data['posts'] = $this->load->model('Posts')->getPostDisActiveSellerId($id);
        $this->html->setTitle('إستعادة المنتجات');
		$this->blogLayout->disable('sidebar');
        $this->blogLayout->disable('rightsidebar');
        $this->blogLayout->disable('rightsidebar2');

        return $this->view->render('users/main/goodsListdeleted', $data);
	}
}