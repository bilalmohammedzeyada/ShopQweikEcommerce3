<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="rtl" lang="ar" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="rtl" lang="ar" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="rtl" lang="ar">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $market->shop_name; ?></title>
<base href="<?php echo url('/m/' . $market->shop_name); ?>" />
<meta name="description" content="" />
<meta name="keywords" content= "" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="<?php echo assets('blog/images/logos/' . $market->shop_logo); ?>" rel="icon" />
<script src="<?php echo assets('/users/js/jquery-2.1.1.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo assets('/users/js/bootstrap.js'); ?>" type="text/javascript"></script>
<link href="<?php echo assets('/users/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="<?php echo assets('/users/css/DroidArabicKufi.css'); ?>" rel="stylesheet">
<link href="<?php echo assets('/users/css/bahij.css'); ?>" rel="stylesheet">
<link href="<?php echo assets('/users/css/nivo-slider.css'); ?>" rel="stylesheet">
<link href="<?php echo assets('/users/css/animate.css'); ?>" rel="stylesheet">
<link href="<?php echo assets('/users/css/slick.css'); ?>" rel="stylesheet">
<link href="<?php echo assets('/users/css/slick-theme.css'); ?>" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<link href="<?php echo assets('/users/css/bootstrap-a.css'); ?>" rel="stylesheet" media="screen" />
<link href="<?php echo assets('/users/css/stylesheet-a.css'); ?>" rel="stylesheet">
<link href="<?php echo assets('/users/css/owl.carousel.css'); ?>" type="text/css" rel="stylesheet" media="screen" />
<script src="<?php echo assets('/users/js/common.js'); ?>" type="text/javascript"></script>
<script src="<?php echo assets('/users/js/owl.carousel.min.js'); ?>" type="text/javascript"></script>

<script src="<?php echo assets('/users/js/jquery.nivo.slider.js'); ?>"></script>
<script src="<?php echo assets('/users/js/jquery.nivo.slider.pack.js'); ?>"></script>
<script src="<?php echo assets('/users/js/slick.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>



								
								
				<script type="text/javascript">
					function getURLVar(key) {
										
						var value 	= [],
							url		= String(document.location),
							query;
						
						if( url.indexOf( '?' ) > -1 ) {
							query = url.split('?');
						} else {
							query = url.split('/');
							query.shift();
							query.shift();
							query.shift();
							query = query.join('/');
							
							query = query.indexOf( '&' ) > -1 ? [ query.substring( 0, query.indexOf('&') ), query.substring( query.indexOf('&')+1 ) ] : [ query, '' ];
							
							value['route'] = query[0];
						}
						
						if (typeof query[1] != 'undefined') {
							var part = query[1].split('&');

							for (i = 0; i < part.length; i++) {
								var data = part[i].split('=');
								
								if (data[0] && data[1]) {
									value[data[0]] = data[1];
								}
							}
							
							if (value[key]) {
								return value[key];
							} else {
								return '';
							}
						}
					}
				</script>
			

								
								
								
								
				</head>
			
			
<body class="common-home">
    


<div class="Julie-board"></div>
    <div class="Julie-Alert">
      <div class="Alert-btn-container">
        <button class="confirm">got it</button>
        <button class="error">close</button>
        </div>
     </div>   



 <div class="menu-collapsed visible-xs">
   <div class="bar"></div>
     <!-- <nav id="resmenu" >
    <ul class="nav navbar-nav">
        <li><a href="?route=product/allproduct">جميع الفئات</a></li>
                        <li><a href="https://www.beautycaree.com/skin-whitening-products">تبييض وتفتيح البشرة</a></li>
                                <li><a href="https://www.beautycaree.com/Collagen-Anti-Aging-Products">منتجات الكولاجين</a></li>
                                <li><a href="https://www.beautycaree.com/العناية-بالبشرة">العناية بالبشرة</a></li>
                                <li><a href="https://www.beautycaree.com/الرشاقة-والتخسيس">الرشاقة والتخسيس</a></li>
                                <li><a href="https://www.beautycaree.com/Hair-Nails-Care">الشعر والاظافر</a></li>
                                <li><a href="https://www.beautycaree.com/for-her">منتجات نسائية</a></li>
                                <li><a href="https://www.beautycaree.com/for-him">منتجات رجالية </a></li>
                        <li><a href="?route=product/special">تخفيضات</a></li>
        <li class="register"><a href="https://www.beautycaree.com/account/register">تسجيل جديد</a></li>
    </ul>
</nav>-->
</div>   
    
<nav id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-8">
                <ul class="list-inline">
                    <li class="se">
						<form id="searchForm" class="searchForm" action="<?php echo url('search'); ?>" method="POST">
							<div id="search" class="input-group">
								<input type="text" name="q" value="" placeholder="بحث" class="form-control input-lg" />
								<span class="input-group-btn">
								<button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</li>
                    <li class="hidden-xs register"><a href="<?php echo url('customer/account/login'); ?>">تسجيل الدخول</a></li>
                </ul>  
            </div>
            <!--<div class="col-xs-6 cart_mob">
                <div id="cart" class="btn-group btn-block">
    <button type="button" data-toggle="dropdown" data-loading-text="جاري ..." class="cart__button btn btn-inverse btn-lg dropdown-toggle">
        
      <span id="cart-total"><p>المجموع : </p>0<span class="cur-sm">ريال</span></span>
    </button>
 <div class="cart__overlay" hidden></div>
    <section class="cart__body" hidden>
        <div class="cart__header"> 
    	    <button title="Close">
    			<div></div>
    		</button>
    	</div>
                <p class="head"></p>

        <ul class="list-unstyled">
                <li>
      <p class="text-center empty">سلة الشراء فارغة !</p>
    </li>
            </ul>

    </section>
</div>
            </div>-->
        </div>
    </div>
</nav>


<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3 col-xs-12">
                <div id="logo">
                    <a href="<?php echo url('/m/' . $market->shop_name); ?>"><img src="<?php echo assets('blog/images/logos/' . $market->shop_logo); ?>" title="<?php  echo $market->shop_name; ?>" alt="<?php  echo $market->shop_name; ?>" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
    			<div class="row info">
    				<div class="col-md-4 col-sm-4 col-xs-4">
    					<div class="image image1">
    						<a href="#"><img src="<?php echo assets('users/images/Untitled-2.png'); ?>" class="wow flip" /></a>
    					</div>
    					<div class="text">
    						<span>خدمة عملاء</span>
                            <p>طوال أيام الأسبوع</p>
    					</div>
    				</div>
    				<div class="col-md-4 col-sm-4 col-xs-4">
    					<div class="image">
    						<a href="#"><img src="<?php echo assets('users/images/Untitled-4.png'); ?>" class="wow flip"  /></a>
    					</div>
    					<div class="text">
    						<span>شحن مجانى</span>
                            <p>للطلبات فوق 1000 ريال لجميع الدول</p>
        					</div>
    				</div>
    				<div class="col-md-4 col-sm-4 col-xs-4">
    					<div class="image">
    						<a href="#" ><img c src="<?php echo assets('users/images/Untitled-1.png'); ?>" class="wow flip" /></a>
    					</div>
    					<div class="text">
    						<span>ماركات أصلية 100%</span>
    						<p>علامات تجارية من جميع انحاء العالم</p>
    					</div>
    				</div>
    			</div>
            </div>
            <!--<div class="col-sm-3 col-md-2 hidden-xs">
                <div id="cart" class="btn-group btn-block">
    <button type="button" data-toggle="dropdown" data-loading-text="جاري ..." class="cart__button btn btn-inverse btn-lg dropdown-toggle">
        
      <span id="cart-total"><p>المجموع : </p>0<span class="cur-sm">ريال</span></span>
    </button>
 <div class="cart__overlay" hidden></div>
    <section class="cart__body" hidden>
        <div class="cart__header"> 
    	    <button title="Close">
    			<div></div>
    		</button>
    	</div>
                <p class="head"></p>

        <ul class="list-unstyled">
                <li>
      <p class="text-center empty">سلة الشراء فارغة !</p>
    </li>
            </ul>

    </section>
</div>
            </div>-->
        </div>
    </div>
</header>
<!--
<nav id="menu" class="navbar hidden-xs">
    <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="https://www.beautycaree.com/"><img src="catalog/view/theme/default/image/home.png" /></a></li>
                <li><a href="?route=product/allproduct">جميع الفئات</a></li>
                <li><a href="https://www.beautycaree.com/skin-whitening-products">تبييض وتفتيح البشرة</a></li>
                <li><a href="https://www.beautycaree.com/Collagen-Anti-Aging-Products">منتجات الكولاجين</a></li>
                <li><a href="https://www.beautycaree.com/العناية-بالبشرة">العناية بالبشرة</a></li>
                <li><a href="https://www.beautycaree.com/الرشاقة-والتخسيس">الرشاقة والتخسيس</a></li>
                <li><a href="https://www.beautycaree.com/Hair-Nails-Care">الشعر والاظافر</a></li>
                <li><a href="https://www.beautycaree.com/for-her">منتجات نسائية</a></li>
                <li><a href="https://www.beautycaree.com/for-him">منتجات رجالية </a></li>
                <li><a href="?route=product/special">تخفيضات</a></li>
            </ul>
        </div>
    </div>
</nav>

-->
                    
				<div class="container-fluid">
<div id="slider0" class="nivoSlider">
<?php foreach($seller_Slider as $slider) { ?>
    <div class="item">
        <a class="nivo-imageLink" href="<?php echo $slider->link; ?>"><img src="<?php echo assets('blog/images/' . $slider->image); ?>" alt="<?php echo $slider->title; ?>" class="img-responsive"  /></a>
      </div>
    <?php } ?>
  </div>
</div>
<script type="text/javascript"> 
    $('#slider0').nivoSlider({

        }); 
    
</script><style>
.bannergroup, .bannergroup > * {
    box-sizing: border-box;
}
.bannergroup:before, .bannergroup:after, .bannergroup > *:before, .bannergroup > *:after  {
    box-sizing: border-box;
}
.bannergroup:before,
.bannergroup:after {
  display: table;
  content: " ";
}
.bannergroup:after,
.bannergroup:after {
  clear: both;
}
.bannergroup > div { float: left; }
.bannergroup img { width: 100%; image-rendering: optimizeQuality; }
.bannergroup div:last-child { padding-right: 0!important;}
@media screen and (max-width: 480px) {
.bannergroup > div { width: 100%!important; }
}
</style>

<div class="container-fluid">
<div class="banner">
<div class="owl-carousel owl-theme">
<?php foreach($Sellerbanners as $banner) { ?>
	<div class="item"> 
		<a href="<?php echo $banner->link; ?>"><img src="<?php echo assets('blog/images/' . $banner->image); ?>" alt="ageless" title="ageless" /></a>
	</div>    
<?php } ?>	
</div>
</div>
</div>
<script>
    $('.banner .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    rtl:true,
    dots:false,
    nav:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:3,
        },
        992:{
            items:3,
        },
        1191:{
            items:3,
        }
    }
})
    
</script>
<div class="latest">
    <div class="container">
		<div class="title">
			<h3>أضيف مؤخراً</h3>
		</div>
		<div class="owl-carousel owl-theme">
		<?php foreach($POST_Seller as $post) { ?>
			<div class="product-thumb transition">
				<div class="image">
					<a href="<?php echo url(seo($post->en_title) . '/' . $post->id); ?>"><img src="<?php echo assets('blog/images/posts/' . $post->image); ?>" alt="<?php echo $post->title; ?>" title="<?php echo $post->title; ?>" class="img-responsive" /></a>
				</div>
				<div class="caption">
				<h4><a href="<?php echo url(seo($post->en_title) . '/' . $post->id); ?>"><?php echo $post->title; ?></a></h4>
				<p><?php echo $post->details; ?></p>
				</div>
				<div class="button-group">
					<button class="price">
						<?php 
						if($post->price2 == 0 || empty($post->price2)) {
							echo $post->price1; 
						} else {
							echo $post->price2; 
						}
						?> <span class="cur-sm">ريال</span>
					</button>
					<form action="<?php echo url('/checkout/cart/submit'); ?>" method="POST">
						<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
						<input type="hidden" class="" name="code" value="<?php echo $post->code; ?>" />
						<input type="hidden" class="" name="seller_id" value="<?php echo $post->seller_id; ?>" />
						<button class="Julie-btn basic" type="submit"> <span>اضافة للسلة</span></button>
					</form>
				</div>
			</div>
		<?php } ?>
  </div>
</div>
</div>
<script>
    $('.latest .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    rtl:true,
    dots:false,
    nav:true,
    autoplay:true,
    navText:['<img src="catalog/view/theme/default/image/arrow-right.png"/>','<img src="catalog/view/theme/default/image/arrow-left.png"/>'],
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        768:{
            items:4,
        },
        992:{
            items:4,
        },
        1191:{
            items:5,
        }
    }
})
    
</script>

<div class="bestseller">
	<div class="container">
		<div class="title">
			<h3>الأكثر مبيعاً</h3>
		</div>
		<div class="owl-carousel owl-theme">
		<?php foreach($POSTBestSeller_Seller as $post) { ?>
			<div class="product-thumb transition">
				<div class="image">
					<a href="<?php echo url(seo($post->en_title) . '/' . $post->id); ?>"><img src="<?php echo assets('blog/images/posts/' . $post->image); ?>" alt="<?php echo $post->title; ?>" title="<?php echo $post->title; ?>" class="img-responsive" /></a>
				</div>
				<div class="caption">
					<h4><a href="<?php echo url(seo($post->en_title) . '/' . $post->id); ?>"><?php echo $post->title; ?></a></h4>
					<p><?php echo $post->details; ?></p>
				</div>
				<div class="button-group">
					<button class="price">
					<?php if($post->price2 == 0 || empty($post->price2)) { ?>
						<span class="price-new"><?php echo $post->price1; ?><span class="cur-sm">ريال</span></span>
					<?php } ?>
					<?php if($post->price2 > 0) { ?>
						<span class="price-old"><?php echo $post->price1; ?><span class="cur-sm">ريال</span></span>
						<span class="price-new"><?php echo $post->price2; ?><span class="cur-sm">ريال</span></span>
					<?php } ?>
					</button>
					<form action="<?php echo url('/checkout/cart/submit'); ?>" method="POST">
						<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
						<input type="hidden" class="" name="code" value="<?php echo $post->code; ?>" />
						<button class="Julie-btn basic" type="submit"> <span>اضافة للسلة</span></button>
					</form>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>
<script>
    $('.bestseller .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    rtl:true,
    dots:false,
        autoplay:true,

    nav:true,
    navText:['<img src="catalog/view/theme/default/image/arrow-right.png"/>','<img src="catalog/view/theme/default/image/arrow-left.png"/>'],
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        768:{
            items:3,
        },
        991:{
            items:4,
        },
        1191:{
            items:5,
        },
        1366:{
             items:5,
        }
    }
})
    
</script>
<div class="special">
    <div class="container">
		<div class="title">
			<h3>المنتجات</h3>
		</div>
		<div class="owl-carousel owl-theme">
		<?php foreach($POSTِAll_Seller as $post) { ?>
			<div class="product-thumb transition">
				<div class="image">
					<a href="<?php echo url(seo($post->en_title) . '/' . $post->id); ?>"><img src="<?php echo assets('blog/images/posts/' . $post->image); ?>" alt="<?php echo $post->title; ?>" title="<?php echo $post->title; ?>" class="img-responsive" /></a>
				</div>
				<div class="caption">
					<h4><a href="<?php echo url(seo($post->en_title) . '/' . $post->id); ?>"><?php echo $post->title; ?></a></h4>
					<p><?php echo $post->details; ?></p>
                </div>
				<div class="button-group">
					<button class="price">
					<?php if($post->price2 == 0 || empty($post->price2)) { ?>
						<span class="price-new"><?php echo $post->price1; ?><span class="cur-sm">ريال</span></span>
					<?php } ?>
					<?php if($post->price2 > 0) { ?>
						<span class="price-old"><?php echo $post->price1; ?><span class="cur-sm">ريال</span></span>
						<span class="price-new"><?php echo $post->price2; ?><span class="cur-sm">ريال</span></span>
					<?php } ?>
					</button>
					<form action="<?php echo url('/checkout/cart/submit'); ?>" method="POST">
						<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
						<input type="hidden" class="" name="code" value="<?php echo $post->code; ?>" />
						<button class="Julie-btn basic" type="submit"> <span>اضافة للسلة</span></button>
					</form>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>
<script>
    $('.special .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    rtl:true,
    dots:false,
    nav:true,
    navText:['<img src="catalog/view/theme/default/image/arrow-right.png"/>','<img src="catalog/view/theme/default/image/arrow-left.png"/>'],
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        768:{
            items:4,
        },
        992:{
            items:4,
        },
        1191:{
            items:5,
        }
    }
})
    
</script>
</html>