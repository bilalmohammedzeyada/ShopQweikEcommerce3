<div class="col-sm-9 col-12">
	<div class="card mt-5 mb-5 p-2">
		<div class="address-add">
			<h2 class="address-title">تعديل العنوان</h2>
		</div>
		
		<div class="address-box">
			<div class="address-box-create">
				<form action="<?php echo url('/customer/address/new/save') . '/' . $user->id; ?>" method="post" id="" class="form">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">الأسم الشخصي</label>
							<input type="text" name="first_name" class="form-control" id="inputEmail4" value="<?php echo $user->first_name; ?>">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">أسم العائلة</label>
							<input type="text" name="first_name" class="form-control" id="inputPassword4" value="<?php echo $user->last_name; ?>">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-6" style="display: inline-flex !important;">
							<input style="width:70px" type="text" name="telephone_country_code" value="00966" title="هاتف" class="form-control" id="telephone_country_code" disabled>
							
							<input maxlength="10" placeholder="0501234567" type="text" name="mobile_number" value="<?php echo $user->mobile_number; ?>" title="هاتف" class="form-control" id="mobile_number">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputAddress">رقم المبنى</label>
						<input type="text"  value="<?php echo $user->building_number; ?>" name="building_number" class="form-control" id="inputAddress">
					</div>
					<div class="form-group">
						<label for="inputAddress">أسم الشارع</label>
						<input type="text" value="<?php echo $user->street; ?>" name="street" class="form-control" id="inputAddress">
					</div>
					<div class="form-group">
					<label for="inputAddress2">الحي</label>
					<input type="text"  value="<?php echo $user->region; ?>" name="region"  class="form-control" id="inputAddress2">
					</div>
					<div class="form-row">
					<div class="form-group col-md-6">
					<label for="inputCity">المدينة</label>
					<input type="text" value="<?php echo $user->city; ?>" name="city" class="form-control" id="inputCity">
					</div>
					<div class="form-group col-md-6">
					<label for="inputCountry">الدولة</label>
					<input type="text" value="<?php echo $user->country; ?>" name="country" class="form-control" id="inputCountry">
					</div>
					<div class="form-group col-md-2">
					<label for="inputZip">الرمز البريدي</label>
					<input type="text" value="<?php echo $user->zipcode; ?>" name="zipcode" class="form-control" id="inputZip">
					</div>
					</div>
					<button type="button" class="btn osh-btn submit-btn">حفظ</button>
				</form>
				
			</div>
		</div>
	</div>
</div>
</div>
</div>
