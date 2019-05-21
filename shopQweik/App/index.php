<?php

// white list routes

use System\Application;

$app = Application::getInstance();

if (strpos($app->request->url(), '/seller') === 0 ) {
	// share Blog layout
    $app->share('usersLayout', function ($app) {
        return $app->load->controller('Users/Common/Layout');
    });

    // share|load settings for each request
    $app->share('settings', function ($app) {
        $settingsModel = $app->load->model('Settings');

        $settingsModel->loadAll();

        return $settingsModel;
    });
}


if (strpos($app->request->url(), '/admin') === 0 ) {
    // check if the current url started with /admin
    // if so, then call our middlewares
    $app->route->callFirst(function ($app) {
        $app->load->action('Admin/Access', 'index');
    });

    // share admin layout
    $app->share('adminLayout', function ($app) {
        return $app->load->controller('Admin/Common/Layout');
    });
} else {
    // share Blog layout
    $app->share('blogLayout', function ($app) {
        return $app->load->controller('Blog/Common/Layout');
    });

    // share|load settings for each request
    $app->share('settings', function ($app) {
        $settingsModel = $app->load->model('Settings');

        $settingsModel->loadAll();

        return $settingsModel;
    });
}

// Admin Routes                 
$app->route->add('/admin/login', 'Admin/Login');
$app->route->add('/admin/login/submit', 'Admin/Login@submit', 'POST');


// dashboard
$app->route->add('/admin' , 'Admin/Dashboard');
$app->route->add('/admin/dashboard' , 'Admin/Dashboard');
$app->route->add('/admin/submit' , 'Admin/Dashboard@submit', 'POST');

// admin => users
$app->route->add('/admin/users', 'Admin/Users');
$app->route->add('/admin/users/add', 'Admin/Users@add', 'POST');
$app->route->add('/admin/users/submit', 'Admin/Users@submit', 'POST');
$app->route->add('/admin/users/edit/:id', 'Admin/Users@edit', 'POST');
$app->route->add('/admin/users/save/:id', 'Admin/Users@save' , 'POST');
$app->route->add('/admin/users/delete/:id', 'Admin/Users@delete', 'POST');


// admin => users
$app->route->add('/admin/sales', 'Admin/Sales');
$app->route->add('/admin/sales/add', 'Admin/Sales@add', 'POST');
$app->route->add('/admin/sales/submit', 'Admin/Sales@submit', 'POST');
$app->route->add('/admin/sales/edit/:id', 'Admin/Sales@edit', 'POST');
$app->route->add('/admin/sales/save/:id', 'Admin/Sales@save' , 'POST');
$app->route->add('/admin/sales/delete/:id', 'Admin/Sales@delete', 'POST');


// admin => user profile
$app->route->add('/admin/profile/update', 'Admin/Profile@update' , 'POST');

// admin => users groups
$app->route->add('/admin/users-groups', 'Admin/UsersGroups');
$app->route->add('/admin/users-groups/add', 'Admin/UsersGroups@add', 'POST');
$app->route->add('/admin/users-groups/submit', 'Admin/UsersGroups@submit', 'POST');
$app->route->add('/admin/users-groups/edit/:id', 'Admin/UsersGroups@edit', 'POST');
$app->route->add('/admin/users-groups/save/:id', 'Admin/UsersGroups@save' , 'POST');
$app->route->add('/admin/users-groups/delete/:id', 'Admin/UsersGroups@delete', 'POST');

// admin => posts
$app->route->add('/admin/posts', 'Admin/Posts');
$app->route->add('/admin/posts/add', 'Admin/Posts@add', 'POST');
$app->route->add('/admin/posts/submit', 'Admin/Posts@submit', 'POST');
$app->route->add('/admin/posts/edit/:id', 'Admin/Posts@edit', 'POST');
$app->route->add('/admin/posts/save/:id', 'Admin/Posts@save' , 'POST');
$app->route->add('/admin/posts/delete/:id', 'Admin/Posts@delete', 'POST');

// admin => Brands
$app->route->add('/admin/brands', 'Admin/Brands');
$app->route->add('/admin/brands/add', 'Admin/Brands@add', 'POST');
$app->route->add('/admin/brands/submit', 'Admin/Brands@submit', 'POST');
$app->route->add('/admin/brands/edit/:id', 'Admin/Brands@edit', 'POST');
$app->route->add('/admin/brands/save/:id', 'Admin/Brands@save' , 'POST');
$app->route->add('/admin/brands/delete/:id', 'Admin/Brands@delete', 'POST');



// admin => Coupons
$app->route->add('/admin/coupons', 'Admin/Coupons');
$app->route->add('/admin/coupons/add', 'Admin/Coupons@add', 'POST');
$app->route->add('/admin/coupons/submit', 'Admin/Coupons@submit', 'POST');
$app->route->add('/admin/coupons/edit/:id', 'Admin/Coupons@edit', 'POST');
$app->route->add('/admin/coupons/save/:id', 'Admin/Coupons@save' , 'POST');
$app->route->add('/admin/coupons/delete/:id', 'Admin/Coupons@delete', 'POST');





// admin => Sub
$app->route->add('/admin/sub', 'Admin/Sub');
//$app->route->add('/admin/brands/add', 'Admin/Sub@add', 'POST');
$app->route->add('/admin/sub/submit', 'Admin/Sub@submit', 'POST');
///$app->route->add('/admin/brands/edit/:id', 'Admin/Brands@edit', 'POST');
//$app->route->add('/admin/brands/save/:id', 'Admin/Brands@save' , 'POST');
//$app->route->add('/admin/brands/delete/:id', 'Admin/Brands@delete', 'POST');


// admin => Banks
$app->route->add('/admin/banks', 'Admin/Banks');
$app->route->add('/admin/banks/add', 'Admin/Banks@add', 'POST');
$app->route->add('/admin/banks/submit', 'Admin/Banks@submit', 'POST');
$app->route->add('/admin/banks/edit/:id', 'Admin/Banks@edit', 'POST');
$app->route->add('/admin/banks/save/:id', 'Admin/Banks@save' , 'POST');
$app->route->add('/admin/banks/delete/:id', 'Admin/Banks@delete', 'POST');

// Admin => Comments
//$app->route->add('/admin/posts/:id/comments', 'Admin/Comments');
//$app->route->add('/admin/comments/edit/:id', 'Admin/Comments@edit');
//$app->route->add('/admin/comments/save/:id', 'Admin/Comments@save', 'POST');
//$app->route->add('/admin/comments/delete/:id', 'Admin/Comments@delete');


// Admin Categories Routes
$app->route->add('/admin/categories', 'Admin/Categories');
$app->route->add('/admin/categories/add', 'Admin/Categories@add', 'POST');
$app->route->add('/admin/categories/submit', 'Admin/Categories@submit', 'POST');

$app->route->add('/admin/categories/edit/:id', 'Admin/Categories@edit', 'POST');
$app->route->add('/admin/categories/save/:id', 'Admin/Categories@save' , 'POST');
$app->route->add('/admin/categories/delete/:id', 'Admin/Categories@delete', 'POST');



// Admin Sub Categories Routes
$app->route->add('/admin/scategories', 'Admin/SCategories');
$app->route->add('/admin/scategories/add', 'Admin/SCategories@add', 'POST');
$app->route->add('/admin/scategories/submit', 'Admin/SCategories@submit', 'POST');

$app->route->add('/admin/scategories/edit/:id', 'Admin/SCategories@edit', 'POST');
$app->route->add('/admin/scategories/save/:id', 'Admin/SCategories@save' , 'POST');
$app->route->add('/admin/scategories/delete/:id', 'Admin/SCategories@delete', 'POST');



// Admin settings
$app->route->add('/admin/settings', 'Admin/Settings');
$app->route->add('/admin/settings/save', 'Admin/Settings@save', 'POST');

// Admin Contacts
$app->route->add('/admin/contacts', 'Admin/Contacts');
$app->route->add('/admin/contacts/reply/:id', 'Admin/Contacts@reply');
$app->route->add('/admin/contacts/send/:id', 'Admin/Contacts@send' , 'POST');

// admin => ads
$app->route->add('/admin/ads', 'Admin/Ads');
$app->route->add('/admin/ads/add', 'Admin/Ads@add', 'POST');
$app->route->add('/admin/ads/submit', 'Admin/Ads@submit', 'POST');
$app->route->add('/admin/ads/edit/:id', 'Admin/Ads@edit', 'POST');
$app->route->add('/admin/ads/save/:id', 'Admin/Ads@save' , 'POST');
$app->route->add('/admin/ads/delete/:id', 'Admin/Ads@delete', 'POST');

// admin => ads
$app->route->add('/admin/sliders', 'Admin/Sliders');


// admin => adsHome
$app->route->add('/admin/adshome', 'Admin/Adshome');
$app->route->add('/admin/adshome/add', 'Admin/Adshome@add', 'POST');
$app->route->add('/admin/adshome/addslider', 'Admin/Adshome@addslider', 'POST');
$app->route->add('/admin/adshome/addfirstbanner', 'Admin/Adshome@addfirstbanner', 'POST');
$app->route->add('/admin/adshome/addsecondbanner', 'Admin/Adshome@addsecondbanner', 'POST');
$app->route->add('/admin/adshome/addthirdbanner', 'Admin/Adshome@addthirdbanner', 'POST');
$app->route->add('/admin/adshome/submit', 'Admin/Adshome@submit', 'POST');
$app->route->add('/admin/adshome/edit/:id', 'Admin/Adshome@edit', 'POST');
$app->route->add('/admin/adshome/editfirstbanner/:id', 'Admin/Adshome@editfirstbanner', 'POST');
$app->route->add('/admin/adshome/editsecondbanner/:id', 'Admin/Adshome@editsecondbanner', 'POST');
$app->route->add('/admin/adshome/editthirdbanner/:id', 'Admin/Adshome@editthirdbanner', 'POST');
$app->route->add('/admin/adshome/save/:id', 'Admin/Adshome@save' , 'POST');
$app->route->add('/admin/adshome/delete/:id', 'Admin/Adshome@delete', 'POST');


// admin => Sliders
$app->route->add('/admin/sliders', 'Admin/Sliders');
$app->route->add('/admin/sliders/add', 'Admin/Sliders@add', 'POST');
$app->route->add('/admin/sliders/submit', 'Admin/Sliders@submit', 'POST');
$app->route->add('/admin/sliders/edit/:id', 'Admin/Sliders@edit', 'POST');
$app->route->add('/admin/sliders/save/:id', 'Admin/Sliders@save' , 'POST');
$app->route->add('/admin/sliders/delete/:id', 'Admin/Sliders@delete', 'POST');




// admin => logout
$app->route->add('/admin/logout', 'Admin/Logout');




// Seller Routes                 
$app->route->add('/seller', 'Users/Dashboard');
$app->route->add('/seller/login', 'Users/Login');
$app->route->add('/seller/login/submit', 'Users/Login@submit', 'POST');
$app->route->add('/seller/register', 'Users/Register');
$app->route->add('/seller/register/submit', 'Users/Register@submit', 'POST');



// Seller => dashboard
$app->route->add('/seller/Index/chgpwd' , 'Users/Profile@pwd');
$app->route->add('/seller/Index/profile' , 'Users/Profile');
$app->route->add('/seller/Index/profile/update' , 'Users/Profile@update', 'POST');
$app->route->add('/seller/Index/shopsetting' , 'Users/Dashboard');
$app->route->add('/seller/Index/shopsetting/submitShopsetting', 'Users/Dashboard@submitShopsetting', 'POST');


$app->route->add('/seller/Index/shopdesign' , 'Users/Dashboard@shopdesign');
$app->route->add('/seller/Index/shopdesign/submitShopdesign', 'Users/Dashboard@submitShopdesign', 'POST');

$app->route->add('/seller/Goods/index' , 'Users/Goods');
$app->route->add('/seller/Goods/index' , 'Users/Goods', 'POST');
$app->route->add('/seller/Goods/goodsList', 'Users/Goods@goodsList'); // Home Page
$app->route->add('/seller/Goods/index/add' , 'Users/Goods@add');
$app->route->add('/seller/Goods/index/discount' , 'Users/Goods@discount', 'POST');
$app->route->add('/seller/Goods/index/submit', 'Users/Goods@submit', 'POST');
$app->route->add('/seller/Goods/index/submitShopdesign', 'Users/Goods@submitShopdesign', 'POST');
$app->route->add('/seller/Goods/index/edit/:id', 'Users/Goods@edit');
$app->route->add('/seller/Goods/index/save/:id', 'Users/Goods@save' , 'POST');
$app->route->add('/seller/Goods/index/delete/:id', 'Users/Goods@delete', 'POST');
$app->route->add('/seller/Goods/index/isactive/:id', 'Users/Goods@isactive', 'POST');
$app->route->add('/seller/Goods/index/deactive/:id', 'Users/Goods@deactive', 'POST');


$app->route->add('/seller/Order/order', 'Users/Goods@order');
$app->route->add('/seller/Order/order/delete/:id', 'Users/Goods@deleteOrder', 'POST');
$app->route->add('/seller/Comment/index', 'Users/Goods@comment');



$app->route->add('/seller/Goods/recycle' , 'Users/Goods@recycle');
$app->route->add('/seller/Goods/goodsListdeleted', 'Users/Goods@goodsListdeleted'); // Home Page


$app->route->add('/seller/shipping-delivery' , 'Users/Shipping');
$app->route->add('/seller/shipping-delivery/add', 'Users/Shipping@add', 'POST');
$app->route->add('/seller/shipping-delivery/submit', 'Users/Shipping@submit', 'POST');
$app->route->add('/seller/shipping-delivery/edit/:id', 'Users/Shipping@edit', 'POST');
$app->route->add('/seller/shipping-delivery/save/:id', 'Users/Shipping@save' , 'POST');
$app->route->add('/seller/shipping-delivery/delete/:id', 'Users/Shipping@delete', 'POST');


$app->route->add('/seller/Finance/settlement' , 'Users/Finance');
$app->route->add('/seller/Finance/settlement/add' , 'Users/Finance@add');
$app->route->add('/seller/Finance/settlement/submit', 'Users/Finance@submit', 'POST');

$app->route->add('/seller/Statistics/sale' , 'Users/Goods');
$app->route->add('/seller/Statistics/sale/add' , 'Users/Statistics@add');
$app->route->add('/seller/Statistics/sale/submit', 'Users/Statistics@submit', 'POST');

$app->route->add('/seller/Statistics/order' , 'Users/Goods@statisticsorder');
$app->route->add('/seller/Statistics/order/add' , 'Users/Statistics@orderadd');
$app->route->add('/seller/Statistics/order/submit', 'Users/Statistics@ordersubmit', 'POST');

//$app->route->add('/seller/dashboard' , 'Users/Dashboard');
$app->route->add('/seller/submit' , 'Users/Dashboard@submit', 'POST');

// Seller => posts
$app->route->add('/seller/photography', 'Users/Photography');
$app->route->add('/seller/photography/add' , 'Users/Photography@add');
$app->route->add('/seller/photography/edit/:id', 'Users/Photography@edit', 'POST');
$app->route->add('/seller/photography/save/:id', 'Users/Photography@save' , 'POST');
$app->route->add('/seller/photography/delete/:id', 'Users/Photography@delete', 'POST');


// admin => Coupons
$app->route->add('/seller/coupons', 'Users/Coupons');
$app->route->add('/seller/coupons/add', 'Users/Coupons@add', 'POST');
$app->route->add('/seller/coupons/submit', 'Users/Coupons@submit', 'POST');
$app->route->add('/seller/coupons/edit/:id', 'Users/Coupons@edit', 'POST');
$app->route->add('/seller/coupons/save/:id', 'Users/Coupons@save' , 'POST');
$app->route->add('/seller/coupons/delete/:id', 'Users/Coupons@delete', 'POST');


// admin => users
$app->route->add('/seller/sales', 'Users/Sales');
$app->route->add('/seller/sales/add', 'Users/Sales@add', 'POST');
$app->route->add('/seller/sales/submit', 'Users/Sales@submit', 'POST');
$app->route->add('/seller/sales/edit/:id', 'Users/Sales@edit', 'POST');
$app->route->add('/seller/sales/save/:id', 'Users/Sales@save' , 'POST');
$app->route->add('/seller/sales/delete/:id', 'Users/Sales@delete', 'POST');


// Seller => ads
$app->route->add('/seller/ads', 'Users/Ads');
$app->route->add('/seller/ads/add', 'Users/Ads@add', 'POST');
$app->route->add('/seller/ads/submit', 'Users/Ads@submit', 'POST');
$app->route->add('/seller/ads/edit/:id', 'Users/Ads@edit', 'POST');
$app->route->add('/seller/ads/save/:id', 'Users/Ads@save' , 'POST');
$app->route->add('/seller/ads/delete/:id', 'Users/Ads@delete', 'POST');




// Seller => logout
$app->route->add('/seller/logout', 'Users/Logout');



// Blog Routes
$app->route->add('/', 'Blog/Home'); // Home Page
$app->route->add('/m/:text', 'Blog/Markets');
$app->route->add('/send', 'Blog/Home@send', 'POST'); // Home Page
$app->route->add('/getData', 'Blog/Home@getData', 'POST'); // Home Page
$app->route->add('/getmode', 'Blog/Home@getmode', 'POST'); // Home Page
$app->route->add('/category/:text/:id', 'Blog/Category');
$app->route->add('/active/change/:text', 'Blog/Active@change');
$app->route->add('/active/:text', 'Blog/Active');
//$app->route->add('/brands/:text/:id', 'Blog/Brands');
$app->route->add('/:text/:id', 'Blog/Brands');
$app->route->add('/brands/:text/:id', 'Blog/Brands');
$app->route->add('/post/:text/:id', 'Blog/Post');
$app->route->add('/postv', 'Blog/Postv');

$app->route->add('/checkout/cart', 'Blog/Checkout');
$app->route->add('/checkout/cart/emptycart', 'Blog/Checkout@emptycart');
$app->route->add('/checkout/cart/plus/:id', 'Blog/Checkout@plus', 'POST');
$app->route->add('/checkout/cart/delete/:id', 'Blog/Checkout@delete');
$app->route->add('/checkout/cart/deleteid', 'Blog/Checkout@deleteid');
$app->route->add('/sales/order/view/order_id/:id', 'Blog/Sales@order_id');
$app->route->add('/easycheckout', 'Blog/Easycheckout');
$app->route->add('/easycheckout/confirmOrder', 'Blog/Easycheckout@confirmOrder', 'POST');
$app->route->add('/easycheckout/addcoupon', 'Blog/Easycheckout@addcoupon', 'POST');

//$app->route->add('/checkout/cart/:text/:id', 'Blog/Checkout');
$app->route->add('/checkout/cart/submit', 'Blog/Checkout@submit', 'POST');
//$app->route->add('/customer/account/edit/:id', 'Blog/Customer@edituser');

$app->route->add('/post/:text/:id/add-comment', 'Blog/Post@addComment', 'POST');


//$app->route->add('/register', 'Blog/Register');
//$app->route->add('/register/submit', 'Blog/Register@submit', 'POST');
//$app->route->add('/login', 'Blog/Login');


$app->route->add('/review/customer', 'Blog/Review');
$app->route->add('/review/customer/delete/:id', 'Blog/Review@delete', 'POST'); 
$app->route->add('/sales/order/history', 'Blog/Sales');
$app->route->add('/newsletter/manage', 'Blog/Newsletter');
$app->route->add('/newsletter/manage/save', 'Blog/Newsletter@save', 'POST');
$app->route->add('/review/customer', 'Blog/Review');
$app->route->add('/customer/account', 'Blog/Customer');
$app->route->add('/customer/account/login', 'Blog/Customer');
$app->route->add('/customer/account/changepass', 'Blog/Customer@pass');
$app->route->add('/customer/account/changepassword', 'Blog/Customer@changepassword', 'POST');
$app->route->add('/customer/account/forgotpassword', 'Blog/Forgotpassword');
$app->route->add('/customer/account/login/submit', 'Blog/Customer@submit', 'POST');
$app->route->add('/customer/account/index', 'Blog/Index');
$app->route->add('/customer/account/login/submit', 'Blog/Customer@submit', 'POST');
$app->route->add('/customer/account/forgotpassword/submit', 'Blog/Forgotpassword@submit', 'POST');

$app->route->add('/customer/account/edituser/:id', 'Blog/Customer@edituser');
$app->route->add('/customer/account/saveuser/:id', 'Blog/Customer@saveuser', 'POST');

$app->route->add('/customer/address/index', 'Blog/Address');
$app->route->add('/customer/address/new', 'Blog/Address@newaddress');
$app->route->add('/customer/address/new/save/:id', 'Blog/Address@save', 'POST');

/* $app->route->add('/admin/users', 'Admin/Users');
$app->route->add('/admin/users/add', 'Admin/Users@add', 'POST');
$app->route->add('/admin/users/submit', 'Admin/Users@submit', 'POST');
$app->route->add('/admin/users/edit/:id', 'Admin/Users@edit', 'POST');
$app->route->add('/admin/users/save/:id', 'Admin/Users@save' , 'POST');
$app->route->add('/admin/users/delete/:id', 'Admin/Users@delete', 'POST'); */


$app->route->add('/account/create', 'Blog/Account');
$app->route->add('/account/create/submit', 'Blog/Account@submit', 'POST');
//$app->route->add('/login', 'Blog/Login');
//$app->route->add('/login/submit', 'Blog/Login@submit', 'POST');
$app->route->add('/logout', 'Blog/Logout');
//$app->route->add('/contact-us', 'Blog/Contact');
//$app->route->add('/contact-us/submit', 'Blog/Contact@submit', 'POST');
$app->route->add('/about-us', 'Blog/About');
$app->route->add('/search', 'Blog/Search');
$app->route->add('/detrack/tracking/index', 'Blog/Tracking');
$app->route->add('/detrack/tracking/index', 'Blog/Tracking', 'POST');
$app->route->add('/search', 'Blog/Search', 'POST');
$app->route->add('/sub', 'Blog/Sub', 'POST');
$app->route->add('/sub/submit', 'Blog/Sub@submit', 'POST');
$app->route->add('/privacy-policy', 'Blog/Privacy');
$app->route->add('/privacy-policy', 'Blog/Privacy');
//$app->route->add('/profile', 'Blog/Profile');
//$app->route->add('/search', 'Blog/Search');


// Not Found Routes
$app->route->add('/404', 'NotFound');
$app->route->notFound('/404');