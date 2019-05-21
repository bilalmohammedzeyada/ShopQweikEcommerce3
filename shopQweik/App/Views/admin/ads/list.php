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
        <li class="active">الأعلانات</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="ads-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة الاعلانات لديك</h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-ad-form" data-target="<?php echo url('/admin/ads/add'); ?>">أضافة إعلان جديد</button>
				  <br />
					<h3 class="box-title">نموذج التاريخ</h3> <br />
					<h3 class="box-title">01-01-2019</h3> <br />
					<h3 class="box-title">30-01-2019</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
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
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/ads/edit/' . $ad->id) ?>" data-modal-target="#edit-ad-<?php echo $ad->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('admin/ads/delete/' . $ad->id) ?>" class="btn btn-danger delete">
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