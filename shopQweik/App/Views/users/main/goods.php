<div class="page-content">
	<div class="page-header">
		<div class="page-title">
			<h3> مرحبا بك في لوحة التجار</h3>
		</div>
	</div>
	<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li>الرئيسية</li>
		<li>ادراة المنتجات</li>
		<li class="active">قائمة المنتجات</li>
	</ul>
</div>

<div class="search-line block">
<form action="<?php echo url('/seller/Goods/index'); ?>" method="POST">
    <div class="col-md-2">
        <input type="text" name="brand" id="brand" class="form-control" placeholder="العلامة التجارية"/>
    </div>
    <div class="col-md-2">
        <input type="text" name="name" id="name" class="form-control" placeholder="اسم المنتج"/>
    </div>
    <div class="col-md-2">
        <input type="text" name="code" id="code" class="form-control" placeholder="كود المنتج"/>
    </div>
    <div class="col-md-2">
        <select class="select-full" id="disp_status" name="disp_status">
            <option selected value="">--حالة العرض--</option>
            <option value='1'>عرض</option>
            <option value='0'>إخفاء</option>
        </select>
    </div>
    <div class="col-md-2">
        <select class="select-full" id="audit_status" name="audit_status">
            <option selected value="">--حالة التدقيق--</option>
            <option value='0'>الطلب معلق</option>
            <option value='1'>في انتظار التدقيق</option>
            <option value='2'>تمت الموافقة</option>
            <option value='3'>مرفوض</option>
        </select>
    </div>
    <div class="col-md-1">
        <button class="btn btn-success btn-block " type="submit">بحث</button>
    </div>
</form>
    <div class="clearfix"></div>
</div>
	<div class="table-content" id="table-content">
	<script>
	$(function(){
		function loadc(){
			$('#table-content-tbody').load('<?php echo url('/seller/Goods/goodsList'); ?>');
			
		}
		setInterval(function() {  loadc() }, 3000); 
	});
 </script>
 <div id="form-results"></div>
 <div class="panel panel-default">
    <div class="panel-heading">
        <h6 class="panel-title">
            <i class="icon-office"></i>قائمة المنتجات        </h6>
        <a href="<?php echo url('/seller/Goods/index/add'); ?>">
            <button type="button" data-toggle="modal" class="btn btn-default pull-right">
                <i class="icon-star5 pl"></i>اضف منتجك
			</button>
        </a>
		<a href="<?php echo url('/seller/Goods/index/add'); ?>">
        </a>
		<div class="col-md-3 col-ms-3 pull-right" style="display: inline-flex; margin: 5px;">
			<form action="<?php echo url('/seller/Goods/index/discount'); ?>" method="POST" class="form">
				<input type="text" name="discount_price" class="form-control" placeholder="ضع رقم السعر لجميع المنتجات" style="width:150px;" />
				<button type="button" class="btn btn-default pull-right button submit-btn">
					<i class="icon-star5 pl"></i>خصم على المنتجات
				</button>
			</form>
		</div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td width="40px" height="45" align="center">
                    <div class="checker"><span><input type="checkbox" class="styled" onclick="tableSelectAll(this)"></span></div>
                </td>
                <td width="40px" height="45" align="center"><strong>رقم</strong></td>
                <!--<td width="100px" align="center"><strong>كود المنتج</strong></td>-->
                <td width="" align="center"><strong>اسم المنتج</strong></td>
                <td width="" align="center"><strong>العلامة التجارية</strong></td>
                <td width="" align="center"><strong>السعر</strong></td>
                <td width="" align="center"><strong>السعر بعد التخفيض</strong></td>
                <td width="" align="center"><strong>المخزون</strong></td>
                <td width="60px" align="center"><strong>حالة العرض</strong></td>
                <td width="60px" align="center"><strong>حالة التدقيق</strong></td>
                <!--<td width="60px" align="center"><strong>حالة التدقيق</strong></td>-->
                <td width="150px" align="center"><strong>عملية</strong></td>
            </tr>
            </thead>
            <tbody id="table-content-tbody">
			
			</tbody>
        </table>
    </div>
</div>
</div>
</div>