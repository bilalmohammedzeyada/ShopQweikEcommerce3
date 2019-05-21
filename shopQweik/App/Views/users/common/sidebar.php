<!-- Page container -->
<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar collapse">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="<?php echo url('/seller/Index/profile'); ?>" class="" data-toggle="">
						<img src="<?php echo assets('blog/images/logos/' . $market->shop_logo); ?>" alt="<?php echo $shop_name; ?>">
						<div class="user-info">
							<?php echo $seller->contact_name; ?> <span>تعديل الملف الشخصي</span>
						</div>
					</a>
				</div>
				<!-- /user dropdown -->


				<!-- Main navigation -->
				<ul class="navigation">
					<li>
						<a class="expand" href="#"><span>إدارة المتجر</span> <i class="icon-home2"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/Index/shopsetting'); ?>">اعدادات المتجر</a></li>
							<!--<li><a href="<?php //echo url('/seller/Index/shopdesign'); ?>">تصميم المتجر نسخة الويب</a></li>-->
						</ul>
					</li>
					
					<li>
						<a  class="expand" href="#"><span>ادراة المنتجات</span> <i class="icon-cart2"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/Goods/index'); ?>">قائمة المنتجات</a></li>
							<li><a href="<?php echo url('/seller/Goods/recycle'); ?>">استعادة المنتجات</a></li>
						</ul>
					</li>
					
					<li>
						<a  class="expand" href="#"><span>ادارة الطلبات</span> <i class="icon-file4"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/Order/order'); ?>">قائمة الطلبات</a></li>
							<li><a href="<?php echo url('/seller/Order/returns'); ?>">تفاصيل الاسترجاع</a></li>
							<li><a href="<?php echo url('/seller/Order/invoice'); ?>">قائمة الفواتير</a></li>
						</ul>
					</li>
					
					<li>
						<a  class="expand" href="#"><span>كوبونات التخفيض</span> <i class="icon-file4"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/coupons'); ?>">كوبونات التخفيض</a></li>
						</ul>
					</li>
					
					<li>
						<a class="expand"  href="#"><span>ادارة التقييم</span> <i class="icon-pencil3"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/Comment/index'); ?>">تقييم العميل</a></li>
						</ul>
					</li>
					
					<li>
						<a  class="expand"  href="#"><span>تقرير الاحصائيات</span> <i class="icon-pie3"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/Statistics/sale'); ?>">تفاصيل المبيعات</a></li>
							<li><a href="<?php echo url('/seller/Statistics/order'); ?>">احصائيات الطلبات</a></li>
						</ul>
					</li>
					
					<li>
						<a  class="expand" href="#"><span>المالية</span> <i class="icon-database2"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/Finance/settlement'); ?>">تأكيد المحاسبة</a></li>
						</ul>
					</li>
					
					<li>
						<a  class="expand" href="#"><span>تصوير المنتج</span> <i class="icon-file4"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/photography'); ?>">تصوير المنتج وتصميمه</a></li>
							<!--<li><a href="<?php //echo url('/seller/Finance/settlement'); ?>">تصميم منتج</a></li>-->
						</ul>
					</li>
					
					<li>
						<a  class="expand" href="#"><span>خيارات الشحن والتوصيل</span> <i class="icon-file4"></i></a>
						<ul>
							<li><a href="<?php echo url('/seller/shipping-delivery'); ?>">خيارات الشحن والتوصيل</a></li>
						</ul>
					</li>
					
					<li>
						<a  class="expand" href="#"><span>ملف تدريبي</span> <i class="icon-file-pdf"></i></a>
						<ul>
							<li><a href="<?php echo url('/blank.pdf'); ?>">ملف تدريبي</a></li>
						</ul>
					</li>
					
					
				</ul>
				<!-- /main navigation -->
				
			</div>
		</div>
		<!-- /sidebar -->