<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo assets('users/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo assets('users/css/londinium-theme.css'); ?>">
  <link rel="stylesheet" href="<?php echo assets('users/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php echo assets('users/css/icons.css'); ?>">
  
  <!-- Font Awesome -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
 
<script type="text/javascript" src="<?php echo assets('users/js/plugins/charts/sparkline.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/uniform.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/select2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/inputmask.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/autosize.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/inputlimit.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/listbox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/multiselect.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/tags.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/switch.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/uploader/plupload.full.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/uploader/plupload.queue.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/wysihtml5/wysihtml5.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/forms/wysihtml5/toolbar.js'); ?>"></script>

<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/daterangepicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/fancybox.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/moment.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/jgrowl.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/datatables.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/colorpicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/fullcalendar.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/timepicker.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/plugins/interface/collapsible.min.js'); ?>"></script>
<!--<script type="text/javascript" src="<?php //echo assets('users/js/layer.js'); ?>"></script>-->

<script type="text/javascript" src="<?php echo assets('users/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo assets('users/js/application.js'); ?>"></script>
<!--<script type="text/javascript" src="<?php //echo assets('users/js/global.js'); ?>"></script>
<script type="text/javascript" src="<?php //echo assets('users/js/myAjax.js'); ?>"></script>
<script type="text/javascript" src="<?php //echo assets('users/js/myFormValidate.js'); ?>"></script>-->

<!--<script type="text/javascript" src="<?php //echo assets('users/js/globalize/globalize.js'); ?>"></script>
<script type="text/javascript" src="<?php //echo assets('users/js/globalize/globalize.culture.de-DE.js'); ?>"></script>
<script type="text/javascript" src="<?php //echo assets('users/js/globalize/globalize.culture.ja-JP.js'); ?>"></script>-->
</head>
<body class="sidebar-wide">
        <div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">لوحة تحكم البائع</a>
        <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
    </div>
    <ul class="nav navbar-nav navbar-right collapse">
        <li class="dropdown">
            <div class="dropdown-toggle paddingNo">
                <a href="<?php echo url('/'); ?>"><i class="icon-globe" style="color:#fff;"></i></a>
                <select class="" onchange='chgLang(this.value)'>
                    <option value='en-us' >English</option>
                    <option value='ar' selected>العربية</option>
                </select>
            </div>
        </li>
        <li>
            <a href="<?php echo url('/seller/Index/chgpwd'); ?>">
                <i class="icon-unlocked2"> </i>
                <span>تغيير كلمة المرور</span>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" href='<?php echo url('/seller/logout'); ?>'>
                <i class="icon-exit3"> </i>
                <span>خروج</span>
            </a>
        </li>
    </ul>
</div>