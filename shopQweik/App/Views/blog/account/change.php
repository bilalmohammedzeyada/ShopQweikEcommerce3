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
<div class="main content-wrapper">
	<div id="hoverOverlay"></div>
     <div class="container_12">
        <div class="main-container col1-layout">
			<div class="row clearfix">
				<div class="grid_12"></div>
			</div>
            <div class="clear"></div>
			<div class="row clearfix">
				<div class="grid_12 col-main">
										<div id="algolia-autocomplete-container" class="mangolia"></div>
<div style="padding:20px 0 30px;">
	<div class="page-title">
		<h1>تفعيل حسابك </h1>
	</div>
	<div class="cart-empty text-center">
		<div class="col-sm-12">
									<p>تم تفعيل الحساب المرتبط ب <?php echo $active->email; ?></p>
			<div><button style="height:40px;" onclick="window.location='<?php echo url("/"); ?>';" class="button btn-checkout"><span style="height:28px;"><span>تسجيل الدخول</span></span></button></div>
		</div>
	</div>
</div>
				</div>
				<div class="clear"></div>
			</div>
        </div>
    </div>
</div>

