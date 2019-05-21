  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        حة التحكم
        <small>لوحة التحكم</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo url('/admin'); ?>"><i class="fa fa-dashboard"></i> حة التحكم</a></li>
        <li class="active">الاعدادات</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="ads-list">
                <div class="box-header with-border">
                  <h3 class="box-title">
                    <span class="fa fa-cogs"></span>
                    الاعدادات
                  </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="<?php echo $action; ?>" method="post">
                        <?php if ($errors) { ?>
                            <div id="form-results" class="alert alert-danger">
                                <?php echo $errors;?>
                            </div>
                        <?php } ?>
                        <?php if ($success) { ?>
                            <div id="form-results" class="alert alert-success">
                                <?php echo $success;?>
                            </div>
                        <?php } ?>
                        <div class="form-group col-sm-12">
                          <label for="site_name">اسم الموقع</label>
                          <input type="text" class="form-control" name="site_name" id="site_name" value="<?php echo $site_name; ?>" placeholder="اسم الموقع">
                        </div>
                        
                        <div class="form-group col-sm-12">
                          <label for="site_email">البريد الالكتروني للموقع</label>
                          <input type="email" class="form-control" name="site_email" id="site_email" value="<?php echo $site_email; ?>" placeholder="البريد الألكتروني للموقع">
                        </div>
                        
                        <div class="form-group col-sm-12">
                        	<label for="description">وصف الموقع</label>
                        	<input type="text" class="form-control" name="description" id="description" value="<?php echo $description; ?>" placeholder="قم بوضع وصف ممتاز ليظهر في محركات البحث">
                        </div>
                        
                        <div class="form-group col-sm-12">
                          <label for="keywords">الكلمات المفتاحية</label>
                          <input type="text" class="form-control" name="keywords" id="keywords" value="<?php echo $keywords; ?>" placeholder="أدخل كلمات مفتاحية بوضع فاصلة بين الكلمات">
                        </div>
                        
                        
                          <div class="form-group col-sm-12">
                            <label for="site_status">حالة الموقع</label>
                            <select class="form-control" id="site_status" name="site_status">
                                <option value="enabled">مفعل </option>
                                <option value="disabled" <?php echo $site_status == 'disabled' ? 'selected': false; ?>>معطل</option>
                            </select>
                          </div>
                          <div class="form-group col-sm-12">
                            <label for="site_close_msg">رسالة إغلاق الموقع</label>
                                <textarea name="site_close_msg" class="details" id="site_close_msg" cols="30" rows="10"><?php echo $site_close_msg;?></textarea>
                          </div>
						  
						  <div class="form-group col-sm-12">
                            <label for="site_close_msg">حول الموقع</label>
                                <textarea name="about" class="details" id="about" cols="30" rows="10"><?php echo $about;?></textarea>
                          </div>
						  
						  <div class="form-group col-sm-12">
							<label for="site_email">رقم هاتف الشركة</label>
							<input type="text" class="form-control" name="phone" id="site_email" value="<?php echo $phone; ?>" placeholder="رقم هاتف الشركة">
						  </div>
						  
						  
						  <div class="form-group col-sm-12">
							<label for="site_email">سعر الاستلام بواسطة اليد</label>
							<input type="text" class="form-control" name="price_shipments_pay_hand" id="price_shipments_pay_hand" value="<?php echo $price_shipments_pay_hand; ?>" placeholder="سعر الاستلام بواسطة اليد">
						  </div>
						  
						  
						<div class="form-group col-sm-12">
							<label for="site_email">سعر الخصم الموحد لجميع المنتجات</label>
							<input type="text" class="form-control" name="discount_price" id="discount_price" value="<?php echo $discount_price; ?>" placeholder="سعر الخصم الموحد لجميع المنتجات">
						  </div>
						  
						  
						  <div class="form-group col-sm-12">
							<label for="site_email">سعر الشحن</label>
							<input type="text" class="form-control" name="shipments_price" id="shipments_price" value="<?php echo $shipments_price; ?>" placeholder="سعر الشحن">
						  </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رسالة الهدايا</label>
                          <input type="text" class="form-control" name="gifts" id="site_email" value="<?php echo $gifts; ?>" placeholder="رسالة الهدايا">
                        </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رسالة شحن المنتجات</label>
                          <input type="text" class="form-control" name="shipments" id="site_email" value="<?php echo $shipments; ?>" placeholder="رسالة شحن المنتجات">
                        </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رسالة الموقع</label>
                          <input type="text" class="form-control" name="msg" id="site_email" value="<?php echo $msg; ?>" placeholder="رسالة الموقع">
                        </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رابط صفحة الفيسبوك</label>
                          <input type="text" class="form-control" name="fb" id="fb" value="<?php echo $fb; ?>" placeholder="رابط صفحة الفيسبوك">
                        </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رابط صفحة تويتر</label>
                          <input type="text" class="form-control" name="tw" id="tw" value="<?php echo $tw; ?>" placeholder="رابط صفحة تويتر">
                        </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رابط صفحة انستقرام</label>
                          <input type="text" class="form-control" name="ins" id="ins" value="<?php echo $ins; ?>" placeholder="رابط صفحة انستقرام">
                        </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رابط صفحة اليوتيوب</label>
                          <input type="text" class="form-control" name="tube" id="tube" value="<?php echo $tube; ?>" placeholder="Message">
                        </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رابط صفحة سناب شات</label>
                          <input type="text" class="form-control" name="snap" id="fb" value="<?php echo $snap; ?>" placeholder="رابط صفحة سناب شات">
                        </div>
						
						<div class="form-group col-sm-12">
                          <label for="site_email">رابط صفحة واتس اب او رقم </label>
                          <input type="text" class="form-control" name="wht" id="wht" value="<?php echo $wht; ?>" placeholder="رابط صفحة واتس اب او رقم ">
                        </div>
						
                          <button class="btn btn-info">حفظ</button>
                    </form>
                </div>
                <!-- /.box-body -->
              </div>
          </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->