		<div class="col-sm-9 col-12">
			<div class="card mt-5 mb-5 p-2">
				<div class="address-add">
					<h2 class="address-title">سجل العناوين</h2>
					<a class="last-add osh-btn" href="<?php echo url('/customer/address/new'); ?>">أضافة عنوان جديد</a>
				</div>
				
				<div class="address-box">
					<div class="address-box-1">
						<h3 class="o-address">العنوان الفعلي</h3>
						<?php 
						if($user->address1){
						?>
							<div class="box-address">
							<p><?php echo $user->country; ?></p>
							<p><?php echo $user->city; ?></p>
							<p><?php echo $user->region; ?></p>
							<p><?php echo $user->street; ?></p>
							<p><?php echo $user->building_number; ?></p>
						</div>
						<?php 	 
						} else { ?>
						<div class="no-address">
							لم يتم ادخال عنوان توصيل لهذا الحساب.
						</div>
						<?php } ?>
					</div>
					<div class="address-box-1">
						<h3 class="a-address">عناوين اضافية</h3>
						<div class="box-address">
							<p></p>
							<p></p>
							<p></p>
							<p></p>
						</div>
						<div class="no-address">
							لا توجد عناوين إضافية في دفتر العناوين الخاص بك.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
