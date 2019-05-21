		<div class="col-sm-9 col-12">
			<div class="card mt-5 mb-5 p-2">
				<div class="address-add">
					<h2 class="address-title">مراجعة المنتجات</h2>
				</div>
				
				<div class="order-box">
					<div class="table-responsive">
						<table class="table table-sm">
							<thead>
								<tr>
									<th scope="col">تاريخ</th>
									<th scope="col">المنتج</th>
									<th scope="col">مراجعتي</th>
									<th scope="col" colspan="2">تقييمي</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($reviews as $review) { ?>
								<tr>
									<th scope="row"><?php echo $review->created; ?></th>
									<td><?php echo $review->title_post; ?></td>
									<td><?php echo $review->comment; ?></td>
									<td><?php 
											if($review->rating == 1){ ?>
											<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
											<?php } else if($review->rating == 2){ ?>
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
											<?php } else if($review->rating == 3){ ?>
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
											<?php } else if($review->rating == 4){ ?>
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
											<?php } else if($review->rating == 5){ ?>
												<img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" /><img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" /><img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" /><img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" /><img src="<?php echo assets('blog/svgs/solid/star.svg'); ?>" style="width:15px; height: 15px; border-radius: 50%;" alt="" />
											<?php
											}
										?>
										</td>
									<td><?php 
									if($review->rating == 1){
										echo "مقبول";
									} else if($review->rating == 2){
										echo "جيد";
									} else if($review->rating == 3){
										echo "متوسط";
									} else if($review->rating == 4){
										echo "جيد جدا";
									} else if($review->rating == 5){
										echo "ممتاز";
									}
									?></td>
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
