<div class="page-content">
			<div class="page-header">
				<div class="page-title">
					<h3> مرحبا بك في عالم كوايدي</h3>
				</div>
			</div>
			<div class="breadcrumb-line">
<ul class="breadcrumb">
	<li>الرئيسية</li>
	<li>شركات الشحن</li>
	<li class="active">إدارة شركات الشحن والتوصيل</li>
</ul>
</div>

<!-- Main content -->
<div class="panel panel-default">
<div class="panel-heading">
	<h6 class="panel-title">
		<i class="icon-office"></i>إدارة شركات الشحن والتوصيل </h6>
	
		<button type="button" type="button" data-modal-target="#add-ship-form" data-target="<?php echo url('/seller/shipping-delivery/add'); ?>" class="btn btn-default pull-right open-popup">
			<i class="icon-star5 pl"></i>أضافة شركة شحن جديدة</button>
	
</div>
<div id="form-results"></div>

<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>#</th>
			<th>اسم الشركة</th>
			<th>كل الدول</th>
			<th>كل المدن</th>
			<th>تكلفة الشحن</th>
			<th>مدة الشحن</th>
			<th>طريقة الدفع</th>
		</tr>
				
				<?php $i = 0; foreach ($shipping AS $ship) { ?>
					<tr>
					  <td style="vertical-align: middle;"><?php echo ++$i;?></td>
					  <td>
						<img src="<?php echo assets('blog/images/companey/' . $ship->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
						<?php echo $ship->co_name ;?>
					  </td>
					  <td style="vertical-align: middle;"><?php echo $ship->co_world;?></td>
					  <td style="vertical-align: middle;"><?php echo $ship->co_city;?></td>
					  <td style="vertical-align: middle;"><?php echo $ship->co_price;?></td>
					  <td style="vertical-align: middle;"><?php echo $ship->co_duration;?></td>
					  <td style="vertical-align: middle;"><?php echo $ship->co_payment_way;?></td>
					  <td style="vertical-align: middle;">
						<button type="button" data-target="<?php echo url('seller/shipping-delivery/edit/' . $ship->id) ?>" data-modal-target="#edit-ship-<?php echo $ship->id; ?>" class="btn btn-primary open-popup">
							تعديل
							<span class="fa fa-pencil"></span>
						</button>
						<button data-target="<?php echo url('seller/shipping-delivery/delete/' . $ship->id) ?>" class="btn btn-danger delete">
							حذف
							<span class="fa fa-trash"></span>
						</button>
					  </td>
					</tr>
				<?php } ?>
			  </table>
			</div>
			<!-- /.box-body -->
		  </div>
	  </div>
  </div>