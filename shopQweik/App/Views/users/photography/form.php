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
              <label for="name">الاٍسم</label>
              <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" placeholder="الاٍسم">
            </div>

            <div class="form-group col-sm-12">
              <label for="mobile">رقم الجوال</label>
              <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $mobile; ?>" placeholder="رقم الجوال">
            </div>

            <div class="form-group col-sm-6">
              <label for="email">البريد الألكتروني</label>
              <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="البريد الألكتروني">
            </div>

            <div class="form-group col-sm-6">
              <label for="n_product">عدد المنتجات</label>
              <input type="text" class="form-control" name="n_product" id="n_product" value="<?php echo $n_product; ?>" placeholder="عدد المنتجات">
            </div>

            <div class="form-group col-sm-6">
              <label for="desc_product">وصف المنتجات</label>
              <input type="text" class="form-control" name="desc_product" id="desc_product" value="<?php echo $desc_product; ?>" placeholder="وصف المنتجات">
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