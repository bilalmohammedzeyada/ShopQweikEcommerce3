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
              <label for="title">اسم البنك</label>
              <input type="text" required  class="form-control" name="banks_name" id="banks_name" value="<?php echo $banks_name; ?>" placeholder="اسم البنك">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="title">صاحب الحساب</label>
              <input type="text" required  class="form-control" name="account_name" id="account_name" value="<?php echo $account_name; ?>" placeholder="صاحب الحساب">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="title">رقم الحساب</label>
              <input type="text" required  class="form-control" name="account_number" id="account_number" value="<?php echo $account_number; ?>" placeholder="رقم الحساب">
            </div>
			
			<div class="form-group col-sm-12">
              <label for="title">بنك IBAN</label>
              <input type="text" required  class="form-control" name="banks_iban" id="banks_iban" value="<?php echo $banks_iban; ?>" placeholder="بنك IBAN">
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