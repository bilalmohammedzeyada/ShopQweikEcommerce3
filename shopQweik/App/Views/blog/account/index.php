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
		<div class="col-md-9 col-sm-12 col-12">
			<div class="card mt-5 mb-5">
				<div class="card-header">لوحة التحكم بالحساب</div>
				<p class="mtm strong">مرحبا, <?php echo $user->first_name ." ". $user->last_name; ?></p>
				<p class="dashboard-desc">يوفّر جوميا للمشتركين لوحة التحكم الخاصة بالحساب ويمكنك كمستخدم مشترك في الموقع مراجعة آخر عمليات متعلقة بالحساب كشراء وغيره  أو تعديل بياناتك الشخصية. اضغط على الرابط  المناسب في الأسفل  لتعديل أو عرض البيانات</p>
				<div class="line">
					<div class="account col-md-6 col-sm-12 col-12">
						<div class="box box-bdr pam mrs myaccountBox1">
							<h4 class="ui-borderBottom">بيانات الإتصال</h4>
							<p class="ptm">
								<?php echo $user->first_name ." ". $user->last_name; ?><br />
								<a href="" class="" data-cfemail=""><?php echo $user->email; ?></a><br />
							</p>
							<p class="mtm">
								<a href="<?php echo url('customer/account/changepass'); ?>" class="osh-btn">تغيير كلمة السر</a>
							</p>
							<a class="osh-btn" href="<?php echo url('/customer/account/edituser/'. $user->id); ?>" class="">تعديل</a>
						</div>
					</div>
					<div class="account col-md-6 col-sm-12 col-12">
						<div class="box" id="newsletter-section">
							<h4 class="ui-borderBottom">نشرة جوميا الإخبارية</h4>
							<p class="ptm"><?php 
							if($user->is_subscribed	== 1){ ?>
								ستصلك رسائلنا الإخبارية على البريد الإلكتروني المسجل به.
							<?php } else {?>
								أنت لست مشتركا في أي من رسائلنا الإخبارية.
							<?php } ?>
							</p>
							<a href="<?php echo url('/newsletter/manage'); ?>" class="osh-btn">تعديل</a>
						</div>
					</div>
				</div>

				<div class="line">
					<div class="account col-md-6 col-sm-12 col-12 mt-5">
						<div class="box">
							<div class="">
								<h4 class="ui-borderBottom">سِجل العناوين</h4>
								<a  href="<?php echo url('/customer/address/index'); ?>" class="">إدارة العناوين</a>
							</div>
							<h4 class="ui-borderBottom">عنوان اساسي للتسليم</h4>
								<p class="ptm">لم يتم ادخال عنوان توصيل لهذا الحساب</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>