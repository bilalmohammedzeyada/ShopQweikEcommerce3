		<div class="col-sm-9 col-12">
			<div class="card mt-5 mb-5 p-2">
				<div class="address-add">
					<h2 class="address-title">ضبط الرسائل الإخبارية</h2>
				</div>
				
				<div class="newsletter-box">
					<form action="<?php echo url('newsletter/manage/save'); ?>" method="post" class="form">
					
						<div id="form-results"></div>
						<input type="checkbox" name="is_subscribed" id="subscription" value="1" title="اشتراك عام" <?php  
							if($user->is_subscribed == 1){
								echo "checked";
							}
						?> class="checkbox" ><label for="subscription">اشتراك عام</label>
						<button type="button" title="حفظ" class="button submit-btn osh-btn">حفظ</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
