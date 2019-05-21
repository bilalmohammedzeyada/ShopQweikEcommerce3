<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo assets('admin/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo assets('admin/dist/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo assets('admin/dist/css/AdminLTE.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo assets('admin/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo assets('admin/plugins/iCheck/flat/blue.css'); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo assets('admin/plugins/morris/morris.css'); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo assets('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo assets('admin/plugins/datepicker/datepicker3.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo assets('admin/plugins/daterangepicker/daterangepicker-bs3.css'); ?>">
  
  <link rel="stylesheet" href="<?php echo assets('users/css/styles.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo assets('users/css/styles.min.ar.css'); ?>">
  <link rel="stylesheet" href="<?php echo assets('admin/css/icons.min.css'); ?>">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo assets('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
<script src="<?php echo assets('admin/plugins/jquery-1.10.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/sjquery-ui.min'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/sparkline.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/uniform.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/select2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/inputmask.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/autosize.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/inputlimit.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/listbox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/multiselect.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/tags.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/switch.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/plupload.full.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/plupload.queue.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/wysihtml5.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/toolbar.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/daterangepicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/fancybox.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/moment.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/jgrowl.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/datatables.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/colorpicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/fullcalendar.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/timepicker.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/collapsible.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/jquery.dataTables.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/jquery.cookie.j'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/ayer.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/application.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/global.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/myAjax.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('admin/plugins/myFormValidate.js'); ?>"></script>

<script src="<?php echo assets('users/js/core.js'); ?>"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>لوحة تحكم البائع</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>لوحة تحكم البائع</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="../#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->


          <!-- User Account: style can be found in dropdown.less -->
        <li>
			<a href="<?php echo url('/seller/Index/chgpwd') ?>">
				<i class="icon-unlocked2"> </i>
				<span>تغيير كلمة المرور</span>
			</a>
		</li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo url('/seller/logout'); ?>">
                <span class="fa fa-power-off"></span>
                خروج
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
