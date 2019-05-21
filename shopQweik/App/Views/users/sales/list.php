  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        لوحة التحكم
        <small>لوحة التحكم</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo url('/admin'); ?>"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
        <li class="active">المبيعات</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="posts-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة المبيعات</h3>
                  <!--<button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-post-form" data-target="<?php //echo url('/admin/sales/add'); ?>">أضافة منتج جديد</button>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>اسم المنتج</th>
                        <th>المشتري</th>
                        <th>الحالة</th>
                        <th>الكمية</th>
                        <th>السعر</th>
                        <th>الحدث</th>
                    </tr>
                    <?php foreach ($sales AS $sale) { ?>
					<!--`id`, `first_name`, `last_name`, `email`, `country`, `city`, `region`, `street`, `building_number`, `post_code`, `co_country`, `mobile`, `shipping_method`, `payment_method`, `total_price`, `product_title`, `price`, `weight`, `quantity`, `product_id`, `code`, `created`, `status`, `user_id` -->
                        <tr>
                          <td style="vertical-align: middle;"><?php echo $sale->id;?></td>
                          <td>
                            <?php echo $sale->product_title ;?>
                          </td>
                          <td style="vertical-align: middle;"><?php echo $sale->first_name . " " . $sale->last_name;?></td>
                          <td style="vertical-align: middle;">
						  <?php 
							if($sale->status == 0){
								echo "معلقة";
							} else if($sale->status == 1){
								echo "تم الشحن";
							} else if($sale->status == 2){
								echo "ملغية";
							} else {
								echo "معلقة"; 
							}
							
							?>
						  </td>
                          <td style="vertical-align: middle;"><?php echo $sale->quantity;?></td>
                          <td style="vertical-align: middle;"><?php echo $sale->total_price;?></td>
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('users/sales/edit/' . $sale->id) ?>" data-modal-target="#edit-sale-<?php echo $sale->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('users/sales/delete/' . $sale->id) ?>" class="btn btn-danger delete">
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