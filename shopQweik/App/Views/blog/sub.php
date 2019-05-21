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
					<div id="Dark-Bg">
					<div class="no-data">
					<?php 
					if($sucess){
						echo $sucess;
					} else {
						echo $error;
					}
					
					?>
					
					</div>
					</div>
					</div>
					
<script>
jQuery( document ).ready(function( $ ){
    $('#delivery-show-details').click(function() {
        $('#delivery-details').toggle();
        if ($(this).hasClass('on')){
            $(this).removeClass('on');
        }else{
            $(this).addClass('on');
        }
    });
});
</script></div>
				<div class="clear"></div>
			</div>
        </div>
    </div>
