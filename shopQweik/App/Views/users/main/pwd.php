<div class="page-content">
	<div class="page-header">
		<div class="page-title">
			<h3> مرحبا بك في لوحة التجار</h3>
		</div>
	</div>
	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>الرئيسية</li>
			<li class="active">تغيير كلمة المرور</li>
		</ul>
	</div>
<form action="/index/chgpwd" class="form-horizontal" id="kform" method="POST">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title"><i class="icon-cog4"></i>تغيير كلمة المرور</h6>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label text-right">كلمة المرور القديمة:</label>
                <div class="col-sm-2">
                    <input type="password" id="oldpasswd" name="oldpasswd" class="form-control" value="" minlength="6"
                           maxlength="12">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label text-right">كلمة المرور الجديدة:</label>
                <div class="col-sm-2">
                    <input type="password" id="newpasswd" name="newpasswd" class="form-control" value="" minlength="6"
                           maxlength="12">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label text-right">تأكيد كلمة المرور الجديدة:</label>
                <div class="col-sm-2">
                    <input type="password" id="repasswd" name="repasswd" class="form-control" value="" minlength="6"
                           maxlength="12">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label text-right"></label>
                <div class="col-sm-2">
                    <input type="button" onclick="checkInput();" value="تقديم"
                           class="btn btn-success col-sm-9">
                </div>
            </div>
        </div>
    </div>
</form>
</div>