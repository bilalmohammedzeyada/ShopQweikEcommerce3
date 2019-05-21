<div class="main content-wrapper">
	<div id="hoverOverlay"></div>
     <div class="container_12">
        <div class="main-container col1-layout">
			<div class="row clearfix">
				<div class="grid_12"></div>
			</div>
            <div class="clear"></div>
			<div class="row clearfix">
				<div class="grid_12 col-main">
										<div id="algolia-autocomplete-container" class="mangolia"></div>
<div class="cart">
	<div class="page-title title-buttons">
		<h1 class="text-center">
			<span class="cart-title">عربة التسوق</span>
			<span class="h-assistance">هل تحتاج مساعدة؟ <?php echo $phone; ?></span>
		</h1>
		<a class="cart-continue" href="<?php echo url("/"); ?>"><i></i> متابعة التسوق</a>
		<?php 
		if($countCartsUser->total > 0){ ?>
		<ul class="checkout-types"><li>    <button type="button" title="المواصلة لإنهاء الشراء" class="button btn-proceed-checkout btn-checkout" onclick="window.location='<?php echo url("/easycheckout"); ?>';"><span><span>المواصلة لإنهاء الشراء</span></span></button>
		</li>
		</ul>
		<?php 
		}
		?>

												
												<br class="clear"></div>
			
			
			<form action="<?php echo url("/checkout/cart/submit"); ?>" method="post">
		<input name="form_key" type="hidden" value="AizkxeXcbeE0YbWW"><fieldset><table id="shopping-cart-table" class="data-table cart-table"><col width="60%"><col width="10%" class="col-one"><col width="10%" class="col-one"><col width="10%" class="col-one"><tbody>
		<?php 
		foreach($carts as $cart) { ?>
		<tr>
		<td class="product-box">
        <div class="product-box">
            <a href="<?php echo url('/brands/' . seo($cart->product_en_title) . '/' . $cart->id); ?>" title="<?php echo $cart->product_title; ?>" class="product-image"><img src="<?php echo assets('images/' . $cart->img); ?>" data-srcx2="<?php echo assets('images/' . $products->img); ?>" alt="<?php echo $cart->product_title; ?>"></a>

            <h2 class="product-name">
                            <a href="https://www.goldenscent.com/mancera-velvet-vanilla-perfume-for-men-and-women-eau-de-parfum.html"><?php echo $cart->product_title; ?></a>
                        </h2>
                        <dl class="item-options"><dt>الحجم</dt>
                <dd><?php echo $cart->weight; ?> مل                                    </dd>
                            </dl></div>
    </td>

        <td class="a-center information">
                        <span class="cart-label">Quantity:</span>
        <div class="quantity-box">
           <!-- <div class="quantity-decrease" >
				<i class="fa fa-minus-square-o"></i>
			</div>-->
			<br />
			<form action="<?php echo url('/checkout/cart/plus') . '/' . $cart->id; ?>" method="POST" class="form">
			<!--<div id="form-results"></div>-->
            <input name="quantity_cart_id" value="<?php echo $cart->quantity; ?>" size="4" title="الكمية" maxlength="12">
				<button type="button" class="button submit-btn">
				<div class="quantity-increase" onclick="qtyUp1679655426()"><i class="fa fa-plus-square-o"></i></div>
				</button>
			</form>
			
            <div class="clear"></div>
        </div>

        <div class="clear"></div>
        <script type="text/javascript">
           /*  function qtyDown999559548(){
                qty_el = document.getElementById('qty-999559548');
                qty = qty_el.value;
                if( !isNaN( qty ) && qty > 1 ){
                    qty_el.value = parseInt(qty_el.value)-1                }
                return false;
            }
            function qtyUp999559548(){
                qty_el = document.getElementById('qty-999559548');
                qty = qty_el.value;
                if( !isNaN(qty) && qty < 6 ) {
                    qty_el.value = parseInt(qty_el.value)+1                }
                return false;
            } */
        </script></td>
        <!--Sub total starts here -->
            <td>
                            <span class="cart-price">
                <span class="subtotal-label">المجموع الفرعي:</span>
        
                                                <span class="price"><?php 
								
								$q = $cart->quantity;
								$q2 = $cart->product_price;
								$q3 = $q * $q2;
								echo $q3; ?>  ر.س</span>                            
        </span>


            </td>
        <td class="remove">
         <a data-product-id="4409" href="<?php echo url('checkout/cart/delete/') . "/" . $cart->id; ?>" title="إزالة البند" class="btn-remove2"><i class="fa fa-times"></i></a>
                </td>
</tr>
<?php 
} 
?>

</tbody></table><script type="text/javascript">/* decorateTable('shopping-cart-table') */</script></fieldset><button style="" id="updateCart" type="button" onclick="window.location='<?php echo url("/checkout/cart"); ?>';" title="تحديث عربة التسوق" class="button btn-update"><span><span>تحديث عربة التسوق</span></span></button>
	</form>
			<div class="clearfix">
				<div class="clearfix">
			<section class="grid_4 alpha"><p> </p>
<table style="width: 310px;" border="0"><tbody><tr><td>
<p> </p>
</td>
</tr></tbody></table><p> </p></section><section class="grid_4 alpha"><div class="gift-box">
						<!--<section class="shipping">
    <div class="ie-fix">
		<header class="cart-blocks-title">
			<h2>تقدير الشحن والضريبة</h2>
		</header>
        <div class="shipping-form">
           <form action="https://www.goldenscent.com/checkout/cart/estimatePost/" method="post" id="shipping-zip-form">
                <p>قم بإدخال وجهتك حتى تحصل على تقدير للشحن.</p>
                <ul class="form-list">
                    <li>
                        <label for="country" class="required"><em>*</em>بلد</label>
                        <div class="input-box">
                            <select name="country_id" id="country" class="validate-select" title="بلد" ><option value="" > </option><option value="AE" >الإمارات العربية المتحدة</option><option value="KW" >الكويت</option><option value="SA" selected="selected" >المملكة العربية السعودية</option></select>                        </div>
                    </li>
                                    <li>
                        <label for="region_id">الولاية - المحافظة</label>
                        <div class="input-box">
                            <select id="region_id" name="region_id" title="الولاية - المحافظة" style="display:none;">
                                <option value="">من فضلك اختر منطقة, ولاية أو مقاطعة</option>
                            </select>
                           <script type="text/javascript">
                           //<![CDATA[
                               $('region_id').setAttribute('defaultValue',  "");
                           //]]>
                           </script>
                           <input type="text" id="region" name="region" value=""  title="الولاية - المحافظة" class="input-text" style="display:none;" />
                       </div>
                    </li>
                                                    <li>
                        <label for="city">المدينة</label>
                        <div class="input-box">
                            <input class="input-text" id="city" type="text" name="estimate_city" value="" />
                        </div>
                    </li>
                                    <li>
                        <label for="postcode">الرمز البريدي</label>
                        <div class="input-box">
                            <input class="input-text validate-postcode" type="text" id="postcode" name="estimate_postcode" value="31444" />
                        </div>
                    </li>
                </ul>
                <div class="buttons-set">
                    <button type="button" title="احصل على تقدير" onclick="coShippingMethodForm.submit()" class="button"><span><span>احصل على تقدير</span></span></button>
                </div>
            </form>
            <script type="text/javascript">
            //<![CDATA[
                new RegionUpdater('country', 'region', 'region_id', {"config":{"show_all_regions":true,"regions_required":["AT","CA","EE","FI","FR","DE","LV","LT","RO","ES","CH","US"]}});
            //]]>
            </script>
    
                        <form id="co-shipping-method-form" action="https://www.goldenscent.com/checkout/cart/estimateUpdatePost/">
                <dl class="sp-methods">
                                            <dt>تكلفة الشحن الموّحدة</dt>
                        <dd>
                            <ul>
                                                            <li>
                                                                           <input name="estimate_method" type="radio" value="flatrate_flatrate" id="s_method_flatrate_flatrate" checked="checked" class="radio" />
                                        <label for="s_method_flatrate_flatrate">موّحدة                                                                                                                        <span class="price">0  ر.س</span>                                                                                </label>
                                                                   </li>
                                                        </ul>
                        </dd>
                                    </dl>
                <div class="buttons-set">
                    <button type="submit" title="تحديث الإجمالي" class="button" name="do" value="تحديث الإجمالي"><span><span>تحديث الإجمالي</span></span></button>
                </div>
                <input name="form_key" type="hidden" value="AizkxeXcbeE0YbWW" />
            </form>
                        <script type="text/javascript">
            //<![CDATA[
                var coShippingMethodForm = new VarienForm('shipping-zip-form');
                var countriesWithOptionalZip = ["KW","SA","AE"];
    
                coShippingMethodForm.submit = function () {
                    var country = $F('country');
                    var optionalZip = false;
    
                    for (i=0; i < countriesWithOptionalZip.length; i++) {
                        if (countriesWithOptionalZip[i] == country) {
                            optionalZip = true;
                        }
                    }
                    if (optionalZip) {
                        $('postcode').removeClassName('required-entry');
                    }
                    else {
                        $('postcode').addClassName('required-entry');
                    }
                    return VarienForm.prototype.submit.bind(coShippingMethodForm)();
                }
            //]]>
            </script>
        </div>
    </div>
</section>-->					</div>

<?php 
	if($countCartsUser->total > 0){ ?>
<div class="coupon-box">
	<form id="discount-coupon-form" action="https://www.goldenscent.com/checkout/cart/couponPost/" method="post">
    <div class="discount">
		<h2>كوبونات الخصم</h2>
        <div class="discount-form">
            <!-- <label for="coupon_code">إذا كنت تملك كوبونا فقم بإدخال الكود.</label> -->
            <input type="hidden" name="remove" id="remove-coupone" value="0"><div class="input-box">
                <input class="input-text" id="coupon_code" name="coupon_code" placeholder="إذا كنت تملك كوبونا فقم بإدخال الكود." value=""><button type="button" title="استخدام كوبون" class="apply-btn" onclick="discountForm.submit(false)" value="نفذ"><span><span>نفذ</span></span></button>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
//<![CDATA[
/* var discountForm = new VarienForm('discount-coupon-form');
discountForm.submit = function (isRemove) {
    if (isRemove) {
        $('coupon_code').removeClassName('required-entry');
        $('remove-coupone').value = "1";
    } else {
        $('coupon_code').addClassName('required-entry');
        $('remove-coupone').value = "0";
    }
    return VarienForm.prototype.submit.bind(discountForm)();
} */
//]]>
</script></div>
							</section>
						
<section class="grid_4">
		<div class="row totals">
		<div class="totals-border">
		<div class="totals-wrapper">                    <table id="shopping-cart-totals-table"><col><col><tfoot><tr><td style="" colspan="1">
		<strong>المجموع الكلي</strong>
</td>
    <td style="" class="a-right">
        <strong><span class="price"><?php 
		$totlalQPrice = $countPrice->total_price * $cart->quantity;
		$all = $totlalQPrice + $price_shipments_pay_hand + $shipments_price;
		$discountPrice = $discount_price;
		
		$totalPrice = $all - $discountPrice;
		echo trim($totalPrice, '-'); ?>  ر.س
		
		
		</span></strong>
    </td>
</tr><tr><td colspan="2" style="" class="a-right"><span class="vat-msg">تتضمن الضريبة وجميع الرسوم المستحقة</span></td>
    </tr></tfoot><tbody><tr><td style="" colspan="1">
        المجموع     </td>
    <td style="" class="sub-total-price a-right">
        <span class="price"><?php echo $countPrice->total_price * $cart->quantity; ?>  ر.س</span>    </td>
</tr><tr><td style="" colspan="1">
        رسوم الدفع عند الاستلام    </td>
    <td style="" class="a-right">
        <span class="price"><?php echo $price_shipments_pay_hand; ?>  ر.س</span>    </td>
</tr><tr class="summary-details-amrules summary-details" style="display:none;"><td class="a-right" colspan="1">
                <strong>خصم 10% عند إتمام الشراء</strong>                
            </td>
            <td class="a-right" rowspan="1">
                -<span class="price"><?php echo $discount_price; ?>  ر.س</span>            </td>
        </tr><tr class="summary-total "><td colspan="1" style="" class="a-right">
                     <div class="discount-code-cart">خصم</div>
            </td>
    <td style="" class="a-right">
                    <span class="price">‏-<?php echo $discount_price; ?>  ر.س</span>            </td>
</tr><tr><td style="" colspan="1">
        رسوم الشحن    </td>
    <td style="" class="a-right">
        <span class="price"><?php 
		/* if($cart->shipments_price){
			echo $cart->shipments_price;
		} else { */
			echo $shipments_price;
		//}
		?>  ر.س</span>    </td>
</tr><!--
    <tr>
        <td style="" colspan="1">الضريبة</td>
        <td style="" class="a-right"><span class="price"><span class="price">16  ر.س</span></span></td>
    </tr>
--></tbody></table></div>
	<ul class="checkout-types"><li>    <button type="button" title="المواصلة لإنهاء الشراء" class="button btn-proceed-checkout btn-checkout" onclick="window.location='<?php echo url("/easycheckout"); ?>';"><span><span>المواصلة لإنهاء الشراء</span></span></button>
</li>																					</ul></div>
				</div>
			</section>
			<?php } ?>
			
			</div>
				<div class="clear"></div>
		<section id="PaymentMethodsSection" class="container_12"><div class="grid_6 payment-methods-content">
		<span class="payment-methods-cart">طرق الدفع :</span>
		<div class="grid_1">
		    <img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/mastercard.svg" style="margin-top:-5px;"></div>
	    <div class="grid_1">
		    <img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/visa.svg"></div>
		<div class="grid_1">
		    <img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/mada-logo.png"></div>
		<div class="grid_1">
		    <img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/cash-on.svg"></div>
	    </div>
	    <div class="grid_5 payment-methods-content">
		<span class="payment-methods-cart">التحويل البنكي :</span>
		<div class="grid_1">
		    <img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/ahli.png"><p>البنك الأهلي 	    </p></div>
	    <div class="grid_1">
		    <img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/samba.png"><p>بنك سامبا</p>
		</div>
		<div class="grid_1">
		    <img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/rajhi.png"><p>بنك الراجحي</p>
	    </div>
		</div>
    </section></div>
<script>
	jQuery(function ($){
		$('.cart form').on('change', 'input.qty', function (e){
			$form = $(this).parents('form').find('#updateCart');
			$form.delay(100).click();
		}).on('click', '.quantity-increase i, .quantity-decrease i', function (e){
			$form = $(this).parents('form').find('#updateCart');
			$form.delay(100).click();
		});
	});
</script></div>
				<div class="clear"></div>
			</div>
        </div>
    </div>
</div>
<script>
	$(function ($){
		$('#nav-wide > li:last span').css({'color': '#EC008C', 'text-transform':'uppercase'});
	});
</script>