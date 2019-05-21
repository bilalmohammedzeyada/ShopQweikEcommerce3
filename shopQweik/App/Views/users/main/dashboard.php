<div class="page-content">
	<div class="page-header">
		<div class="page-title">
			<h3> مرحبا بك في لوحة التجار</h3>
		</div>
	</div>
	<div class="breadcrumb-line">
    <ul class="breadcrumb">
        <li>الرئيسية</li>
        <li>ادارة المتجر</li>
        <li class="active">اعدادات المتجر</li>
    </ul>
</div>
   
    <form class="form-horizontal form" action="<?php echo url('/seller/Index/shopsetting/submitShopsetting'); ?>" id="" method="POST" enctype="multipart/form-data">
	<div id="form-results"></div><br />
    <div class="panel panel-default ">
        <div class="panel-heading">
            <h6 class="panel-title">
                <i class="icon-signup"></i>اعدادات المتجر</h6>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-7">
					
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">اسم المتجر</label>
                        <div class="col-sm-5">
                            <input type="text" name="shop_name" class="form-control" id="shop_name"
                                   value="<?php echo $shop_name; ?>">
                            <div class="help-block">
                                <a href="<?php echo url('/m/'. $shop_name); ?>" target="_blank" id="shop_link"><?php echo url('/m/' . $shop_name); ?></a>
                            </div>
                            <div class="help-block">( - , _ )أسم المتجر يدعم الحروف والأرقام والرموز ( - , _ ) فقط بشرط أن لايبدأ بهذه الرموز</div>
                            <input type="hidden" name="id" value="144">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">شعار المتجر</label>
                        <div class="col-sm-6">
						<?php if($shop_logo) { ?>
						<img src="<?php echo $shop_logo; ?>" class="upload_preview" id="imglogo"/>
						<?php } ?>
						<div class="form-group col-sm-6">
						<input type="file" required name="image" />
						</div>
                            <div class="help-block">مقاس الصورة ينبغي ان يكون :800*800بيسكل وننصح برفع دقة اعلى لانها واجهتك عند العميل,الصيغة المسموحة jpg,png,gif</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">شكل المتجر</label>
                        <div class="col-sm-3">
                            <select data-placeholder="P_SHOP_SEL_TPL" class="select-full fl"
                                    name="template_id" id="template_id">
									<?php if($template_id == 1){
										echo '<option selected value="1">وردي</option> ';
									} else if($template_id == 2){
										echo '<option selected value="2">أزرق</option>';
									} else if($template_id == 3){
										echo '<option value="3" selected>أخضر</option>';
									} else if($template_id == 4){
										echo '<option value="4" selected>برتقالي</option>';
									} ?>
									
								<option value="1">وردي</option> 
								<option value="2">أزرق</option>
								<option value="3">أخضر</option>
								<option value="4">برتقالي</option>
                                                                    </select>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-2 control-label text-right">الدولة </label>
                        <div class="col-sm-5">
                            <input type="text" name="country" id="country" class="form-control"
                                   value="<?php echo $country; ?>">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-2 control-label text-right">المنطقة </label>
                        <div class="col-sm-5">
                            <input type="text" name="province" id="province" class="form-control"
                                   value="<?php echo $province; ?>">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label text-right">المدينة</label>
                        <div class="col-sm-5">
                            <input type="text" name="city" id="city" class="form-control"
                                   value="<?php echo $city; ?>">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label text-right">الحي </label>
                        <div class="col-sm-5">
                            <input type="text" name="district" id="district" class="form-control"
                                   value="<?php echo $district; ?>">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">العنوان بالتفصيل</label>
                        <div class="col-sm-5">
                            <textarea rows="5" cols="5" name="address" id="address" maxlength="300"
                                      class="form-control"><?php echo $address; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">الرمز البريدي</label>
                        <div class="col-sm-5">
                            <input type="text" name="postal_code" id="postal_code" class="form-control"
                                   value="<?php echo $postal_code; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">
                            <img src="<?php echo assets('users/images/icons/maroof_16.png'); ?>"/>
                            رابط Maroof                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="maroof_link" maxlength="100"
                                      class="form-control" value="<?php echo $maroof_link; ?>"/>
                            <div class="help-block">https://maroof.sa/xxxxx</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">وسيلة الشحن</label>
                        <div class="col-sm-5">
                            <label class="radio-inline radio-success">
                                <input type="radio" checked='checked' name="shipping_way" value="0">
                                شركاء كوايدي                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">نبذة عن المتجر</label>
                        <div class="col-sm-5">
                            <textarea rows="5" cols="5" name="shop_desc" maxlength="300"
                                      class="form-control"><?php echo $shop_desc; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right"> خدمة ما بعد البيع</label>
                        <div class="col-sm-5">
                            <textarea rows="5" cols="5" name="after_sale" maxlength="300" class="form-control"><?php echo $after_sale; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:20px;margin-left:25%;">
                        <div class="col-sm-4">
                            <input type="button" value="تقديم"
                                   class="btn btn-success col-sm-9 text-center submit-btn">
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-5" style="text-align:center;">
                    <div class="">
                        <img name="image-swap" id="tpl_img" style="border:1px solid #4fa2c2;width:100%;"
                             src="<?php echo assets('users/images/icons/shop_tpl_demo_3.jpg'); ?>">
                    </div>
                    <div class="text-center Padding">
                        معاينة تصميم المتجر                    </div>
                </div>-->
            </div>
        </div>
    </div>
</form>
</div>