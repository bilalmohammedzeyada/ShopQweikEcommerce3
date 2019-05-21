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
                  <h3 class="box-title">إدارة السلايدر الرئيسي</h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-adslider-form" data-target="<?php echo url('/admin/adshome/addslider'); ?>">أضافة سلايدر جديد</button>
				  <br />

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>اسم السلايدر</th>
                        <th>يبدأ</th>
                        <th>ينتهي</th>
                        <th>الحالة</th>
                        <th>تاريخ الانشاء</th>
                        <th>الحدث</th>
                    </tr>
                    
                    <?php $i = 0; foreach ($firstSliders AS $firstSlider) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo ++$i;?></td>
                          <td>
                            <img src="<?php echo assets('blog/images/' . $firstSlider->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                            <?php echo $firstSlider->name ;?>
                          </td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $firstSlider->start_at);?></td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $firstSlider->end_at);?></td>
                          <td style="vertical-align: middle;"><?php echo ucfirst($firstSlider->status);?></td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $firstSlider->created);?></td>
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/adshome/edit/' . $firstSlider->id) ?>" data-modal-target="#edit-ad-<?php echo $firstSlider->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('admin/adshome/delete/' . $firstSlider->id) ?>" class="btn btn-danger delete">
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
	<br />
	
	<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="ads-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة البنر الأول</h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-firstbanner-form" data-target="<?php echo url('/admin/adshome/addfirstbanner'); ?>">إضافة بنر </button>
				  <br />

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>اسم السلايدر</th>
                        <th>يبدأ</th>
                        <th>ينتهي</th>
                        <th>الحالة</th>
                        <th>تاريخ الانشاء</th>
                        <th>الحدث</th>
                    </tr>
                    
                    <?php $i = 0; foreach ($firstbanner AS $first) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo ++$i;?></td>
                          <td>
                            <img src="<?php echo assets('blog/images/' . $first->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                            <?php echo $first->name ;?>
                          </td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $first->start_at);?></td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $first->end_at);?></td>
                          <td style="vertical-align: middle;"><?php echo ucfirst($first->status);?></td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $first->created);?></td>
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/adshome/editfirstbanner/' . $first->id) ?>" data-modal-target="#edit-firstbanner-<?php echo $first->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('admin/adshome/delete/' . $first->id) ?>" class="btn btn-danger delete">
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
	<br />
	
	
	<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="ads-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة البنر الثاني</h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-secondbanner-form" data-target="<?php echo url('/admin/adshome/addsecondbanner'); ?>">إضافة بنر جديد</button>
				  <br />

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>اسم السلايدر</th>
                        <th>يبدأ</th>
                        <th>ينتهي</th>
                        <th>الحالة</th>
                        <th>تاريخ الانشاء</th>
                        <th>الحدث</th>
                    </tr>
                    
                    <?php $i = 0; foreach ($secondbanner AS $second) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo ++$i;?></td>
                          <td>
                            <img src="<?php echo assets('blog/images/' . $second->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                            <?php echo $second->name ;?>
                          </td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $second->start_at);?></td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $second->end_at);?></td>
                          <td style="vertical-align: middle;"><?php echo ucfirst($second->status);?></td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $second->created);?></td>
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/adshome/editsecondbanner/' . $second->id) ?>" data-modal-target="#edit-secondbanner-<?php echo $second->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('admin/adshome/delete/' . $second->id) ?>" class="btn btn-danger delete">
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
	<br />
	
	
	<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="ads-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة البنر الثالث</h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-thirdbanner-form" data-target="<?php echo url('/admin/adshome/addthirdbanner'); ?>">إضافة بنر جديد</button>
				  <br />

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>اسم السلايدر</th>
                        <th>يبدأ</th>
                        <th>ينتهي</th>
                        <th>الحالة</th>
                        <th>تاريخ الانشاء</th>
                        <th>الحدث</th>
                    </tr>
                    
                    <?php $i = 0; foreach ($thirdbanner AS $third) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo ++$i;?></td>
                          <td>
                            <img src="<?php echo assets('blog/images/' . $third->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                            <?php echo $third->name ;?>
                          </td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $third->start_at);?></td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $third->end_at);?></td>
                          <td style="vertical-align: middle;"><?php echo ucfirst($third->status);?></td>
                          <td style="vertical-align: middle;"><?php echo date('d-m-Y', $third->created);?></td>
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/adshome/editthirdbanner/' . $third->id) ?>" data-modal-target="#edit-thirdbanner-<?php echo $third->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('admin/adshome/delete/' . $third->id) ?>" class="btn btn-danger delete">
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