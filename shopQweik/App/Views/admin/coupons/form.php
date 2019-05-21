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
              <label for="name">اسم الكوبون</label>
              <input type="text" required class="form-control" name="coupon" id="coupon" value="<?php echo $coupon_name; ?>" placeholder="اسم الكوبون">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="name">سعر الكوبون</label>
              <input type="text" required   class="form-control" name="price" id="price" value="<?php echo $coupon_price; ?>" placeholder="سعر الكوبون">
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