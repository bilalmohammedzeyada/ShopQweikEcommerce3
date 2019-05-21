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
        <li class="active">الاستراكات البريدية</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="posts-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة الاشتراكات البريدية </h3>
                  <!--<button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-bank-form" data-target="<?php //echo url('/admin/banks/add'); ?>">إضافة حساب بنكي جديد</button>-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>البريد الألكتروني</th>
                    </tr>
                    <?php foreach ($subs AS $sub) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo $sub->id;?></td>
                          
                          <td style="vertical-align: middle;"><?php echo $sub->email;?></td>
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