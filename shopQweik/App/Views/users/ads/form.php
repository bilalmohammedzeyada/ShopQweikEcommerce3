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
              <label for="name">اسم الاعلان</label>
              <input type="text" required   class="form-control" name="name" id="name" value="<?php echo $name; ?>" placeholder="اسم الاعلان" required>
              <input type="hidden" required class="form-control" name="seller_id" id="seller_id" value="<?php echo $seller_id; ?>" placeholder="اسم الاعلان" required>
            </div>
			
			<div class="form-group col-sm-12">
              <label for="name">اسم الاعلان باللغة الانجليزية</label>
              <input type="text" required   class="form-control" name="en_title" id="en_title" value="<?php echo $en_title; ?>" placeholder="يجب وضع اسم اعلان باللغة الانجليزية" required>
            </div>

            <div class="form-group col-sm-12">
              <label for="link">رابط الاعلان</label>
              <input type="text" required   class="form-control" name="link" id="link" value="<?php echo $link; ?>" placeholder="رابط الاعلان" required>
            </div>

            <div class="form-group col-sm-6">
              <label for="start_at">الاعلان يبدأ</label>
              <input type="text" required   class="form-control" name="start_at" id="start_at" value="<?php echo $start_at; ?>" placeholder="يبدأ الاعلان بتاريخ" required>
            </div>

            <div class="form-group col-sm-6">
              <label for="end_at">الاعلان ينتهي</label>
              <input type="text" required   class="form-control" name="end_at" id="end_at" value="<?php echo $end_at; ?>" placeholder="ينتهي الاعلان بتاريخ" required>
            </div>

            <div class="form-group col-sm-6">
                <label for="status">حالة الاعلان</label>
                <select class="form-control" id="status" name="status">
                    <option value="enabled">مفعل </option>
                    <option value="disabled" <?php echo $status == 'disabled' ? 'selected': false; ?>>معطل</option>
                </select>
            </div>
            
            
            <div class="form-group col-sm-6">
                <label for="seller_slider">هل تريد وضعه بالصفحة الرئيسية</label>
                <select class="form-control" id="seller_slider" name="seller_slider">
                    
                   <?php 
					if($seller_slider == 1){ ?>
					<option selected value="1">في السلايدر</option>
					<?php  } ?>
					<option value="0">ليس في السلايدر</option>
					<option value="1">في السلايدر</option>
                    
                </select>
            </div>
            
            <div class="form-group col-sm-6">
                <label for="seller_banner">هل هو بنر؟</label>
                <select class="form-control" id="seller_banner" name="seller_banner">
                    <?php 
                    if($seller_banner == 1){ ?>
                         <option selected value="1">بنر</option>
                  <?php  } else {
                    ?>
                      <option value="1">بنر</option>
                      <option value="0">ليس بنر</option>
                    <?php
                    }
                    ?>
                    
                </select>
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-sm-6">
                <label for="image">الصورة</label>
                <input type="file" required name="image" />
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