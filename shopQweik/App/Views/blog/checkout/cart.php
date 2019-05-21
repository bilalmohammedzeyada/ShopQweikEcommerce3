<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-12 mt-5 mb-5">
		<?php 	
			if(isset($_SESSION["cart_item"])){
				$total_quantity = 0;
				$total_price = 0;
				?>
			<div class="card cart mt-5 mb-5">
				<h2 class="">سلتي</h2>
				<div class="table-responsive mt-5 mb-5">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">المنتج</th>
								<th scope="col">الكمية</th>
								<th scope="col">سعر الوحدة</th>
								<th scope="col">اجمالي المبلغ</th>
								<th scope="col">
									<div class="btnEmpty btn btn-danger">
										<a id="" href="<?php echo url('/checkout/cart/emptycart'); ?>">إفراغ السلة</a>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($_SESSION["cart_item"] as $item) {
							$item_price = $item["quantity"]*$item["price"]; ?>
							<tr>
								<td>
									<div class="-img-box">
										<a href=""><img class="-img" src="<?php echo assets('blog/images/posts/' . $item["image"]); ?>" alt="<?php echo $item["title"]; ?>" /></a>
										<div class="product-details">
											<span class="seller-name">البائع:</span><span class="seller-name">البائع:</span>
											<p><a href="<?php echo url('/' . seo($item["en_title"]) . '/' . $item["product_id"]); ?>"><?php echo $item["title"]; ?></a></p>
										</div>
									</div>
								</td>
								<td>
									<div class="quantity">
										<div class="quantity-box">
											<input class="input-text qty" id="input-quantity-<?php echo $cart->id; ?>" disabled value="<?php echo $item["quantity"]; ?>" size="4" title="الكمية" maxlength="12">			
											<div class="clear"></div>
										</div>
									</div>
								</td>
								<td>
									<div class="unit-price">
										<p><?php echo "$ ".$item["price"]; ?></p> <span>ريال سعودي</span>
									</div>
								</td>
								<td>
									<div class="subtotal"><?php echo "$ ". number_format($item_price,2); ?></div>
								</td>
								<td>
									<div class="deleted">
										<a href="<?php echo url('/checkout/cart/deleteid/?code='. $item["code"]) ; ?>" title="إزالة البند" class="btn-remove2"><i class="fa fa-times"></i></a>
									</div>
								</td>
							</tr>
						<?php 
							$total_price += ($item["price"]*$item["quantity"]);
						} 
						?>
						
						
						</tbody>
					</table>
					
					
					<div class="total-price mt-5 mb-5">
        					<span class="seller-name">المجموع الكلي:  &nbsp;&nbsp;&nbsp;&nbsp;</span>
        					<p><?php echo "$ ".number_format($total_price, 2); ?></p>&nbsp; <span>ريال سعودي</span>
        					
        					<a class="osh-btn" href="<?php echo url("/easycheckout"); ?>">متابعة الشراء</a>
        				</div>
				</div>
				</div>
				
			<?php } else { ?>
		    	<div class="col-md-12 col-sm-12 col-12 mt-5 mb-5">
		    	    <div class="card mt-5 mb-5">
		    	        
		    	        <div class="card-body">
		    	            لا يوجد منتجات في سلتك 
		    	            <a class="osh-btn" href="<?php echo url('/'); ?>">متابعة التسوق</a>
		    	            
		    	        </div>
		    	    </div>
		    	    <br />
		    	    <br />
		    	</div>
			    
			
			<?php } ?>
		</div>
	</div>
</div>