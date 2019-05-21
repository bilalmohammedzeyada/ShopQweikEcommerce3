<div class="page-content">
			<div class="page-header">
				<div class="page-title">
					<h3> مرحبا بك في عالم كوايدي</h3>
				</div>
			</div>
			<div class="breadcrumb-line">
<ul class="breadcrumb">
	<li>الرئيسية</li>
	<li>إدارة الاعلانات لديك</li>
</ul>
</div>

<!-- Main content -->
<div class="panel panel-default">
<div class="panel-heading">
	<h6 class="panel-title">
		<i class="icon-office"></i>إدارة الاعلانات لديك </h6>
	
		<button type="button" type="button" data-modal-target="#add-ad-form" data-target="<?php echo url('/seller/ads/add'); ?>" class="btn btn-default pull-right open-popup">
			<i class="icon-star5 pl"></i>أضافة إعلان جديد</button>
	
</div>

<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>#</th>
			<th>اسم الاعلان</th>
			<th>يبدأ</th>
			<th>ينتهي</th>
			<th>الحالة</th>
			<th>تاريخ الانشاء</th>
			<th>الحدث</th>
		</tr>
				
				<?php $i = 0; foreach ($ads AS $ad) { ?>
					<tr>
					  <td style="vertical-align: middle;"><?php echo ++$i;?></td>
					  <td>
						<img src="<?php echo assets('blog/images/' . $ad->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
						<?php echo $ad->name ;?>
					  </td>
					  <td style="vertical-align: middle;"><?php echo date('d-m-Y', $ad->start_at);?></td>
					  <td style="vertical-align: middle;"><?php echo date('d-m-Y', $ad->end_at);?></td>
					  <td style="vertical-align: middle;"><?php echo ucfirst($ad->status);?></td>
					  <td style="vertical-align: middle;"><?php echo date('d-m-Y', $ad->created);?></td>
					  <td style="vertical-align: middle;"><?php echo $ad->co_payment_way;?></td>
					  <td style="vertical-align: middle;">
						<button type="button" data-target="<?php echo url('seller/ads/edit/' . $ad->id) ?>" data-modal-target="#edit-ad-<?php echo $ad->id; ?>" class="btn btn-primary open-popup">
							تعديل
							<span class="fa fa-pencil"></span>
						</button>
						<button data-target="<?php echo url('seller/ads/delete/' . $ad->id) ?>" class="btn btn-danger delete">
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