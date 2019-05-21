<div class="page-content">
	<div class="page-header">
		<div class="page-title">
			<h3> مرحبا بك في لوحة التجار</h3>
		</div>
	</div>
    <style>.IMGbox {
        direction: rtl;
        unicode-bidi: bidi-override;
    }</style>
	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>الرئيسية</li>
			<li>ادارة المتجر</li>
			<li class="active">تصميم المتجر نسخة الويب</li>
		</ul>
	</div>
<link rel="stylesheet" href="<?php echo assets('admin/bootstrap/css/shoptpl.css'); ?>">

<div class="panel panel-default">
    <div class="panel-heading">
        <h6 class="panel-title">
            <i class="icon-home4"></i>شكل المتجر        </h6>
    </div>
	
    <div class="panel-body">
        <div class="col-md-4 ">
            <div class="tabbable">
                <ul class="nav nav-pills nav-justified">
                    <li class="">
                        <a href="#tab1" data-toggle="tab" onclick="clickTpl('1')">
                            <i class="icon-bookmark2"></i>وردي                        </a>
                    </li>
					<li class="">
                        <a href="#tab2" data-toggle="tab" onclick="clickTpl('2')">
                            <i class="icon-bookmark2"></i>أزرق                        </a>
                    </li>
					<li class="active">
                        <a href="#tab3" data-toggle="tab" onclick="clickTpl('3')">
                            <i class="icon-bookmark2"></i>أخضر                        </a>
                    </li>  
					<li class="active">
                        <a href="#tab3" data-toggle="tab" onclick="clickTpl('2')">
                            <i class="icon-bookmark2"></i>برتقالي                        </a>
                    </li>                
				</ul>
            </div>
        </div>
        <div class="col-md-12" style="padding-top:30px;">
            <h6 class="bottomline" style="margin-bottom:30px;"></h6>
            <div class="col-md-6">
                <div id="setHome">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right">موقعك</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="slotName" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right"> </label>
                            <div class="col-sm-9">
                                <input type="file" name="image" />
                                <img src="https://www.kwaidi.com:4460/Public/assets/images/default.jpg" class="upload_preview" id="imgPreview"/>
                                <input type="hidden" id="slotImage"/>
                                <div class="help-block" id="img_comment">مقاس الصورة ينبغي ان يكون :800*800بيسكل وننصح برفع دقة اعلى لانها واجهتك عند العميل,الصيغة المسموحة jpg,png,gif</div>
                            </div>
                        </div>
                        <div class="form-group" id="divSlotLink">
                            <label class="col-sm-2 control-label text-right">رابط الإعلان</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="slotLink" maxlength="200">
                            </div>
                        </div>
                        <div class="form-group" id="divSlotGoods" style="display:none;">
                            <label class="col-sm-2 control-label text-right">المنتج</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="slotGoods" readonly>
                                <input type="hidden" class="form-control" id="slotGoodsSn" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right"></label>
                            <div class="col-sm-3">
                                <input type="button" onclick="resetSlot()" value="تفريغ"
                                       class="btn btn-primary col-sm-9">
                            </div>
                            <div class="col-sm-3">
                                <input type="button" onclick="saveSlot()" value="تأكيد"
                                       class="btn btn-success col-sm-9">
                            </div>
                        </div>
                        <h6 class="bottomline" style="margin-bottom:30px;"></h6>
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right">قائمة المنتجات</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="goodsName"
                                       style="width:200px;height:25px;display:inline-block;">
                                <span style="display:inline-block;cursor:pointer;" onclick="gotoPage(1);">
                                    <i class="icon-search3"></i></span>
                            </div>
                        </div>
                    </form>
                   
				   <div class="form-group">
                        <div class="col-sm-12" id="tblGoods"><div class="table-responsive">
    <table class="smallTable table-bordered">
        <thead>
        <tr>
            <td width="40px" align="center"><strong>رقم</strong></td>
            <td width="100px" align="center"><strong>كود المنتج</strong></td>
            <td width="" align="center"><strong>اسم المنتج</strong></td>
        </tr>
        </thead>
        <tbody>
        <tr gsn="KD1536284678587022" gimg="/Uploads/goods/2018/06-13/5b210e47ee375.jpg" onmouseover="$(this).css('background-color','#9ddbb7');" onmouseleave="$(this).css('background-color','');" style="cursor: pointer;" onclick="rowClick(this)">
                <td align="center">1</td>
                <td align="center">KD1536284678587022</td>
                <td align="center"> بودرة اساس</td>
            </tr><tr gsn="KD1536284678974302" gimg="/Uploads/goods/2018/06-13/5b2107c942201.jpg" onmouseover="$(this).css('background-color','#9ddbb7');" onmouseleave="$(this).css('background-color','');" style="cursor: pointer;" onclick="rowClick(this)">
                <td align="center">2</td>
                <td align="center">KD1536284678974302</td>
                <td align="center"> كريم اساس سائل ضد الماء</td>
            </tr>        </tbody>
    </table>
</div>
<div class="col-md-12" id="divPage" page="1" style="padding-top:3px;">
    </div></div>
                    </div>



				   <div class="form-group">
                        <div class="col-sm-12" id="tblGoods"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tab-content pill-content">
                    <div class="tab-pane fade " id="tab1">
                            <div class="IMGbox" tplId="1">
    <img src="<?php echo assets("users/images/icons/shop_tpl_demo_1.jpg"); ?>">
    <div class="IMGexcellent35">
        <input type="button" st="0" sc="c" sk="c1-01" sw="1390" sh="530" value="اعلان 1-1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent36">
        <input type="button" st="0" sc="c" sk="c1-02" sw="1390" sh="530" value="اعلان 1-2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent37">
        <input type="button" st="0" sc="c" sk="c1-03" sw="1390" sh="530" value="اعلان 1-3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent38">
        <input type="button" st="0" sc="c" sk="c1-04" sw="1390" sh="530" value="اعلان 1-4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent39">
        <input type="button" st="0" sc="c" sk="c1-05" sw="1390" sh="530" value="اعلان 1-5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent1">
        <input type="button" st="1" sc="b" sk="b-01" sw="355" sh="225" value="الاكثر مبيعاً 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent2">
        <input type="button" st="1" sc="b" sk="b-02" sw="355" sh="225" value="الاكثر مبيعاً 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent3">
        <input type="button" st="1" sc="b" sk="b-03" sw="355" sh="225" value="الاكثر مبيعاً 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent4">
        <input type="button" st="1" sc="p" sk="p-01" sw="355" sh="225" value="بلاس 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent5">
        <input type="button" st="1" sc="p" sk="p-02" sw="355" sh="225" value="بلاس 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent6">
        <input type="button" st="1" sc="p" sk="p-03" sw="355" sh="225" value="بلاس 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent7">
        <input type="button" st="1" sc="p" sk="p-04" sw="355" sh="225" value="بلاس 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent8">
        <input type="button" st="1" sc="p" sk="p-05" sw="355" sh="225" value="بلاس 5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent9">
        <input type="button" st="1" sc="p" sk="p-06" sw="355" sh="225" value="بلاس 6"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent10">
        <input type="button" st="1" sc="s" sk="s-01" sw="200" sh="225" value="مميز 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent11">
        <input type="button" st="1" sc="s" sk="s-02" sw="200" sh="225" value="مميز 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent12">
        <input type="button" st="1" sc="s" sk="s-03" sw="200" sh="225" value="مميز 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent13">
        <input type="button" st="1" sc="s" sk="s-04" sw="200" sh="225" value="مميز 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent14">
        <input type="button" st="1" sc="s" sk="s-05" sw="200" sh="225" value="مميز 5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent15">
        <input type="button" st="1" sc="s" sk="s-06" sw="200" sh="225" value="مميز 6"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent16">
        <input type="button" st="1" sc="s" sk="s-07" sw="200" sh="225" value="مميز 7"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent17">
        <input type="button" st="1" sc="s" sk="s-08" sw="200" sh="225" value="مميز 8"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent18">
        <input type="button" st="1" sc="s" sk="s-09" sw="200" sh="225" value="مميز 9"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent19">
        <input type="button" st="1" sc="s" sk="s-10" sw="200" sh="225" value="مميز 10"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent20">
        <input type="button" st="1" sc="v" sk="v-01" sw="200" sh="225" value="تشكيلة 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent21">
        <input type="button" st="1" sc="v" sk="v-02" sw="200" sh="225" value="تشكيلة 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent22">
        <input type="button" st="1" sc="v" sk="v-03" sw="200" sh="225" value="تشكيلة 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent23">
        <input type="button" st="1" sc="v" sk="v-04" sw="200" sh="225" value="تشكيلة 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent24">
        <input type="button" st="1" sc="v" sk="v-05" sw="200" sh="225" value="تشكيلة 5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent25">
        <input type="button" st="1" sc="v" sk="v-06" sw="200" sh="225" value="تشكيلة 6"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent26">
        <input type="button" st="1" sc="v" sk="v-07" sw="200" sh="225" value="تشكيلة 7"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent27">
        <input type="button" st="1" sc="v" sk="v-08" sw="200" sh="225" value="تشكيلة 8"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent28">
        <input type="button" st="1" sc="v" sk="v-09" sw="200" sh="225" value="تشكيلة 9"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent29">
        <input type="button" st="1" sc="v" sk="v-10" sw="200" sh="225" value="تشكيلة 10"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent30">
        <input type="button" st="1" sc="v" sk="v-11" sw="200" sh="225" value="تشكيلة 11"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent31">
        <input type="button" st="1" sc="v" sk="v-12" sw="200" sh="225" value="تشكيلة 12"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent32">
        <input type="button" st="1" sc="v" sk="v-13" sw="200" sh="225" value="تشكيلة 13"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent33">
        <input type="button" st="1" sc="v" sk="v-14" sw="200" sh="225" value="تشكيلة 14"
               class="btn btn-success text-center">
    </div>
    <div class="IMGexcellent34">
        <input type="button" st="1" sc="v" sk="v-15" sw="200" sh="225" value="تشكيلة 15"
               class="btn btn-success text-center">
    </div>
</div>
                                                        </div><div class="tab-pane fade " id="tab2">
                                                            
<div class="IMGbox" tplId="2">
    <img src="<?php echo assets("users/images/icons/shop_tpl_demo_2.jpg"); ?>">
    <div class="IMGBoutique34">
        <input type="button" st="0" sc="c" sk="c1-01" sw="1390" sh="530" value="اعلان 1-1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique35">
        <input type="button" st="0" sc="c" sk="c1-02" sw="1390" sh="530" value="اعلان 1-2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique36">
        <input type="button" st="0" sc="c" sk="c1-03" sw="1390" sh="530" value="اعلان 1-3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique37">
        <input type="button" st="0" sc="c" sk="c1-04" sw="1390" sh="530" value="اعلان 1-4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique38">
        <input type="button" st="0" sc="c" sk="c1-05" sw="1390" sh="530" value="اعلان 1-5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique1">
        <input type="button" st="1" sc="b" sk="b-01" sw="560" sh="360" value="الاكثر مبيعاً 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique2">
        <input type="button" st="1" sc="b" sk="b-02" sw="560" sh="360" value="الاكثر مبيعاً 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique3">
        <input type="button" st="1" sc="p" sk="p-01" sw="355" sh="225" value="بلاس 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique4">
        <input type="button" st="1" sc="p" sk="p-02" sw="355" sh="225" value="بلاس 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique5">
        <input type="button" st="1" sc="p" sk="p-03" sw="355" sh="225" value="بلاس 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique6">
        <input type="button" st="1" sc="p" sk="p-04" sw="355" sh="225" value="بلاس 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique7">
        <input type="button" st="1" sc="p" sk="p-05" sw="355" sh="225" value="بلاس 5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique8">
        <input type="button" st="1" sc="p" sk="p-06" sw="355" sh="225" value="بلاس 6"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique9">
        <input type="button" st="1" sc="s" sk="s-01" sw="200" sh="225" value="مميز 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique10">
        <input type="button" st="1" sc="s" sk="s-02" sw="200" sh="225" value="مميز 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique11">
        <input type="button" st="1" sc="s" sk="s-03" sw="200" sh="225" value="مميز 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique12">
        <input type="button" st="1" sc="s" sk="s-04" sw="200" sh="225" value="مميز 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique13">
        <input type="button" st="1" sc="s" sk="s-05" sw="200" sh="225" value="مميز 5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique14">
        <input type="button" st="1" sc="s" sk="s-06" sw="200" sh="225" value="مميز 6"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique15">
        <input type="button" st="1" sc="s" sk="s-07" sw="200" sh="225" value="مميز 7"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique16">
        <input type="button" st="1" sc="s" sk="s-08" sw="200" sh="225" value="مميز 8"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique17">
        <input type="button" st="1" sc="s" sk="s-09" sw="200" sh="225" value="مميز 9"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique18">
        <input type="button" st="1" sc="s" sk="s-10" sw="200" sh="225" value="مميز 10"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique19">
        <input type="button" st="1" sc="v" sk="v-01" sw="200" sh="225" value="تشكيلة 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique20">
        <input type="button" st="1" sc="v" sk="v-02" sw="200" sh="225" value="تشكيلة 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique21">
        <input type="button" st="1" sc="v" sk="v-03" sw="200" sh="225" value="تشكيلة 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique22">
        <input type="button" st="1" sc="v" sk="v-04" sw="200" sh="225" value="تشكيلة 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique23">
        <input type="button" st="1" sc="v" sk="v-05" sw="200" sh="225" value="تشكيلة 5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique24">
        <input type="button" st="1" sc="v" sk="v-06" sw="200" sh="225" value="تشكيلة 6"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique25">
        <input type="button" st="1" sc="v" sk="v-07" sw="200" sh="225" value="تشكيلة 7"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique26">
        <input type="button" st="1" sc="v" sk="v-08" sw="200" sh="225" value="تشكيلة 8"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique27">
        <input type="button" st="1" sc="v" sk="v-09" sw="200" sh="225" value="تشكيلة 9"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique28">
        <input type="button" st="1" sc="v" sk="v-10" sw="200" sh="225" value="تشكيلة 10"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique29">
        <input type="button" st="1" sc="v" sk="v-11" sw="200" sh="225" value="تشكيلة 11"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique30">
        <input type="button" st="1" sc="v" sk="v-12" sw="200" sh="225" value="تشكيلة 12"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique31">
        <input type="button" st="1" sc="v" sk="v-13" sw="200" sh="225" value="تشكيلة 13"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique32">
        <input type="button" st="1" sc="v" sk="v-14" sw="200" sh="225" value="تشكيلة 14"
               class="btn btn-success text-center">
    </div>
    <div class="IMGBoutique33">
        <input type="button" st="1" sc="v" sk="v-15" sw="200" sh="225" value="تشكيلة 15"
               class="btn btn-success text-center">
    </div>
</div>
                                                        </div><div class="tab-pane fade active in" id="tab3">
                                                            
<div class="IMGbox" tplId="3">
    <img src="<?php echo assets("users/images/icons/shop_tpl_demo_3.jpg"); ?>">
    <div class="IMGboxbig1">
        <input type="button" st="0" sc="c1" sk="c1-01" sw="1390" sh="530" value="اعلان 1-1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig26">
        <input type="button" st="0" sc="c1" sk="c1-02" sw="1390" sh="530" value="اعلان 1-2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig27">
        <input type="button" st="0" sc="c1" sk="c1-03" sw="1390" sh="530" value="اعلان 1-3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig28">
        <input type="button" st="0" sc="c1" sk="c1-04" sw="1390" sh="530" value="اعلان 1-4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig29">
        <input type="button" st="0" sc="c1" sk="c1-05" sw="1390" sh="530" value="اعلان 1-5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig2">
        <input type="button" st="1" sc="b" sk="b-01" sw="360" sh="360" value="الاكثر مبيعاً 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig3">
        <input type="button" st="1" sc="b" sk="b-02" sw="360" sh="360" value="الاكثر مبيعاً 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig4">
        <input type="button" st="1" sc="b" sk="b-03" sw="360" sh="360" value="الاكثر مبيعاً 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig5">
        <input type="button" st="0" sc="a1" sk="a1-01" sw="1160" sh="180" value="اعلان 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig6">
        <input type="button" st="0" sc="a2" sk="a2-01" sw="760" sh="450" value="اعلان 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig7">
        <input type="button" st="0" sc="a2" sk="a2-02" sw="365" sh="450" value="اعلان 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig9">
        <input type="button" st="1" sc="p" sk="p-01" sw="360" sh="360" value="بلاس 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig10">
        <input type="button" st="1" sc="p" sk="p-02" sw="360" sh="360" value="بلاس 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig11">
        <input type="button" st="1" sc="p" sk="p-03" sw="360" sh="360" value="بلاس 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig8">
        <input type="button" st="0" sc="c2" sk="c2-01" sw="1160" sh="400" value="اعلان 5-1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig30">
        <input type="button" st="0" sc="c2" sk="c2-02" sw="1160" sh="400" value="اعلان 5-2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig31">
        <input type="button" st="0" sc="c2" sk="c2-03" sw="1160" sh="400" value="اعلان 5-3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig32">
        <input type="button" st="0" sc="c2" sk="c2-04" sw="1160" sh="400" value="اعلان 5-4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig33">
        <input type="button" st="0" sc="c2" sk="c2-05" sw="1160" sh="400" value="اعلان 5-5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig12">
        <input type="button" st="1" sc="p" sk="p-04" sw="560" sh="360" value="بلاس 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig13">
        <input type="button" st="1" sc="p" sk="p-05" sw="560" sh="360" value="بلاس 5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig14">
        <input type="button" st="1" sc="v" sk="v-01" sw="260" sh="225" value="تشكيلة 1"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig15">
        <input type="button" st="1" sc="v" sk="v-02" sw="260" sh="225" value="تشكيلة 2"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig16">
        <input type="button" st="1" sc="v" sk="v-03" sw="260" sh="225" value="تشكيلة 3"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig17">
        <input type="button" st="1" sc="v" sk="v-04" sw="260" sh="225" value="تشكيلة 4"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig18">
        <input type="button" st="1" sc="v" sk="v-05" sw="260" sh="225" value="تشكيلة 5"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig19">
        <input type="button" st="1" sc="v" sk="v-06" sw="260" sh="225" value="تشكيلة 6"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig20">
        <input type="button" st="1" sc="v" sk="v-07" sw="260" sh="225" value="تشكيلة 7"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig21">
        <input type="button" st="1" sc="v" sk="v-08" sw="260" sh="225" value="تشكيلة 8"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig22">
        <input type="button" st="1" sc="v" sk="v-09" sw="260" sh="225" value="تشكيلة 9"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig23">
        <input type="button" st="1" sc="v" sk="v-10" sw="260" sh="225" value="تشكيلة 10"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig24">
        <input type="button" st="1" sc="v" sk="v-11" sw="260" sh="225" value="تشكيلة 11"
               class="btn btn-success text-center">
    </div>
    <div class="IMGboxbig25">
        <input type="button" st="1" sc="v" sk="v-12" sw="260" sh="225" value="تشكيلة 12"
               class="btn btn-success text-center">
    </div>
</div>                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentSlot;
    var tplId = 3;
    var img_comment = "مقاس الصورة ينبغي ان يكون :%s*%sبيسكل وننصح برفع دقة اعلى لانها واجهتك عند العميل,الصيغة المسموحة jpg,png,gif";
    $(function () {
        var startPos = $("#setHome").offset().top;
        var startWidth;

        $.event.add(window, "scroll", function () {
            if (!startWidth) {
                startWidth = $("#setHome").width();
            }
            var p = $(window).scrollTop();
            var parentBottom = $(".panel-body").offset().top + $(".panel-body")[0].offsetHeight;

            if (p > startPos) {
                $("#setHome").css("position", "fixed").css("width", startWidth);
                var divHeight = $("#setHome").height();
                if ((p + divHeight) <= parentBottom) {
                    $("#setHome").css("top", "0px");
                } else {
                    $("#setHome").css("top", (parentBottom - p - divHeight) + "px");
                }
            } else {
                $("#setHome").attr("style", "");
            }
        });

        $("div.IMGbox div input").click(function () {
            setSlot(this);
        });
        loadSlotInfo();
        gotoPage(1);
    });

    function loadSlotInfo() {
        ajaxGet("/index/loadSlotInfo", "", function (ret) {
            if (ret && ret.sts == 1) {
                ret.data.forEach(function (item) {
                    var tid = item.tpl_id;
                    var slot = item.home_slot;
                    $(".IMGbox[tplId='" + tid + "']").find("input[sk='" + slot + "']").each(function () {
                        var title = $(this).attr("st") == '0' ? item.slot_link : item.goods_name;
                        $(this).attr("sl", item.slot_link)
                            .attr("sgi", item.goods_id)
                            .attr("sgn", item.goods_name)
                            .attr("si", item.slot_img)
                            .attr("title", title)
                            .removeClass("btn-success")
                            .addClass("btn-danger");
                    });
                });
            }
        });
    }

    function gotoPage(p) {
        var cond = {
            "name": $("#goodsName").val().trim(),
            "p": p,
        };
        tableLoad("tblGoods", url("/index/ajaxGoodsList/p/" + p), cond);
    }

    function clickTpl(id) {
        tplId = id;
    }

    function setSlot(slot) {
        currentSlot = slot;
        $("#slotName").val($(slot).val());
        setImgPreview($(slot).attr("si"))
        var stype = $(slot).attr("st");
        if (stype == "0") {
            $("#divSlotLink").show();
            $("#slotLink").val($(slot).attr("sl"));
            $("#divSlotGoods").hide();
        } else {
            $("#divSlotLink").hide();
            $("#divSlotGoods").show();
            $("#slotGoods").val($(slot).attr("sgn"));
            $("#slotGoodsSn").val($(slot).attr("sgi"));
        }
        $("#img_comment").html(sprintf(img_comment, $(slot).attr("sw"), $(slot).attr("sh")));
    }

    function rowClick(row) {
        if (!currentSlot) return;

        var stype = $(currentSlot).attr("st");
        setImgPreview($(row).attr("gimg"));
        if (stype == "0") {
            $("#slotLink").val(gurl($(row).attr("gsn")));
        } else {
            $("#slotGoods").val($(row).find("td:last").text());
            $("#slotGoodsSn").val($(row).attr("gsn"));
        }
    }

    function setImgPreview(img) {
        if (img) {
            $("#imgPreview").attr("src", img);
            $("#slotImage").val(img);
        } else {
            $("#imgPreview").attr("src", "/Public/assets/images/default.jpg");
            $("#slotImage").val("");
        }
    }

    function resetSlot() {
        if (currentSlot) setSlot(currentSlot);
    }

    function saveSlot() {
        if (!currentSlot) return;

        var stype = $(currentSlot).attr("st");
        var gimg = $("#slotImage").val();
        if (!gimg) {
            msgbox("يرجى تحديد صورة");
            return;
        }

        var sl = "", gsn = "0", gname = "";

        if (stype == "0") {
            sl = $("#slotLink").val().trim();
            if (!sl) {
                msgbox("　يرجى تحديد الرابط");
                return;
            } else if (!checkUrl(sl)) {
                msgbox("الرابط غير صحيح <br/> https://اأو http://يجب أن يبدأ بـ ");
                return;
            }
        } else {
            gsn = $("#slotGoodsSn").val();
            gname = $("#slotGoods").val().trim();
            if (gsn == "0" || gsn == "") {
                msgbox("يرجى تحديد المنتج");
                return;
            }
        }

        var data = {
            "tpl_id": tplId,
            "home_slot": $(currentSlot).attr("sk"),
            "slot_type": stype,
            "slot_class": $(currentSlot).attr("sc"),
            "slot_img": gimg,
            "goods_sn": gsn,
            "goods_name": gname,
            "slot_link": sl,
        };
        ajaxPost("/index/saveDesignSlot", {"data": data}, function () {
            $(currentSlot).attr("si", gimg);
            if (stype == "0") {
                $(currentSlot).attr("sl", sl);
                $(currentSlot).attr("title", sl);
            } else {
                $(currentSlot).attr("sgi", gsn);
                $(currentSlot).attr("sgn", gname);
                $(currentSlot).attr("title", gname);
            }
            $(currentSlot).removeClass("btn-success").addClass("btn-danger");
        });

    }
</script>
            </div>
