 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li>الرئيسية</li>
				<li>تقرير الاحصائيات</li>
				<li class="active">تفاصيل المبيعات</li>
			</ul>
		</div>
		
		<div class="search-line block">
    <div class="col-md-2">
        <input type="text" id="brand" class="form-control" placeholder="رقم الطلب">
    </div>
    <div class="col-md-2">
        <input type="text" id="name" class="datepicker form-control hasDatepicker" readonly="" placeholder="وقت البدء">
    </div>
    <div class="col-md-2">
        <input type="text" id="code" class="datepicker form-control hasDatepicker" readonly="" placeholder="وقت الانتهاء">
    </div>
    <div class="col-md-1">
        <button class="btn btn-success btn-block " type="button" onclick="gotoPage(1)">بحث        </button>
    </div>
    <div class="clearfix"></div>
</div>
		
</section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box box-danger" id="posts-list">
                <div class="box-header with-border">
                  <h3 class="box-title">Dashboard </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<div class="table-content" id="table-content"><div class="panel panel-default">
    <div class="panel-heading">
        <h6 class="panel-title">
            <i class="icon-stats-up"></i>تفاصيل المبيعات        </h6>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td width="40px" height="45" align="center"><strong>رقم</strong></td>
                <td width="" align="center"><strong>المنتج</strong></td>
                <td width="" align="center"><strong>رقم الطلب</strong></td>
                <td width="" align="center"><strong>الرصيد</strong></td>
                <td width="" align="center"><strong>كمية</strong></td>
                <td width="" align="center"><strong>تاريخ البيع</strong></td>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="panel-footer">
        <div class="col-md-2">
            <button class="btn btn-success btn-block" type="button" style="min-width:100px;">
                تصدير الى ملف            </button>
        </div>
        <div class="col-md-10" id="divPage" page="">
                    </div>
    </div>
</div></div>
				

				</div>
                <!-- /.box-body -->
              </div>
          </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->