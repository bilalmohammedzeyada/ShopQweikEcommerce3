<div class="page-content">
	<div class="page-header">
		<div class="page-title">
			<h3> مرحبا بك في عالم كوايدي</h3>
		</div>
	</div>
	<div class="breadcrumb-line">
    <ul class="breadcrumb">
        <li>الرئيسية</li>
        <li>ادارة الطلبات</li>
        <li class="active">قائمة الطلبات</li>
    </ul>
</div>

<div class="search-line block">
    <div class="col-md-2">
        <input type="text" id="brand" class="form-control" placeholder="رقم الطلب"/>
    </div>
    <div class="col-md-2">
        <input type="text" id="name" class="datepicker form-control" readonly
               placeholder="الطلبات وقت البدء"/>
    </div>
    <div class="col-md-2">
        <input type="text" id="code" class="datepicker form-control" readonly
               placeholder="الطلبات وقت الانتهاء"/>
    </div>
    <div class="col-md-1">
        <button class="btn btn-success btn-block " type="button" onclick="gotoPage(1)">بحث        </button>
    </div>
    <div class="clearfix"></div>
</div>

<div class=" block">
    <ul class="nav nav-pills">
        <li id="" class="active"><a href="#panel-pill1" data-toggle="tab"><i class="icon-folder-open"></i>جميع الطلبات - 
		<?php if($allOrders > 0){
			echo $allOrders->total;
		} else {
			echo 0;
		}
		?>
		</a></li>
        <li id=""><a href="#panel-pill2" data-toggle="tab"><i class="icon-clock4"></i>بإنتظار الشحن - 
		<?php if($allOrdersPinding > 0){
			echo $allOrdersPinding->total;
		} else {
			echo 0;
		}
		?>
		</a></li>
        <li id=""><a href="#panel-pill3" data-toggle="tab"><i class="icon-bus"></i>تم الشحن - 
		<?php if($allOrdersDone > 0){
			echo $allOrdersDone->total;
		} else {
			echo 0;
		}
		?>
		</a></li>
		
		<li id=""><a href="#panel-pill4" data-toggle="tab"><i class="icon-bus"></i>تم ملغية - 
		<?php if($allOrdersCancel > 0){
			echo $allOrdersCancel->total;
		} else {
			echo 0;
		}
		?>
		</a></li>
        <!--<li id=""><a href="#panel-pill4" data-toggle="tab"><i class="icon-file-check"></i>تأكيد الإستلام - 0</a></li>
        <li id=""><a href="#panel-pill5" data-toggle="tab"><i class="icon-sad"></i>إسترجاع/إسترداد - 0</a></li>
        <li id=""><a href="#panel-pill6" data-toggle="tab"><i class="icon-loop4"></i>إستبدال - 0</a></li>
        <li id=""><a href="#panel-pill7" data-toggle="tab"><i class="icon-folder-minus"></i>غير مدفوع - 0</a></li>
        <li id=""><a href="#panel-pill8" data-toggle="tab"><i class="icon-folder-remove"></i>تم الإلغاء - 0</a></li>-->
    </ul>
</div>

<div class="tab-content pill-content">
	<div class="tab-pane fade in active" id="panel-pill1">
		<div class="table-content" id="table-content">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th><input type="checkbox" name="" /></th>
						<th>رقم</th>
						<th>رقم الطلب</th>
						<th>المنتج</th>
						<th>قيمة الطلب</th>
						<th>عنوان الاستلام</th>
						<th>وقت الطلب</th>
						<th>المشتري</th>
						<th>الحالة</th>
						<th>الشحن</th>
						<!--<th>ملاحظات البائع</th>-->
						<th>عملية</th>
					</tr>
				</thead>
				<?php $i =1; 
				if(! empty($orders)) {
					foreach($orders as $order) { ?>
				<tr>
					<td><input type="checkbox" name="" /></td>
					<td><?php echo $order->id; ?></td>
					<td><?php echo $order->code; ?></td>
					<td><?php echo $order->product_title; ?></td>
					<td><?php echo $order->total_price; ?></td>
					<td><?php echo $order->countery; ?></td>
					<td><?php echo $order->created; ?></td>
					<td><?php echo $order->first_name . " " . $order->last_name ; ?></td>
					<td><?php 
								if($order->status == 0){
									echo "معلقة";
								} else if($order->status == 1){
									echo "تم الشحن";
								} else if($order->status == 2){
									echo "ملغية";
								} else {
									echo "معلقة"; 
								}
								
								?></td>
					<td><?php echo $order->payment_method; ?></td>
					<td>
						<a href="<?php echo url('/seller/Goods/index/edit/'. $order->id); ?>" class="btn btn-success"><i class="icon-pencil"></i></a>
						
						<button data-target="<?php echo url('seller/Order/order/delete/' . $order->id) ?>" class="btn btn-danger delete">
						<span class="icon-remove3"></span>
					</button>
					</td>
				</tr>
				<?php } } else { ?>
				<tr>
					<td colspan="12" align="center">لا يوجد طلبات</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<div class="tab-pane fade" id="panel-pill2">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th><input type="checkbox" name="" /></th>
					<th>رقم</th>
					<th>رقم الطلب</th>
					<th>المنتج</th>
					<th>قيمة الطلب</th>
					<th>عنوان الاستلام</th>
					<th>وقت الطلب</th>
					<th>المشتري</th>
					<th>الحالة</th>
					<th>الشحن</th>
					<!--<th>ملاحظات البائع</th>-->
					<th>عملية</th>
				</tr>
			</thead>
			<?php $i =1; 
			if(! empty($o_pending)) {
				foreach($o_pending as $pending) { ?>
			<tr>
				<td><input type="checkbox" name="" /></td>
				<td><?php echo $pending->id; ?></td>
				<td><?php echo $pending->code; ?></td>
				<td><?php echo $pending->product_title; ?></td>
				<td><?php echo $pending->total_price; ?></td>
				<td><?php echo $pending->countery; ?></td>
				<td><?php echo $pending->created; ?></td>
				<td><?php echo $pending->first_name . " " . $pending->last_name ; ?></td>
				<td><?php 
							if($pending->status == 0){
								echo "معلقة";
							} else if($pending->status == 1){
								echo "تم الشحن";
							} else if($pending->status == 2){
								echo "ملغية";
							} else {
								echo "معلقة"; 
							}
							
							?></td>
				<td><?php echo $pending->payment_method; ?></td>
				<td>
					<a href="<?php echo url('/seller/Goods/index/edit/'. $pending->id); ?>" class="btn btn-success"><i class="icon-pencil"></i></a>
					
					<button data-target="<?php echo url('seller/Order/order/delete/' . $pending->id) ?>" class="btn btn-danger delete">
					<span class="icon-remove3"></span>
				</button>
				</td>
			</tr>
			<?php } } else { ?>
			<tr>
				<td colspan="12" align="center">لا يوجد طلبات بإنتظار الشحن</td>
			</tr>
			<?php } ?>
		</table>
	</div>
					
	<div class="tab-pane fade" id="panel-pill3">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th><input type="checkbox" name="" /></th>
					<th>رقم</th>
					<th>رقم الطلب</th>
					<th>المنتج</th>
					<th>قيمة الطلب</th>
					<th>عنوان الاستلام</th>
					<th>وقت الطلب</th>
					<th>المشتري</th>
					<th>الحالة</th>
					<th>الشحن</th>
					<!--<th>ملاحظات البائع</th>-->
					<th>عملية</th>
				</tr>
			</thead>
			<?php $i =1; 
			if(! empty($o_done)) {
				foreach($o_done as $done) { ?>
			<tr>
				<td><input type="checkbox" name="" /></td>
				<td><?php echo $done->id; ?></td>
				<td><?php echo $done->code; ?></td>
				<td><?php echo $done->product_title; ?></td>
				<td><?php echo $done->total_price; ?></td>
				<td><?php echo $done->countery; ?></td>
				<td><?php echo $done->created; ?></td>
				<td><?php echo $done->first_name . " " . $done->last_name ; ?></td>
				<td><?php 
					if($done->status == 0){
						echo "معلقة";
					} else if($done->status == 1){
						echo "تم الشحن";
					} else if($done->status == 2){
						echo "ملغية";
					} else {
						echo "معلقة"; 
					}
					
					?></td>
				<td><?php echo $done->payment_method; ?></td>
				<td>
					<a href="<?php echo url('/seller/Goods/index/edit/'. $done->id); ?>" class="btn btn-success"><i class="icon-pencil"></i></a>
					
					<button data-target="<?php echo url('seller/Order/order/delete/' . $done->id) ?>" class="btn btn-danger delete">
					<span class="icon-remove3"></span>
				</button>
				</td>
			</tr>
			<?php } } else { ?>
			<tr>
				<td colspan="12" align="center">لا يوجد طلبات تحت الشحن</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	
					
	<div class="tab-pane fade" id="panel-pill4">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th><input type="checkbox" name="" /></th>
					<th>رقم</th>
					<th>رقم الطلب</th>
					<th>المنتج</th>
					<th>قيمة الطلب</th>
					<th>عنوان الاستلام</th>
					<th>وقت الطلب</th>
					<th>المشتري</th>
					<th>الحالة</th>
					<th>الشحن</th>
					<!--<th>ملاحظات البائع</th>-->
					<th>عملية</th>
				</tr>
			</thead>
			<?php $i =1; 
			if(! empty($o_cancel)) {
				foreach($o_cancel as $cancel) { ?>
			<tr>
				<td><input type="checkbox" name="" /></td>
				<td><?php echo $cancel->id; ?></td>
				<td><?php echo $cancel->code; ?></td>
				<td><?php echo $cancel->product_title; ?></td>
				<td><?php echo $cancel->total_price; ?></td>
				<td><?php echo $cancel->countery; ?></td>
				<td><?php echo $cancel->created; ?></td>
				<td><?php echo $cancel->first_name . " " . $cancel->last_name ; ?></td>
				<td><?php 
					if($cancel->status == 0){
						echo "معلقة";
					} else if($cancel->status == 1){
						echo "تم الشحن";
					} else if($cancel->status == 2){
						echo "ملغية";
					} else {
						echo "معلقة"; 
					}
					
					?></td>
				<td><?php echo $cancel->payment_method; ?></td>
				<td>
					<a href="<?php echo url('/seller/Goods/index/edit/'. $cancel->id); ?>" class="btn btn-success"><i class="icon-pencil"></i></a>
					
					<button data-target="<?php echo url('seller/Order/order/delete/' . $cancel->id) ?>" class="btn btn-danger delete">
					<span class="icon-remove3"></span>
				</button>
				</td>
			</tr>
			<?php } } else { ?>
			<tr>
				<td colspan="12" align="center">لا يوجد طلبات ملغية</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	
	
</div>
	</div>
</div>
          