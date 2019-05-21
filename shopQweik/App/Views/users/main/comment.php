<div class="page-content">
			<div class="page-header">
				<div class="page-title">
					<h3> مرحبا بك في لوحة التجار</h3>
				</div>
			</div>
			<div class="breadcrumb-line">
<ul class="breadcrumb">
	<li>الرئيسية</li>
	<li>إدارة التقييمات</li>
	<li class="active">تقييم العميل</li>
</ul>
</div>

<!-- Main content -->
<div class="panel panel-default">
<div class="panel-heading">
	<h6 class="panel-title">
		<i class="icon-office"></i>تقييم العميل</h6>
</div>
<div class="table-responsive">
  <table class="table table-bordered">
	<thead>
		<tr>
			<th><input type="checkbox" name="" /></th>
			<th>رقم</th>
			<th>المشتري</th>
			<!--<th>رقم الطلب</th>-->
			<th>عنوان ip</th>
			<th>وقت التقييم</th>
			<th>حالة العرض</th>
			<!--<th>عملية</th>-->
		</tr>
	</thead>
	<?php $i =1; foreach($comments as $comment) { ?>
	<tr>
		<td><input type="checkbox" name="" /></td>
		<td><?php echo $comment->id; ?></td>
		<td><?php echo $comment->name; ?></td>
		<td><?php echo $comment->ip; ?></td>
		<td><?php echo $comment->created; ?></td>
		<td><?php 
			if($comment->status == 'enabled'){
				echo 'مفعل';
			} else {
				echo 'غير مفعل';
			}

		?></td>
		<td><?php echo $comment->code; ?></td>
		
	</tr>
	<?php } ?>
  </table>
</div>
			<!-- /.box-body -->
		  </div>
	  </div>
  </div>