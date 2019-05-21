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
			<li class="active">اضف</li>
		</ul>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h6 class="panel-title">
				<i class="icon-signup"></i>اضف        </h6>
		</div>
		<form action="<?php echo $action; ?>" method="POST" class="form-horizontal form">
			<div id="form-results"></div>
		<br />
				<div class="panel-body">
				<div class="tabbable">
					<ul class="nav nav-pills nav-justified">
						<li class="active"><a href="#panel-pill1" data-toggle="tab"><i class="icon-profile"></i> معلومات أساسية</a></li>
						<li><a href="#panel-pill2" data-toggle="tab"><i class="icon-clipboard"></i> مواصفات اختيارية </a></li>
						<li><a href="#panel-pill3" data-toggle="tab"><i class="icon-stack"></i> خصائص المنتج</a></li>
						<li><a href="#panel-pill4" data-toggle="tab"><i class="icon-images"></i> صور المنتج</a></li>
						<li><a href="#panel-pill5" data-toggle="tab"><i class="icon-bubble6"></i>وصف تفاصيل منتجك</a></li>
						<li><a href="#panel-pill6" data-toggle="tab"><i class="icon-attachment"></i> خدمات ما بعد البيع</a></li>
					</ul>

					<div class="tab-content pill-content">
						<div class="tab-pane fade in active" id="panel-pill1">
							
							<h6 class="bottomline">معلومات أساسية</h6>
                        

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">
            <span class="required"> * </span>اسم المنتج        </label>
        <div class="col-sm-4">
            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" maxlength="100">
            <input type="hidden" name="seller_id" class="form-control" value="<?php echo $seller_id; ?>" maxlength="100">
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-sm-2 control-label text-right">
            <span class="required"> * </span>اسم المنتج بالانجليزي </label>
        <div class="col-sm-4">
            <input type="text" name="en_title" class="form-control" value="<?php echo $en_title; ?>" maxlength="100">
        </div>
    </div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label text-right">
			<span class="required"> * </span>كلمات مفتاحية</label>
		<div class="col-sm-4">
			<input type="text" name="tags" class="form-control" value="<?php echo $tags; ?>" maxlength="100">
		</div>
	</div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">
            <span class="required"> * </span>اصناف المنتجات        </label>
        <div class="col-sm-4">
            <select data-placeholder="اختر الصنف" class="select-full select2-offscreen" id="pri_cls_id" name="category_id" tabindex="-1">
				<?php foreach ($categories AS $category) { ?>
                    <option value="<?php echo $category->id; ?>" <?php echo $category->id == $category_id ? 'selected' : false; ?>><?php echo $category->name; ?></option>
                <?php } ?>          
			</select>
        </div>
       
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">
            <span class="required"> * </span>العلامة التجارية        </label>
        <div class="col-sm-4">
            <select data-placeholder="العلامة التجارية" class="select-full select2-offscreen" id="brand_id" name="brands_id" tabindex="-1">
               <?php foreach ($brands AS $brand) { ?>
                    <option value="<?php echo $brand->title; ?>" <?php echo $brand->title == $brands_title ? 'selected' : false; ?>><?php echo $brand->title; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">
            <span class="required"> * </span>السعر        </label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="price1" value="<?php echo $price1; ?>" maxlength="8">
            <span class="help-block">شامل القيمة المضافة *ان وجد</span>
        </div>

    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label text-right">بعد التخفيض</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="price2" maxlength="8" value="<?php echo $price2; ?>">
            <span class="help-block">حالة عدم وجود تخفيضات لديك اتركه فارغاً</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right"><span class="required"> * </span>وزن المنتج        </label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="weight" value="<?php echo $weight; ?>" maxlength="6">
        </div>
		<div class="col-sm-2">
            <select data-placeholder="وزن المنتج" class="select-full select2-offscreen" id="k_weight" name="k_weight" tabindex="-1">
			<?php if($k_weight == "g"){ ?>
                <option value="g" selected>جرام</option>
                <option value="kg">كيلو جرام</option>
			<?php } else{ ?>
                <option value="g">جرام</option>
                <option value="kg" selected>كيلو جرام</option>
			<?php } ?>
            </select>
        </div>
        
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">
            <span class="required"> * </span>صورة اعلانية للمنتج        </label>
        <div class="col-sm-4" style="margin-right:10px">
		<?php if ($image) { ?>
            <img src="<?php echo $image; ?>" class="upload_button addgoodsimg">
		<?php } ?>
            <input type="file" name="image" />
            <div class="help-block">مقاس الصورة ينبغي ان يكون :800*800بيسكل وننصح برفع دقة اعلى لانها واجهتك عند العميل,الصيغة المسموحة jpg,png,gif</div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">باركود</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="barcode" value="<?php echo $barcode; ?>" maxlength="30">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">
            <span class="required"> * </span>المخزون        </label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="stock" id="stock" value="<?php echo $stock; ?>" maxlength="6">
        </div>

    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">ضبط تنبيه نقص المخزون</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="stock_alarm" value="<?php echo $stock_alarm; ?>" maxlength="6">
        </div>

    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">مكان التخزين</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="depot_slot" value="<?php echo $depot_slot; ?>" maxlength="30">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label text-right">
            حالة العرض        </label>
        <div class="col-sm-2">
            <select data-placeholder="" name="status" class="select-full select2-offscreen" tabindex="-1">
               <option value="enabled">مفعل </option>
               <option value="disabled" <?php echo $status == 'disabled' ? 'selected': false; ?>>معطل</option>
            </select>
        </div>
    </div>

				
			</div>

			<div class="tab-pane fade" id="panel-pill2">
				

<h6 class="bottomline">
    مواصفات اختيارية    <span style="padding-left:20px;">
        <a href="javascript:newAttr();" title="اضافة خاصية جديدة">
        <i class="icon-plus"> </i></a>
    </span></h6>
<div class="form-group">
    <label class="col-sm-4 control-label text-right">EN</label>
    <label class="col-sm-4 control-label text-right">AR</label>
</div>

<div id="goods_attr_table">
    <div class="form-group">
            <label class="col-sm-2 control-label text-right">الكاميرا الخلفية</label>
            <div class="col-sm-4">
                    <input type="text" class="form-control" value="" name="attr_item_en" attrid="1422" maxlength="50">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="" name="attr_item_ar" attrid="1422" maxlength="50">
                </div>
                                        </div><div class="form-group">
            <label class="col-sm-2 control-label text-right">النظام</label>
                            <div class="col-sm-4">
                    <div class="select2-container select-full" id="s2id_autogen16" style="width: 100%;"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">&nbsp;</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen17"></div><select class="select-full select2-offscreen" name="attr_item" attrid="1423" tabindex="-1">
                        <option value="">&nbsp;</option>
                                                        <option value="IOS" vallng="MEIOS">IOS</option>                                <option value="MEIOS" vallng="MIUI">MEIOS</option>                                <option value="MIUI" vallng="MTK">MIUI</option>                                <option value="MTK" vallng="Smartisan OS">MTK</option>                                <option value="Smartisan OS" vallng="amigo OS">Smartisan OS</option>                                <option value="amigo OS" vallng="EMUI4.1+Android 6.0">amigo OS</option>                                <option value="EMUI4.1+Android 6.0" vallng="360OS">EMUI4.1+Android 6.0</option>                                <option value="360OS" vallng="Symbian">360OS</option>                                <option value="Symbian" vallng="Linux">Symbian</option>                                <option value="Linux" vallng="PALM">Linux</option>                                <option value="PALM" vallng="Windows Mobile">PALM</option>                                <option value="Windows Mobile" vallng="Android">Windows Mobile</option>                                <option value="Android" vallng="OMS">Android</option>                                <option value="OMS" vallng="Windows Phone">OMS</option>                                <option value="Windows Phone" vallng="meego">Windows Phone</option>                                <option value="meego" vallng="mmp">meego</option>                                <option value="mmp" vallng="rex">mmp</option>                                <option value="rex" vallng="Nucleus">rex</option>                                <option value="Nucleus" vallng="INFINEO">Nucleus</option>                                <option value="INFINEO" vallng="NLarena 3.0">INFINEO</option>                                <option value="NLarena 3.0" vallng="Flyme">NLarena 3.0</option>                                <option value="Flyme" vallng="">Flyme</option>                    </select>
                </div>        </div><div class="form-group">
            <label class="col-sm-2 control-label text-right">الدقة</label>
                            <div class="col-sm-4">
                    <div class="select2-container select-full" id="s2id_autogen18" style="width: 100%;"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">                                </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen19"></div><select class="select-full select2-offscreen" name="attr_item" attrid="1424" tabindex="-1">
                        <option value="">&nbsp;</option>
						
                        <option value="240X320" vallng="480X320">240X320</option>
						<option value="480X320" vallng="480X360">480X320</option>
						<option value="480X360" vallng="640X360">480X360</option>                                <option value="640X360" vallng="640X480">640X360</option>                                <option value="640X480" vallng="1024X768">640X480</option>                                <option value="1024X768" vallng="1600X2560">1024X768</option>                                <option value="1600X2560" vallng="1920X1200">1600X2560</option>                                <option value="1920X1200" vallng="2560X1440">1920X1200</option>                                <option value="2560X1440" vallng="1280X720">2560X1440</option>                                <option value="1280X720" vallng="1280X800">1280X720</option>                                <option value="1280X800" vallng="1130X640">1280X800</option>                                <option value="1130X640" vallng="800X480">1130X640</option>                                <option value="800X480" vallng="960X540">800X480</option>                                <option value="960X540" vallng="1280X768">960X540</option>                                <option value="1280X768" vallng="1920X1080">1280X768</option>                                <option value="1920X1080" vallng="960X540">1920X1080</option>                                <option value="960X540" vallng="">960X540</option><option selected="" value="" vallng="">                                </option>
                                                    </select>
                </div>        </div></div>

    <script id="tplAttr" type="text/html">
        <div class="form-group">
            <label class='col-sm-2 control-label text-right'></label>
            <div class="col-sm-4">
                <input type="text" name='attr_item_en' class="form-control" maxlength="50"/>
            </div>
            <div class="col-sm-4">
                <input type="text" name='attr_item_ar' class="form-control" maxlength="50"/>
            </div>
            <span>
            <a href="javascript:;" onclick="deleteAttr(this)" title="حذف" attrId="">
                <i class="icon-close delete"> </i></a>
        </span>
        </div>
    </script>
		
		</div>

			<div class="tab-pane fade" id="panel-pill3">
				
				<h6 class="bottomline">
خصائص المنتج    <span style="padding-left:20px;">
<a href="javascript:newSpec();" title="اضافة خاصية جديدة">
<i class="icon-plus"> </i></a>
</span></h6>
<table class="table table-bordered" id="tblSpec">
<tbody>
<tr class="spec" spec_id="161">
<td style="width:140px;">
	القدرة                            </td>
<td>
	<div class="spec_item" spec_id="161" item_id="26076">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					1.5GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26077">
										<button type="button" onclick="checkSpecItem(this)" class="btn btn-success">
					128GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26078">
										<button type="button" onclick="checkSpecItem(this)" class="btn btn-success">
					128MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26079">
										<button type="button" onclick="checkSpecItem(this)" class="btn btn-success">
					16MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26080">
										<button type="button" onclick="checkSpecItem(this)" class="btn btn-success">
					256MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26081">
										<button type="button" onclick="checkSpecItem(this)" class="btn btn-success">
					288MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26082">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					2GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26083">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					32GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26084">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					384MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26085">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					4GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26086">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					4MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26087">
										<button type="button" onclick="checkSpecItem(this)" class="btn btn-success">
					512GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26088">
										<button type="button" onclick="checkSpecItem(this)" class="btn btn-success">
					512MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26089">
										<button type="button" onclick="checkSpecItem(this)" class="btn btn-success">
					64GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26090">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					64MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26091">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					768MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26092">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					80MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="161" item_id="26093">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					8GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div>                <span class="add_spec_item">
		<a href="javascript:;" onclick="newSpecItem(this);" title="اضافة بند جديد">
			<i class="icon-plus"> </i></a>
	</span>            </td>
</tr><tr class="spec" spec_id="162">
<td style="width:140px;">
	اللون                            </td>
<td>
	<div class="spec_item" spec_id="162" item_id="26094">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					بنى                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26095">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					برتقالي                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26096">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					رمادي                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26097">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					أبيض                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26098">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					وردي                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26099">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					بنفسجي                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26100">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					أحمر                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26101">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					أخضر                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26102">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					أزرق                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26103">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					شفاف                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26104">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					عنابي                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26105">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					اصفر                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="162" item_id="26106">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					أسود                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div>                <span class="add_spec_item">
		<a href="javascript:;" onclick="newSpecItem(this);" title="اضافة بند جديد">
			<i class="icon-plus"> </i></a>
	</span>            </td>
</tr><tr class="spec" spec_id="163">
<td style="width:140px;">
	سعة التخزين                            </td>
<td>
	<div class="spec_item" spec_id="163" item_id="26107">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					1.5GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26108">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					128GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26109">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					128MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26110">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					16MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26111">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					256MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26112">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					288MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26113">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					2GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26114">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					32GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26115">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					384MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26116">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					4GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26117">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					4MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26118">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					512GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26119">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					512MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26120">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					64GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26121">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					64MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26122">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					768MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26123">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					80MB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div><div class="spec_item" spec_id="163" item_id="26124">
										<button type="button" onclick="checkSpecItem(this)" class="btn  btn-default">
					8GB                            </button>
			<img src="/Public/assets/images/add-button.jpg" class="upload_button img32" onclick="setSpecImg(this)" onmousemove="showImgTip(event)" onmouseout="hideImgTip()">
															</div>                <span class="add_spec_item">
		<a href="javascript:;" onclick="newSpecItem(this);" title="اضافة بند جديد">
			<i class="icon-plus"> </i></a>
	</span>            </td>
</tr>    
<tr class="spec" spec_id="981">
<td style="width:140px;">
<span style="float:right;">
	<a href="javascript:;" onclick="deleteSpec(this);" title="حذف">
		<i class="icon-close delete"> </i></a>
</span>
ا</td>
<td>
<span class="add_spec_item">
		<a href="javascript:;" onclick="newSpecItem(this);" title="اضافة بند جديد">
			<i class="icon-plus"> </i></a>
</span>
</td>
</tr>
</tbody>
</table>

<div id="divSpecData" style="padding:20px 0;"><table class="table table-bordered" id="tblSpecData">
<tbody><tr align="center">
<td><b>القدرة</b></td>        <td style="width:200px;"><b>السعر</b></td>
<td style="width:200px;"><b>بعد التخفيض</b></td>
<td style="width:200px;"><b>المخزون</b></td>
<td style="width:200px;"><b>باركود</b></td>
</tr>

<tr align="center" sku_key="26077" sku="1549011702178458">
<td>
					128GB                            </td>            <td>
	<input class="form-control" name="sku_price" value="" maxlength="8" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_discount_price" maxlength="8" value="" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_stock" value="" maxlength="6" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')" onchange="updateStock()">
</td>
<td>
	<input class="form-control" name="sku_barcode" value="" maxlength="30">
</td>
</tr><tr align="center" sku_key="26078" sku="1549011702178479">
<td>
					128MB                            </td>            <td>
	<input class="form-control" name="sku_price" value="" maxlength="8" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_discount_price" maxlength="8" value="" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_stock" value="" maxlength="6" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')" onchange="updateStock()">
</td>
<td>
	<input class="form-control" name="sku_barcode" value="" maxlength="30">
</td>
</tr><tr align="center" sku_key="26079" sku="1549011702178487">
<td>
					16MB                            </td>            <td>
	<input class="form-control" name="sku_price" value="" maxlength="8" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_discount_price" maxlength="8" value="" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_stock" value="" maxlength="6" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')" onchange="updateStock()">
</td>
<td>
	<input class="form-control" name="sku_barcode" value="" maxlength="30">
</td>
</tr><tr align="center" sku_key="26080" sku="1549011702178495">
<td>
					256MB                            </td>            <td>
	<input class="form-control" name="sku_price" value="" maxlength="8" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_discount_price" maxlength="8" value="" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_stock" value="" maxlength="6" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')" onchange="updateStock()">
</td>
<td>
	<input class="form-control" name="sku_barcode" value="" maxlength="30">
</td>
</tr><tr align="center" sku_key="26081" sku="1549011702178502">
<td>
					288MB                            </td>            <td>
	<input class="form-control" name="sku_price" value="" maxlength="8" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_discount_price" maxlength="8" value="" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_stock" value="" maxlength="6" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')" onchange="updateStock()">
</td>
<td>
	<input class="form-control" name="sku_barcode" value="" maxlength="30">
</td>
</tr><tr align="center" sku_key="26087" sku="1549011702178509">
<td>
					512GB                            </td>            <td>
	<input class="form-control" name="sku_price" value="" maxlength="8" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_discount_price" maxlength="8" value="" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_stock" value="" maxlength="6" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')" onchange="updateStock()">
</td>
<td>
	<input class="form-control" name="sku_barcode" value="" maxlength="30">
</td>
</tr><tr align="center" sku_key="26088" sku="1549011702178516">
<td>
					512MB                            </td>            <td>
	<input class="form-control" name="sku_price" value="" maxlength="8" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_discount_price" maxlength="8" value="" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_stock" value="" maxlength="6" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')" onchange="updateStock()">
</td>
<td>
	<input class="form-control" name="sku_barcode" value="" maxlength="30">
</td>
</tr><tr align="center" sku_key="26089" sku="1549011702178523">
<td>
					64GB                            </td>            <td>
	<input class="form-control" name="sku_price" value="" maxlength="8" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_discount_price" maxlength="8" value="" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')">
</td>
<td>
	<input class="form-control" name="sku_stock" value="" maxlength="6" onkeyup="if(isFloat(value) < 0)execCommand('undo')" onafterpaste="if(isFloat(value) < 0)execCommand('undo')" onchange="updateStock()">
</td>
<td>
	<input class="form-control" name="sku_barcode" value="" maxlength="30">
</td>
</tr></tbody></table></div>
<img class="imageTip" id="imageTip" style="display: none;">


<script id="tplCreateSpec" type="text/html">
<h6 class="bottomline">ادخل البيانات بالعربية</h6>
<div class="form-group">
<label class='col-sm-4 control-label text-right'>اسم الخاصية</label>
<div class="col-sm-8">
<input type="text" class="form-control" id='name_ar' maxlength="50"/>
</div>
</div>
<h6 class="bottomline">ادخل البيانات بالانجليزية</h6>
<div class="form-group">
<label class='col-sm-4 control-label text-right'>اسم الخاصية</label>
<div class="col-sm-8">
<input type="text" class="form-control" id='name_en' maxlength="50"/>
</div>
</div>
</script>
<script id="tplCreateSpecItem" type="text/html">
<h6 class="bottomline">ادخل البيانات بالعربية</h6>
<div class="form-group">
<label class='col-sm-4 control-label text-right'>الصفة</label>
<div class="col-sm-8">
<input type="text" class="form-control" id='item_ar' maxlength="50"/>
</div>
</div>
<h6 class="bottomline">ادخل البيانات بالانجليزية</h6>
<div class="form-group">
<label class='col-sm-4 control-label text-right'>الصفة</label>
<div class="col-sm-8">
<input type="text" class="form-control" id='item_en' maxlength="50"/>
</div>
</div>
</script>
<script id="tplSpec" type="text/html">
<tr class="spec" spec_id="">
<td style="width:140px;">
<span style="float:right;">
	<a href="javascript:;" onclick="deleteSpec(this);"
	   title="حذف">
		<i class="icon-close delete"> </i></a>
</span>
</td>
<td>
<span class="add_spec_item">
		<a href="javascript:;" onclick="newSpecItem(this);"
		   title="اضافة بند جديد">
			<i class="icon-plus"> </i></a>
</span>
</td>
</tr>
</script>
<script id="tplSpecItem" type="text/html">
<div class="spec_item" spec_id="" item_id="">
<button type="button" class="btn btn-default" onclick="checkSpecItem(this)"></button>
<img src="/Public/assets/images/add-button.jpg" class="upload_button img32"
 onclick="setSpecImg(this)" onmousemove="showImgTip" onmouseout="hideImgTip"/>
<span>
<a href="javascript:;" onclick="deleteSpecItem(this)" title="حذف">
	<i class="icon-close delete"> </i></a>
</span>
</div>
</script>

				
			</div>

			<div class="tab-pane fade" id="panel-pill4">
				
<h6 class="bottomline">صور المنتج</h6>
<table class="table table-bordered" id="goodsAlbum">
    <tbody><tr>
        <td>
            
            <div class="goods_album">
				<input type="file" name="image">
				<input type="file" name="imageOne">
				<input type="file" name="imageTwo">
				<input type="file" name="imageThree">
                <img src="<?php echo $image; ?>" class="addgoodsimg" alt="">
                <img src="<?php echo $imageOne; ?>" class="addgoodsimg" alt="">
                <img src="<?php echo $imageTwo; ?>" class="addgoodsimg" alt="">
                <img src="<?php echo $imageThree; ?>" class="addgoodsimg" alt="">
            </div>

        </td>
    </tr>
    <tr>
        <td style="color:#999;">
            تحذير： ترتيب الصور حسب الترتيب الرقمي  إبتداءً من الأصغر حتى الأكبر <br>
									يتم فرز أصغر صورة على أنها صورة رئيسية<br>الصور التي أكبر من الحجم 500بيكسل*500بيكسل<br>
									يمكن وضعها في تفاصيل المُنتج مما يوفر وظيفة تكبير الصور <br>
									رفع الصور على الأقل عدد صورة إلى خمسة صور كحد أقصى<br>
									صيغة الصور يجب أن تكون png , jpg <br>
									 وبحجم لايتجاوز 500كيلوبايت        </td>
    </tr>
</tbody></table>
<script id="tplAlbum" type="text/html">
    <div class="goods_album">
        <img class="upload_preview img100" onclick="imgShow($(this).attr('src'))"/>
        <br>
        <a href="javascript:void(0)" onclick="delPic(this)">حذف</a>
    </div>
</script>

			</div>
			
			<div class="tab-pane fade" id="panel-pill5">
				<div class="col-sm-6">بالعربي</div>
				<div class="col-sm-6">بالانجليزي</div>
				<br />
				<div class="col-sm-6">
					<div class="block-inner">
						<textarea class="editor" name="details"><?php echo $details; ?></textarea>
					</div>
				</div>
				
				<div class="col-sm-6">
					<div class="block-inner">
						<textarea class="editor" name="desc_en_title"><?php echo $desc_en_title; ?></textarea>
					</div>
				</div>
			</div>
			
			
			<div class="tab-pane fade" id="panel-pill6">
				<div class="col-sm-6">بالعربي</div>
				<div class="col-sm-6">بالانجليزي</div>
				<br />
			
				<div class="col-sm-6">
					<div class="block-inner">
						<textarea class="editor" name="details_en"><?php echo $details_en; ?></textarea>
					</div>
				</div>
				
				<div class="col-sm-6">
					<div class="block-inner">
						<textarea class="editor" name="after_details_en" ><?php echo $after_details_en; ?></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
				
	<button type="button" class="btn btn-success submit-btn">حفظ</button>
			</div>
		</form>
	</div>
</div>

<script>
	$('.editor').wysihtml5({
		stylesheets: "<?php echo assets('users/css/wysihtml5/wysiwyg-color.css'); ?>"
	});
</script>