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
            <div class="form-group col-sm-6">
              <label for="category-name">اسم التصنيف</label>
              <input type="text" required   class="form-control" name="name" id="category-name" value="<?php echo $name; ?>" placeholder="اسم التصنيف">
            </div>
			
			<div class="form-group col-sm-6">
              <label for="category-name">اسم التصنيف بالانجليزي</label>
              <input type="text"  required   class="form-control" name="title" id="category-name" value="<?php echo $title; ?>" placeholder="اسم التصنيف بالانجليزي">
            </div>
              <div class="form-group col-sm-6">
                <label for="status">الحالة</label>
                <select class="form-control" id="status" name="status">
                    <option value="enabled">مفعل </option>
                    <option value="disabled" <?php echo $status == 'disabled' ? 'selected': false; ?>>معطل</option>
                </select>
              </div>
              <button class="btn btn-info submit-btn">حفظ</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
        </div>
      </div>
    </div>
  </div>