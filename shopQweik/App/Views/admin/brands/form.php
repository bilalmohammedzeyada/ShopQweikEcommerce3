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
              <label for="title">اسم الماركة</label>
              <input type="text" required class="form-control" name="title" id="title" value="<?php echo $title; ?>" placeholder="Enter Post Title">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="title">اسم الماركة بالانجليزي</label>
              <input type="text" required  class="form-control" name="en_title" id="en_title" value="<?php echo $en_title; ?>" placeholder="Enter Post Title">
            </div>

            <div class="form-group col-sm-6">
              <label for="category_id">التصنيف التابعة له</label>
              <select name="category_id" class="form-control" id="users_group_id">
                <?php foreach ($categories AS $category) { ?>
                    <option value="<?php echo $category->id; ?>" <?php echo $category->id == $cat_id ? 'selected' : false; ?>><?php echo $category->name; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-sm-6">
                <label for="image">الصورة</label>
                <input type="file" name="image" />
            </div>

            <?php if ($image) { ?>
            <div class="form-group col-sm-6">
                <img src="<?php echo $image; ?>" style="width:50px; height: 50px;" alt="" />
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