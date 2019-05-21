	<div class="buyThisOrders">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-12">
					<h5 class="h5">متابعة الشراء</h5>
					<div class="card">
						<div class="card-header" id="list_address_details">
						تفاصيل العنوان
						</div>
						<div class="card-body" id="address-details">
							<form action="<?php echo url('/easycheckout/confirmOrder'); ?>" method="POST" class="needs-validation form" novalidate>
							<div id="form-results"></div>

				<div class="row">
				  <div class="col-md-6 mb-3">
					<label for="firstName">الأسم الأول</label>
					<input type="text" class="form-control" id="firstName" name="first_name" value="<?php echo $user->first_name; ?>" required>
					<div class="error-fs" id="error-fs"></div>
				  </div>
				  <div class="col-md-6 mb-3">
					<label for="lastName">أسم العائلة</label>
					<input type="text" class="form-control" id="lastName" name="last_name" value="<?php echo $user->last_name; ?>" required>
					<div class="error-fs" id="error-fs"></div>
				  </div>
				</div>

				<div class="mb-3">
				  <label for="email">البريد الألكتروني</label>
				  <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email; ?>">
				  <div class="invalid-feedback-email">
				  </div>
				</div>
				
				<div class="row">
					<div class="col1 txtRight">
						<label class="" for="EditForm_phone">رقم الموبايل</label>
					</div>
					<div class="col2">
						<div class="collection">
							<div class="-flex">
								<div class="">+966</div>
								<input type="hidden" value="00966" disabled name="country_code" id="EditForm_phone_prefix" />
								
								<input class="-full-width" name="mobile_number" id="EditForm_phone" type="text" value="<?php echo $user->mobile_number; ?>" required /></div>
							</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-3 mb-3">
					  <label for="region">الحي / المنطقة</label>
					  <input type="text" class="form-control" id="region" name="region" value="<?php echo $user->region; ?>" required>
					  <div class="invalid-feedback-ad">
					  </div>
					</div>
					
					<div class="col-md-3 mb-3">
					  <label for="street">الشارع</label>
					  <input type="text" class="form-control" id="street" name="street" value="<?php echo $user->street; ?>" required>
					  <div class="invalid-feedback-ad">
					  </div>
					</div>
					
					<div class="col-md-3 mb-3">
					  <label for="building_number">رقم المبنى</label>
					  <input type="text" class="form-control" id="building_number" name="building_number" value="<?php echo $user->building_number; ?>" required>
					  <div class="invalid-feedback-ad">
					  </div>
					</div>
				</div>

				<div class="row">
				  <div class="col-md-5 mb-3">
					<label for="country">الدولة</label>
					 <input type="text" class="form-control" id="country" name="country" value="<?php echo $user->country; ?>" required>
					<div class="invalid-feedback-co">
					</div>
				  </div>
				  <div class="col-md-4 mb-3">
					<label for="city">المدينة</label>
					<input type="text" class="form-control" id="city" name="city" value="<?php echo $user->city; ?>" required>
					<div class="invalid-feedback-st">
					</div>
				  </div>
				  <div class="col-md-3 mb-3">
					<label for="zip">الرمز البريدي</label>
					<input type="text" class="form-control" id="zip" name="postcode" value="<?php echo $user->zipcode; ?>" required>
					<div class="invalid-feedback-zi">
					</div>
				  </div>
				</div>
				<hr class="mb-4">
				<div class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input" id="same-address">
				  <label class="custom-control-label" for="same-address">عنوان الشحن هو نفسه عنوان الفواتير الخاص بي</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input" id="save-info">
				  <label class="custom-control-label" for="save-info">احفظ هذه المعلومات في المرة القادمة</label>
				</div>
				<hr class="mb-4">
				<!--<button id="btn_login_details" class="btn osh-btn btn-lg btn-block" type="button">Continue to checkout</button>
			  </form>-->
						</div>
					</div>
				
				
				<div class="card mt-3">
						<div class="card-header" id="list_delivery_details">
							طريقة التسليم
						</div>
						<div class="card-body"  id="delivery-details">
							
							<input type="radio" name="shipping_method" value="Unified" id="s_method_flatrate_flatrate" checked>
						<div class="inline field">
						<div class="ui radio checkbox">
						<input type="radio" name="payment" id="p_method_phoenix_cashondelivery" value="phoenix_cashondelivery" title="الدفع عند الاستلام" checked class="radio validate-one-required-by-name"><label></label>
						</div>
						<label class="truncate" for="p_method_phoenix_cashondelivery">
						<div><span>الدفع عند الاستلام </span></div> 
						<div><span><img src="<?php echo assets('blog/images/logo/phoenix_cashondelivery.png'); ?>" class="phoenix_cashondelivery"></span></div>
						<span class="clear"></span> 
						</label>
						</div>
						<div class="payment_form_details">
						<fieldset class="form-list"><ul class="ui list" id="payment_form_phoenix_cashondelivery" style="display:none;"><div class="item">سيتم احتساب <span class="price"><?php echo $price_shipments_pay_hand; ?>  ر.س</span> رسوم اضافيه.</div>
						</ul></fieldset></div>
						
						
						<div class="inline field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="payment" id="p_method_payfortcc" value="payfortcc" title="البطاقة الائتمانية &lt;BR&gt; بطاقة مدى البنكية" class="radio validate-one-required-by-name"><label></label>
                        </div>
                        <label class="truncate" for="p_method_payfortcc">
                            <div><span>البطاقة الائتمانية <br> بطاقة مدى البنكية </span></div> 
                            <div><span><img src="<?php echo assets('blog/images/logo/payfortcc.png'); ?>" class="payfortcc"></span></div>
                            <span class="clear"></span> 
                        </label>
                    </div>
                        <div class="payment_form_detailss">
                        <ul id="payment_form_payfortcc" class="form-list" style="display:none;"><li>
        *حقول مطلوبة        <div class="input-box field">
            <label for="payfortcc_cc_owner" class="input-field">*الاسم على البطاقة</label>
            <input type="text" title="الاسم على البطاقة" class="input-text required-entry" id="payfortcc_cc_owner" name="" value="" maxlength="50"></div>
    </li>
    <li>
        <div class="input-box field">
            <label for="payfortcc_cc_type" class="input-field">*نوع بطاقة الأتمان</label>
            <select id="payfortcc_cc_type" name="" class="required-entry validate-cc-type-select cc-dropdown">
                <option value="">--أختر من فضلك--</option>
                                        <option value="VI">Visa</option>
                            <option value="MC">MasterCard</option>
                        </select>
        </div>
    </li>
    <li>
        <div class="input-box field">
            <label for="payfortcc_cc_number" class="input-field">*رقم بطاقة الائتمان</label>
            <input type="text" id="payfortcc_cc_number" name="" title="رقم بطاقة الائتمان" class="input-text validate-cc-number validate-cc-type required-entry" value="" maxlength="16"></div>
    </li>
    <li id="payfortcc_cc_type_exp_div">
        <div class="input-box field">
            <label class="input-field">*تاريخ الانتهاء</label>
            <!-- workaround for semantic ui validation -->
            <label style="display:none" for="payfortcc_expiration" class="input-field">*شهر تاريخ انتهاء البطاقة</label>
            <label style="display:none" for="payfortcc_expiration_yr" class="input-field">*سنة تاريخ انتهاء البطاقة</label>
            <!-- workaround end -->
            <div class="v-fix">
                <select id="payfortcc_expiration" name="" class="month validate-cc-exp required-entry cc-dropdown half"><option value="" selected>الشهر</option><option value="1">01 - يناير</option><option value="2">02 - فبراير</option><option value="3">03 - مارس</option><option value="4">04 - أبريل</option><option value="5">05 - مايو</option><option value="6">06 - يونيو</option><option value="7">07 - يوليو</option><option value="8">08 - أغسطس</option><option value="9">09 - سبتمبر</option><option value="10">10 - أكتوبر</option><option value="11">11 - نوفمبر</option><option value="12">12 - ديسمبر</option></select><select id="payfortcc_expiration_yr" name="" class="year required-entry cc-dropdown half"><option value="" selected>السنة</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div>
        </div>
    </li>
            <li id="payfortcc_cc_type_cvv_div">
        <div class="input-box field">
            <label for="payfortcc_cc_cid" class="input-field">*رقم تأكيد بطاقة الائتمان</label>
            <div class="v-fix">
                <input type="text" title="رقم تأكيد بطاقة الائتمان" class="input-text cvv required-entry " id="payfortcc_cc_cid" name="" value="" maxlength="4"><img src="<?php echo assets('blog/images/logo/verify-code-payfort.svg'); ?>"></div>
        </div>
    </li>
    </ul><script type="text/javascript">
   // payfortFort.BASE_URL = "https://www.goldenscent.com/";
    //payfortFort.integrationType = "merchantPage2";
</script></div>

				<div class="inline field">
<div class="ui radio checkbox">
<input type="radio" name="payment" id="p_method_banktransfer" value="banktransfer" title="حوالة بنكية" class="radio validate-one-required-by-name"><label></label>
</div>
<label id="p_method_banktransfer" class="truncate" for="p_method_banktransfer">
<div><span>حوالة بنكية </span></div> 
<div><span><img src="<?php echo assets('blog/images/logo/banktransfer.png'); ?>" class="banktransfer"></span></div>
<span class="clear"></span> 
</label>
</div>
      <script>
$(document).ready(function(){
    $(".payment_form_detailsss").css({"display":"none"});
  $("#p_method_banktransfer").click(function(){
    $(".payment_form_detailsss").slideToggle();
    $(".payment_form_detailsss").css({"display":"block"});
  });
  
  /*jQuery("#p_method_payfortcc").click(function(){
    jQuery(".payment_form_detailss").slideToggle();
    jQuery(".payment_form_detailss").css({"display":"block"});
  });
  
  
  jQuery("#p_method_phoenix_cashondelivery").click(function(){
    jQuery("#payment_form_details").slideToggle();
    jQuery(".payment_form_details").css({"display":"block"});
  });*/
});
</script>                                              <div class="payment_form_detailsss">
                            <div class="ui basic segment" id="payment_form_banktransfer" style="">
        <div>
            <p class="banktransfer-instructions-content agreement-content">
                سيتم الشحن بعد تحويل المبلغ الى  أحد الحسابات التاليه :<br><br>
				<?php 
				foreach($Banks as $bank){ ?>
<?php echo $bank->banks_name; ?> : <br>
<?php echo $bank->account_number; ?>8660602000105<br><br>
IBAN:  <?php echo $bank->banks_iban; ?> <br><br>
<?php } ?>
            </p>
        </div>
    </div>
                    </div>
				
				
				<!--<button class="btn osh-btn btn-lg btn-block" type="submit">Continue to checkout</button>-->
				
						</div>
					</div>
					
					
					
					<div class="card mt-3">
						<div class="card-header" id="list_payment_details">
							طريقة الدفع
						</div>
						<div class="card-body" id="payment-details">
							
				<h4 class="mb-3">Payment</h4>

				<div class="d-block my-3">
				  <div class="custom-control custom-radio">
					<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
					<label class="custom-control-label" for="credit">Credit card</label>
				  </div>
				  <div class="custom-control custom-radio">
					<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
					<label class="custom-control-label" for="debit">Debit card</label>
				  </div>
				  <div class="custom-control custom-radio">
					<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
					<label class="custom-control-label" for="paypal">Paypal</label>
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-6 mb-3">
					<label for="cc-name">Name on card</label>
					<input type="text" class="form-control" id="cc-name" placeholder="" required>
					<small class="text-muted">Full name as displayed on card</small>
					<div class="invalid-feedback">
					  Name on card is required
					</div>
				  </div>
				  <div class="col-md-6 mb-3">
					<label for="cc-number">Credit card number</label>
					<input type="text" class="form-control" id="cc-number" placeholder="" required>
					<div class="invalid-feedback">
					  Credit card number is required
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-3 mb-3">
					<label for="cc-expiration">Expiration</label>
					<input type="text" class="form-control" id="cc-expiration" placeholder="" required>
					<div class="invalid-feedback">
					  Expiration date required
					</div>
				  </div>
				  <div class="col-md-3 mb-3">
					<label for="cc-expiration">CVV</label>
					<input type="text" class="form-control" id="cc-cvv" placeholder="" required>
					<div class="invalid-feedback">
					  Security code required
					</div>
				  </div>
				</div>
				<div id="form-results"></div>
				<hr class="mb-4">
				<button class="btn osh-btn" type="submit">إتمام الشراء</button>	
						</div>
					</div>
				
				
				
				
				
				</div>
				
				<div class="col-md-4 col-sm-12 col-12">
					<h5 class="h5">ملخص طلبك</h5>
					<div class="all-orders">
						<div class="order-count">
							طلبك (<?php if(!empty($_SESSION["cart_item"])){ echo count($_SESSION["cart_item"]);} else{ echo "0"; } ?> منتجات)
						</div>
					<?php 	
						if(isset($_SESSION["cart_item"])){
							$total_quantity = 0;
							$total_price = 0;
					 
					foreach($_SESSION["cart_item"] as $item) {
						$total_price += ($item["price"]*$item["quantity"]);
					$item_price = $item["quantity"]*$item["price"]; ?>
						<div class="order-details">
							<img src="<?php echo assets('blog/images/posts/' . $item["image"]); ?>" alt="<?php echo $item["title"]; ?>" />
							<div class="">
								<p class="order-title"><?php echo $item["title"]; ?></p>
								<p class="order-price"><?php echo "ريال سعودي ". number_format($item_price,2); ?></p>
								<p class="order-quantity"><span>الكمية: </span> <?php echo $item["quantity"]; ?></p>
								<input type="hidden" name="quantity[]" value="<?php echo $item["quantity"]; ?>" />
								<input type="hidden" name="code[]" value="<?php echo $item["code"]; ?>" />
							</div>
						</div>
						<hr />
						<input type="hidden" name="product_title[]" value="<?php echo $item["title"]; ?>" />
				        <input type="hidden" name="weight[]" value="<?php echo $item["weight"]; ?>" />
					<input type="hidden" name="product_id[]" value="<?php echo $item["product_id"]; ?>" />
					<input type="hidden" name="price[]" value="<?php echo $item["price"]; ?>" />
					<input type="hidden" name="seller_id[]" value="<?php echo $item["seller_id"]; ?>" />
					<input type="hidden" name="user_id[]" value="<?php echo $item["userId"]; ?>" />
						<input type="hidden" name="total_price[]" value="<?php echo $total_price; ?>" />
					<?php 
					
						} 
						?>
						<p class="total_price"><span>المجموع الكلي: </span> <?php echo "ريال سعودي ".number_format($total_price, 2); ?></p>
						<?php 
						}
						?>
					</div>
					<a class="returnToCart" href="<?php echo url('checkout/cart'); ?>">الرجوع لعربة الشراء</a>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function () {
		$('.stepper').mdbStepper();
	});

	</script>
	<script>
	/* $(document).ready(function(){	
		$('#delivery-details').hide();
		$('#payment-details').hide();
		
		$('#btn_login_details').click(function(){
			if($('#firstName').val().length == 0){
				$('#error-fs').text('حقل أسمك مطلوب');
				$('#firstName').addClass('has-error');
			}
			
			if($('#lastName').val().length == 0){
				$('#error-fs'.this).text('حقل أسم العائلة مطلوب');
				$('#lastName').addClass('has-error');
			}
		});
		
		
	}); */
	</script>
</form>  