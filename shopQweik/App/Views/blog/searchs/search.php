<div class="search-s">
	<div class="container">
		<div class="row">
		<?php foreach($searchs as $search) { ?>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid">
					<div class="product-image">
						<a href="#" class="image">
							<img class="pic-1" src="<?php echo assets('blog/images/posts/' . $search->image); ?>" alt="<?php echo $search->title; ?>">
							<img class="pic-2" src="<?php echo assets('blog/images/posts/' . $search->imageOne); ?>" alt="<?php echo $search->title; ?>">
						</a>
						<span class="product-new-label">New</span>
						<ul class="social">
							<li><a href="<?php echo url('/brands/' . seo($search->en_title) . '/' . $search->id); ?>" data-tip="Quick View"><i class="fas fa-search"></i></a></li>
							<!--<li><a href="" data-tip="Add to Wishlist"><i class="far fa-heart"></i></a></li>
							<li><a href="" data-tip="Compare"><i class="fas fa-random"></i></a></li>-->
						</ul>
					</div>
					<div class="product-content">
						<h3 class="title"><a href="<?php echo url('/brands/' . seo($search->en_title) . '/' . $search->id); ?>"><?php echo $search->title; ?></a></h3>
						<div class="price"><?php echo $search->price1; ?>  ر.س</div>
						<ul class="rating">
							<li class="fas fa-star"></li>
							<li class="fas fa-star"></li>
							<li class="fas fa-star"></li>
							<li class="fas fa-star"></li>
							<li class="fas fa-star"></li>
						</ul>
						<!--<a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>-->
						<form action="<?php echo url('/checkout/cart/submit'); ?>" method="POST">
							<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
							<input type="hidden" class="" name="code" value="<?php echo $search->code; ?>" />
							<button type="submit" class="add-to-cart">أشتري الأن</button>
						</form>
						
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>


<!--<div class="content-wrapper">
<div id="hoverOverlay"></div>
<div class="container_12">
<div class="main-container col2-left-layout">

<div class="home-products-box">
<div class="col-sm-12">
	<div class="container">
			<div id="newProducts" class="swiper-container">
				<div class="swiper-wrapper" style="width:2400%;">
				<?php //foreach($searchs as $search) { ?>
					<div class="swiper-slide" style="width: 163px;float: left; display: block;">
					<a data-ajax="false" class="product" href="<?php //echo url('/brands/' . seo($search->en_title) . '/' . $search->id); ?>">
						<img src="<?php //echo assets('images/' . $search->image); ?>" alt=""><span><?php //echo $search->title; ?></span>
						<span class="price-box">
																										<span class="price"><?php //echo $search->price1; ?>  ر.س</span>
						</span>
					</a>
					</div>
				<?php// } ?>
				</div>
			</div>
		</div>
	</div>
</div>-->
						