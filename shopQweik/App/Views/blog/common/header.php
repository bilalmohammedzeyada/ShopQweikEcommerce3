<!DOCTYPE html>
<html lang="ar-EG">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="referrer" content="unsafe-url">                
	<link rel="icon" href="<?php echo assets('blog/images/logo/favicon.ico'); ?>" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo assets('blog/css/rtl/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo assets('blog/css/swiper.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo assets('blog/css/owl.carousel.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo assets('blog/css/owl.theme.default.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo assets('blog/css/animate.css'); ?>" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="<?php echo assets('blog/css/style.css'); ?>" />
	<link rel="stylesheet" href="<?php echo assets('blog/css/jquery.pan.css'); ?>" />
	<link rel="stylesheet" href="https://unpkg.com/xzoom/dist/xzoom.css" />
    <script type="text/javascript" src="<?php echo assets('blog/js/jquery.js'); ?>"></script>
     <script type="text/javascript" src="<?php echo assets('blog/js/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo assets('blog/js/swiper.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo assets('blog/js/owl.carousel.min.js'); ?>"></script>
  <!-- WOW JS -->
    <script src="<?php echo assets('blog/js/wow.min.js'); ?>"></script>
    <!-- Custom JS -->
    <script src="<?php echo assets('blog/js/custom.js'); ?>"></script>
    <script src="<?php echo assets('blog/js/core.js'); ?>"></script>
    <script src="<?php echo assets('blog/js/easyzoom.min.js'); ?>"></script>
    <script src="<?php echo assets('blog/js/jquery.pan.min.js'); ?>"></script>
    <script src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
	<script>
		new WOW().init();
	
		$(function($){
			
			$('a.zoom').easyZoom();

		});

	</script>
</head>
<body>
<header>
	<hr class="hr-style" />
	<nav class="navbar navbar-expand-lg">
	<div class="container">
	<div id="list-item" class="list-item"><i id="-list-item-hover" class="fa fa-bars"></i></div>
	<div id="list-item" class="list-item2"><i id="-list-item-hoverr" class="fa fa-bars"></i></div>
	<div id="search-icon-mobile" class="search-icon-mobile" ><i id="-list-item-hover" id="list-item" class="fa fa-search"></i></div>
	
	<a class="navbar-brand" href="<?php echo url('/'); ?>">
	<img src="<?php echo assets('blog/images/logo/logo.png'); ?>" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
	<form id="searchForm" class="searchForm" action="<?php echo url('search'); ?>" method="POST">
		<div class="d-flex">
			<input class="form-control mr-1" type="text" name="q" placeholder="أبحث عن منتجات">
			<input type="submit" name="searchsubmit" class="btn w-25" value="بحث" />
		</div>
	</form>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		تحتاج<b> مساعدة?</b> <i class="fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<div class="toggle-content">
		  <div class="arrow_box"></div>
		  <div class="osh-popover-arrow"></div><div class="content osh-help-overlay">
		  <a class="link" href="<?php echo url('/help'); ?>">اسئلة مكررة (FAQs)</a>  
		  <a class="link" href="<?php echo url('/return-policy-cp'); ?>">سياسة الإرجاع و الاسترداد النقدي</a>  
		  <a class="link" href="<?php echo url('/online-return-cp'); ?>">كيفية إرجاع المنتَج</a>  
		  <a class="link" href="<?php echo url('/delivery-timelines'); ?>">سياسة الشحن</a>  
		  <a class="link" href="<?php echo url('/how-to-pay'); ?>">طرق الدفع</a>  
		  <a class="link" href="<?php echo url('/how-to-paydelivery-timelines'); ?>">فترة التوصيل</a>  
		  <a class="link" href="<?php echo url('/contact'); ?>">Contact Us</a>   
		  <div class="tracking -overlay">
			<div class="track-title"><i class="osh-icon -map"></i> تتبع طلبك</div>  
			<form class="" id="helpGuestOrderTrackForm" action="<?php echo url('/detrack/tracking/index'); ?>" method="post">
				<div class="form-group">
					<label>رقم طلبكم</label>
					<input id="" name="order_number" class="form-control">
				</div>
				<div class="form-group">
					<label>رقم الجوال</label>
					<input id="" name="mobile_number" class="form-control">   
				</div>
				<input value="تتبع" class="osh-btn -default" type="submit">  
			</form>
			</div> </div></div>
        </div>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          الحساب<b> الخاص بك</b> <i class="fas fa-angle-down"></i>
        </a>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
         <?php if(! $user){ ?>
		
		<div class="toggle-content ">
		<div class="arrow_box"></div>
		<div class="osh-popover-arrow"></div>
		<div class="content osh-account-overlay">
			<a id="login-button" href="<?php echo url('/customer/account/login'); ?>" class="osh-btn -primary">
				<span class="label link">الدخول</span>
			</a>
			<div class="sign-up link">هل أنت عميل جديد؟ <a href="<?php echo url('/customer/account/login'); ?>">تسجيل</a>
			</div> 
			<div class="tracking -overlay">
				<div class="track-title"><i class="osh-icon -map"></i> تتبع طلبك</div>  <form action="<?php echo url('/detrack/tracking/index'); ?>" method="post">
	
		<label class="link">رقم طلبكم</label>
		<input type="text" id="guest-order-track-input" name="order_number" value="" class="form-control  text" data-js-validation="number">
		
		<label class="link">رقم الهاتف</label>
		<input id="customer-email" type="text" name="mobile_number" class="form-control text" data-js-validation="email">
		
		<input value="تتبع" class="osh-btn -default -primary" type="submit">  </form>
		</div>  
		</div>
		</div>
		 
		 <?php } else { ?>
		 <div class="toggle-content ">
		 <div class="arrow_box"></div>
		 <div class="osh-popover-arrow"></div>
		 <div class="content osh-account-overlay">
		 <a class="link" href="<?php echo url('/customer/account/index'); ?>">حسابي</a>  <a class="link" href="<?php echo url('/sales/order/history/'); ?>">طلباتي</a>
		 <hr><a href="<?php echo url('/logout'); ?>" class="osh-btn -default">  <span class="label ">خروج
</span>    </a>  </div></div>
		 <?php } ?>

	   </div>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link shopping-cart" href="<?php echo url('checkout/cart'); ?>">
			<i class="fas fa-shopping-cart"></i>عربة التسوق
        </a>
		  <span class="countCartItem"><?php if(!empty($_SESSION["cart_item"])){ echo count($_SESSION["cart_item"]);} else{ echo "0"; } ?><span>
      </li>
    </ul>
    
  </div>
  </div>
</nav>
			
</header>
<div class="clearfix"></div>
<div class="category-mobile">
	<div class="col-12">
		<ul>
		<?php foreach($cats as $cat){ ?>
			<li>
				<a href="<?php echo url('category/' . seo($cat->title) . '/' . $cat->id); ?>"><?php echo $cat->name; ?></a>
			</li>
		<?php } ?>
		</ul>
	</div>
</div>