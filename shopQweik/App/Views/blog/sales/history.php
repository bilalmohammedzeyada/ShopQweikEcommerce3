		<div class="col-sm-9 col-12">
			<div class="card mt-5 mb-5 p-2">
				<div class="address-add">
					<h2 class="address-title">طلباتي</h2>
				</div>
				
				<div class="order-box">
					<div class="table-responsive">
						<table class="table table-sm">
							<thead>
								<tr>
									<th scope="col">كود</th>
									<th scope="col">تاريخ</th>
									<th scope="col">شحن إلى</th>
									<th scope="col">الكمية</th>
									<th scope="col">المجموع</th>
									<th scope="col">الحالة</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($sales as $sale) { ?>
								<tr>
									<th scope="row"><?php echo $sale->code; ?></th>
									<td><?php echo $sale->created; ?></td>
									<td><?php echo $sale->first_name . " " . $sale->last_name; ?></td>
									<td><?php echo $sale->quantity; ?></td>
									<td><?php echo number_format($sale->total_price,2); ?>  ر.س</span></td>
									<td><em><?php 
										if($sale->status == 0){
											echo "معلقة";
										} else if($sale->status == 1){
											echo "تم الشحن";
										} else if($sale->status == 2){
											echo "ملغية";
										} else {
											echo "معلقة"; 
										}
										
										?></em></td>
									<td>
										<a href="<?php echo url('/sales/order/view/order_id/' . $sale->id); ?>">عرض طلب الشراء</a>
											<span class="separator"><!--|<a href="<?php echo url('/sales/order/reorder/order_id/' . $sale->id); ?>" class="link-reorder">امر</a>-->
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
