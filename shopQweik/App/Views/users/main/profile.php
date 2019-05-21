<div class="page-content">
			<div class="page-header">
				<div class="page-title">
					<h3> مرحبا بك في لوحة التجار</h3>
				</div>
			</div>
			<div class="breadcrumb-line">
<ul class="breadcrumb">
	<li>الرئيسية</li>
	<li>ادارة المتجر</li>
	<li class="active">ملفي الشخصي</li>
</ul>
</div>

<form class="form-horizontal form" action="<?php echo url('/seller/Index/profile/update'); ?>" id="kform" method="POST" role="form" enctype="multipart/form-data">

	<div id="form-results"></div>

	<div class="panel panel-default ">
		<div class="panel-heading">
			<h6 class="panel-title"><i class="icon-signup"></i>ملفي الشخصي</h6>
		</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-10">
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">اسم المنشأة</label>
					<div class="col-sm-5">
						<input type="text" name="holder_name" class="form-control" maxlength="80" value="<?php echo $holder_name; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">رقم السجل التجاري</label>
					<label class="col-sm-2 control-label"><input type="text" name="commercial_registration_no" class="form-control" value="<?php echo $commercial_registration_no; ?>" maxlength="80"></label>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">نسخة من  السجل التجاري</label>
					<div class="col-sm-6">
						<?php if(! empty($copy_commercial_registration_no)) { ?>
						<img src="<?php echo $copy_commercial_registration_no; ?>" class="upload_preview" />
						<?php } else { ?>
						<input type="file" name="imageThree" />
						<?php } ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">اسم مالك المنشأة</label>
					<div class="col-sm-5">
						<input type="text" name="contact_name" class="form-control" maxlength="80"
					value="<?php echo $contact_name; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">رقم الهاتف</label>
					<label class="col-sm-2 control-label"><input type="text" name="contact_phone" class="form-control" maxlength="80" value="<?php echo $contact_phone; ?>"></label>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">البريد الإلكتروني</label>
					<label class="col-sm-2 control-label"><?php echo $contact_email; ?></label>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">اسم البنك</label>
					<div class="col-sm-5">
						<input type="text" name="bank_name" class="form-control" maxlength="80" value="<?php echo $bank_name; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">الحساب البنكي</label>
					<div class="col-sm-5">
						<input type="text" name="bank_account" class="form-control" maxlength="80" value="<?php echo $bank_account; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">الآيبان</label>
					<div class="col-sm-5">
						<input type="text" name="iban_account" class="form-control" maxlength="80" value="<?php echo $iban_account; ?>">
					</div>
				</div>

			<div class="form-group">
				<label class="col-sm-2 control-label text-right">شهادة الضرائب</label>
				<div class="col-sm-6">
					<div class="form-group col-sm-6">
						<input type="file" name="imageOne" />
					</div>
					<?php if($tax_license_img) { ?>
					<img src="<?php echo $tax_license_img; ?>" class="upload_preview" id="imglogo"/>
					<?php } ?>
					<div class="help-block">مقاس الصورة ينبغي ان يكون :800*800بيسكل وننصح برفع دقة اعلى لانها واجهتك عند العميل,الصيغة المسموحة jpg,png,gif</div>
				</div>
			</div>

				<div class="form-group">
					<label class="col-sm-2 control-label text-right">الرقم الضريبي</label>
					<div class="col-sm-5">
						<input type="text" name="tax_license_no" class="form-control" maxlength="80" value="<?php echo $tax_license_no; ?>">
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">اثبات الملكية او التوزيع (ان وجد)</label>
				<div class="col-sm-6">
					<div class="form-group col-sm-6">
					<input type="file" name="imageTwo" />
					</div>
					<?php if($brand_license_img) { ?>
					<img src="<?php echo $brand_license_img; ?>" class="upload_preview" id="imglogo2"/>
					<?php } ?>
					<div class="help-block">مقاس الصورة ينبغي ان يكون :800*800بيسكل وننصح برفع دقة اعلى لانها واجهتك عند العميل,الصيغة المسموحة jpg,png,gif</div>
				</div>
				</div>
				<div class="form-group" style="margin-top:20px;margin-left:25%;">
					<div class="col-sm-4">
						<input type="button" value="تقديم" class="btn btn-success col-sm-9 text-center submit-btn">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</div>