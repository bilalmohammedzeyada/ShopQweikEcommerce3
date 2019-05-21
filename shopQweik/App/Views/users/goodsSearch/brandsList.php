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
           <option value='enabled'>عرض</option>
            <option value='disabled'>إخفاء</option>
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

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td width="40px" height="45" align="center">
                    <div class="checker"><span><input type="checkbox" class="styled" onclick="tableSelectAll(this)"></span></div>
                </td>
                <td width="40px" height="45" align="center"><strong>رقم</strong></td>
                <td width="100px" align="center"><strong>كود المنتج</strong></td>
                <td width="" align="center"><strong>اسم المنتج</strong></td>
                <td width="" align="center"><strong>العلامة التجارية</strong></td>
                <td width="" align="center"><strong>السعر</strong></td>
                <td width="" align="center"><strong>المخزون</strong></td>
                <td width="60px" align="center"><strong>حالة العرض</strong></td>
                <td width="60px" align="center"><strong>حالة التدقيق</strong></td>
                <!--<td width="60px" align="center"><strong>حالة التدقيق</strong></td>-->
                <td width="150px" align="center"><strong>عملية</strong></td>
            </tr>
            </thead>
            <tbody>
			<?php $i =1; 
			if(! empty($Lists)) { 
				foreach($Lists as $List) { ?>
            <tr>
                    <td align="center">
                     <div class="checker"><span><input type="checkbox" value="2409" class="styled checkboxs" name="selected"></span></div></td>
                    <td align="center"><img src="<?php echo assets('blog/images/Lists/' . $List->image); ?>" style="width:50px; height: 50px; border-radius: 100%;" alt="" /><?php echo $List->id; ?></td>
                    <td align="center"><?php echo $List->code; ?></td>
                    <td align="center"><?php echo $List->title; ?></td>
                    <td align="center"><?php echo $List->brands; ?></td>
                    <td align="center"><?php echo $List->price1; ?></td>
                    <td align="center"><?php echo $List->stock; ?></td>
                    <td align="center"><?php 
					if($List->status == 'enabled'){
						echo '<i class="icon-checkmark3"style="color:#3fbd74;cursor:pointer;"></i>';
					} else {
						echo '<i class="icon-checkmark3"></i>';
					}
					?></td>
					<td align="center"><?php 
					if($List->is_accept == 0){
						echo '<i class="icon-checkmark3" style="cursor:pointer;" title="معلقة"> </i>';
					} else if($List->is_accept == 1){
						echo '<i class="icon-checkmark3" style="cursor:pointer;" title="في إنتظار الموافقة"> </i>';
					}else if($List->is_accept == 2){
						echo '<i class="icon-checkmark3" style="color:#3fbd74;cursor:pointer;" title="تمت الموافقة"> </i>';
					}else if($List->is_accept == 3){
						echo '<i class="icon-checkmark3" style="cursor:pointer;" title="مرفوض"> </i>';
					}
					?></td>
                    <td align="left">
                        <!--<button type="button" class="btn btn-primary btn-icon" onclick="copyGoods('<?php //echo $List->id; ?>')" data-target="<?php //echo url('seller/Goods/index/edit/' . $List->id) ?>" title="نسخ">
                            <i class="icon-copy"></i>
                        </button>
                        <button type="button" onclick="submitAudit('<?php echo $List->id; ?>')" class="btn btn-icon btn-info" data-target="<?php echo url('seller/Goods/index/edit/' . $List->id) ?>" title="ارسال تدقيق">
                            <i class="icon-clock3"></i>
                        </button>-->
						
						<a type="button" class="btn btn-icon btn-success" href="<?php echo url('seller/Goods/index/edit/' . $List->id) ?>"title="تعديل">
                            <i class="icon-pencil3"></i>
                        </a>                        
						
						<a class="btn btn-danger delete" href="<?php echo url('seller/Goods/index/isactive/' . $List->id) ?>" title="حذف">
                            <i class="icon-remove3"></i>
                        </a>
                    </td>
                </tr>
				<?php } } else { ?>
					<tr>
						<td colspan="10" align="center">لا توجد منتجات تحتوي على العلامة التجارية هذه</td>
					</tr>
				<?php 
				} ?>            
				</tbody>
        </table>
    </div>
</div>
</div>
