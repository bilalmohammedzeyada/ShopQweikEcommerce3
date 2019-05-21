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
        <li class="active">
            <span class="fa fa-user"></span>
            الكوبونات
        </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة الكوبونات</h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-coupon-form" data-target="<?php echo url('/admin/coupons/add'); ?>">إضافة كوبون جديد</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>الكوبون</th>
                        <th>السعر</th>
                        <th>مجموعة العضو</th>
                        
                    </tr>
                    <?php foreach ($Coupons AS $coupon) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo $coupon->id;?></td>
                          
                          <td style="vertical-align: middle;"><?php echo $coupon->coupon_name;?></td>
                          <td style="vertical-align: middle;"><?php echo $coupon->coupon_price;?></td>
                         
                          
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/coupons/edit/' . $coupon->id); ?>" data-modal-target="#edit-coupon-<?php echo $coupon->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            
                            <button data-target="<?php echo url('admin/coupons/delete/' . $coupon->id); ?>" class="btn btn-danger delete">
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