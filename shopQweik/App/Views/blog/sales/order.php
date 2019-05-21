		<div class="col-sm-9 col-12">
			<div class="card mt-5 mb-5 p-2">
				<div class="address-add">
					<h2 class="address-title">طلب الشراء #<?php echo $code; ?> - <?php 
						if($status == 0){
						echo "معلقة";
					} else if($status == 1){
						echo "تم الشحن";
					} else if($status == 2){
						echo "ملغية";
					} else {
						echo "معلقة"; 
					}
					?></h2>
					<a href="" class="link-print" onClick="window.print()">طباعة طلب الشراء</a>
				</div>
				
				<div class="my-order-box">
					<dl class="order-info"><dt>عن هذا الامر:</dt>
						<dd>
							<ul id="order-info-tabs">
								<li class="current">بيانات طلب الشراء</li>
							</ul>
						</dd>
					</dl>
					<p class="order-date">امر التاريخ:<?php echo $created; ?></p>
					<div class="row clearfix">
					<div class="grid_4 alpha">
					<div class="box">
						<div class="box-title">
							<h2>عنوان الشحن</h2>
						</div>
						<div class="box-content">
							<address><?php echo $first_name . " " . $last_name; ?><br>

							<?php echo $order->street; ?><br>



							<?php echo $city; ?>,  <?php echo $region; ?>, <?php echo $building_number; ?><br>
							<?php if($country == "SA") {echo "المملكة العربية السعودية"; }?><br>
							T: +<?php echo $co_country . $mobile; ?>

			</address>
			</div>
		</div>
	</div>
	
	<div class="grid_4 omega">
		<div class="box">
			<div class="box-title">
				<h2>طريقة الشحن</h2>
			</div>
			<div class="box-content">
				<?php 
				if($shipping_method == "Unified"){
					echo "تكلفة الشحن الموّحدة - موّحدة";
				}
				?>
																</div>
		</div>
	</div>
	<div class="clear"></div>
		<div class="grid_4 alpha">
		<div class="box">
			<div class="box-title">
				<h2>عنوان الفاتورة</h2>
			</div>
			<div class="box-content">
				<address><?php echo $first_name . " " . $last_name; ?><br>

<?php echo $order->street; ?><br>


<?php echo $city; ?>,  <?php echo $region; ?>, <?php echo $building_number; ?><br>
<?php if($country == "SA") {echo "المملكة العربية السعودية"; }?><br>
T: +<?php echo $co_country . $mobile; ?>


</address>
			</div>
		</div>
	</div>
		<div class="grid_4 omega">
		<div class="box box-payment">
			<div class="box-title">
				<h2>طريقة الدفع</h2>
			</div>
			<div class="box-content">
				<p>
    الدفع عند الاستلام<br></p><div>
        الدفع عند الاستلام <span class="price"><?php echo $price_shipments_pay_hand; ?>  ر.س</span>        </div>
            
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
			</div>
			</div>	
<div class="order-items order-details mb-5">
<table class="data-table" id="my-orders-table" summary="اوامر العناصر">
<thead>
<tr><th>اسم المنتج</th>
<th>معرف المنتج</th>
<th class="a-right">السعر</th>
<th class="a-center">الكمية</th>
<th class="a-right">المجموع </th>
</tr></thead><tfoot><tr class="subtotal"><td colspan="4" class="a-right">
المجموع                     </td>
<td class="last a-right">
<span class="price"><?php echo $total_price; ?>  ر.س</span>                    </td>
</tr><tr class="phoenix_cashondelivery_fee"><td colspan="4" class="a-right">
رسوم الدفع عند الاستلام                    </td>
<td class="last a-right">
<span class="price"><?php echo $price_shipments_pay_hand; ?>  ر.س</span>                    </td>
</tr><tr class="shipping"><td colspan="4" class="a-right">
الشحن و التسليم                    </td>
<td class="last a-right">
<span class="price"><?php echo $shipments_price; ?>  ر.س</span>                    </td>
</tr><tr class="grand_total"><td colspan="4" class="a-right">
<strong>المجموع الكلي</strong>
</td>
<td class="last a-right">
<strong><span class="price"><?php 
$sh = $shipments_price;
$ha = $price_shipments_pay_hand;
$total = $total_price + $sh + $ha; 

echo $total; ?>  ر.س</span></strong>
</td>
</tr></tfoot><tbody>
<tr><td><h3 class="product-name"><?php echo $product_title; ?></h3>
<dl class="item-options"><dt>Size</dt>
<dd><?php echo $weight; ?> مل</dd>
</dl></td>
<td><?php echo $code; ?></td>
<td class="a-right">
<span class="price-incl-tax">
<span class="cart-price">
<span class="price"><?php echo $price; ?>  ر.س</span>                    
</span>
</span>
</td>
<td class="a-right">
<span class="nobr">
<strong><?php echo $quantity; ?></strong><br></span>
</td>
<td class="a-right">
<span class="price-incl-tax">
<span class="cart-price">
<span class="price"><?php echo $total_price; ?>  ر.س</span>                    
</span>
</span>
</td>
</tr></tbody></table>
</div></div></div></div>