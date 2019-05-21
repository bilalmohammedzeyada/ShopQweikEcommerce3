  <div class="modal fade" id="<?php echo $target; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><?php echo $heading; ?></h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo $action; ?>" class="form-modal form">
            <div id="form-results"></div>
            <div class="form-group col-sm-12">
              <label for="title">اسم المنتج</label>
              <input type="text" required  class="form-control" name="title" id="title" value="<?php echo $title; ?>" placeholder="اسم المنتج">
            </div> 
			
			<div class="form-group col-sm-12">
              <label for="en_title">اسم المنتج بالانجليزي</label>
              <input type="text"  required class="form-control" name="en_title" id="en_title" value="<?php echo $en_title; ?>" placeholder="اسم المنتج بالانجليزي">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="title">وصف المنتج بالانجليزي</label>
              <input type="text"  required class="form-control" name="desc_en_title" id="desc_en_title" value="<?php echo $desc_en_title; ?>" placeholder="وصف المنتج بالانجليزي">
            </div>
            
            <div class="form-group col-sm-12">
              <label for="details">وصف المنتج</label>
              <input type="text" required class="form-control" name="details" id="detailss" value="<?php echo $details; ?>" placeholder="وصف المنتج">
            </div>

            <div class="form-group col-sm-12">
              <label for="tags">كلمات مفتاحية</label>
              <input type="text" required  class="form-control" name="tags" id="tags" value="<?php echo $tags; ?>" placeholder="كلمات مفتاحية">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="price1">السعر</label>
              <input type="text" required  class="form-control" name="price1" id="price1" value="<?php echo $price1; ?>" placeholder="السعر">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="price2">سعر الخصم</label>
              <input type="text" required  class="form-control" name="price2" id="price2" value="<?php echo $price2; ?>" placeholder="سعر الخصم">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="shipments_price">سعر الشحن</label>
              <input type="text" required  class="form-control" name="shipments_price" id="shipments_price" value="<?php echo $shipments_price; ?>" placeholder="سعر الشحن">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="weight">الحجم</label>
              <input type="text" required  class="form-control" name="weight" id="weight" value="<?php echo $weight; ?>" placeholder="الحجم">
            </div>
			

            <div class="form-group col-sm-6">
              <label for="category_id">التصنيف الأب</label>
              <select name="category_id" class="form-control" id="users_group_id">
                <?php foreach ($categories AS $category) { ?>
                    <option value="<?php echo $category->id; ?>" <?php echo $category->id == $category_id ? 'selected' : false; ?>><?php echo $category->name; ?></option>
                <?php } ?>
              </select>
            </div>
			
            
            
            <div class="form-group col-sm-6">
              <label for="brands_id">الماركة</label>
              <select name="brands_id" class="form-control" id="brands_id">
                <?php foreach ($brands AS $brand) { ?>
                    <option value="<?php echo $brand->title; ?>" <?php echo $brand->title == $brands_title ? 'selected' : false; ?>><?php echo $brand->title; ?></option>
                <?php } ?>
              </select>
            </div>
            
			
			<!--<div class="form-group col-sm-6">
              <label for="category_id">افضل سعر شراء</label>
              <select name="is_bestseller" class="form-control" id="is_bestseller">
                    <option value="0" selected>ليس من افضل المنتجات شراء</option>
                    <option value="1">من افضل المنتجات شراء</option>
              </select>
            </div>-->

            <div class="form-group col-sm-6">
                <label for="status">الحالة</label>
                <select class="form-control" id="status" name="status">
                    <option value="enabled">مفعل </option>
                    <option value="disabled" <?php echo $status == 'disabled' ? 'selected': false; ?>>معطل</option>
                </select>
            </div>

            <div class="form-group col-sm-12">
              <label for="related_posts">منتجات مرتبطة</label>
              <select name="related_posts[]" class="form-control" id="related_posts" multiple="multiple">
                <?php foreach ($posts AS $post) { if ($post->id == $id) continue; ?>
                    <option value="<?php echo $post->id; ?>" <?php echo in_array($post->id, $related_posts) ? 'selected' : false; ?>><?php echo $post->title; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-sm-6">
                <label for="image">الصورة</label>
                <input type="file" name="image" />
                <input type="file" name="imageOne" />
                <input type="file" name="imageTwo" />
                <input type="file" name="imageThree" />
            </div>

            <?php if ($image) { ?>
            <div class="form-group col-sm-6">
                <img src="<?php echo $image; ?>" style="width:50px; height: 50px;" alt="" />
            </div>
            <?php } ?>
			
			<?php if ($imageOne) { ?>
            <div class="form-group col-sm-6">
                <img src="<?php echo $imageOne; ?>" style="width:50px; height: 50px;" alt="" />
            </div>
            <?php } ?>
			
			<?php if ($imageTwo) { ?>
            <div class="form-group col-sm-6">
                <img src="<?php echo $imageTwo; ?>" style="width:50px; height: 50px;" alt="" />
            </div>
            <?php } ?>
			
			<?php if ($imageThree) { ?>
            <div class="form-group col-sm-6">
                <img src="<?php echo $imageThree; ?>" style="width:50px; height: 50px;" alt="" />
            </div>
            <?php } ?>

            <div class="clearfix"></div>

            <br>
              <button class="btn btn-info submit-btn">حفظ</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
        </div>
      </div>
    </div>
  </div>