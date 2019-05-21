  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header"></li>
        <li id="dashboard-link" class="sidebar-link">
          <a href="<?php echo url('/admin'); ?>">
            <i class="fa fa-dashboard"></i> <span>لوحة التحكم</span>
          </a>
        </li>
        <li id="users-link" class="sidebar-link">
          <a href="<?php echo url('/admin/users'); ?>">
            <i class="fa fa-user"></i>
            <span>الأعضاء</span>
          </a>
        </li>
        <li id="users-groups-link" class="sidebar-link">
          <a href="<?php echo url('/admin/users-groups'); ?>">
            <i class="fa fa-users"></i>
            <span>مجموعات الاعضاء</span>
          </a>
        </li>
        <li id="categories-link" class="sidebar-link">
          <a href="<?php echo url('/admin/categories'); ?>">
            <i class="fa fa-book"></i>
            <span>التصنيفات</span>
          </a>
        </li>
		
		<!--<li id="categories-link" class="sidebar-link">
          <a href="<?php //echo url('/admin/scategories'); ?>">
            <i class="fa fa-book"></i>
            <span>التصنيفات الفرعية</span>
          </a>
        </li>-->
		<li id="categories-link" class="sidebar-link">
          <a href="<?php echo url('/admin/brands'); ?>">
            <i class="fa fa-book"></i>
            <span>الماركات</span>
          </a>
        </li>
        <li id="posts-link" class="sidebar-link">
          <a href="<?php echo url('/admin/posts'); ?>">
            <i class="fa fa-edit"></i>
            <span>المنتجات</span>
          </a>
        </li>
        <li id="ads-link" class="sidebar-link">
          <a href="<?php echo url('/admin/ads'); ?>">
            <i class="fa fa-flag"></i>
            <span>الأعلانات</span>
          </a>
        </li>
		
		<li id="ads-link" class="sidebar-link">
          <a href="<?php echo url('/admin/adshome'); ?>">
            <i class="fa fa-flag"></i>
            <span>أعلانات الصفحة الرئيسية</span>
          </a>
        </li>
		
		<li id="ads-link" class="sidebar-link">
          <a href="<?php echo url('/admin/sliders'); ?>">
            <i class="fa fa-flag"></i>
            <span>التحكم بالسلايدرز</span>
          </a>
        </li>
		
        <li id="settings-link" class="sidebar-link">
          <a href="<?php echo url('/admin/settings'); ?>">
            <i class="fa fa-cogs"></i>
            <span>الاعدادات</span>
          </a>
        </li>
		
		<li id="settings-link" class="sidebar-link">
          <a href="<?php echo url('/admin/banks'); ?>">
            <i class="fa fa-cogs"></i>
            <span>الحسابات البنكية</span>
          </a>
        </li>
		
		<li id="settings-link" class="sidebar-link">
          <a href="<?php echo url('/admin/sales'); ?>">
            <i class="fa fa-cogs"></i>
            <span>المبيعات</span>
          </a>
        </li>
		
		<li id="settings-link" class="sidebar-link">
          <a href="<?php echo url('/admin/sub'); ?>">
            <i class="fa fa-cogs"></i>
            <span>القائمة البريدية</span>
          </a>
        </li>
		
		<li id="settings-link" class="sidebar-link">
          <a href="<?php echo url('/admin/coupons'); ?>">
            <i class="fa fa-cogs"></i>
            <span>الكوبونات</span>
          </a>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

