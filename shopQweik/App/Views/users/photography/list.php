<div class="page-content">
	<div class="page-header">
		<div class="page-title">
			<h3> مرحبا بك في لوحة التجار</h3>
		</div>
	</div>
	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>الرئيسية</li>
			<li>تصوير المنتج</li>
			<li class="active">تصوير المنتج وتصميمه</li>
		</ul>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h6 class="panel-title">
				<i class="icon-office"></i>تصوير المنتج وتصميمه</h6>
				<button type="button" type="button" data-modal-target="#add-photography-form" data-target="<?php echo url('/seller/photography/add'); ?>" class="btn btn-default pull-right open-popup">
			<i class="icon-star5 pl"></i>أضافة تصوير منتج</button>
		</div>
	<div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td width="100px" align="center"><strong>الاسم</strong></td>
                <td width="" align="center"><strong>الجوال</strong></td>
                <td width="" align="center"><strong>الايميل</strong></td>
                <td width="" align="center"><strong>عدد المنتجات</strong></td>
                <td width="" align="center"><strong>وصف المنتجات</strong></td>
            </tr>
            </thead>
            <tbody>
				<?php $i =1; foreach($photographys as $photography) { ?>
				<tr>
					<td align="center"><?php echo $photography->name; ?></td>
					<td align="center"><?php echo $photography->mobile; ?></td>
					<td align="center"><?php echo $photography->email; ?></td>
					<td align="center"><?php echo $photography->n_product; ?></td>
					<td align="center"><?php echo $photography->desc_product; ?></td>
					<td style="vertical-align: middle;">
						<button type="button" data-target="<?php echo url('seller/photography/edit/' . $photography->id) ?>" data-modal-target="#edit-photography-<?php echo $photography->id; ?>" class="btn btn-primary open-popup">
							تعديل
							<span class="fa fa-pencil"></span>
						</button>
						<button data-target="<?php echo url('seller/photography/delete/' . $photography->id) ?>" class="btn btn-danger delete">
							حذف
							<span class="fa fa-trash"></span>
						</button>
					</td>
				</tr>
				<?php } ?>            
				</tbody>
        </table>
    </div>
   
	
	
</div>