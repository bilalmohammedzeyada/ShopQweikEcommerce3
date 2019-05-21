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
              <label for="first_name">الأسم الأول</label>
              <input type="text" required class="form-control" name="first_name" id="first_name" value="<?php echo $first_name; ?>" placeholder="الأسم الأول">
            </div>
            <div class="form-group col-sm-6">
              <label for="last_name">الأسم الأخير</label>
              <input type="text" required  class="form-control" name="last_name" id="last_name" value="<?php echo $last_name; ?>" placeholder="الأسم الأخير">
            </div>

            <div class="form-group col-sm-6">
              <label for="users_group_id">المجموعة</label>
              <select name="users_group_id" class="form-control" id="users_group_id">
                <?php foreach ($users_groups AS $users_group) { ?>
                    <option value="<?php echo $users_group->id; ?>" <?php echo $users_group->id == $users_group_id ? 'selected' : false; ?>><?php echo $users_group->name; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group col-sm-6">
              <label for="email">البريد الالكتروني</label>
              <input type="email" required  class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="البريد الالكتروني">
            </div>

            <div class="form-group col-sm-6">
              <label for="password">كلمة المرور</label>
              <input type="password" required  class="form-control" name="password" id="password" placeholder="كلمة المرور">
            </div>

            <div class="form-group col-sm-6">
              <label for="confirm_password">تأكيد كلمة المرور</label>
              <input type="password" required  class="form-control" name="confirm_password" id="confirm_password" placeholder="Password">
            </div>

            <div class="form-group col-sm-6">
                <label for="status">الحالة</label>
                <select class="form-control" id="status" name="status">
                    <option value="enabled">مفعل </option>
                    <option value="disabled" <?php echo $status == 'disabled' ? 'selected': false; ?>>معطل</option>
                </select>
            </div>

            <div class="form-group col-sm-6">
                <label for="status">تاريخ الميلاد</label>
                <input type="text" required  name="birthday" placeholder="تاريخ الميلاد" class="form-control" value="<?php echo $birthday; ?>" />
            </div>

            <div class="form-group col-sm-6">
                <label for="gender">الجنس</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="male">ذكر </option>
                    <option value="female" <?php echo $gender == 'female' ? 'selected': false; ?>>أنثى</option>
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