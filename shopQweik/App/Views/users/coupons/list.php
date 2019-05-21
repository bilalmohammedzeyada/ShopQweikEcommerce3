<div class="page-content">
			<div class="page-header">
				<div class="page-title">
					<h3> مرحبا بك في لوحة التجار</h3>
				</div>
			</div>
			<div class="breadcrumb-line">
<ul class="breadcrumb">
	<li>الرئيسية</li>
	<li>الكوبونات</li>
	<li class="active">إدارة الكوبونات</li>
</ul>
</div>

<!-- Main content -->
<div class="panel panel-default">
<div class="panel-heading">
	<h6 class="panel-title">
		<i class="icon-office"></i>إدارة الكوبونات </h6>
	
		<button type="button" type="button" data-modal-target="#add-coupon-form" data-target="<?php echo url('/seller/coupons/add'); ?>" class="btn btn-default pull-right open-popup">
			<i class="icon-star5 pl"></i>أضافة كوبون جديد</button>
	
</div>

<div class="table-responsive">
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>الكوبون</th>
                        <th>السعر</th>
                        <th>الحدث</th>
                        
                    </tr>
                    <?php foreach ($Coupons AS $coupon) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo $coupon->id;?></td>
                          
                          <td style="vertical-align: middle;"><?php echo $coupon->coupon_name;?></td>
                          <td style="vertical-align: middle;"><?php echo $coupon->coupon_price;?></td>
                         
                          
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('seller/coupons/edit/' . $coupon->id); ?>" data-modal-target="#edit-coupon-<?php echo $coupon->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            
                            <button data-target="<?php echo url('seller/coupons/delete/' . $coupon->id); ?>" class="btn btn-danger delete">
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->