<?php $i =1; 
if(! empty($posts)) {
	foreach($posts as $post) { ?>
	<tr>
		<td align="center">
		 <div class="checker"><span><input type="checkbox" value="2409" class="styled checkboxs" name="selected"></span></div></td>
		<td align="center"><img src="<?php echo assets('blog/images/posts/' . $post->image); ?>" style="width:50px; height: 50px; border-radius: 100%;" alt="" /><?php echo $post->id; ?></td>
		<td align="center"><?php echo $post->code; ?></td>
		<td align="center"><?php echo $post->title; ?></td>
		<td align="center"><?php echo $post->brands; ?></td>
		<td align="center"><?php echo $post->price1; ?></td>
		<td align="center"><?php echo $post->stock; ?></td>
		<td align="center"><?php 
		if($post->status == 'enabled'){
			echo '<i class="icon-checkmark3"style="color:#3fbd74;cursor:pointer;"></i>';
		} else {
			echo '<i class="icon-checkmark3"></i>';
		}
		?></td>
		<td align="center"><?php 
		if($post->is_accept == 0){
			echo '<i class="icon-checkmark3" style="cursor:pointer;" title="معلقة"> </i>';
		} else if($post->is_accept == 1){
			echo '<i class="icon-checkmark3" style="cursor:pointer;" title="في إنتظار الموافقة"> </i>';
		}else if($post->is_accept == 2){
			echo '<i class="icon-checkmark3" style="color:#3fbd74;cursor:pointer;" title="تمت الموافقة"> </i>';
		}else if($post->is_accept == 3){
			echo '<i class="icon-checkmark3" style="cursor:pointer;" title="مرفوض"> </i>';
		}
		?></td>
	   <td align="left" style="display: inline-flex; margin: 0 3px;">
			<form action="<?php echo url('seller/Goods/index/isactive/' . $post->id) ?>" method="POST" class="form">
				<button type="submit" class="btn btn-info delete" data-target="" title="حذف">
				<i class="icon-spinner8"></i>
				</button>
			</form>
			<form action="<?php echo url('seller/Goods/index/delete/' . $post->id) ?>" method="POST" class="form">
				<button type="submit" class="btn btn-danger delete" data-target="" title="حذف">
				<i class="icon-close"></i>
				</button>
			</form>
		</td>
	</tr>
<?php } } else { ?>
	<tr>
		<td colspan="12" align="center">لا يوجد منتجات محذوفة</td>
	</tr>
<?php } ?>            
