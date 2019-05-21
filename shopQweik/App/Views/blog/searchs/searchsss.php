<div class="content-wrapper">
  <div id="hoverOverlay"></div>
    <div class="container_12">
        <div class="main-container col2-left-layout">
			<div class="row clearfix">
				<div class="grid_12">	<nav class="breadcrumbs"><ul><li class="home" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="<?php echo url('/'); ?>" title="الذهاب إلى الصفحة الرئيسية" itemprop="url"><span itemprop="title">الصفحة الرئيسية</span></a>
													<span>——</span>
								</li>
							<li class="category243">
									<strong><?php echo $category->name; ?></strong>
												</li>
												<input type="hidden" id="gridTableid" value="<?php echo $category->id; ?>" />
					</ul></nav></div>
			</div>
            <div class="clear"></div>
			<div class="row clearfix">
				<div class="grid_9 col-main">
										<div id="algolia-autocomplete-container" class="mangolia"></div><article><header class="page-title category-title"><h1 id="catId" data-id="243"><?php echo $category->name; ?></h1>
	</header>
	<div class="cat-top-banners">
		<?php foreach ($ads AS $ad) { ?>
		<div>
			<a href="<?php echo $ad->link; ?>" class="ad" target="_blank">
				<img src="<?php echo assets('blog/images/' . $ad->image); ?>" alt="" />
			</a>
		</div>
		<?php } ?>
	</div>
<section class="category-products">

<!--<nav class="toolbar"><p class="amount alpha">
				<!--	عناصر 1 الى 12 من 3770 المجموع			</p>-->
	<!--<div class="pager">
		        <div class="pager-box">
        Page: 1 of 315    </div>
        			<div class="pages">
			<strong>صفحة:</strong>
			<ol>
			<li class="current"><span>1</span></li>
				<li><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=12&amp;mode=grid&amp;p=2">2</a></li>
				<li><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=12&amp;mode=grid&amp;p=3">3</a></li>
				<li><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=12&amp;mode=grid&amp;p=4">4</a></li>
				<li><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=12&amp;mode=grid&amp;p=5">5</a></li>
																										<li class="i-next-item">
						<a class="next i-next" href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=12&amp;mode=grid&amp;p=2&amp;infParam=1" title="التالي">
							<i class="fa fa-angle-right"></i>						</a>
					</li>
							</ol></div>
			</div>-->
			<div class="sorter">
			
			<script>
	function getXmlHttpRequestObject() {  
   if (window.XMLHttpRequest) {  
     return new XMLHttpRequest();  
   } else if(window.ActiveXObject) {  
     return new ActiveXObject("Microsoft.XMLHTTP");  
   } else {  
     alert("Your Browser Sucks!");  
   }  
 }  
 //Our XmlHttpRequest object to get the auto suggest  
 var Req = getXmlHttpRequestObject();  
 var ReqData = getXmlHttpRequestObject();  
 var ReqData3 = getXmlHttpRequestObject();  
 
  function showGridTable() {
		var gridTableid = document.getElementById("gridTableid").value;
		//alert(gridTableid);
        var parameters5 = "gridTableid="+gridTableid;// Create parameters to be sent for server  
   ReqData3.open("POST", '<?php echo url('/getmode.php'); ?>', true);  
   ReqData3.setRequestHeader('Content-Type','application/x-www-form-urlencoded');  
   //ReqData.setRequestHeader("Content-length", parameters.length);  
   //ReqData.setRequestHeader("Connection", "close");  
      ReqData3.send(parameters5); // Begin send the data 
		
		ReqData3.onreadystatechange = function() {

            if (ReqData3.readyState == 4 && ReqData3.status == 200) {

                document.getElementById("products-grid").innerHTML=ReqData3.responseText;
				//document.getElementById("products-grid").style.border="1px solid #A5ACB2";
            }
        }

    }
    ///setInterval(function() {  showGridTable() }, 1000);
    //setInterval(function() {  updatePagerLimit() }, 9000);
 
 /* function updatePagerLimit() {  
   var selectid = document.getElementById("selectid").value; 
   alert(selectid);
     var parameters3 = "selectid="+selectid;// Create parameters to be sent for server  
   ReqData2.open("POST", '<?php echo url('/getdata.php'); ?>', true);  
   ReqData2.setRequestHeader('Content-Type','application/x-www-form-urlencoded');  
   //ReqData.setRequestHeader("Content-length", parameters.length);  
   //ReqData.setRequestHeader("Connection", "close");  
      ReqData2.send(parameters3); // Begin send the data
 } */
   /* function handle_submit() {  
   var name = document.getElementById("name").value;  
   var title_post = document.getElementById("title_post").value;  
   var message = document.getElementById("message").value;
   var email = document.getElementById("email").value;
   var postid = document.getElementById("postid").value;
   var userid = document.getElementById("userid").value;
   var title = document.getElementById("title").value;
   var parameters = "name="+name+"&message="+message+"&email="+email+"&postid="+postid +"&title="+title+"&userid="+userid+"&title_post="+title_post;// Create parameters to be sent for server  
   Req.open("POST", '<?php echo url('/send.php'); ?>', true);  
   Req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');  
   //Req.setRequestHeader("Content-length", parameters.length);  
   //Req.setRequestHeader("Connection", "close");  
      Req.send(parameters); // Begin send the data  
   Req.onreadystatechange = function() { // Function to read server response  
           if (Req.readyState == 4) { // If server already executed the request  
                var str = Req.responseText.split("&nbsp;"); // Read string data that is sent from server  
                if (str[0] == 'success') {  
                     alert("Data inputted successfully.");  
                }else {  
                     alert(str[0]);  
                }  
           }  
      }  
 }   */
</script>
<!--<p class="view-mode">
<label>مشاهدة كا:</label>
<strong title="الشبكة" class="grid"><i class="fa fa-th"></i></strong>
<a onclick="showGridTable()" id="gridTable" title="قائمة" class="list"><i class="fa fa-th-list"></i></a>
</p>
						<div class="sort-by">
				<label>ترتيب حسب</label>
				<select class="sort-item">
				
					<!--<option value="https://www.goldenscent.com/makeup.html?cat=243&amp;dir=asc&amp;limit=12&amp;mode=grid&amp;order=position" selected>
						موقع					</option><option value="https://www.goldenscent.com/makeup.html?cat=243&amp;dir=asc&amp;limit=12&amp;mode=grid&amp;order=name">
						الإسم					</option><option value="https://www.goldenscent.com/makeup.html?cat=243&amp;dir=asc&amp;limit=12&amp;mode=grid&amp;order=price">
						السعر					</option>
						
						</select></div>
							<a href="" class="desc" title="تحديد الاتجاه التنازلي"><i class="fa fa-sort-amount-desc"></i></a>
							
							<!--<a href="https://www.goldenscent.com/makeup.html?cat=243&amp;dir=desc&amp;limit=12&amp;mode=grid&amp;order=position" class="desc" title="تحديد الاتجاه التنازلي"><i class="fa fa-sort-amount-desc"></i></a>
						
			<div class="limiter">
				<label>عرض:</label>
				<ul><li><a href="" class="selected">12</a></li>
				<li><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=16&amp;mode=grid">16</a></li>
				<li class="last"><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=32&amp;mode=grid">32</a></li>
									</ul></div>
		</div>
	</nav>-->
	
	<script type="text/javascript">
	/* if(!$(".toolbar .sbHolder").length){
		$(".toolbar select").selectbox();
		$('.toolbar .sbSelector').each(function(){
			if(!$(this).find('span.text').length){
				$(this).wrapInner('<span class="text" />').append('<span />').find('span:last').wrapInner('<span />');
			}
		});
	}
	
	$('select.sort-item').each(function(){
		if(!$(this).hasClass('active')){
			$(this).addClass('active');
			$(this).change(function(){
				setLocation($(this).val());
			});
		}
	}); */
	
	</script>
	<ul id="products-grid" class="products-grid grid-4-columns label-type-1 row clearfix">
	
	<?php foreach ($category->posts AS $chunked_posts) { ?>
	<?php foreach ($chunked_posts AS $post) { $post->category = $category->name; ?>
		<li class="item " data-sku="3613042123117c">
		<form action="<?php echo url('/checkout/cart/submit'); ?>" class="form" method="POST">
		<div id="form-results"></div>

  <div class="no-display">
	<input type="hidden" name="product_id" value="<?php echo $post->id; ?>">
	
	<input type="hidden" name="weight" value="<?php echo $post->weight; ?>">
	
	<input type="hidden" name="quantity" value="<?php echo $post->quantity; ?>">
	
	<input type="hidden" name="product_en_title" value="<?php echo $post->en_title; ?>">
	
	<input type="hidden" name="product_title" value="<?php echo $post->title; ?>">
	<input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
	
	<input type="hidden" name="product_price" id="related-products-field" value="<?php echo $post->price1; ?>"></div>
		
		
			<div class="product-container">
					<div class="product-img-box">
						<a href="<?php echo url('/brands/' . seo($post->en_title) . '/' . $post->id); ?>" title="<?php echo $post->title; ?>" class="product-image">
							<img id="product-collection-image-12480" src="<?php echo assets('images/' . $post->image); ?>" data-srcx2="" alt="<?php echo $post->title; ?>"></a>
						<div class="out-of-stock-label hide">غير متوفر حالياً </div>
					</div>
					<h2 class="product-name"><a href="<?php echo url('/brands/' . seo($post->en_title) . '/' . $post->id); ?>" class="a-left" title="<?php echo $post->title; ?>"><?php echo $post->title; ?></a></h2>
						<h2 class="brand-name-listing"><?php echo $post->title; ?></h2>
<style>
.product-container .old-price{
    padding-top:0;
    line-height: 1em;
}
.vat-msg{
    display: inline-block;
    padding: 0 5px;
    color: #4a4a4a;
    font-size: 14px;
}
</style><div class="price-box">
     <div class="hidden" itemprop="price"><?php echo $post->price1; ?></div>
    <div class="hidden" itemprop="priceCurrency">SAR</div>
    
                                            <!-- regular price -->
                <span class="regular-price" id="product-price-12480"><span class="price"><?php echo $post->price1; ?>  ر.س</span></span>
            
                </div>
    
										<div class="product-buttons">
																												<div class="button-holder">
																												<button type="submit" title="أضف إلى السلة" class="button submit-btn"><span><span>أضف إلى السلة</span></span></button>
																											</div>
																										<ul class="add-to-links"></ul></div>
				</div>
			</form>
            </li>
			
	<?php } ?>
	<?php } ?>
			</ul>
					
					
					
					<script type="text/javascript">
			decorateGeneric($('ul.products-grid'), ['odd','even','first','last'])
			isotopLoader();
		</script><script type="text/javascript">
		/* list column */
		function geListColumn(callback){
			mainContainer = $('.main-container');
			rightCol = $('.products-list .right-col');
			
			if($('.col-main').hasClass('grid_12')){
				rightCol.addClass('grid_9');
			}else if(mainContainer.hasClass('col3-layout')){
				rightCol.addClass('grid_3');
			}else{
				rightCol.addClass('grid_6');
			}
			
			try{
				callback();
			}catch(err){}
			gridLabels();
		}
		
		$(document).ready(function(){
			$('.toolbar').each(function(){
				if(!$(this).parents('.toolbar-bottom').length){
					$('.page-title .amount').remove();
					$('.page-title').append($(this).find('.amount'));
				}
			});
		});
	
			$('.lockshow-bg').remove();
	    </script><div class="toolbar-bottom">
        <nav class="toolbar">
		<!--<p class="amount alpha">
					عناصر 1 الى 12 من 3770 المجموع			</p>-->
	<div class="pager">
		        <!--<div class="pager-box">
        Page: 1 of 315    </div>-->
        			<div class="pages">
			<strong>صفحة:</strong>
			<ol>
			
			<li>
                <a href="<?php echo $url . 1; ?>" title="First Page">
                    <i class="fa fa-angle-double-left"></i>
                </a>
            </li>
			
			<li>
              <a href="<?php echo $url . $pagination->prev(); ?>" aria-label="Previous" title="Previous Page">
                    <i class="fa fa-angle-left"></i>
              </a>
            </li>
			
			<?php for ($page = 1; $page <= $pagination->last(); $page++) { ?>
                <li <?php echo $page == $pagination->page() ? ' class="active"': false; ?>>
                    <a href="<?php echo $url . $page; ?>"><?php echo $page; ?></a>
                </li>
            <?php } ?>
			
			
			<li>
              <a href="<?php echo $url . $pagination->next(); ?>" aria-label="Next">
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
			
			<li>
              <a href="<?php echo $url . $pagination->last(); ?>" aria-label="Next">
                <i class="fa fa-angle-double-right"></i>
              </a>
            </li>
							</ol></div>
			</div>
			<!--<div class="sorter">
										<p class="view-mode">
															<label>مشاهدة كا:</label>
																		<strong title="الشبكة" class="grid"><i class="fa fa-th"></i></strong>
																								<a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=12&amp;mode=list" title="قائمة" class="list"><i class="fa fa-th-list"></i></a>
																				</p>
						<div class="sort-by">
				<!--<label>ترتيب حسب</label>
				<select class="sort-item"><option value="https://www.goldenscent.com/makeup.html?cat=243&amp;dir=asc&amp;limit=12&amp;mode=grid&amp;order=position" selected>
						موقع					</option><option value="https://www.goldenscent.com/makeup.html?cat=243&amp;dir=asc&amp;limit=12&amp;mode=grid&amp;order=name">
						الإسم					</option><option value="https://www.goldenscent.com/makeup.html?cat=243&amp;dir=asc&amp;limit=12&amp;mode=grid&amp;order=price">
						السعر					</option></select></div>
							<a href="https://www.goldenscent.com/makeup.html?cat=243&amp;dir=desc&amp;limit=12&amp;mode=grid&amp;order=position" class="desc" title="تحديد الاتجاه التنازلي"><i class="fa fa-sort-amount-desc"></i></a>-->
						
			<!--<div class="limiter">
				<label>عرض:</label>
				<ul><li><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=12&amp;mode=grid" class="selected">12</a></li>
			<li><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=16&amp;mode=grid">16</a></li>
			<li class="last"><a href="https://www.goldenscent.com/makeup.html?cat=243&amp;limit=32&amp;mode=grid">32</a></li>
									</ul></div>-->
		</div>
	</nav><script type="text/javascript">
	/* if(!$(".toolbar .sbHolder").length){
		$(".toolbar select").selectbox();
		$('.toolbar .sbSelector').each(function(){
			if(!$(this).find('span.text').length){
				$(this).wrapInner('<span class="text" />').append('<span />').find('span:last').wrapInner('<span />');
			}
		});
	}
	
	$('select.sort-item').each(function(){
		if(!$(this).hasClass('active')){
			$(this).addClass('active');
			$(this).change(function(){
				setLocation($(this).val());
			});
		}
	}); 
	
	</script></div>-->
		<script type="text/javascript">
		/* $(document).ready(function(){
			try{
				StrategeryInfiniteScroll.init();
			}catch(err){}
			$('.toolbar-bottom').addClass('no-border');
			$('.lockshow-bg').remove();
		}); 
	</script></section></article><script type="text/javascript">
        //<![CDATA[
            /* var thisinfinitescroll = new infinitescroll();
            thisinfinitescroll.shouldload = true;
            thisinfinitescroll.nextpage = 2;
            thisinfinitescroll.lastpage = 315;
            thisinfinitescroll.mode = "grid"; */
        //]]>
    </script></div>