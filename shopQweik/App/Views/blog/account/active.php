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
<div class="container">
    <div class="col-lg-12 cpl-md-12 col-sm-12 col-12 mt-5 mb-5">
        <div class="card mt-5 mb-5">
                <div class="card-header">
                    <div class="page-title">
                        <h1>تفعيل حسابك </h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <p>تم تفعيل الحساب المرتبط ب <?php echo $active->email; ?></p>
                        <div><button style="height:40px;" onclick="window.location='<?php echo url("/"); ?>';" class="osh-btn button btn-checkout"><span style="height:28px;"><span>تسجيل الدخول</span></span></button></div>
                    </div>
              </div>
        </div>
        <br />
        <br />
    </div>
</div>


