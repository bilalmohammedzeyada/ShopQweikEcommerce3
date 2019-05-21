<div class="container">
	<div class="row mt-5 mb-5">
		<div class="brands">
			<div class="col-md-4 col-sm-12 col-12">
				<div class="brand-product-img">
					<a href="<?php echo assets('blog/images/posts/' . $products->image); ?>" class="pan xzoom zoom" data-big="<?php echo assets('blog/images/posts/' . $products->image); ?>"><img class="zoom-img" src="<?php echo assets('blog/images/posts/' . $products->image); ?>" xoriginal="<?php echo assets('blog/images/posts/' . $products->image); ?>" /></a>
				</div>
				
				<script>
				$(document).ready(function(){
					$(".pan").pan();
					$(".xzoom, .xzoom-gallery").xzoom({tint: '#333', Xoffset: 15});
				 });				
				
				</script>
				<div class="img-gallery xzoom-thumbs">
					<a href="<?php echo assets('blog/images/posts/' . $products->image); ?>" class="pan xzoom xzoom-gallery" data-big="<?php echo assets('blog/images/posts/' . $products->image); ?>"><img class="zoom-img" src="<?php echo assets('blog/images/posts/' . $products->image); ?>" xpreview="<?php echo assets('blog/images/posts/' . $products->image); ?>"  /></a>
					<a href="<?php echo assets('blog/images/posts/' . $products->imageOne); ?>" class="pan xzoom xzoom-gallery" data-big="<?php echo assets('blog/images/posts/' . $products->imageOne); ?>"><img class="zoom-img" src="<?php echo assets('blog/images/posts/' . $products->imageOne); ?>" /></a>
					<a href="<?php echo assets('blog/images/posts/' . $products->imageTwo); ?>" class="pan xzoom xzoom-gallery" data-big="<?php echo assets('blog/images/posts/' . $products->imageTwo); ?>"><img class="zoom-img" src="<?php echo assets('blog/images/posts/' . $products->imageTwo); ?>" /></a>
					<a href="<?php echo assets('blog/images/posts/' . $products->imageThree); ?>" class="pan xzoom xzoom-gallery" data-big="<?php echo assets('blog/images/posts/' . $products->imageThree); ?>"><img class="zoom-img" src="<?php echo assets('blog/images/posts/' . $products->imageThree); ?>" /></a>
				</div>
			</div>
			
			<div class="col-md-6 col-sm-12 col-12">
				<div class="product-details">
					<div class="product-title">
						<p class="p-title"><?php echo $products->title; ?><?php echo $products->title; ?><?php echo $products->title; ?><?php echo $products->title; ?><?php echo $products->title; ?></p>
						<p class="p-brand"><span class="span-brand">ماركة</span><?php echo $products->title; ?><span class="sell-brand">قم ببيع منتجاتك هنا؟<a href="<?php echo url('/seller/register'); ?>">أنقر هنا</a></span></p>
					</div>
					
					<div class="product-body">
						
						<div class="product-body-details">
							<p><?php echo $products->details; ?></p>
							<!--<p>المواصفات الأساسية</p>
							<p>المواصفات الأساسية</p>
							<p>المواصفات الأساسية</p>
							<p>المواصفات الأساسية</p>
							<p>المواصفات الأساسية</p>
							<p>المواصفات الأساسية</p>-->
						</div>
					</div>
					
					<div class="buy-product">
						<div class="box-price">
						<?php 
							if($products->price2 == 0 || empty($products->price2)) { ?>
								<?php echo number_format($products->price1, 2); ?> &nbsp;<span class="pric-currency">ريال سعودي</span></div>
							<?php } else { ?>
								<?php echo number_format($products->price2, 2); ?> &nbsp;<span class="pric-currency">ريال سعودي</span></div>
							<?php } ?>
						<form action="<?php echo url('/checkout/cart/submit'); ?>" method="POST">
							<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
							<input type="hidden" class="" name="code" value="<?php echo $products->code; ?>" />
							<input type="hidden" class="" name="seller_id" value="<?php echo $products->seller_id; ?>" />
							<button type="submit" class="osh-btn">أشتري الأن</button>
						</form>
					</div>
					
					<div class="review-box mt-5">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">الوصف</a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">تقييمات</a>
							</div>
						</nav>
							<div class="tab-content" id="nav-tabContent">
							  <div class="tab-pane fade show active mt-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<p><?php echo $products->details; ?></p>
							  
							  </div>
							  <div class="tab-pane fade mt-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							  <form>
									<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="ممتاز"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="جيد جدا"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="جيد"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="مقبول"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="سيء"></label>
</fieldset>
									<input type="hidden" name="postid" id="postid" class="input-text required-entry" value="<?php echo $products->id; ?>">
									<input type="hidden" name="userid" id="userid" class="input-text required-entry" value="<?php echo $user->id; ?>">
									<input type="hidden" name="title_post" id="title_post" class="input-text required-entry" value="<?php echo $products->title; ?>">
									<input type="hidden" name="name" id="name" class="input-text required-entry" value="<?php echo $user->first_name ." " . $user->last_name; ?>">
									<button type="button" onclick="handle_submit()" id="review-button" title="إدخال التقييم" class="button osh-btn"><span><span>إدخال التقييم</span></span></button>
								</form>
							  </div>
							</div>
					
					</div>
				</div>
			</div>
			
			<div class="col-md-2 col-sm-12 col-12">
				<div class="card-desktop -text "> <div class="characteristic"><div class="iconography"><i class="osh-font-cash-on-delivery"></i></div><div class="description">   <span class="title">الدفع عند الاستلام</span>   </div></div><div class="characteristic"><div class="iconography"><i class="osh-font-return"></i></div><div class="description">  <span class="title">استرجاع المنتج مجانًا خلال 14 أيام <i class="tooltip-icon osh-font-question" data-popover="tooltip-info-head-usp-2" data-popover-arrow="top"></i></span><div class="osh-popover-content" data-popover-content="tooltip-info-head-usp-2"><div>
				<p class="mod-tip-title">اضغط <a href="<?php echo url('/return-policy-cp'); ?>" class="red bold">هنا</a> للمعرفة المزيد عن سياسة الارجاع.</p>
				</div>

				</div>   </div></div><div class="characteristic"><div class="iconography"><i class="osh-font-genuine-product"></i></div><div class="description">   <span class="title">منتجات أصلية</span>   </div></div>  </div>
				
				<div class="card-desktop -text "> <div class="characteristic"><div class="iconography"><i class="osh-font-cash-on-delivery"></i></div><div class="description">   <span class="title">الدفع عند الاستلام</span>   </div></div><div class="characteristic"><div class="iconography"><i class="osh-font-return"></i></div><div class="description">  <span class="title">استرجاع المنتج مجانًا خلال 14 أيام <i class="tooltip-icon osh-font-question" data-popover="tooltip-info-head-usp-2" data-popover-arrow="top"></i></span><div class="osh-popover-content" data-popover-content="tooltip-info-head-usp-2"><div>
				<p class="mod-tip-title">اضغط <a href="<?php echo url('/return-policy-cp'); ?>" class="red bold">هنا</a> للمعرفة المزيد عن سياسة الارجاع.</p>
				</div>

				</div>   </div></div><div class="characteristic"><div class="iconography"><i class="osh-font-genuine-product"></i></div><div class="description">   <span class="title">منتجات أصلية</span>   </div></div>  </div>
			</div>
		</div>
	</div>
</div>

<script>
	function getXmlHttpRequestObject() {  
   if (window.XMLHttpRequest) {  
     return new XMLHttpRequest();  
   } else if(window.ActiveXObject) {  
     return new ActiveXObject("Microsoft.XMLHTTP");  
   } else {  
     alert("Your Browser Sucks!");  
   }  
 }  
 var Req = getXmlHttpRequestObject();  
 var ReqData = getXmlHttpRequestObject();   

   function handle_submit() {  
   var postid = document.getElementById("postid").value;
   var userid = document.getElementById("userid").value;
   var rating = document.querySelector('input[name="rating"]:checked').value;
   var parameters = "postid="+postid +"&userid="+userid+"&rating="+rating;  
   Req.open("POST", '<?php echo url('/send'); ?>', true);  
   Req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');  
    
      Req.send(parameters); // Begin send the data  
   Req.onreadystatechange = function() { // Function to read server response  
           if (Req.readyState == 4) { // If server already executed the request  
                var str = Req.responseText.split("&nbsp;"); // Read string data that is sent from server  
                if (str[0] == 'success') {  
                     alert("Data inputted successfully.");  
                }else {  
                     alert(str[0]);  
                }  
           }  
      }  
 }  
</script>
<script>

$(document).ready(function () 
{
    $('#selectid2').on('change', function () 
    {
        if ($('#selectid').val() === null) {              
            alert("Error");
        }
        else
        {
            var selectedValue = $('#selectid').val();
            var postid = $('#postid').val();

            $.ajax
            ({
                url: '<?php echo url('/getdata.php'); ?>',
                type: 'POST',
                data: 'selectid=' + selectedValue,
                success: function(response) 
                {
                   // alert(response);
                }
            });
        }
    });
});

</script>