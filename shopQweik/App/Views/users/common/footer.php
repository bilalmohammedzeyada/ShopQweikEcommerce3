  <div class="footer">...</div>
</div>
<!-- ./wrapper -->


<!-- jQuery 2.2.0 -->
<!--  1.x.x -->
<!--  2.x.x -->

<script>
 // $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
    //CKEDITOR.replaceAll( 'details' );
    //CKEDITOR.replaceAll( 'details_en' );

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

        if (form.find('#details').length) {
            // if there is an element in the form has an id 'details'
            // then add the value for it to be gotten from ckeditor
            form.find('#details').val(CKEDITOR.instances.details.getData());
        }
		
		if (form.find('#details_en').length) {
            // if there is an element in the form has an id 'details'
            // then add the value for it to be gotten from ckeditor
            form.find('#details_en').val(CKEDITOR.instances.details.getData());
        }

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
	
	$(document).ready(function(){
	   $("#template_id").change(function(){
		   if($("#template_id").val() == 1){
			$("img[name=image-swap]").attr("src","<?php echo assets("users/images/icons/shop_tpl_demo_1.jpg"); ?>");
			   //alert($("#template_id").val());
		   } else if($("#template_id").val() == 2){
			   $("img[name=image-swap]").attr("src","<?php echo assets('users/images/icons/shop_tpl_demo_2.jpg'); ?>");
			    //alert($("#template_id").val());
		   } else if($("#template_id").val() == 3){
			   $("img[name=image-swap]").attr("src","<?php echo assets('users/images/icons/shop_tpl_demo_3.jpg'); ?>");
			    //alert($("#template_id").val());
		   }

	   });

	});
	
	$(function () {
    /* $("a[id^='sm']").click(function () {
        if ($(this).attr("level") == "2") {
            var mid = $(this).attr("id");
            $.cookie("kselm", $(this).attr("id"), {expires: 1, path: '/'});
            $.cookie("collapsible", mid.substring(0, 4), {expires: 7, path: '/'});
            clearCondition();
        }
    });
    var selMnu = $.cookie("kselm");
    if (selMnu) {
        var pid = selMnu.substring(0, 4);
        $("#" + selMnu).css("background-color", "#1b2327");
    } */
	
	
	$('.dropdown, .btn-group').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).fadeIn(100);
});
 
 
//===== Add fadeOut animation to dropdown =====//
 
/* $('.dropdown, .btn-group').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).fadeOut(100);
}); */

//===== Prevent dropdown from closing on click =====//
 
$('.popup').click(function (e) {
    e.stopPropagation();
});
	//===== Collapsible navigation =====//
 
$('.sidebar-wide li:not(.disabled) .expand, .sidebar-narrow .navigation > li ul .expand').collapsible({
    defaultOpen: 'second-level,third-level',
    cssOpen: 'level-opened',
    cssClose: 'level-closed',
    speed: 150
}); 
	
	//===== Disabling main navigation links =====//
 
$('.navigation li.disabled a, .navbar-nav > .disabled > a').click(function(e){
    e.preventDefault();
});
	
	
	
	$('.sidebar-toggle').click(function () {
    $('.page-container').toggleClass('sidebar-hidden');
}); 


//===== Disabling main navigation links =====//
 
/* $('.navigation li.disabled a, .navbar-nav > .disabled > a').click(function(e){
    e.preventDefault();
}); */
//===== Showing spinner animation demo =====//
 
$('.run-first').click(function(){
    $('body').append('<div class="overlay"><div class="opacity"></div><i class="icon-spinner2 spin"></i></div>');
    $('.overlay').fadeIn(150);
    window.setTimeout(function(){
        $('.overlay').fadeOut(150, function() {
            $(this).remove();
        });
    },5000);
});
 
$('.run-second').click(function(){
    $('body').append('<div class="overlay"><div class="opacity"></div><i class="icon-spinner3 spin"></i></div>');
    $('.overlay').fadeIn(150);
    window.setTimeout(function(){
        $('.overlay').fadeOut(150, function() {
            $(this).remove();
        });
    },5000);
});
 
$('.run-third').click(function(){
    $('body').append('<div class="overlay"><div class="opacity"></div><i class="icon-spinner7 spin"></i></div>');
    $('.overlay').fadeIn(150);
    window.setTimeout(function(){
        $('.overlay').fadeOut(150, function() {
            $(this).remove();
        });
    },5000);
});


});
	
</script><script>
$(document).ready(function() {
  $('.demo1').click(function() {
    swal({
      title: "Welcome in Alerts",
      text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
    });
  });
})
</script>
</body>
</html>