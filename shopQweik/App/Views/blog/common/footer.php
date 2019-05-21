<footer>
	<div class="container">
		<!--<div class="row">
			<div class="footer-top">
				<div class="site-item">
					<div class="col-sm-12 col-12">
						<i class="icon i-great"></i>
						<h3>Shop On-The-Go</h3>
						<p>Download the app and get the world of AliExpress at your fingertips.</p>
					</div>
				</div>
				<div class="site-item">
					<div class="col-sm-12 col-12">
						<i class="icon i-delivery"></i>
						<h3>24/7 Help Center</h3>
						<p>Round-the-clock assistance for a smooth shopping experience.</p>
					</div>
				</div>
				<div class="site-item">
					<div class="col-sm-12 col-12">
						<i class="icon i-payment"></i>
						<h3>Shop with Confidence</h3>
						<p>Our Buyer Protection covers your purchase from click to delivery.</p>
					</div>
				</div>
				<div class="site-item">
					<div class="col-sm-12 col-12">
						<i class="icon i-confidence"></i>
						<h3>Safe Payment</h3>
						<p>Pay with the world’s most popular and secure payment methods.</p>
					</div>
				</div>
				<div class="site-item">
					<div class="col-sm-12 col-12">
						<i class="icon i-help"></i>
						<h3>Worldwide Delivery</h3>
						<p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
					</div>
				</div>
				<div class="site-item">
					<div class="col-sm-12 col-12">
						<i class="icon i-shop"></i>
						<h3>Great Value</h3>
						<p>We offer competitive prices on our 100 million plus product range.</p>
					</div>
				</div>
			</div>
		</div>-->
		
		<div class="row">
			<div class="col-md-4 col-sm-12 col-12">
				<div class="footer-middle">
					<div class="subsecribe-form">
						<form action="<?php echo url('sub/submit'); ?>" method="POST" class="form">
						<div id="form-results"></div>
							<div class="d-flex">
								<input type="email" name="email" class="form-control mr-1 sub-input">
								<button class="btn sub-button submit-btn">أشتراك</button>
							</div>
								<p class="tips">قم بالاشتراك في نشرتنا البريدية لتصلك قسائم مجانية.</p>
						</form>
						<div class="social-icons">
							<a href="<?php echo $fb; ?>"><i class="fab fa-facebook fa-3x" aria-hidden="true"></i></a>
							<a href="<?php echo $tw; ?>"><i class="fab fa-twitter fa-3x" aria-hidden="true"></i></a>
							<a href="<?php echo $ins; ?>"><i class="fab fa-instagram fa-3x" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-8 col-sm-12 col-12">
				<div class="-sitea">
					<div class="-site">
						<p>كيف اشترى</p>
						<a href="">جعل المدفوعات</a>
						<a href="">خيارات التسليم</a>
						<a href="">حماية المشتري</a>
					</div>
					<div class="-site">
						<p>خدمة العملاء</p>
						<a href="">خدمة العملاء</a>
						<a href="">اتفاقية خدمة المعاملات</a>
						<a href="">شارك في الاستبيان لدينا</a>
					</div>
					<div class="-site">
						<p>تعزيز الشريك</p>
						<a href="">شراكات</a>
						<a href="">إنضم لبرنامج التسويق بالعمولة</a>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="clearfix"></div>
	<div class="footer-copyright">
		<div class="container">
			&copy; جميع الحقوق محفوظة
			<a href="<?php echo url('/'); ?>"><?php echo $site_name; ?></a>
		</div>
	</div>
</footer>


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


</script>
<script>

//$(".menu-items").hide();
//$(".menu-items").css({"display":"none"});

/* $(".navAllCat").mouseover(function () {
    $(".menu-items").slideDown('slow');
    $(".logo").hide();
    $(".title").css({"display":"block"});
});

$(".menu-items").mouseleave(function () {
    $(".menu-items").slideUp('slow');
	$(".logo").show();
    $(".title").css({"display":"none"});
}); */
</script>
<script>
   // CKEDITOR.replaceAll( 'details' );

    // Steps to set the active sidebar link
    // 1- Get the current url
    var currentUrl = window.location.href;
    // 2- Get the last segment of the url
    var segment = currentUrl.split('/').pop();
    // 3- Add the "active" class to the id in sidebar of the current url
    $('#' + segment + '-link').addClass('active');

    $('.open-popup').on('click', function () {
        btn = $(this);
        url = btn.data('target');

        modalTarget = btn.data('modal-target');

        // remove the target from the page

        $(modalTarget).remove();

        $.ajax({
            url: url,
            type: 'POST',
            success: function (html) {
                $('body').append(html);
                $(modalTarget).modal('show');
            },
        });
               /*
        if ($(modalTarget).length > 0) {
            $(modalTarget).modal('show');
        } else {
            $.ajax({
                url: url,
                type: 'POST',
                success: function (html) {
                    $('body').append(html);
                    $(modalTarget).modal('show');
                },
            });
        }
*/
        return false;
    });

    $(document).on('click', '.submit-btn', function (e) {
        btn = $(this);

        e.preventDefault();

        form = btn.parents('.form');

        /* if (form.find('#details').length) {
            // if there is an element in the form has an id 'details'
            // then add the value for it to be gotten from ckeditor
            form.find('#details').val(CKEDITOR.instances.details.getData());
        }
 */
        url = form.attr('action');

        data = new FormData(form[0]);

        formResults = form.find('#form-results');

        $.ajax({
            url: url,
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                formResults.removeClass().addClass('alert alert-info').html('Loading...');
            },
            success: function(results) {
                if (results.errors) {
                    formResults.removeClass().addClass('alert alert-danger').html(results.errors);
                } else if (results.success) {
                    formResults.removeClass().addClass('alert alert-success').html(results.success);
                }

                if (results.redirectTo) {
                    window.location.href = results.redirectTo;
                }
            },
            cache: false,
            processData: false,
            contentType: false,
        });
    });


    /* Deleting */
    $('.delete').on('click', function (e) {
        e.preventDefault();

        button = $(this);

        var c = confirm('Are You Sure');

        if (c === true) {
            $.ajax({
                url: button.data('target'),
                type: 'POST',
                dataType: 'JSON',
                beforeSend: function () {
                    $('#results').removeClass().addClass('alert alert-info').html('Deleting...');
                },
                success: function(results) {
                    if (results.success) {
                        $('#results').removeClass().addClass('alert alert-success').html(results.success);
                        tr = button.parents('tr');

                        tr.fadeOut(function () {
                           tr.remove();
                        });
                    }
                }
            });
        } else {
            return false;
        }
    });
</script>
<script>
	$(function(){
		//if ($(window).width() <= 800) {
			 $('#-list-item-hoverr').click(function(){
				$('.category-mobile').toggle();
			}) ;
		//}
		
		$('#search-icon-mobile').click(function(){
			$('.searchForm').toggle();
		});	
		
		
	/* 	//Resize handler to reset the menu visibility 
		var resizeTimer;
		$(window).on('resize', function (e) {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function () {
				if ($(window).width() > 768) {
					$('#-list-item-hover').click(function(){
						$('.category-mobile').toggle();
					});
				} 
			}, 250);
		});
 */
		
		
	
	});	
	
</script>
</body>
</html>
