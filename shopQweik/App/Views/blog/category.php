<div class="categories-page">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12 col-12">
				<div class="cat-title">
					<h3><?php echo $category->name; ?></h3>
					<ul class="list-group -list">
					<?php foreach($subcategories AS $subcategory) { ?>
						<li class="list-group-item -list-item"><a href="<?php echo url('category/' . seo($subcategory->title) . '/' . $subcategory->id); ?>"><i class="fas fa-angle-left"></i><?php echo $subcategory->name; ?></a></li>
					<?php } ?>
					</ul>
				</div>
				<?php if(! empty($brands)) { ?>
				<hr />
				<?php } ?>
				<div id="accordion">
		<?php if(! empty($brands)) { ?>
		  <div class="card">
			<div class="card-header" id="headingOne">
			  <h5 class="mb-0">
				<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  الماركة
				</button>
			  </h5>
			</div>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
			  <div class="card-body -card">
				<form action="" method="">
				<?php foreach($brands as $brand){ ?>
					<div class="-head">
					  <input type="checkbox" data-target="<?php echo url('category/' . seo($category->title) . '/' . $category->id . '/?sort='. $brand->title); ?>" aria-label="Checkbox for following text input"> &nbsp;&nbsp;<label><?php echo $brand->title; ?></label>
					</div>
				<?php } ?>
				</form>
			</div>
		  </div>
		  <!--<div class="card">
			<div class="card-header" id="headingTwo">
			  <h5 class="mb-0">
				<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				  النوع
				</button>
			  </h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
			  <div class="card-body">
				<form action="" method="">
					<div class="-head">
					  <input type="checkbox" aria-label="Checkbox for following text input"> &nbsp;&nbsp;<label>رولكس</label>
					</div>
					<div class="-head">
					  <input type="checkbox" aria-label="Checkbox for following text input"> &nbsp;&nbsp;<label>رولكس</label>
					</div>
					<div class="-head">
					  <input type="checkbox" aria-label="Checkbox for following text input"> &nbsp;&nbsp;<label>رولكس</label>
					</div>
				</form>
			  </div>
			</div>
		  </div>-->
		  <!--<div class="card">
			<div class="card-header" id="headingThree">
			  <h5 class="mb-0">
				<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  المقاس
				</button>
			  </h5>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
			  <div class="card-body">
				<form action="" method="">
					<div class="-head">
					  <input type="checkbox" aria-label="Checkbox for following text input"> &nbsp;&nbsp;<label>رولكس</label>
					</div>
					<div class="-head">
					  <input type="checkbox" aria-label="Checkbox for following text input"> &nbsp;&nbsp;<label>رولكس</label>
					</div>
					<div class="-head">
					  <input type="checkbox" aria-label="Checkbox for following text input"> &nbsp;&nbsp;<label>رولكس</label>
					</div>
				</form>
			  </div>
			</div>
		  </div>-->
		  
		  <!--<div class="card">
			<div class="card-header" id="headingThree">
			  <h5 class="mb-0">
				<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  السعر
				</button>
			  </h5>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
			  <div class="card-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			  </div>
			</div>
		  </div>-->
		  
		</div>
		

		<?php } ?>
				
				
				
			</div>
			
			
			
		</div>	
			
			<div class="col-md-10 col-sm-12 col-12">
				<div class="cat-top-banners">
					<?php foreach ($ads AS $ad) { ?>
					<div class="cat-top-img">
						<a href="<?php echo $ad->link; ?>" class="ad" target="_blank">
							<img src="<?php echo assets('blog/images/' . $ad->image); ?>" alt="" />
						</a>
					</div>
					<?php } ?>
				</div>
				<hr />
			<!-- Category Page -->
			<?php if ($category->posts) { ?>
			<div id="category-page">
            <?php foreach ($category->posts AS $chunked_posts) { ?>
                <?php foreach ($chunked_posts AS $post) { $post->category = $category->name; ?>
				<div class="wrapper-product">
					<div class="col-sm-12 col-12">
						<a href="<?php echo url('/' . seo($post->en_title) . '/' . $post->id); ?>" class="image-box">
							<img src="<?php echo assets('blog/images/posts/' . $post->image); ?>" alt="<?php echo $post->title; ?>" />
						</a>
						<hr />
						<div class="-heading">
							<a class="-heading-a" href="<?php echo url('/' . seo($post->en_title) . '/' . $post->id); ?>"><?php echo $post->title; ?></a>
							<p class="-head-price"><?php echo $post->price1; ?>
								<span>ر.س</span>
							</p>
						</div>
						
						<form action="<?php echo url('/checkout/cart/submit'); ?>" method="POST">
							<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
							<input type="hidden" class="" name="code" value="<?php echo $post->code; ?>" />
							<button type="submit" class="osh-btn -full">أشتري الأن</button>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
                <?php } ?>
            <?php } ?>
			</div>
			
			<div class="clearfix"></div>
			<hr />
			<!-- Pagination Links -->
			<nav  aria-label="Page navigation example" class="text-center">
			  <ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" aria-label="Previous" tabindex="-1" href="<?php echo $url . 1; ?>" title="First Page">
						<span class="fa fa-angle-double-left"></span>
					</a>
				</li>
				<li class="page-item">
					<a class="page-link" aria-label="Previous" href="<?php echo $url . $pagination->prev(); ?>"><span class="fa fa-angle-left"></span></a>
				</li>
				
				<?php for ($page = 1; $page <= $pagination->last(); $page++) { ?>
					<li<?php echo $page == $pagination->page() ? ' class="active"': false; ?> >
						<a class="page-link" href="<?php echo $url . $page; ?>"><?php echo $page; ?></a>
					</li>
				<?php } ?>
				<li class="page-item">
				  <a class="page-link" href="<?php echo $url . $pagination->next(); ?>" aria-label="Next">
					<span class="fa fa-angle-right"></span>
				  </a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="<?php echo $url . $pagination->last(); ?>" aria-label="Next">
					<span class="fa fa-angle-double-right"></span>
				  </a>
				</li>
			  </ul>
			</nav>
			<!--/ Pagination Links -->
			<?php } else { ?>
				
				<div class="-full col-sm-12 col-12">
					لا توجد منتجات لهذا القسم
				</div>
			
            <?php } ?>
			
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
  $("input[type='checkbox']").change(function(){
  var item=$(this);    
  if(item.is(":checked"))
  {
    window.location.href= item.data("target")
  }    
 });
});
</script>
