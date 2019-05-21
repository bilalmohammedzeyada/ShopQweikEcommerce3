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
        <li class="active">الماركات</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="posts-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة الماركات </h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-brand-form" data-target="<?php echo url('/admin/brands/add'); ?>">أضافة ماركة جديدة</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>اسم الماركة</th>
                        <th>التصنيف التابعة له </th>
                        <th>اسم الماركة بالانجليزي</th>
                    </tr>
                    <?php foreach ($brands AS $brand) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo $brand->id;?></td>
                          <td>
                            <img src="<?php echo assets('images/' . $brand->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                            <?php echo $brand->title ;?>
                          </td>
                          <td style="vertical-align: middle;"><?php echo $brand->category;?></td>
						  <td style="vertical-align: middle;"><?php echo $brand->en_title;?></td>
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/brands/edit/' . $brand->id) ?>" data-modal-target="#edit-brand-<?php echo $brand->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('admin/brands/delete/' . $brand->id) ?>" class="btn btn-danger delete">
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