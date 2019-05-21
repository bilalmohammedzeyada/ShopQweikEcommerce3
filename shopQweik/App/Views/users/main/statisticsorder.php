<div class="page-content">
                <div class="page-header">
                    <div class="page-title">
                        <h3> مرحبا بك في عالم كوايدي</h3>
                    </div>
                </div>
                <div class="breadcrumb-line">
    <ul class="breadcrumb">
        <li>الرئيسية</li>
        <li>تقرير الاحصائيات</li>
        <li class="active">احصائيات الطلبات</li>
    </ul>
</div>

<div class="search-line block">
    <div class="col-md-2">
        <input type="text" id="name" class="datepicker form-control" readonly
               placeholder="وقت البدء"/>
    </div>
    <div class="col-md-2">
        <input type="text" id="code" class="datepicker form-control" readonly
               placeholder="وقت الانتهاء"/>
    </div>
    <div class="col-md-1">
        <button class="btn btn-success btn-block " type="button">بحث        </button>
    </div>
    <div class="clearfix"></div>
</div>

<div class="table-content" id="table-content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title">
                <i class="icon-coin"></i>تفاصيل المبيعات            </h6>
        </div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-3 control-label text-right">طلبات غير مدفوعة :</label>
				<label class="col-sm-8 control-label">
				<?php if($totalFailed->totalfailed){
						echo $totalFailed->totalfailed;
				} else { 
					echo '0';
				}
				 ?></label>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label text-right">طلبات مكتملة :</label>
				<label class="col-sm-8 control-label">
				<?php if($totalDone->totaldone){
						echo $totalDone->totaldone;
				} else { 
					echo '0';
				}
				 ?>
				
				</label>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label text-right"> إجمالي مبلغ الطلبات سارية المفعول :</label>
				<label class="col-sm-8 control-label"><?php if($totalPricce->total_price){
						echo $totalPricce->total_price;
				} else { 
					echo '0';
				}
				 ?></label>
			</div>

		</div>
	</div>
</div>
	</div>
</div>
<!-- /.box-body -->
</div>
</div>
