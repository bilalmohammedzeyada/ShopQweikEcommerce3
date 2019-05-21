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
<div class="forgot">
     <div class="container">
        <div class="row mt-5 mb-5">
			<div class="card col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card-header page-title">
					<h1>هل نسيت كلمة المرور؟</h1>
				</div>
				<div class="card-body">
					<form action="<?php echo url('/customer/account/forgotpassword/submit'); ?>" method="post" class="form" id="form-validate">
						<div class="fieldset">
							<h2 class="legend">إسترجاع كلمة المرور هنا</h2>
							<p>ادخل عنوان البريد الالكتوني هنا. ستتلقى بريداً يحتوي على رابط استرجاع كلمة المرور.</p>
									<div id="form-results"></div>
						  <ul class="form-list">
								<li>
									<label for="email_address" class="required"><em>*</em>عنوان البريد الالكتروني</label>
									<div class="input-box">
										<input type="text" name="email" alt="email" required id="email_address" class="form-control" value=""></div>
								</li>
										</ul></div>
						<div class="buttons-set">
							<p class="required">حقول مطلوبة *</p>
							<p class="back-link"><a href="<?php echo url('/customer/account/login'); ?>"><small>« </small>الرجوع الى تسجيل الدخول</a></p>
							<button type="button" title="تقديم" class="button btn btn-success submit-btn">تقديم</button>
						</div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
        </div>
    </div>
</div>