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
        <li class="active">أستعادة المنتجات</li>
    </ul>
</div>

<div class="search-line block">
    <div class="col-md-2">
        <input type="text" id="brand" class="form-control" placeholder="العلامة التجارية"/>
    </div>
    <div class="col-md-2">
        <input type="text" id="name" class="form-control" placeholder="اسم المنتج"/>
    </div>
    <div class="col-md-2">
        <input type="text" id="code" class="form-control" placeholder="كود المنتج"/>
    </div>
    <div class="col-md-2">
        <select class="select-full" id="disp_status">
            <option selected value="">--حالة العرض--</option>
            <option value='1'>عرض</option>
            <option value='0'>إخفاء</option>
        </select>
    </div>
    <div class="col-md-2">
        <select class="select-full" id="audit_status">
            <option selected value="">--حالة التدقيق--</option>
            <option value='0'>الطلب معلق</option>
            <option value='1'>في انتظار التدقيق</option>
            <option value='2'>تمت الموافقة</option>
            <option value='3'>مرفوض</option>
        </select>
    </div>
    <div class="col-md-1">
        <button class="btn btn-success btn-block " type="button" onclick="gotoPage(1)">بحث        </button>
    </div>
    <div class="clearfix"></div>
</div>

<div class="table-content" id="table-content">
	<script>
	/* function getXmlHttpRequestObject() {  
   if (window.XMLHttpRequest) {  
     return new XMLHttpRequest();  
   } else if(window.ActiveXObject) {  
     return new ActiveXObject("Microsoft.XMLHTTP");  
   } else {  
     alert("Your Browser Sucks!");  
   }  
 }  
 var ReqData = getXmlHttpRequestObject();
 function ajax() {
   ReqData.open("GET", '<?php echo url('/seller/Goods/goodsListdeleted'); ?>', true);  
      ReqData.send(); // Begin send the data 
		ReqData.onreadystatechange = function() {

            if (ReqData.readyState == 4 && ReqData.status == 200) {

                document.getElementById("table-content-tbody").innerHTML=ReqData.responseText;
				//document.getElementById("table-content").style.border="1px solid #A5ACB2";
            }
        }

    }
	
    setInterval(function() {  ajax() }, 1000); */
	$(function(){
		function loadc(){
			$('#table-content-tbody').load('<?php echo url('/seller/Goods/goodsListdeleted'); ?>');
			
		}
		setInterval(function() {  loadc() }, 1000); 
	});
 </script>
 <div class="panel panel-default">
    <div class="panel-heading">
        <h6 class="panel-title">
            <i class="icon-office"></i>قائمة المنتجات        </h6>
        
    </div>

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
            <tbody id="table-content-tbody">
			</tbody>
        </table>
    </div>
</div>
</div>
</div>