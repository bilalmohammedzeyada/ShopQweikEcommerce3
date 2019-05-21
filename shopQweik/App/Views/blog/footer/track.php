<div class="track">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12 col-12">
				<div class="card">
					<div class="card-header">
						تتبع طلبك
					</div>
					<div class="card-body">
					<?php if($orders->code != ''){ ?>
						<table class="table">
						  <thead class="thead-dark">
							<tr>
							  <th scope="col">رقم الطلب</th>
							  <th scope="col">الحالة</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td><?php echo $orders->code; ?></td>
							  <td><?php 
					if($orders->status == 0){
						echo "حالة طلبك الان الانتظار/قيد التجهيز معلومات اضافية عن طلبك سيتم تحميلها فور شحن الطلب مع شركة الشحن";
					} else if($orders->status == 1){
						echo "تم الشحن";
					} else if($orders->status == 2){
						echo "ملغية";
					} else {
						echo "حالة طلبك الان الانتظار/قيد التجهيز معلومات اضافية عن طلبك سيتم تحميلها فور شحن الطلب مع شركة الشحن"; 
					}
					
					?></td>
							</tr>
						  </tbody>
						</table>
					<?php } else {
						echo "لا يوجد بيانات لطلبك .. ربما لم تقم بشراء منتج يحمل رقم هذا الطلب";
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>