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
<div class="col-sm-9 col-12">
	<div class="card mt-5 mb-5 p-2">
		<div class="card-header">تعديل الحساب</div>
		<div class="card-body">
			<form class="form" action="<?php echo $action; ?>" method="post" class="form">
				<div id="form-results"></div>
				<div class="form-group">
					<label class="required" for="EditForm_first_name">الإسم الشخصي</label>                            
					<input class="form-control" name="first_name" id="EditForm_first_name" type="text" maxlength="50" value="<?php echo $first_name; ?>" />
				</div>
				<div class="form-group">
					<label class="required">اسم العائلة</label>
					<input class="form-control" name="last_name" id="EditForm_last_name" type="text" maxlength="50" value="<?php echo $last_name; ?>" />
				</div>
				<div class="form-group">
					<label for="EditForm_gender">النوع</label>
					<select class="form-control" name="gender" id="EditForm_gender">
						<?php if($gender != " ") { ?>
						<option selected value="<?php echo $gender; ?>"> 
						<?php if($gender == "male") {
						echo "ذكر";
						} else {
						echo "أنثى";
						} ?>
						</option>
						<?php } ?>
						<option value="male">ذكر</option>
						<option value="female">أنثى</option>
					</select>            
				</div>
				<div class="form-group">
					<label for="EditForm_currentEmail">البريد الإلكتروني</label>
					<strong><?php echo $email; ?></strong>
				</div>
				
				<div class="form-group">
					<label for="EditForm_phone">رقم الموبايل</label>
					<div class="-flex">
					<div class="-prefix-edit -mrs">+20</div>
						<input type="hidden" value="00966" name="co_code1" id="EditForm_phone_prefix" />
						<input class="form-control" name="mobile_number" id="EditForm_phone" type="text" value="<?php echo $mobile_number; ?>" />
					</div>
				</div>
				<div class="form-inline">
					<label class="mts" for="EditForm_birthday">تاريخ الميلاد</label>
					<input class="form-control accountEditBirthDay" maxlength="2" id="birthday_day" name="sDay" type="text" value="<?php echo $sDay; ?>"/>
					<input class="form-control accountEditBirthMonth" maxlength="2" id="birthday_month" name="sMonth" type="text" value="<?php echo $sMonth; ?>"/>
					<input class="form-control accountEditBirthYear" maxlength="4" id="birthday_year" name="sYear" type="text" value="<?php echo $sYear; ?>"/>
				</div>
				<div class="form-group">
					<button class="btn osh-btn submit-btn" type="button">حفظ</button>
				</div>
			</form>    
		</div>
	</div>
</div>
</div>
</div>