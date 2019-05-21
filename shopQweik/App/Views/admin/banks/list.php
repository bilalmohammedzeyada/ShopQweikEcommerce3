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
        <li class="active">الحسابات البنكية</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="posts-list">
                <div class="box-header with-border">
                  <h3 class="box-title">إدارة الحسابات البنكية</h3>
                  <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-bank-form" data-target="<?php echo url('/admin/banks/add'); ?>">إضافة حساب بنكي جديد</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="results"></div>
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>اسم البنك</th>
                        <th>اسم صاحب الحساب</th>
                        <th>رقم الحساب</th>
                        <th>IBAN</th>
                    </tr>
                    <?php foreach ($Banks AS $bank) { ?>
                        <tr>
                          <td style="vertical-align: middle;"><?php echo $bank->id;?></td>
                          <td>
                            <img src="<?php echo assets('images/' . $bank->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                            <?php echo $bank->banks_name ;?>
                          </td>
                          <td style="vertical-align: middle;"><?php echo $bank->account_name;?></td>
						  <td style="vertical-align: middle;"><?php echo $bank->account_number;?></td>
						  <td style="vertical-align: middle;"><?php echo $bank->banks_iban;?></td>
                          <td style="vertical-align: middle;">
                            <button type="button" data-target="<?php echo url('admin/banks/edit/' . $bank->id) ?>" data-modal-target="#edit-bank-<?php echo $bank->id; ?>" class="btn btn-primary open-popup">
                                تعديل
                                <span class="fa fa-pencil"></span>
                            </button>
                            <button data-target="<?php echo url('admin/banks/delete/' . $bank->id) ?>" class="btn btn-danger delete">
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