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
              <label for="co_name">اسم شركة</label>
              <input type="text" class="form-control" name="co_name" id="co_name" value="<?php echo $co_name; ?>" placeholder="اسم شركة" >
            </div>
			
			<div class="form-group col-sm-12">
              <label for="co_world">كل الدول</label>
              <input type="text" class="form-control" name="co_world" id="co_world" value="<?php echo $co_world; ?>" placeholder="كل الدول">
            </div>

            <div class="form-group col-sm-12">
              <label for="co_city">كل المدن</label>
              <input type="text" class="form-control" name="co_city" id="co_city" value="<?php echo $co_city; ?>" placeholder="كل المدن" >
            </div>
			
			<div class="form-group col-sm-12">
              <label for="co_price">تكلفة الشحن</label>
              <input type="text" class="form-control" name="co_price" id="co_price" value="<?php echo $co_price; ?>" placeholder="تكلفة الشحن" >
            </div>
			
			<div class="form-group col-sm-12">
              <label for="co_duration">مدة الشحن</label>
              <input type="text" class="form-control" name="co_duration" id="co_duration" value="<?php echo $co_duration; ?>" placeholder="مدة الشحن مثلا 3 - 5 أيام" >
            </div>
			
			<div class="form-group col-sm-12">
              <label for="co_payment_way">طريقة الدفع</label>
              <input type="text" class="form-control" name="co_payment_way" id="co_payment_way" value="<?php echo $co_payment_way; ?>" placeholder="طريقة الدفع" >
            </div>
			
			<div class="form-group col-sm-12">
              <label for="details">وصف الشركة</label>
              <input type="text" class="form-control" name="details" id="detailss" value="<?php echo $details; ?>" placeholder="طريقة الدفع" >
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
              <button type="butoon" class="btn btn-info submit-btn">حفظ</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
        </div>
      </div>
    </div>
  </div>