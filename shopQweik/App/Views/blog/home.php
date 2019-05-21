<div class="container">
	<div class="menu-top">
		<div class="row">
			<div class="card h-100 col-lg-2 col-md-4 col-sm-12 col-12 wow fadeIn" data-wow-duration="3s">
				<div class="cat-item">
					<nav class="top-nav animated bounce">
						<ul id="menu-multilevel" class="main">
							<?php echo $show_menu; ?>
						</ul>
					</nav>
				</div>
			</div>
			
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 wow fadeIn" data-wow-duration="3s">
				<div class="-mi-content">
					<div class="hidden-xs slider-swiper carousel slide wow fadeInDown animated pulse"  data-wow-duration="3s" data-ride="carousel">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php foreach($firstSliders as $firstSlider) { ?>
								<div class="swiper-slide" data-swiper-autoplay="2000"><a href="<?php echo $firstSlider->link; ?>" target="_self">
								<img class=" d-block w-100" src="<?php echo assets('blog/images/' . $firstSlider->image); ?>" />
								</a></div>
								<?php } ?>
							
							</div>
							<div class="swiper-pagination"></div>
							<div class="swiper-pagination swiper-pagination-h"></div>
						</div>
					</div>
					<div class="mini-banner wow animated bounce" data-wow-duration="3s">
						<?php if(! empty($inHome)){
							foreach($inHome as $inHomeads) { ?>
						<div class="col-lg-3 col-md-3 col-12 w-100 h-100 mh-100">
							<a href="<?php echo $inHomeads->link; ?>"><img class="img-fluid img-thumbnail -img img-lg" src="<?php echo assets('blog/images/' . $inHomeads->image); ?>" /></a>
						</div>
						<?php } }?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>	
			
			<div class="col-lg-2 col-md-4 col-sm-12 col-12 wow animated zoomIn" data-wow-duration="3s">
				<div class="card-banners">
				<?php foreach($firstB as $FB) { ?>
					<div class="characteristic">
						<a style="text-decoration: none;" href="<?php echo $FB->link; ?>"><div class="iconography"><img class="lazy -loaded" src="<?php echo assets('blog/images/' . $FB->image); ?>" width="50" height="25" data-src="<?php echo assets('blog/images/' . $FB->image); ?>"></div><div class="description"><span title="<?php echo $FB->name; ?>" class="title"><?php echo $FB->name; ?></span> <span title="<?php echo $FB->ads_desc; ?>" class="text"><?php echo $FB->ads_desc; ?></span></div></a>
					</div>
				<?php } ?>
					
					<img  class=""  src="<?php echo assets('blog/images/slider/Teaser-ar.png'); ?>" />
				</div>
			</div>
		</div>
	</div>
	
	<div class="clearfix"></div>
</div>
<div class="container">
	<div class="middle-product">
		<div class="row mt-5 mb-5">
		<?php foreach($secondB as $SB) { ?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12 wow fadeIn" data-wow-duration="3s">
				<div class="card">
					<a style="text-decoration: none;" href="<?php echo $SB->link; ?>"><img  class="img-fluid img-thumbnail w-100 h-100 mh-100 img-lg"  src="<?php echo assets('blog/images/'. $SB->image); ?>" /></a>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>


<div class="clearfix"></div>
<div class="container">
	<div class="row mt-5">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-duration="3s">
			<div class="owl-carousel owl-theme">
			<?php foreach($posts as $post) { ?>
				<div class="item"><a style="text-decoration: none;" href="<?php echo url(seo($post->en_title) . '/' . $post->id); ?>"><img src="<?php echo assets('blog/images/posts/' . $post->image); ?>" class="img-fluid img-thumbnail w-100 h-100 mh-100 img-lg" />
					<span class="sw-title"><?php echo $post->title; ?></span>
					<p class="price-box">
						<span class="old-price">
						
						<?php 
						if($post->price2 == 0 || empty($post->price2)) {
							echo $post->price1; 
						} else {
							echo $post->price2; 
						}
						?>

						ر.س</span>
					</p></a>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
	<?php foreach($categoriesImages as $categoriesImage) { ?>
		<div class="products mt-5 wow fadeIn animated bounce img-fluid img-thumbnail" data-wow-duration="3s">
			<div class="col-sm-12 col-12">
				<a data-ajax="false" class="product" href="<?php echo url('category/' . seo($categoriesImage->title) . '/' . $categoriesImage->id); ?>">
					<img class="img-fluid" src="<?php echo assets('blog/images/categories/' . $categoriesImage->image); ?>" alt="">
				</a>
			</div>
		</div>
	<?php } ?>
	</div>
</div>


<div class="top-ca">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-12">
				<div class="-sub-two-ca wow fadeIn">
					<a class="product" href="<?php echo url('category/for-wemon/2'); ?>">
						<img class="" src="<?php echo assets('blog/images/posts/111.png'); ?>" alt="">
					</a>
				</div>
			</div>
			
			
			<div class="col-md-6 col-sm-6 col-12 wow fadeIn">
				<div class="-sub-two-ca2">
					<a data-ajax="false" class="product" href="<?php echo url('category/for-men/3'); ?>">
						<img class="" src="<?php echo assets('blog/images/posts/222.png'); ?>" alt="">
					</a>
				</div>
			</div>
			
		</div>
	</div>
</div>


<div class="bottom-ca">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-12 wow fadeIn" data-wow-duration="3s">
				<div class="-sub-ca">
					<a class="product" href="<?php echo url('category/shoes/19'); ?>">
						<img class="img-lg" src="<?php echo assets('blog/images/posts/11111.PNG'); ?>" alt="">
					</a>
				</div>
			</div>
			
			
			<div class="col-md-4 col-sm-6 col-12 wow fadeIn" data-wow-duration="3s">
				<div class="-sub-ca">
					<a class="product" href="<?php echo url('category/abaya/16'); ?>">
						<img class="img-lg" src="<?php echo assets('blog/images/posts/1111.PNG'); ?>" alt="">
					</a>
				</div>
			</div>
			
			
			<div class="col-md-4 col-sm-6 col-12 wow fadeIn" data-wow-duration="3s">
				<div class="-sub-ca">
					<a class="product" href="<?php echo url('category/sportswear/23'); ?>">
						<img class="img-lg" src="<?php echo assets('blog/images/posts/2222.PNG'); ?>" alt="">
					</a>
				</div>
			</div>
			
		</div>
	</div>
</div>


<script>
var mySwiper = new Swiper('.swiper-container', {
	autoplay: {
		delay: 5000,
	},
	pagination: {
		el: '.swiper-pagination-h',
		clickable: true,
	},
	zoom: {
maxRatio: 5,
},
	coverflowEffect: {
		rotate: 30,
		slideShadows: false,
	},
	flipEffect: {
		rotate: 30,
		slideShadows: false,
	 },
});
</script>

<script>
	$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
	lazyLoad:true,
	autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
   
</script>