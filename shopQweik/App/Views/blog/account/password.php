<script>
$(".menu-items").hide();
$(".menu-top").hide();
$(".some-product").hide();
$(".menu-items").css({"display":"none"});

$(".navAllCat").mouseover(function () {
    $(".menu-items").slideDown('slow');
    $(".logo").hide();
    $(".title").css({"display":"block"});
});

$(".menu-items").mouseleave(function () {
    $(".menu-items").slideUp('slow');
	$(".logo").show();
    $(".title").css({"display":"none"});
});
</script>
<div class="col-sm-9 col-12">
	<div class="card mt-5 mb-5 p-2">
		<div class="card-header">تعديل الحساب</div>
        <div class="card-body">
            <div class="box-bd">
                <form id="form-account-edit" action="<?php echo url('/customer/account/changepassword'); ?>" method="post" class="form">
					<div id="form-results"></div>
                    <div class="form-group">                    
                        <label for="">كلمة المرور القديمة</label> 
                        <input name="password" class="form-control" type="password" maxlength="50" /> 
                    </div>
					<div class="form-group">
                        <label class="mts required" for="EditForm_last_name">كلمة المرور الجديدة</label>
                        <input name="new_password" class="form-control" type="password" maxlength="50" />
                    </div>
						
					<div class="form-group">
						<label>تأكيد كلمة المرور</label>
						<input name="confirm_password" class="form-control" type="password" maxlength="50" />
					</div>
                        
					<div class="form-group">
					   <button type="submit" class="osh-btn submit-btn" type="button">حفظ</button>
					</div>
				</form>    
			</div>
		</div>
	</div>
</div>
</div>
</div>