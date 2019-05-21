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
              <label for="category_id">التصنيف</label>
              <select name="status" class="form-control" id="status">
                <?php 
					if($status == 0){ ?>
						<option selected value="<?php echo $status; ?>">معلقة</option>
					<?php } else if($status == 1){ ?>
						<option selected value="<?php echo $status; ?>">تم الشحن</option>
					<?php } else if($status == 2){ ?>
						<option selected value="<?php echo $status; ?>">ملغية</option>
					<?php } 
					?>
					<option value="0">معلقة</option>
					<option value="1">تم الشحن</option>
					<option value="2">ملغية</option>
              </select>
            </div>
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