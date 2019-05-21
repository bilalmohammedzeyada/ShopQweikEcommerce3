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
        <li class="active">المنتجات</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="posts-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة المنتجات</h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-post-form" data-target="<?php echo url('/admin/posts/add'); ?>">أضافة منتج جديد</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>اسم المنتج</th>
                        <th>التصنيف</th>
                        <th>الماركة</th>
                        <th>الحالة</th>
                        <th>السعر</th>
                        <th>الحدث</th>
                    </tr>
                    <?php foreach ($posts AS $post) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo $post->id;?></td>
                          <td>
                            <img src="<?php echo assets('blog/images/posts/' . $post->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                            <?php echo $post->title ;?>
                          </td>
                          <td style="vertical-align: middle;"><?php echo $post->category;?></td>
                          <td style="vertical-align: middle;"><?php echo $post->brands;?></td>
                          <td style="vertical-align: middle;"><?php echo ucfirst($post->status);?></td>
                          <td style="vertical-align: middle;"><?php echo $post->price1;?></td>
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/posts/edit/' . $post->id) ?>" data-modal-target="#edit-post-<?php echo $post->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('admin/posts/delete/' . $post->id) ?>" class="btn btn-danger delete">
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