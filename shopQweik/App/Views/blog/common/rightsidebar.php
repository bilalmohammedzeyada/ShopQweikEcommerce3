<?php if($user) { ?>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-12 mb-5">
			<!--<h3 class="">حسابي</h3>-->

			<ul class="list-group mt-5">
				<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-myaccount" href="<?php echo url('customer/account/index'); ?>">لوحة التحكم بالحساب</a></li>
				<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-info" href="<?php echo url('customer/account/edituser/' . $user->id); ?>">البيانات الشخصية</a></li>
				<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-addresses" href="<?php echo url('/customer/address/index'); ?>">سِجل العناوين</a></li>
				<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-orders" href="<?php echo url('/sales/order/history/'); ?>">طلباتي</a></li>
				<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-rating-review" href="<?php echo url('/review/customer/'); ?>">تعليقاتي &amp; تقييماتي</a></li>
				<!--<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-wishlist" href="<?php //echo url('customer/wishlist/index'); ?>">منتجاتي التي تم حفظها</a></li>
				<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-coupons" href="<?php echo url('customer/coupon/index'); ?>">كوبونات الخصم</a></li>-->
				<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-newsletter" href="<?php echo url('/newsletter/manage/'); ?>">ضبط الرسائل الإخبارية</a></li>
				<li class="list-group-item"><a class="fct-subCategoryUnselectedItem sel-menu-newsletter" href="<?php echo url('/logout'); ?>">تسجيل الخروج</a></li>
			</ul>
		</div>    
<?php } ?>