<?php $i =1; 
if(! empty($posts)) {	
	foreach($posts as $post) { ?>
<tr>
		<td align="center">
		 <div class="checker"><span><input type="checkbox" value="2409" class="styled checkboxs" name="selected"></span></div></td>
		<td align="center"><img src="<?php echo assets('blog/images/posts/' . $post->image); ?>" style="width:50px; height: 50px; border-radius: 100%;" alt="" /><?php echo $post->id; ?></td>
		<!--<td align="center"><?php //echo $post->code; ?></td>-->
		<td align="center"><?php echo $post->title; ?></td>
		<td align="center"><?php echo $post->brands; ?></td>
		<td align="center"><?php echo $post->price1; ?></td>
		<td align="center"><?php echo $post->price2; ?></td>
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
			echo 'الطلب معلق';
		} else if($post->is_accept == 1){
			echo 'في إنتظار التدقيق';
		}else if($post->is_accept == 2){
			echo '<i class="icon-checkmark3" style="color:#3fbd74;cursor:pointer;" title="تمت الموافقة"> </i>';
		}else if($post->is_accept == 3){
			echo '<i class="icon-cancel" style="cursor:pointer;color:#f00;" title="مرفوض"> </i>';
		}
		?></td>
		<td align="left" style="display: inline-flex; margin: 0 3px;">
			<a type="button" class="btn btn-icon btn-info" href="<?php echo url('seller/Goods/index/edit/' . $post->id) ?>"title="تعديل">
				<i class="icon-pencil3"></i>
			</a>                        
			<form action="<?php echo url('seller/Goods/index/deactive/' . $post->id) ?>" method="POST" class="form">
				<button type="submit" class="btn btn-danger delete" data-target="" title="حذف">
				<i class="icon-remove3"></i>
				</button>
			</form>
			
		</td>
	</tr>
	<?php } } else { ?>
	<tr>
		<td colspan="12" align="center">لم تقم بأضافة أي منتجات</td>
	</tr>
<?php } ?>           
