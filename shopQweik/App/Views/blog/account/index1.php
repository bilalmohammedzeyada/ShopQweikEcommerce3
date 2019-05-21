<div class="content-wrapper">
  <div id="hoverOverlay"></div>
    <div class="container_12">
        <div class="main-container col2-left-layout">
			<div class="row clearfix">
				<div class="grid_12"></div>
			</div>
            <div class="clear"></div>
			<div class="row clearfix">
				<div class="grid_9 col-main">
					<div id="algolia-autocomplete-container" class="mangolia"></div>
					<div class="my-account">
						<div class="dashboard">
						<?php 
						if(! $user->address1 && $user->address1 = '') {  ?>
							<div id="VerifiedCustomer">
								<div class="not-verified-please-verify">الرجاء إضافة عنوان إلى حسابك!</div>
							</div>
						<?php } ?>
							
					<div class="page-title">
					<h1>لوحة تحكمي</h1>
				</div>
        <div class="welcome-msg">
    <p class="hello"><strong>مرحبا, <?php echo $user->first_name . ' ' . $user->last_name; ?></strong></p>
    <p>من لوحة التحكم للحساب يمكنك رؤية جميع المعلومات المتعلقة بحسابك ، اضغط على الروابط بالاسفل لتعديل المعلومات.</p>
</div>
        <div class="box-account box-info">
        <div class="box-head">
            <h2>معلومات الحساب</h2>
        </div>
                        <div class=" row clearfix">
	<div class="grid_5 box-infome">
		<div class="box">
			<div class="box-title">
				<h3>معلومات الاتصال</h3>
				<a href="<?php echo url('/customer/account/edit/') . $user->id; ?>"><i class="fa fa-pencil"></i></a>
			</div>
			<div class="box-content">
				<p>
					<?php echo $user->first_name . ' ' . $user->last_name; ?><br>
					<?php echo $user->email; ?><br>
					<?php echo $user->mobile_number; ?><br><br><a href="<?php echo url('/customer/account/edit/changepass/') . $user->id; ?>">تغيير كلمة المرور</a>
				</p>
			</div>
		</div>
	</div>
		<div class="grid_4">
		<div class="box">
			<div class="box-title">
				<h3>النشرات البريدية</h3>
				<a href="<?php echo url('/newsletter/manage'); ?>"><i class="fa fa-pencil"></i></a>
			</div>
			<div class="box-content">
				<p>انت مشترك حاليا العامة للاشتراك '.</p>
			</div>
		</div>
	</div>
		<div class="clear"></div>
</div>        <div class="box">
    <div class="box-title">
        <h3>العنوان</h3>
        <a href="<?php echo url('/customer/address/'); ?>"><i class="fa fa-pencil"></i></a>
    </div>
    <div class="box-content row clearfix">
        <div class="grid_4">
			<div class="box-divider">
				<h4>عنوان الدفع الافتراضي</h4>
				<address>
				<?php 
				if($user->address1){
					
					echo $user->address1 . "<br>";
					 
				} else { ?>
				
				لم تقم بتعيين عنوان الفواتير الافتراضية.<br>
				
				<?php 	
				}
				?>
					<a href="<?php echo url('/customer/address/edit/'); ?>">تحرير العنوان</a>
				</address>
			</div>
        </div>
        <div class="grid_4 omega">
            <h4>عنوان الشحن الافتراضي</h4>
            <address>
			<?php 
			if($user->address2){
				
				echo $user->address2 . "<br>";
				 
			} else { ?>
			
			لم تقم بتعيين عنوان الشحن الافتراضي.<br>
			
			<?php 	
			}
			?>
				<a href="<?php echo url('/customer/address/edit/'); ?>">تحرير العنوان</a>
            </address>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>    </div>
        </div></div>				</div>
								<aside class="grid_3 col-main sidebar sidebar-left"><div class="block block-account">
    <div class="block-title">
        <strong><span><i class="icon-user"></i><?php echo $user->first_name . ' ' . $user->last_name; ?></span></strong>
    </div>
    <div class="block-content">
        <ul>
			<li><a href="<?php echo url('/customer/address/'); ?>">العنوان</a></li>
			<li><a href="<?php echo url('/customer/account/edit/') . '/' . $user->id; ?>">معلومات الحساب</a></li>
			<li><a href="<?php echo url('/sales/order/history/'); ?>">مشترياتي</a></li>
			<li><a href="<?php echo url('/review/customer/'); ?>">مراجعات المنتجات</a></li>
			<li><a href="<?php echo url('/newsletter/manage/'); ?>">اشتراكات النشرات الاخبارية</a></li>
            <li class="last"><a href="<?php echo url('/logout'); ?>">تسجيل الخروج</a></li>
        </ul>
	</div>
</div><div class="block block-vertical-nav">
    <div class="block-title">
        <strong><span>التصنيفات</span></strong>
    </div>
    <div class="block-content">
        <ul class="closed-default" id="categories-accordion">
		<li class="level0 nav-1 level-top first parent">
			<a href="https://www.goldenscent.com/new.html" class="level-top">
			<span>جديدنا</span>
			</a>
			<ul class="level0"><li class="level1 nav-1-1 first">
				<a href="https://www.goldenscent.com/new/for-him.html">
				<span>جديد لها</span>
				</a>
				</li><li class="level1 nav-1-2 last">
				<a href="https://www.goldenscent.com/new/for-him-98.html">
				<span>جديد له</span>
				</a>
				</li>
			</ul>
		</li>


<li class="level0 nav-2 level-top parent">
<a href="https://www.goldenscent.com/brands.html" class="level-top">
<span>الماركات </span>
</a>
<ul class="level0"><li class="level1 nav-2-1 first">
<a href="https://www.goldenscent.com/brands/3lab.html">
<span>ثري لاب</span>
</a>
</li><li class="level1 nav-2-2">
<a href="https://www.goldenscent.com/brands/abercrombie-fitch.html">
<span>أبيركرومبي آند فيتش</span>
</a>
</li><li class="level1 nav-2-3">
<a href="https://www.goldenscent.com/brands/absolute.html">
<span>ابسولوت</span>
</a>
</li><li class="level1 nav-2-4">
<a href="https://www.goldenscent.com/brands/alaia.html">
<span>عليّة</span>
</a>
</li><li class="level1 nav-2-5">
<a href="https://www.goldenscent.com/brands/acqua-di-parma.html">
<span>أكوا دي بارما</span>
</a>
</li><li class="level1 nav-2-6">
<a href="https://www.goldenscent.com/brands/adrienne-vittadini.html">
<span>آدريان فيتاديني</span>
</a>
</li><li class="level1 nav-2-7">
<a href="https://www.goldenscent.com/brands/agent-provocateur.html">
<span>ايجنت بروفيكتور</span>
</a>
</li><li class="level1 nav-2-8">
<a href="https://www.goldenscent.com/brands/aigner.html">
<span>اجنر</span>
</a>
</li><li class="level1 nav-2-9">
<a href="https://www.goldenscent.com/brands/alexandre-j.html">
<span>ألكسندر جي</span>
</a>
</li><li class="level1 nav-2-10">
<a href="https://www.goldenscent.com/brands/alyssa-ashley.html">
<span>اليسا اشلي</span>
</a>
</li><li class="level1 nav-2-11">
<a href="https://www.goldenscent.com/brands/alterna.html">
<span>ألتيرنا </span>
</a>
</li><li class="level1 nav-2-12">
<a href="https://www.goldenscent.com/brands/american-crew.html">
<span>امريكان كرو</span>
</a>
</li><li class="level1 nav-2-13">
<a href="https://www.goldenscent.com/brands/amouage.html">
<span>أمواج</span>
</a>
</li><li class="level1 nav-2-14">
<a href="https://www.goldenscent.com/brands/amouroud.html">
<span>امورعود</span>
</a>
</li><li class="level1 nav-2-15">
<a href="https://www.goldenscent.com/brands/anesthesia.html">
<span>أنستازيا</span>
</a>
</li><li class="level1 nav-2-16">
<a href="https://www.goldenscent.com/brands/anfas-alkhaleej.html">
<span>أنفاس الخليج</span>
</a>
</li><li class="level1 nav-2-17">
<a href="https://www.goldenscent.com/brands/angel-schlesser.html">
<span>انجل شليسر</span>
</a>
</li><li class="level1 nav-2-18">
<a href="https://www.goldenscent.com/brands/annick-goutal.html">
<span>آنك جوتال</span>
</a>
</li><li class="level1 nav-2-19">
<a href="https://www.goldenscent.com/brands/antonio-banderas.html">
<span>أنطونيو بانديراس</span>
</a>
</li><li class="level1 nav-2-20">
<a href="https://www.goldenscent.com/brands/arcancil.html">
<span>اركانسيل </span>
</a>
</li><li class="level1 nav-2-21">
<a href="https://www.goldenscent.com/brands/armand-basi.html">
<span>ارماند باسي</span>
</a>
</li><li class="level1 nav-2-22">
<a href="https://www.goldenscent.com/brands/atelier-cologne.html">
<span>آتيلير كولون</span>
</a>
</li><li class="level1 nav-2-23">
<a href="https://www.goldenscent.com/brands/atelier-des-ors.html">
<span>اتيلير دي سير</span>
</a>
</li><li class="level1 nav-2-24">
<a href="https://www.goldenscent.com/brands/atkinsons.html">
<span>أتكينسونس</span>
</a>
</li><li class="level1 nav-2-25">
<a href="https://www.goldenscent.com/brands/aramis.html">
<span>اراميس</span>
</a>
</li><li class="level1 nav-2-26">
<a href="https://www.goldenscent.com/brands/avene.html">
<span>افين</span>
</a>
</li><li class="level1 nav-2-27">
<a href="https://www.goldenscent.com/brands/azzaro.html">
<span>ازارو</span>
</a>
</li><li class="level1 nav-2-28">
<a href="https://www.goldenscent.com/brands/baldessarini.html">
<span>بالديساريني</span>
</a>
</li><li class="level1 nav-2-29">
<a href="https://www.goldenscent.com/brands/balmain.html">
<span>بالمين</span>
</a>
</li><li class="level1 nav-2-30">
<a href="https://www.goldenscent.com/brands/bare-minerals.html">
<span>بير مينيرالز</span>
</a>
</li><li class="level1 nav-2-31">
<a href="https://www.goldenscent.com/brands/bassam-fattouh.html">
<span>بسام فتوح</span>
</a>
</li><li class="level1 nav-2-32">
<a href="https://www.goldenscent.com/brands/bean-body.html">
<span>بين بودي</span>
</a>
</li><li class="level1 nav-2-33">
<a href="https://www.goldenscent.com/brands/bebe.html">
<span>بي بي </span>
</a>
</li><li class="level1 nav-2-34">
<a href="https://www.goldenscent.com/brands/beyonce.html">
<span>بيونسيه</span>
</a>
</li><li class="level1 nav-2-35">
<a href="https://www.goldenscent.com/brands/benefit.html">
<span>بينيفت كوزمتكس</span>
</a>
</li><li class="level1 nav-2-36">
<a href="https://www.goldenscent.com/brands/bentley.html">
<span>بنتلي</span>
</a>
</li><li class="level1 nav-2-37">
<a href="https://www.goldenscent.com/brands/blink.html">
<span>بلينك</span>
</a>
</li><li class="level1 nav-2-38">
<a href="https://www.goldenscent.com/brands/burberry.html">
<span>بربري</span>
</a>
</li><li class="level1 nav-2-39">
<a href="https://www.goldenscent.com/brands/bourjois.html">
<span>بورجوا</span>
</a>
</li><li class="level1 nav-2-40">
<a href="https://www.goldenscent.com/brands/boucheron.html">
<span>بوشرون</span>
</a>
</li><li class="level1 nav-2-41">
<a href="https://www.goldenscent.com/brands/braccialini.html">
<span>براتشاليني</span>
</a>
</li><li class="level1 nav-2-42">
<a href="https://www.goldenscent.com/brands/browtician.html">
<span>براوتيشين</span>
</a>
</li><li class="level1 nav-2-43">
<a href="https://www.goldenscent.com/brands/britney-spears.html">
<span>بريتني سبيرز</span>
</a>
</li><li class="level1 nav-2-44">
<a href="https://www.goldenscent.com/brands/bubble-t-cosmetics.html">
<span>ببل تي كوزمتكس</span>
</a>
</li><li class="level1 nav-2-45">
<a href="https://www.goldenscent.com/brands/bvlgari.html">
<span>بولغاري</span>
</a>
</li><li class="level1 nav-2-46">
<a href="https://www.goldenscent.com/brands/byblos.html">
<span>بايبلوس</span>
</a>
</li><li class="level1 nav-2-47">
<a href="https://www.goldenscent.com/brands/byredo.html">
<span>بايريدو</span>
</a>
</li><li class="level1 nav-2-48">
<a href="https://www.goldenscent.com/brands/calvin-klein.html">
<span>كالفن كلاين</span>
</a>
</li><li class="level1 nav-2-49">
<a href="https://www.goldenscent.com/brands/carolina-herrera.html">
<span>كارولينا هيريرا</span>
</a>
</li><li class="level1 nav-2-50">
<a href="https://www.goldenscent.com/brands/caron.html">
<span>كارفن</span>
</a>
</li><li class="level1 nav-2-51">
<a href="https://www.goldenscent.com/brands/cartier.html">
<span>كارتير</span>
</a>
</li><li class="level1 nav-2-52">
<a href="https://www.goldenscent.com/brands/cerruti.html">
<span>شيروتي 1881</span>
</a>
</li><li class="level1 nav-2-53">
<a href="https://www.goldenscent.com/brands/chanel.html">
<span>شانيل</span>
</a>
</li><li class="level1 nav-2-54">
<a href="https://www.goldenscent.com/brands/charriol.html">
<span>شاريول</span>
</a>
</li><li class="level1 nav-2-55">
<a href="https://www.goldenscent.com/brands/cacharel.html">
<span>كاشريل</span>
</a>
</li><li class="level1 nav-2-56">
<a href="https://www.goldenscent.com/brands/carven.html">
<span>كارفين</span>
</a>
</li><li class="level1 nav-2-57">
<a href="https://www.goldenscent.com/brands/chantal-thomass.html">
<span>شانتال توماس</span>
</a>
</li><li class="level1 nav-2-58">
<a href="https://www.goldenscent.com/brands/chloe.html">
<span>كلوي</span>
</a>
</li><li class="level1 nav-2-59">
<a href="https://www.goldenscent.com/brands/chopard.html">
<span>شوبارد</span>
</a>
</li><li class="level1 nav-2-60">
<a href="https://www.goldenscent.com/brands/christian-siriano.html">
<span>كريستيان سيريانو</span>
</a>
</li><li class="level1 nav-2-61">
<a href="https://www.goldenscent.com/brands/ciate.html">
<span>سياتيه</span>
</a>
</li><li class="level1 nav-2-62">
<a href="https://www.goldenscent.com/brands/clinique.html">
<span>كلينك</span>
</a>
</li><li class="level1 nav-2-63">
<a href="https://www.goldenscent.com/brands/coach.html">
<span>كوتش </span>
</a>
</li><li class="level1 nav-2-64">
<a href="https://www.goldenscent.com/brands/coal-diamond.html">
<span>كول دايمنود</span>
</a>
</li><li class="level1 nav-2-65">
<a href="https://www.goldenscent.com/brands/coastal.html">
<span>كوستال سينتس</span>
</a>
</li><li class="level1 nav-2-66">
<a href="https://www.goldenscent.com/brands/comme-des-garcons.html">
<span>كوم دي غارسون</span>
</a>
</li><li class="level1 nav-2-67">
<a href="https://www.goldenscent.com/brands/color-wow.html">
<span>كلار واو</span>
</a>
</li><li class="level1 nav-2-68">
<a href="https://www.goldenscent.com/brands/creed.html">
<span>كريد</span>
</a>
</li><li class="level1 nav-2-69">
<a href="https://www.goldenscent.com/brands/cristiano-ronaldo.html">
<span>كريستيانو رونالدو</span>
</a>
</li><li class="level1 nav-2-70">
<a href="https://www.goldenscent.com/brands/costume-national.html">
<span>كوستوم ناشونال</span>
</a>
</li><li class="level1 nav-2-71">
<a href="https://www.goldenscent.com/brands/couture-hair-pro.html">
<span>كوتور هير برو</span>
</a>
</li><li class="level1 nav-2-72">
<a href="https://www.goldenscent.com/brands/daily-concepts.html">
<span>ديلي كونسبتس</span>
</a>
</li><li class="level1 nav-2-73">
<a href="https://www.goldenscent.com/brands/davidoff.html">
<span>دافيدوف</span>
</a>
</li><li class="level1 nav-2-74">
<a href="https://www.goldenscent.com/brands/decleor.html">
<span>دكليور</span>
</a>
</li><li class="level1 nav-2-75">
<a href="https://www.goldenscent.com/brands/deem-perfume.html">
<span>عطورات  ديم</span>
</a>
</li><li class="level1 nav-2-76">
<a href="https://www.goldenscent.com/brands/dermablend.html">
<span>ديرما بليند</span>
</a>
</li><li class="level1 nav-2-77">
<a href="https://www.goldenscent.com/brands/dermalogica.html">
<span>ديرمالوجيكا</span>
</a>
</li><li class="level1 nav-2-78">
<a href="https://www.goldenscent.com/brands/diego-dalla-palma.html">
<span>دييغو دالا بالما</span>
</a>
</li><li class="level1 nav-2-79">
<a href="https://www.goldenscent.com/brands/diesel.html">
<span>ديزل</span>
</a>
</li><li class="level1 nav-2-80">
<a href="https://www.goldenscent.com/brands/dior.html">
<span>ديور</span>
</a>
</li><li class="level1 nav-2-81">
<a href="https://www.goldenscent.com/brands/diptyque.html">
<span>دبيتيك</span>
</a>
</li><li class="level1 nav-2-82">
<a href="https://www.goldenscent.com/brands/divage.html">
<span>ديفاج</span>
</a>
</li><li class="level1 nav-2-83">
<a href="https://www.goldenscent.com/brands/donna-karan.html">
<span>دونا كاران</span>
</a>
</li><li class="level1 nav-2-84">
<a href="https://www.goldenscent.com/brands/dkny.html">
<span>دي كيه ان واي</span>
</a>
</li><li class="level1 nav-2-85">
<a href="https://www.goldenscent.com/brands/dsquared2.html">
<span>ديسكويرد²</span>
</a>
</li><li class="level1 nav-2-86">
<a href="https://www.goldenscent.com/brands/dunhill.html">
<span>دنهل</span>
</a>
</li><li class="level1 nav-2-87">
<a href="https://www.goldenscent.com/brands/dolce-gabbana.html">
<span>دولتشي آند غابانا</span>
</a>
</li><li class="level1 nav-2-88">
<a href="https://www.goldenscent.com/brands/doll-face.html">
<span>دول فيس</span>
</a>
</li><li class="level1 nav-2-89">
<a href="https://www.goldenscent.com/brands/dr-brandt.html">
<span>دكتور براندت</span>
</a>
</li><li class="level1 nav-2-90">
<a href="https://www.goldenscent.com/brands/ducray.html">
<span>دوكراي</span>
</a>
</li><li class="level1 nav-2-91">
<a href="https://www.goldenscent.com/brands/eloise-beauty.html">
<span>إلويز بيوتي</span>
</a>
</li><li class="level1 nav-2-92">
<a href="https://www.goldenscent.com/brands/elie-saab.html">
<span>ايلي صعب</span>
</a>
</li><li class="level1 nav-2-93">
<a href="https://www.goldenscent.com/brands/elizabeth-arden.html">
<span>إليزابيث أردن</span>
</a>
</li><li class="level1 nav-2-94">
<a href="https://www.goldenscent.com/brands/elizabeth-taylor.html">
<span>إليزابيث نايلور</span>
</a>
</li><li class="level1 nav-2-95">
<a href="https://www.goldenscent.com/brands/emanuel-ungaro.html">
<span>إيمانويل أونغارو</span>
</a>
</li><li class="level1 nav-2-96">
<a href="https://www.goldenscent.com/brands/escada.html">
<span>اسكادا</span>
</a>
</li><li class="level1 nav-2-97">
<a href="https://www.goldenscent.com/brands/escentric-molecules.html">
<span>اسنترك موليكيولز</span>
</a>
</li><li class="level1 nav-2-98">
<a href="https://www.goldenscent.com/brands/esprit-de-versailles.html">
<span>إي سبريت دي فيرسالي</span>
</a>
</li><li class="level1 nav-2-99">
<a href="https://www.goldenscent.com/brands/estee-lauder.html">
<span>استي لودر</span>
</a>
</li><li class="level1 nav-2-100">
<a href="https://www.goldenscent.com/brands/etat-libre-d-orange.html">
<span>إتيات ليبري دي أورانج</span>
</a>
</li><li class="level1 nav-2-101">
<a href="https://www.goldenscent.com/brands/eylure.html">
<span>ايلور</span>
</a>
</li><li class="level1 nav-2-102">
<a href="https://www.goldenscent.com/brands/framesi.html">
<span>فراميزي</span>
</a>
</li><li class="level1 nav-2-103">
<a href="https://www.goldenscent.com/brands/farsali.html">
<span>فارسالي</span>
</a>
</li><li class="level1 nav-2-104">
<a href="https://www.goldenscent.com/brands/fendi.html">
<span>فندي</span>
</a>
</li><li class="level1 nav-2-105">
<a href="https://www.goldenscent.com/brands/ferrari.html">
<span>فيراري</span>
</a>
</li><li class="level1 nav-2-106">
<a href="https://www.goldenscent.com/brands/filorga.html">
<span>فيلورجا</span>
</a>
</li><li class="level1 nav-2-107">
<a href="https://www.goldenscent.com/brands/flormar.html">
<span>فلورمار</span>
</a>
</li><li class="level1 nav-2-108">
<a href="https://www.goldenscent.com/brands/foreo.html">
<span>فوريو</span>
</a>
</li><li class="level1 nav-2-109">
<a href="https://www.goldenscent.com/brands/franck-olivier.html">
<span>فرانك أوليفر </span>
</a>
</li><li class="level1 nav-2-110">
<a href="https://www.goldenscent.com/brands/franck-provost.html">
<span>فرانك بروفوست</span>
</a>
</li><li class="level1 nav-2-111">
<a href="https://www.goldenscent.com/brands/fume.html">
<span>فوميه</span>
</a>
</li><li class="level1 nav-2-112">
<a href="https://www.goldenscent.com/brands/georges-rech.html">
<span>جورج ريش</span>
</a>
</li><li class="level1 nav-2-113">
<a href="https://www.goldenscent.com/brands/gianfranco-ferre.html">
<span>جيانفرانكو فيري</span>
</a>
</li><li class="level1 nav-2-114">
<a href="https://www.goldenscent.com/brands/glo-therapeutics.html">
<span>غلو ثيرابيوتكس</span>
</a>
</li><li class="level1 nav-2-115">
<a href="https://www.goldenscent.com/brands/giorgio-armani.html">
<span>جورجيو ارماني</span>
</a>
</li><li class="level1 nav-2-116">
<a href="https://www.goldenscent.com/brands/giorgio-beverly-hills.html">
<span>جورجبو بيفرلي هيلز</span>
</a>
</li><li class="level1 nav-2-117">
<a href="https://www.goldenscent.com/brands/georges-stahl.html">
<span>جورج ستال</span>
</a>
</li><li class="level1 nav-2-118">
<a href="https://www.goldenscent.com/brands/germaine-de-capuccini.html">
<span>جيرمان دي كابوتشيني</span>
</a>
</li><li class="level1 nav-2-119">
<a href="https://www.goldenscent.com/brands/givenchy.html">
<span>جفنشي</span>
</a>
</li><li class="level1 nav-2-120">
<a href="https://www.goldenscent.com/brands/gosh-cosmetics.html">
<span>غوش كوزمتكس</span>
</a>
</li><li class="level1 nav-2-121">
<a href="https://www.goldenscent.com/brands/grace-cole.html">
<span>جريس كول</span>
</a>
</li><li class="level1 nav-2-122">
<a href="https://www.goldenscent.com/brands/gucci.html">
<span>قوتشي</span>
</a>
</li><li class="level1 nav-2-123">
<a href="https://www.goldenscent.com/brands/guess.html">
<span>جس</span>
</a>
</li><li class="level1 nav-2-124">
<a href="https://www.goldenscent.com/brands/guerlain.html">
<span>جيرلان</span>
</a>
</li><li class="level1 nav-2-125">
<a href="https://www.goldenscent.com/brands/guy-laroche.html">
<span>جاي لاروش</span>
</a>
</li><li class="level1 nav-2-126">
<a href="https://www.goldenscent.com/brands/guru.html">
<span>غورو</span>
</a>
</li><li class="level1 nav-2-127">
<a href="https://www.goldenscent.com/brands/halloween.html">
<span>هالوين</span>
</a>
</li><li class="level1 nav-2-128">
<a href="https://www.goldenscent.com/brands/hask.html">
<span>هاسك</span>
</a>
</li><li class="level1 nav-2-129">
<a href="https://www.goldenscent.com/brands/hayari.html">
<span>هياري</span>
</a>
</li><li class="level1 nav-2-130">
<a href="https://www.goldenscent.com/brands/herbal-essentials.html">
<span>هيربل إيسنشالز</span>
</a>
</li><li class="level1 nav-2-131">
<a href="https://www.goldenscent.com/brands/hermes.html">
<span>هيرمس</span>
</a>
</li><li class="level1 nav-2-132">
<a href="https://www.goldenscent.com/brands/hershesons.html">
<span>هيرشيسنز</span>
</a>
</li><li class="level1 nav-2-133">
<a href="https://www.goldenscent.com/brands/houbigant.html">
<span>هوبيجان</span>
</a>
</li><li class="level1 nav-2-134">
<a href="https://www.goldenscent.com/brands/hugo-boss.html">
<span>هيوجو بوس</span>
</a>
</li><li class="level1 nav-2-135">
<a href="https://www.goldenscent.com/brands/image-skin-care.html">
<span>ايميج سكين كير</span>
</a>
</li><li class="level1 nav-2-136">
<a href="https://www.goldenscent.com/brands/invisibobble.html">
<span>إنفيزيبوبل</span>
</a>
</li><li class="level1 nav-2-137">
<a href="https://www.goldenscent.com/brands/i-love.html">
<span>اي لوف</span>
</a>
</li><li class="level1 nav-2-138">
<a href="https://www.goldenscent.com/brands/isdin.html">
<span>اسدن</span>
</a>
</li><li class="level1 nav-2-139">
<a href="https://www.goldenscent.com/brands/isabey.html">
<span>ايزاباي</span>
</a>
</li><li class="level1 nav-2-140">
<a href="https://www.goldenscent.com/brands/isadora.html">
<span>ايزادورا </span>
</a>
</li><li class="level1 nav-2-141">
<a href="https://www.goldenscent.com/brands/issey-miyake.html">
<span>ايسى مياكى</span>
</a>
</li><li class="level1 nav-2-142">
<a href="https://www.goldenscent.com/brands/jacadi.html">
<span>جاكادي</span>
</a>
</li><li class="level1 nav-2-143">
<a href="https://www.goldenscent.com/brands/jaguar.html">
<span>جاكوار</span>
</a>
</li><li class="level1 nav-2-144">
<a href="https://www.goldenscent.com/brands/james-bond.html">
<span>جيمس بوند</span>
</a>
</li><li class="level1 nav-2-145">
<a href="https://www.goldenscent.com/brands/jane-iredale.html">
<span>جين اردل بيور</span>
</a>
</li><li class="level1 nav-2-146">
<a href="https://www.goldenscent.com/brands/jason-wu.html">
<span>جاسون وو</span>
</a>
</li><li class="level1 nav-2-147">
<a href="https://www.goldenscent.com/brands/jean-louis-scherrer.html">
<span>جون - لوي شيرير</span>
</a>
</li><li class="level1 nav-2-148">
<a href="https://www.goldenscent.com/brands/jean-patou.html">
<span>جون باتو</span>
</a>
</li><li class="level1 nav-2-149">
<a href="https://www.goldenscent.com/brands/jennifer-lopez.html">
<span>جينيفر لوبيز</span>
</a>
</li><li class="level1 nav-2-150">
<a href="https://www.goldenscent.com/brands/jessica-simpson.html">
<span>جيسيكا سيمبسون</span>
</a>
</li><li class="level1 nav-2-151">
<a href="https://www.goldenscent.com/brands/j-del-pozo.html">
<span>جي. ديل بوزو</span>
</a>
</li><li class="level1 nav-2-152">
<a href="https://www.goldenscent.com/brands/jf-paris.html">
<span>جي اف باريس</span>
</a>
</li><li class="level1 nav-2-153">
<a href="https://www.goldenscent.com/brands/jimmy-choo.html">
<span>جيمي شو</span>
</a>
</li><li class="level1 nav-2-154">
<a href="https://www.goldenscent.com/brands/joop.html">
<span>جوب</span>
</a>
</li><li class="level1 nav-2-155">
<a href="https://www.goldenscent.com/brands/john-masters-organics.html">
<span>جون ماسترز اورجانيكس</span>
</a>
</li><li class="level1 nav-2-156">
<a href="https://www.goldenscent.com/brands/john-varvatos.html">
<span>جون فارفاتوس</span>
</a>
</li><li class="level1 nav-2-157">
<a href="https://www.goldenscent.com/brands/joico.html">
<span>جويكو</span>
</a>
</li><li class="level1 nav-2-158">
<a href="https://www.goldenscent.com/brands/juicy-couture.html">
<span>جوسي كوتور</span>
</a>
</li><li class="level1 nav-2-159">
<a href="https://www.goldenscent.com/brands/justin-bieber.html">
<span>جاستن بيبير</span>
</a>
</li><li class="level1 nav-2-160">
<a href="https://www.goldenscent.com/brands/kajal-perfumes-paris.html">
<span>كاجال برفيومز باريس</span>
</a>
</li><li class="level1 nav-2-161">
<a href="https://www.goldenscent.com/brands/kaloo.html">
<span>كالو</span>
</a>
</li><li class="level1 nav-2-162">
<a href="https://www.goldenscent.com/brands/karaja.html">
<span>كاراجا</span>
</a>
</li><li class="level1 nav-2-163">
<a href="https://www.goldenscent.com/brands/karl-lagerfeld.html">
<span>كارل لاغرفيلد</span>
</a>
</li><li class="level1 nav-2-164">
<a href="https://www.goldenscent.com/brands/kenneth-cole.html">
<span>كينيث كول</span>
</a>
</li><li class="level1 nav-2-165">
<a href="https://www.goldenscent.com/brands/kenzo.html">
<span>كنزو</span>
</a>
</li><li class="level1 nav-2-166">
<a href="https://www.goldenscent.com/brands/kerastase.html">
<span>كيراستاس</span>
</a>
</li><li class="level1 nav-2-167">
<a href="https://www.goldenscent.com/brands/kholasaat.html">
<span>خلاصات</span>
</a>
</li><li class="level1 nav-2-168">
<a href="https://www.goldenscent.com/brands/kim-kardashian.html">
<span>كيم كارديشيان</span>
</a>
</li><li class="level1 nav-2-169">
<a href="https://www.goldenscent.com/brands/kocostar.html">
<span>كوكو ستار</span>
</a>
</li><li class="level1 nav-2-170">
<a href="https://www.goldenscent.com/brands/korloff.html">
<span>كورلوف</span>
</a>
</li><li class="level1 nav-2-171">
<a href="https://www.goldenscent.com/brands/lacoste.html">
<span>لاكوست</span>
</a>
</li><li class="level1 nav-2-172">
<a href="https://www.goldenscent.com/brands/lady-gaga.html">
<span>ليدي غاغا</span>
</a>
</li><li class="level1 nav-2-173">
<a href="https://www.goldenscent.com/brands/lalique.html">
<span>لاليك </span>
</a>
</li><li class="level1 nav-2-174">
<a href="https://www.goldenscent.com/brands/lancome.html">
<span>لانكوم</span>
</a>
</li><li class="level1 nav-2-175">
<a href="https://www.goldenscent.com/brands/lanvin.html">
<span>لانفين</span>
</a>
</li><li class="level1 nav-2-176">
<a href="https://www.goldenscent.com/brands/laura-biagiotti.html">
<span>لورا بياجيوتي</span>
</a>
</li><li class="level1 nav-2-177">
<a href="https://www.goldenscent.com/brands/l-arc.html">
<span>لارك</span>
</a>
</li><li class="level1 nav-2-178">
<a href="https://www.goldenscent.com/brands/l-artisan-parfumeur.html">
<span>لارتيزان بيرفيومر</span>
</a>
</li><li class="level1 nav-2-179">
<a href="https://www.goldenscent.com/brands/les-parfums-de-rosine.html">
<span>لي بارفيوم دو روزين</span>
</a>
</li><li class="level1 nav-2-180">
<a href="https://www.goldenscent.com/brands/les-senteurs-gourmandes.html">
<span>ليه سانتور جورموندس</span>
</a>
</li><li class="level1 nav-2-181">
<a href="https://www.goldenscent.com/brands/lipstick-queen.html">
<span>لب ستيك كوين</span>
</a>
</li><li class="level1 nav-2-182">
<a href="https://www.goldenscent.com/brands/lime-crime.html">
<span>لايم كرايم</span>
</a>
</li><li class="level1 nav-2-183">
<a href="https://www.goldenscent.com/brands/living-proof.html">
<span>ليفينج بروف</span>
</a>
</li><li class="level1 nav-2-184">
<a href="https://www.goldenscent.com/brands/loewe.html">
<span>لويفي</span>
</a>
</li><li class="level1 nav-2-185">
<a href="https://www.goldenscent.com/brands/lolita-lempicka.html">
<span>لوليتا لمبيكا</span>
</a>
</li><li class="level1 nav-2-186">
<a href="https://www.goldenscent.com/brands/l-oreal-paris.html">
<span>لوريال باريس</span>
</a>
</li><li class="level1 nav-2-187">
<a href="https://www.goldenscent.com/brands/l-oreal.html">
<span>لوريال بروفيشينال</span>
</a>
</li><li class="level1 nav-2-188">
<a href="https://www.goldenscent.com/brands/lord-berry.html">
<span>لورد آند بيري</span>
</a>
</li><li class="level1 nav-2-189">
<a href="https://www.goldenscent.com/brands/lorenzo-villoresi.html">
<span>لورينزو فيلوريسي</span>
</a>
</li><li class="level1 nav-2-190">
<a href="https://www.goldenscent.com/brands/loua.html">
<span>لوا</span>
</a>
</li><li class="level1 nav-2-191">
<a href="https://www.goldenscent.com/brands/lottie.html">
<span>لوتي</span>
</a>
</li><li class="level1 nav-2-192">
<a href="https://www.goldenscent.com/brands/liu-jo.html">
<span>ليو جو</span>
</a>
</li><li class="level1 nav-2-193">
<a href="https://www.goldenscent.com/brands/la-martina.html">
<span>لا مارتينا</span>
</a>
</li><li class="level1 nav-2-194">
<a href="https://www.goldenscent.com/brands/la-perla.html">
<span>لا بيرلا</span>
</a>
</li><li class="level1 nav-2-195">
<a href="https://www.goldenscent.com/brands/malin-goetz.html">
<span>مالين آند جويتز </span>
</a>
</li><li class="level1 nav-2-196">
<a href="https://www.goldenscent.com/brands/makeup-revolution.html">
<span>ميكب رفليوشن</span>
</a>
</li><li class="level1 nav-2-197">
<a href="https://www.goldenscent.com/brands/max-factor.html">
<span>ماكس فاكتور</span>
</a>
</li><li class="level1 nav-2-198">
<a href="https://www.goldenscent.com/brands/moxi-loves.html">
<span>موكسي لوفز</span>
</a>
</li><li class="level1 nav-2-199">
<a href="https://www.goldenscent.com/brands/mama-mio.html">
<span>ماما ميو</span>
</a>
</li><li class="level1 nav-2-200">
<a href="https://www.goldenscent.com/brands/mandarina-duck.html">
<span>ماندارينا دَك</span>
</a>
</li><li class="level1 nav-2-201">
<a href="https://www.goldenscent.com/brands/mancera.html">
<span>مانسيرا</span>
</a>
</li><li class="level1 nav-2-202">
<a href="https://www.goldenscent.com/brands/marbert.html">
<span>ماربرت</span>
</a>
</li><li class="level1 nav-2-203">
<a href="https://www.goldenscent.com/brands/marc-jacobs.html">
<span>مارك جاكوبس</span>
</a>
</li><li class="level1 nav-2-204">
<a href="https://www.goldenscent.com/brands/mariah-carey.html">
<span>ماريا كاري</span>
</a>
</li><li class="level1 nav-2-205">
<a href="https://www.goldenscent.com/brands/marina-de-bourbon.html">
<span>مارينا دي بوربون</span>
</a>
</li><li class="level1 nav-2-206">
<a href="https://www.goldenscent.com/brands/marly.html">
<span>مارلي </span>
</a>
</li><li class="level1 nav-2-207">
<a href="https://www.goldenscent.com/brands/mauboussin.html">
<span>موبوسين</span>
</a>
</li><li class="level1 nav-2-208">
<a href="https://www.goldenscent.com/brands/maybelline.html">
<span>مايبيلين</span>
</a>
</li><li class="level1 nav-2-209">
<a href="https://www.goldenscent.com/brands/md-formulations.html">
<span>ام دي فورميوليشنز</span>
</a>
</li><li class="level1 nav-2-210">
<a href="https://www.goldenscent.com/brands/memo.html">
<span>ميمو</span>
</a>
</li><li class="level1 nav-2-211">
<a href="https://www.goldenscent.com/brands/mesauda.html">
<span>ميساودا </span>
</a>
</li><li class="level1 nav-2-212">
<a href="https://www.goldenscent.com/brands/mercedes-benz.html">
<span>مرسيديس - بنز</span>
</a>
</li><li class="level1 nav-2-213">
<a href="https://www.goldenscent.com/brands/micallef-studio.html">
<span>ميكاليف ستوديو</span>
</a>
</li><li class="level1 nav-2-214">
<a href="https://www.goldenscent.com/brands/michael-kors.html">
<span>مايكل كورس</span>
</a>
</li><li class="level1 nav-2-215">
<a href="https://www.goldenscent.com/brands/milkshake.html">
<span>ميلك شيك</span>
</a>
</li><li class="level1 nav-2-216">
<a href="https://www.goldenscent.com/brands/min-new-york.html">
<span>مِن نيويورك</span>
</a>
</li><li class="level1 nav-2-217">
<a href="https://www.goldenscent.com/brands/misslyn.html">
<span>ميسلين</span>
</a>
</li><li class="level1 nav-2-218">
<a href="https://www.goldenscent.com/brands/missoni.html">
<span>ميسوني</span>
</a>
</li><li class="level1 nav-2-219">
<a href="https://www.goldenscent.com/brands/miu-miu.html">
<span>ميو ميو</span>
</a>
</li><li class="level1 nav-2-220">
<a href="https://www.goldenscent.com/brands/mio.html">
<span>ميو</span>
</a>
</li><li class="level1 nav-2-221">
<a href="https://www.goldenscent.com/brands/montale.html">
<span>مونتال</span>
</a>
</li><li class="level1 nav-2-222">
<a href="https://www.goldenscent.com/brands/mont-blanc.html">
<span>مونت بلانك</span>
</a>
</li><li class="level1 nav-2-223">
<a href="https://www.goldenscent.com/brands/montana.html">
<span>مونتانا</span>
</a>
</li><li class="level1 nav-2-224">
<a href="https://www.goldenscent.com/brands/mor.html">
<span>مور</span>
</a>
</li><li class="level1 nav-2-225">
<a href="https://www.goldenscent.com/brands/morphe.html">
<span>مورفي</span>
</a>
</li><li class="level1 nav-2-226">
<a href="https://www.goldenscent.com/brands/moschino.html">
<span>موسكينو</span>
</a>
</li><li class="level1 nav-2-227">
<a href="https://www.goldenscent.com/brands/n-4711.html">
<span>نمبر 4711</span>
</a>
</li><li class="level1 nav-2-228">
<a href="https://www.goldenscent.com/brands/nanogen.html">
<span>نانوجين</span>
</a>
</li><li class="level1 nav-2-229">
<a href="https://www.goldenscent.com/brands/narciso-rodriguez.html">
<span>نارسيسو رودريغز</span>
</a>
</li><li class="level1 nav-2-230">
<a href="https://www.goldenscent.com/brands/nascita.html">
<span>ناشيتا</span>
</a>
</li><li class="level1 nav-2-231">
<a href="https://www.goldenscent.com/brands/nasomatto.html">
<span>ناسوماتو </span>
</a>
</li><li class="level1 nav-2-232">
<a href="https://www.goldenscent.com/brands/neela-vermeire.html">
<span>نيلا فيرمير</span>
</a>
</li><li class="level1 nav-2-233">
<a href="https://www.goldenscent.com/brands/new-well.html">
<span>نيو ويل</span>
</a>
</li><li class="level1 nav-2-234">
<a href="https://www.goldenscent.com/brands/nicolai.html">
<span>نيكولاي</span>
</a>
</li><li class="level1 nav-2-235">
<a href="https://www.goldenscent.com/brands/nikos.html">
<span>نيكوس</span>
</a>
</li><li class="level1 nav-2-236">
<a href="https://www.goldenscent.com/brands/nina-ricci.html">
<span>نينا ريتشي</span>
</a>
</li><li class="level1 nav-2-237">
<a href="https://www.goldenscent.com/brands/nisim.html">
<span>نيسيم </span>
</a>
</li><li class="level1 nav-2-238">
<a href="https://www.goldenscent.com/brands/note.html">
<span>نوت</span>
</a>
</li><li class="level1 nav-2-239">
<a href="https://www.goldenscent.com/brands/nuface.html">
<span>نوفيس</span>
</a>
</li><li class="level1 nav-2-240">
<a href="https://www.goldenscent.com/brands/nyx.html">
<span>نيكس</span>
</a>
</li><li class="level1 nav-2-241">
<a href="https://www.goldenscent.com/brands/opi.html">
<span>او بي آي</span>
</a>
</li><li class="level1 nav-2-242">
<a href="https://www.goldenscent.com/brands/one-direction.html">
<span>ون دايركشن</span>
</a>
</li><li class="level1 nav-2-243">
<a href="https://www.goldenscent.com/brands/oscar-de-la-renta.html">
<span>أوسكار دي لا رينتا</span>
</a>
</li><li class="level1 nav-2-244">
<a href="https://www.goldenscent.com/brands/ousha.html">
<span>أوشا</span>
</a>
</li><li class="level1 nav-2-245">
<a href="https://www.goldenscent.com/brands/paco-rabanne.html">
<span>باكو رابان</span>
</a>
</li><li class="level1 nav-2-246">
<a href="https://www.goldenscent.com/brands/palladio.html">
<span>بالاديو</span>
</a>
</li><li class="level1 nav-2-247">
<a href="https://www.goldenscent.com/brands/paloma-picasso.html">
<span>بالوما بيكاسو</span>
</a>
</li><li class="level1 nav-2-248">
<a href="https://www.goldenscent.com/brands/panouge.html">
<span>بانوج</span>
</a>
</li><li class="level1 nav-2-249">
<a href="https://www.goldenscent.com/brands/parfums-gres.html">
<span>بارفيومز جريس</span>
</a>
</li><li class="level1 nav-2-250">
<a href="https://www.goldenscent.com/brands/paris-hilton.html">
<span>باريس هيلتون</span>
</a>
</li><li class="level1 nav-2-251">
<a href="https://www.goldenscent.com/brands/penhaligon-s.html">
<span>بنهاليغونز</span>
</a>
</li><li class="level1 nav-2-252">
<a href="https://www.goldenscent.com/brands/perris.html">
<span>بيريس</span>
</a>
</li><li class="level1 nav-2-253">
<a href="https://www.goldenscent.com/brands/perry-ellis.html">
<span>بيري إليس</span>
</a>
</li><li class="level1 nav-2-254">
<a href="https://www.goldenscent.com/brands/peter-thomas-roth.html">
<span>بيتر توماس روث</span>
</a>
</li><li class="level1 nav-2-255">
<a href="https://www.goldenscent.com/brands/pevonia.html">
<span>بيفونيا</span>
</a>
</li><li class="level1 nav-2-256">
<a href="https://www.goldenscent.com/catalog/category/view/s/philip-b/id/1175/">
<span>فيليب بي</span>
</a>
</li><li class="level1 nav-2-257">
<a href="https://www.goldenscent.com/brands/physicians-formula.html">
<span>فيزيشنز فورميلا</span>
</a>
</li><li class="level1 nav-2-258">
<a href="https://www.goldenscent.com/brands/pink-sugar.html">
<span>بينك شوقر</span>
</a>
</li><li class="level1 nav-2-259">
<a href="https://www.goldenscent.com/brands/pinky-goat.html">
<span>بنكي جوت</span>
</a>
</li><li class="level1 nav-2-260">
<a href="https://www.goldenscent.com/brands/police.html">
<span>بوليس</span>
</a>
</li><li class="level1 nav-2-261">
<a href="https://www.goldenscent.com/brands/prada.html">
<span>برادا</span>
</a>
</li><li class="level1 nav-2-262">
<a href="https://www.goldenscent.com/brands/prestige.html">
<span>برستيج</span>
</a>
</li><li class="level1 nav-2-263">
<a href="https://www.goldenscent.com/brands/rahua.html">
<span>راوا</span>
</a>
</li><li class="level1 nav-2-264">
<a href="https://www.goldenscent.com/brands/ralph-lauren.html">
<span>رالف لورين</span>
</a>
</li><li class="level1 nav-2-265">
<a href="https://www.goldenscent.com/brands/ramon-bejar.html">
<span>رامون بيجار</span>
</a>
</li><li class="level1 nav-2-266">
<a href="https://www.goldenscent.com/brands/real-techniques.html">
<span>ريل تكنيكس</span>
</a>
</li><li class="level1 nav-2-267">
<a href="https://www.goldenscent.com/brands/rene-furterer.html">
<span>رينيه فورتيرير</span>
</a>
</li><li class="level1 nav-2-268">
<a href="https://www.goldenscent.com/brands/replay.html">
<span>ريبلاي</span>
</a>
</li><li class="level1 nav-2-269">
<a href="https://www.goldenscent.com/brands/revitalash.html">
<span>ريفايتالاش</span>
</a>
</li><li class="level1 nav-2-270">
<a href="https://www.goldenscent.com/brands/revlon.html">
<span>ريفلون</span>
</a>
</li><li class="level1 nav-2-271">
<a href="https://www.goldenscent.com/brands/remescar.html">
<span>ريميسكار</span>
</a>
</li><li class="level1 nav-2-272">
<a href="https://www.goldenscent.com/brands/reminiscence.html">
<span>ريمينسينس</span>
</a>
</li><li class="level1 nav-2-273">
<a href="https://www.goldenscent.com/brands/rihanna.html">
<span>ريهانا</span>
</a>
</li><li class="level1 nav-2-274">
<a href="https://www.goldenscent.com/brands/rimmel.html">
<span>ريميل</span>
</a>
</li><li class="level1 nav-2-275">
<a href="https://www.goldenscent.com/brands/robert-piguet.html">
<span>روبرت بجويه</span>
</a>
</li><li class="level1 nav-2-276">
<a href="https://www.goldenscent.com/brands/roberto-cavalli.html">
<span>روبرتو كافالي</span>
</a>
</li><li class="level1 nav-2-277">
<a href="https://www.goldenscent.com/brands/roberto-verino.html">
<span>روبرتو فيرينو</span>
</a>
</li><li class="level1 nav-2-278">
<a href="https://www.goldenscent.com/brands/rochas.html">
<span>روشاس</span>
</a>
</li><li class="level1 nav-2-279">
<a href="https://www.goldenscent.com/brands/rodial.html">
<span>روديال</span>
</a>
</li><li class="level1 nav-2-280">
<a href="https://www.goldenscent.com/brands/rocco-barocco.html">
<span>روكو باركو</span>
</a>
</li><li class="level1 nav-2-281">
<a href="https://www.goldenscent.com/brands/s-t-dupont.html">
<span>اس تي ديبونت</span>
</a>
</li><li class="level1 nav-2-282">
<a href="https://www.goldenscent.com/brands/sachajuan.html">
<span>ساشاوان</span>
</a>
</li><li class="level1 nav-2-283">
<a href="https://www.goldenscent.com/brands/salvatore-ferragamo.html">
<span>سلفاتوري فيراغامو</span>
</a>
</li><li class="level1 nav-2-284">
<a href="https://www.goldenscent.com/brands/sebastian.html">
<span>سيباستيان</span>
</a>
</li><li class="level1 nav-2-285">
<a href="https://www.goldenscent.com/brands/sexy-hair.html">
<span>سكسي هير</span>
</a>
</li><li class="level1 nav-2-286">
<a href="https://www.goldenscent.com/brands/selena-gomez.html">
<span>سلينا غوميز</span>
</a>
</li><li class="level1 nav-2-287">
<a href="https://www.goldenscent.com/brands/scent-story.html">
<span>سنت ستوري</span>
</a>
</li><li class="level1 nav-2-288">
<a href="https://www.goldenscent.com/brands/shiseido.html">
<span>شيسيدو</span>
</a>
</li><li class="level1 nav-2-289">
<a href="https://www.goldenscent.com/brands/show-beauty.html">
<span>شو بيوتي</span>
</a>
</li><li class="level1 nav-2-290">
<a href="https://www.goldenscent.com/brands/sigma.html">
<span>سيجما</span>
</a>
</li><li class="level1 nav-2-291">
<a href="https://www.goldenscent.com/brands/signature.html">
<span>سيغنيتشر</span>
</a>
</li><li class="level1 nav-2-292">
<a href="https://www.goldenscent.com/brands/sleek.html">
<span>سليك</span>
</a>
</li><li class="level1 nav-2-293">
<a href="https://www.goldenscent.com/brands/sisley.html">
<span>سيسلي</span>
</a>
</li><li class="level1 nav-2-294">
<a href="https://www.goldenscent.com/brands/smith-cult.html">
<span>سميث آند كلت</span>
</a>
</li><li class="level1 nav-2-295">
<a href="https://www.goldenscent.com/brands/so-eco.html">
<span>سو ايكو</span>
</a>
</li><li class="level1 nav-2-296">
<a href="https://www.goldenscent.com/brands/sofia-vergara.html">
<span>صوفيا فيرغارا</span>
</a>
</li><li class="level1 nav-2-297">
<a href="https://www.goldenscent.com/brands/spectrum.html">
<span>سبكتروم </span>
</a>
</li><li class="level1 nav-2-298">
<a href="https://www.goldenscent.com/brands/spongelle.html">
<span>سبونجيل</span>
</a>
</li><li class="level1 nav-2-299">
<a href="https://www.goldenscent.com/brands/sospiro.html">
<span>سوسبيرو</span>
</a>
</li><li class="level1 nav-2-300">
<a href="https://www.goldenscent.com/brands/starck.html">
<span>ستارك</span>
</a>
</li><li class="level1 nav-2-301">
<a href="https://www.goldenscent.com/brands/stella-mccartney.html">
<span>ستيلا ماكارتني</span>
</a>
</li><li class="level1 nav-2-302">
<a href="https://www.goldenscent.com/brands/stephane-humbert.html">
<span>ستيفان همبرت</span>
</a>
</li><li class="level1 nav-2-303">
<a href="https://www.goldenscent.com/brands/sumita.html">
<span>سوميتا</span>
</a>
</li><li class="level1 nav-2-304">
<a href="https://www.goldenscent.com/brands/tabac.html">
<span>تباك</span>
</a>
</li><li class="level1 nav-2-305">
<a href="https://www.goldenscent.com/brands/tann-rokka.html">
<span>تان روكا</span>
</a>
</li><li class="level1 nav-2-306">
<a href="https://www.goldenscent.com/brands/tangle-teezer.html">
<span>تانجل تيزر</span>
</a>
</li><li class="level1 nav-2-307">
<a href="https://www.goldenscent.com/brands/tauer-perfumes.html">
<span>توار بيرفيومز</span>
</a>
</li><li class="level1 nav-2-308">
<a href="https://www.goldenscent.com/brands/teaology.html">
<span>تيولوجي</span>
</a>
</li><li class="level1 nav-2-309">
<a href="https://www.goldenscent.com/brands/the-balm.html">
<span>ذا بالم</span>
</a>
</li><li class="level1 nav-2-310">
<a href="https://www.goldenscent.com/brands/the-beautiful-mind-series.html">
<span>ذا بيوتيفول مايند سيريز</span>
</a>
</li><li class="level1 nav-2-311">
<a href="https://www.goldenscent.com/brands/the-camel-soap-factory.html">
<span>ذا كاميل سوب فاكتوري</span>
</a>
</li><li class="level1 nav-2-312">
<a href="https://www.goldenscent.com/brands/the-woods-collection.html">
<span>ذا وودز كوليكشن</span>
</a>
</li><li class="level1 nav-2-313">
<a href="https://www.goldenscent.com/brands/thierry-mugler.html">
<span>تيري موغلر </span>
</a>
</li><li class="level1 nav-2-314">
<a href="https://www.goldenscent.com/brands/tiffany-co.html">
<span>تيفاني آند كو</span>
</a>
</li><li class="level1 nav-2-315">
<a href="https://www.goldenscent.com/brands/tria.html">
<span>تريا</span>
</a>
</li><li class="level1 nav-2-316">
<a href="https://www.goldenscent.com/brands/trul-young.html">
<span>ترولي يونغ</span>
</a>
</li><li class="level1 nav-2-317">
<a href="https://www.goldenscent.com/brands/trussardi.html">
<span>تروساردي</span>
</a>
</li><li class="level1 nav-2-318">
<a href="https://www.goldenscent.com/brands/tom-ford.html">
<span>توم فورد</span>
</a>
</li><li class="level1 nav-2-319">
<a href="https://www.goldenscent.com/brands/tommy-bahama.html">
<span>تومي باهاما</span>
</a>
</li><li class="level1 nav-2-320">
<a href="https://www.goldenscent.com/brands/tommy-hiifiger.html">
<span>تومي هيلفجر</span>
</a>
</li><li class="level1 nav-2-321">
<a href="https://www.goldenscent.com/brands/tory-burch.html">
<span>توري برش</span>
</a>
</li><li class="level1 nav-2-322">
<a href="https://www.goldenscent.com/brands/tous.html">
<span>توس</span>
</a>
</li><li class="level1 nav-2-323">
<a href="https://www.goldenscent.com/brands/usher.html">
<span>اشر</span>
</a>
</li><li class="level1 nav-2-324">
<a href="https://www.goldenscent.com/brands/van-cleef-arpels.html">
<span>فان كليف اند اربيلس</span>
</a>
</li><li class="level1 nav-2-325">
<a href="https://www.goldenscent.com/brands/valentino.html">
<span>فالنتينو</span>
</a>
</li><li class="level1 nav-2-326">
<a href="https://www.goldenscent.com/brands/vera-wang.html">
<span>فيرا وانغ</span>
</a>
</li><li class="level1 nav-2-327">
<a href="https://www.goldenscent.com/brands/versace.html">
<span>فرزاتشي</span>
</a>
</li><li class="level1 nav-2-328">
<a href="https://www.goldenscent.com/brands/victoria-s-secret.html">
<span>فيكتوريا سيكريت</span>
</a>
</li><li class="level1 nav-2-329">
<a href="https://www.goldenscent.com/brands/wet-n-wild.html">
<span>ويت ان وايلد</span>
</a>
</li><li class="level1 nav-2-330">
<a href="https://www.goldenscent.com/brands/when.html">
<span>وين</span>
</a>
</li><li class="level1 nav-2-331">
<a href="https://www.goldenscent.com/brands/v76-by-vaughn.html">
<span>في 76 باي فوجن</span>
</a>
</li><li class="level1 nav-2-332">
<a href="https://www.goldenscent.com/brands/viktor-rolf.html">
<span>فيكتور اند رولف</span>
</a>
</li><li class="level1 nav-2-333">
<a href="https://www.goldenscent.com/brands/vince-camuto.html">
<span>فينس كوموتو</span>
</a>
</li><li class="level1 nav-2-334">
<a href="https://www.goldenscent.com/brands/vintage.html">
<span>فنتج</span>
</a>
</li><li class="level1 nav-2-335">
<a href="https://www.goldenscent.com/brands/xcluzive.html">
<span>اكسكلوزيف</span>
</a>
</li><li class="level1 nav-2-336">
<a href="https://www.goldenscent.com/brands/xerjoff.html">
<span>زيرجوف</span>
</a>
</li><li class="level1 nav-2-337">
<a href="https://www.goldenscent.com/brands/yves-saint-laurant.html">
<span>اف سان لوران</span>
</a>
</li><li class="level1 nav-2-338">
<a href="https://www.goldenscent.com/brands/zarko.html">
<span>زاركو</span>
</a>
</li><li class="level1 nav-2-339 last">
<a href="https://www.goldenscent.com/brands/zoella.html">
<span>زويلا</span>
</a>
</li>
</ul></li><li class="level0 nav-3 level-top parent">
<a href="https://www.goldenscent.com/fragrances.html" class="level-top">
<span>العطور</span>
</a>
<ul class="level0"><li class="level1 nav-3-1 first parent">
<a href="https://www.goldenscent.com/fragrances/women.html">
<span>عطور نسائية</span>
</a>
<ul class="level1"><li class="level2 nav-3-1-1 first">
<a href="https://www.goldenscent.com/fragrances/women/eau-de-parfum.html">
<span>أو دو برفيوم</span>
</a>
</li><li class="level2 nav-3-1-2">
<a href="https://www.goldenscent.com/fragrances/women/eau-de-toilette.html">
<span>أو دو تواليت</span>
</a>
</li><li class="level2 nav-3-1-3">
<a href="https://www.goldenscent.com/fragrances/women/bath-body.html">
<span>منتجات الإستحمام والعناية بالجسم</span>
</a>
</li><li class="level2 nav-3-1-4">
<a href="https://www.goldenscent.com/fragrances/women/oud-parfum.html">
<span>العود</span>
</a>
</li><li class="level2 nav-3-1-5 last">
<a href="https://www.goldenscent.com/fragrances/women/gift-sets.html">
<span>مجموعات الهدايا</span>
</a>
</li>
</ul></li><li class="level1 nav-3-2 parent">
<a href="https://www.goldenscent.com/fragrances/men.html">
<span>عطور رجالية</span>
</a>
<ul class="level1"><li class="level2 nav-3-2-6 first">
<a href="https://www.goldenscent.com/fragrances/men/eau-de-parfum.html">
<span>أو دو برفيوم</span>
</a>
</li><li class="level2 nav-3-2-7">
<a href="https://www.goldenscent.com/fragrances/men/eau-de-toilette.html">
<span>أو دو تواليت</span>
</a>
</li><li class="level2 nav-3-2-8">
<a href="https://www.goldenscent.com/fragrances/men/eau-de-cologne.html">
<span>أو دو كولون</span>
</a>
</li><li class="level2 nav-3-2-9">
<a href="https://www.goldenscent.com/fragrances/men/oud-parfum.html">
<span>العود</span>
</a>
</li><li class="level2 nav-3-2-10">
<a href="https://www.goldenscent.com/fragrances/men/bath-body.html">
<span>منتجات الإستحمام والعناية بالجسم</span>
</a>
</li><li class="level2 nav-3-2-11 last">
<a href="https://www.goldenscent.com/fragrances/men/gift-sets.html">
<span>مجموعات الهدايا</span>
</a>
</li>
</ul></li><li class="level1 nav-3-3">
<a href="https://www.goldenscent.com/fragrances/body-sprays-mists.html">
<span>عطور للجسم</span>
</a>
</li><li class="level1 nav-3-4 parent">
<a href="https://www.goldenscent.com/fragrances/oud.html">
<span>عطور العود</span>
</a>
<ul class="level1"><li class="level2 nav-3-4-12 first">
<a href="https://www.goldenscent.com/fragrances/oud/men-oud-perfume.html">
<span>عطور العود  للرجال</span>
</a>
</li><li class="level2 nav-3-4-13">
<a href="https://www.goldenscent.com/fragrances/oud/women-oud-perfume.html">
<span>عطور العود للنساء</span>
</a>
</li><li class="level2 nav-3-4-14 last">
<a href="https://www.goldenscent.com/fragrances/oud/unisex-oud-perfum.html">
<span>عطور العود للجنسين</span>
</a>
</li>
</ul></li><li class="level1 nav-3-5">
<a href="https://www.goldenscent.com/fragrances/scented-candles.html">
<span>شموع معطرة</span>
</a>
</li><li class="level1 nav-3-6">
<a href="https://www.goldenscent.com/fragrances/kids.html">
<span>للأطفال</span>
</a>
</li><li class="level1 nav-3-7 last parent">
<a href="https://www.goldenscent.com/fragrances/top-10-brands.html">
<span>افضل 10 ماركات</span>
</a>
<ul class="level1"><li class="level2 nav-3-7-15 first">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/calvin-klein-top-10.html">
<span>كالفن كلاين</span>
</a>
</li><li class="level2 nav-3-7-16">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/gucci-top-10.html">
<span>قوتشي</span>
</a>
</li><li class="level2 nav-3-7-17">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/versace-top-10.html">
<span>فيرزاتشي</span>
</a>
</li><li class="level2 nav-3-7-18">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/jaguar-top-10.html">
<span>جاكوار</span>
</a>
</li><li class="level2 nav-3-7-19">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/mancera-top-10.html">
<span>مانسيرا</span>
</a>
</li><li class="level2 nav-3-7-20">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/lacoste-top-10.html">
<span>لاكوست</span>
</a>
</li><li class="level2 nav-3-7-21">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/roberto-cavalli-top-10.html">
<span>روبيرتو كافالي</span>
</a>
</li><li class="level2 nav-3-7-22">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/dior-top-10.html">
<span>ديور</span>
</a>
</li><li class="level2 nav-3-7-23">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/narciso-rodriguez-top-10.html">
<span>نارسيسو رودريغز</span>
</a>
</li><li class="level2 nav-3-7-24 last">
<a href="https://www.goldenscent.com/fragrances/top-10-brands/carolina-herrera-top-10.html">
<span>كارولينا هيريرا</span>
</a>
</li>
</ul></li>
</ul></li><li class="level0 nav-4 level-top parent">
<a href="https://www.goldenscent.com/makeup.html" class="level-top">
<span>المكياج</span>
</a>
<ul class="level0"><li class="level1 nav-4-1 first parent">
<a href="https://www.goldenscent.com/makeup/lips.html">
<span>الشفاه</span>
</a>
<ul class="level1"><li class="level2 nav-4-1-1 first">
<a href="https://www.goldenscent.com/makeup/lips/lipstick.html">
<span>أرواج الشفاه</span>
</a>
</li><li class="level2 nav-4-1-2">
<a href="https://www.goldenscent.com/makeup/lips/lip-gloss.html">
<span>ملمّع الشفاه</span>
</a>
</li><li class="level2 nav-4-1-3">
<a href="https://www.goldenscent.com/makeup/lips/lip-balm.html">
<span>مرطّب للشفاه</span>
</a>
</li><li class="level2 nav-4-1-4">
<a href="https://www.goldenscent.com/makeup/lips/lip-liner.html">
<span>محدد الشفاه</span>
</a>
</li><li class="level2 nav-4-1-5">
<a href="https://www.goldenscent.com/makeup/lips/treatments.html">
<span>معالج للشفاه</span>
</a>
</li><li class="level2 nav-4-1-6">
<a href="https://www.goldenscent.com/makeup/lips/palettes.html">
<span>باليتات</span>
</a>
</li><li class="level2 nav-4-1-7 last">
<a href="https://www.goldenscent.com/makeup/lips/base.html">
<span>اساس للشفاه</span>
</a>
</li>
</ul></li><li class="level1 nav-4-2 parent">
<a href="https://www.goldenscent.com/makeup/eye.html">
<span>العيون</span>
</a>
<ul class="level1"><li class="level2 nav-4-2-8 first">
<a href="https://www.goldenscent.com/makeup/eye/pencils.html">
<span>أقلام كحل</span>
</a>
</li><li class="level2 nav-4-2-9">
<a href="https://www.goldenscent.com/makeup/eye/mascara.html">
<span>ماسكارا</span>
</a>
</li><li class="level2 nav-4-2-10">
<a href="https://www.goldenscent.com/makeup/eye/eyeliner.html">
<span>محدد العيون</span>
</a>
</li><li class="level2 nav-4-2-11">
<a href="https://www.goldenscent.com/makeup/eye/eyeshadow.html">
<span>ظلال العيون</span>
</a>
</li><li class="level2 nav-4-2-12">
<a href="https://www.goldenscent.com/makeup/eye/eyebrow.html">
<span>الحواجب</span>
</a>
</li><li class="level2 nav-4-2-13">
<a href="https://www.goldenscent.com/makeup/eye/eye-lashes.html">
<span>رموش</span>
</a>
</li><li class="level2 nav-4-2-14">
<a href="https://www.goldenscent.com/makeup/eye/palettes.html">
<span>باليتات</span>
</a>
</li><li class="level2 nav-4-2-15">
<a href="https://www.goldenscent.com/makeup/eye/treatments.html">
<span>معالج للعيون</span>
</a>
</li><li class="level2 nav-4-2-16">
<a href="https://www.goldenscent.com/makeup/eye/tools.html">
<span>أدوات مكياج العيون</span>
</a>
</li><li class="level2 nav-4-2-17">
<a href="https://www.goldenscent.com/makeup/eye/makeup-remover.html">
<span>مزيل مكياج</span>
</a>
</li><li class="level2 nav-4-2-18">
<a href="https://www.goldenscent.com/makeup/eye/base.html">
<span> برايمر للعيون</span>
</a>
</li><li class="level2 nav-4-2-19 last">
<a href="https://www.goldenscent.com/makeup/eye/lenses.html">
<span>عدسات لاصقة</span>
</a>
</li>
</ul></li><li class="level1 nav-4-3 parent">
<a href="https://www.goldenscent.com/makeup/face.html">
<span>الوجه</span>
</a>
<ul class="level1"><li class="level2 nav-4-3-20 first">
<a href="https://www.goldenscent.com/makeup/face/primer.html">
<span>البرايمر</span>
</a>
</li><li class="level2 nav-4-3-21">
<a href="https://www.goldenscent.com/makeup/face/concealer.html">
<span>مصحح العيوب</span>
</a>
</li><li class="level2 nav-4-3-22">
<a href="https://www.goldenscent.com/makeup/face/foundation.html">
<span>كريم الأساس</span>
</a>
</li><li class="level2 nav-4-3-23">
<a href="https://www.goldenscent.com/makeup/face/powders.html">
<span>البودرة</span>
</a>
</li><li class="level2 nav-4-3-24">
<a href="https://www.goldenscent.com/makeup/face/bb-cc-creams.html">
<span>بي بي كريم و سي سي كريم</span>
</a>
</li><li class="level2 nav-4-3-25">
<a href="https://www.goldenscent.com/makeup/face/blush.html">
<span>أحمر خدود</span>
</a>
</li><li class="level2 nav-4-3-26">
<a href="https://www.goldenscent.com/makeup/face/highlighters.html">
<span>هايلايتر</span>
</a>
</li><li class="level2 nav-4-3-27">
<a href="https://www.goldenscent.com/makeup/face/bronzers.html">
<span>البرونزر</span>
</a>
</li><li class="level2 nav-4-3-28">
<a href="https://www.goldenscent.com/makeup/face/makeup-remover.html">
<span>مزيل المكياج</span>
</a>
</li><li class="level2 nav-4-3-29">
<a href="https://www.goldenscent.com/makeup/face/setting-sprays.html">
<span>بخاخ تثبيت</span>
</a>
</li><li class="level2 nav-4-3-30 last">
<a href="https://www.goldenscent.com/makeup/face/contour.html">
<span>كونتور</span>
</a>
</li>
</ul></li><li class="level1 nav-4-4 parent">
<a href="https://www.goldenscent.com/makeup/palettes-sets.html">
<span>باليتات</span>
</a>
<ul class="level1"><li class="level2 nav-4-4-31 first">
<a href="https://www.goldenscent.com/makeup/palettes-sets/contour-palettes-sets.html">
<span>باليتات للكونتور</span>
</a>
</li><li class="level2 nav-4-4-32 last">
<a href="https://www.goldenscent.com/makeup/palettes-sets/makeup-palettes-sets.html">
<span>باليتات ومجموعات مكياج</span>
</a>
</li>
</ul></li><li class="level1 nav-4-5">
<a href="https://www.goldenscent.com/makeup/makeup-tools.html">
<span>فرش المكياج</span>
</a>
</li><li class="level1 nav-4-6 last parent">
<a href="https://www.goldenscent.com/makeup/top-10-brands.html">
<span>افضل 10 ماركات</span>
</a>
<ul class="level1"><li class="level2 nav-4-6-33 first">
<a href="https://www.goldenscent.com/makeup/top-10-brands/flormar.html">
<span>فلورمار</span>
</a>
</li><li class="level2 nav-4-6-34">
<a href="https://www.goldenscent.com/makeup/top-10-brands/absolute.html">
<span>أبسولوت</span>
</a>
</li><li class="level2 nav-4-6-35">
<a href="https://www.goldenscent.com/makeup/top-10-brands/benefit.html">
<span>بينيفت</span>
</a>
</li><li class="level2 nav-4-6-36">
<a href="https://www.goldenscent.com/makeup/top-10-brands/bourjois.html">
<span>بورجوا</span>
</a>
</li><li class="level2 nav-4-6-37">
<a href="https://www.goldenscent.com/makeup/top-10-brands/makeup-revolution.html">
<span>ميكب ريفولوشن</span>
</a>
</li><li class="level2 nav-4-6-38">
<a href="https://www.goldenscent.com/makeup/top-10-brands/maybelline.html">
<span>مايبيلين</span>
</a>
</li><li class="level2 nav-4-6-39">
<a href="https://www.goldenscent.com/makeup/top-10-brands/note.html">
<span>نوت</span>
</a>
</li><li class="level2 nav-4-6-40">
<a href="https://www.goldenscent.com/makeup/top-10-brands/eylure.html">
<span>ايلور</span>
</a>
</li><li class="level2 nav-4-6-41">
<a href="https://www.goldenscent.com/makeup/top-10-brands/max-factor.html">
<span>ماكس فاكتور</span>
</a>
</li><li class="level2 nav-4-6-42 last">
<a href="https://www.goldenscent.com/makeup/top-10-brands/misslyn.html">
<span>ميسلين</span>
</a>
</li>
</ul></li>
</ul></li><li class="level0 nav-5 level-top parent">
<a href="https://www.goldenscent.com/skin-care.html" class="level-top">
<span>العناية بالبشرة</span>
</a>
<ul class="level0"><li class="level1 nav-5-1 first">
<a href="https://www.goldenscent.com/skin-care/just-arrived.html">
<span>وصل حديثاً</span>
</a>
</li><li class="level1 nav-5-2 parent">
<a href="https://www.goldenscent.com/skin-care/face.html">
<span>العناية بالوجه</span>
</a>
<ul class="level1"><li class="level2 nav-5-2-1 first">
<a href="https://www.goldenscent.com/skin-care/face/cleansers-toners.html">
<span>غسول وتونر الوجه</span>
</a>
</li><li class="level2 nav-5-2-2">
<a href="https://www.goldenscent.com/skin-care/face/day-care.html">
<span>العناية النهارية</span>
</a>
</li><li class="level2 nav-5-2-3">
<a href="https://www.goldenscent.com/skin-care/face/night-care.html">
<span>العناية الليلية</span>
</a>
</li><li class="level2 nav-5-2-4">
<a href="https://www.goldenscent.com/skin-care/face/serums.html">
<span>سيروم للوجه</span>
</a>
</li><li class="level2 nav-5-2-5">
<a href="https://www.goldenscent.com/skin-care/face/treatments.html">
<span>علاجات للوجه</span>
</a>
</li><li class="level2 nav-5-2-6">
<a href="https://www.goldenscent.com/skin-care/face/eye-care.html">
<span>العناية بالعيون</span>
</a>
</li><li class="level2 nav-5-2-7">
<a href="https://www.goldenscent.com/skin-care/face/lip-care.html">
<span>العناية بالشفاه</span>
</a>
</li><li class="level2 nav-5-2-8">
<a href="https://www.goldenscent.com/skin-care/face/masks.html">
<span>ماسكات للوجه</span>
</a>
</li><li class="level2 nav-5-2-9">
<a href="https://www.goldenscent.com/skin-care/face/sets.html">
<span>االمجموعات</span>
</a>
</li><li class="level2 nav-5-2-10 last">
<a href="https://www.goldenscent.com/skin-care/face/moisturisers.html">
<span>مرطب للوجه</span>
</a>
</li>
</ul></li><li class="level1 nav-5-3 parent">
<a href="https://www.goldenscent.com/skin-care/body.html">
<span>العناية بالجسم</span>
</a>
<ul class="level1"><li class="level2 nav-5-3-11 first">
<a href="https://www.goldenscent.com/skin-care/body/scrubs-and-exfoliators.html">
<span>مقشرات الجسم</span>
</a>
</li><li class="level2 nav-5-3-12">
<a href="https://www.goldenscent.com/skin-care/body/treatments.html">
<span>علاجات للجسم</span>
</a>
</li><li class="level2 nav-5-3-13">
<a href="https://www.goldenscent.com/skin-care/body/slimming.html">
<span>منتجات التنحيف</span>
</a>
</li><li class="level2 nav-5-3-14">
<a href="https://www.goldenscent.com/skin-care/body/moisturisers.html">
<span>مرطبات الوجه</span>
</a>
</li><li class="level2 nav-5-3-15">
<a href="https://www.goldenscent.com/skin-care/body/bath.html">
<span>منتجات الإستحمام</span>
</a>
</li><li class="level2 nav-5-3-16">
<a href="https://www.goldenscent.com/skin-care/body/hair-removal.html">
<span>لإزالة الشعر</span>
</a>
</li><li class="level2 nav-5-3-17">
<a href="https://www.goldenscent.com/skin-care/body/deodorants.html">
<span>مضادات رائحة العرق</span>
</a>
</li><li class="level2 nav-5-3-18 last">
<a href="https://www.goldenscent.com/skin-care/body/body-oils.html">
<span>زيوت للجسم</span>
</a>
</li>
</ul></li><li class="level1 nav-5-4 last parent">
<a href="https://www.goldenscent.com/skin-care/suncare-tanning.html">
<span>الحماية من الشمس والتسمير</span>
</a>
<ul class="level1"><li class="level2 nav-5-4-19 first">
<a href="https://www.goldenscent.com/skin-care/suncare-tanning/self-tan.html">
<span>التسمير الذاتي</span>
</a>
</li><li class="level2 nav-5-4-20">
<a href="https://www.goldenscent.com/skin-care/suncare-tanning/suncare-protection.html">
<span>الحماية من الشمس</span>
</a>
</li><li class="level2 nav-5-4-21 last">
<a href="https://www.goldenscent.com/skin-care/suncare-tanning/after-sun.html">
<span>بعد التعرض للشمس</span>
</a>
</li>
</ul></li>
</ul></li><li class="level0 nav-6 level-top parent">
<a href="https://www.goldenscent.com/hair-care.html" class="level-top">
<span>العناية بالشعر</span>
</a>
<ul class="level0"><li class="level1 nav-6-1 first">
<a href="https://www.goldenscent.com/hair-care/just-arrived.html">
<span>وصل حديثاً</span>
</a>
</li><li class="level1 nav-6-2">
<a href="https://www.goldenscent.com/hair-care/shampoo.html">
<span>الشامبو للشعر</span>
</a>
</li><li class="level1 nav-6-3">
<a href="https://www.goldenscent.com/hair-care/conditioner.html">
<span>بلسم للشعر</span>
</a>
</li><li class="level1 nav-6-4">
<a href="https://www.goldenscent.com/hair-care/treatments.html">
<span>علاجات للشعر</span>
</a>
</li><li class="level1 nav-6-5">
<a href="https://www.goldenscent.com/hair-care/dry-shampoo.html">
<span>شامبو جاف للشعر</span>
</a>
</li><li class="level1 nav-6-6">
<a href="https://www.goldenscent.com/hair-care/hair-loss.html">
<span>لعلاج تساقط الشعر</span>
</a>
</li><li class="level1 nav-6-7">
<a href="https://www.goldenscent.com/hair-care/hair-mists.html">
<span>معطرات الشعر</span>
</a>
</li><li class="level1 nav-6-8">
<a href="https://www.goldenscent.com/hair-care/serums.html">
<span>سيروم للشعر</span>
</a>
</li><li class="level1 nav-6-9">
<a href="https://www.goldenscent.com/hair-care/styling.html">
<span>لتصفيف الشعر</span>
</a>
</li><li class="level1 nav-6-10">
<a href="https://www.goldenscent.com/hair-care/colour.html">
<span>صبغة للشعر</span>
</a>
</li><li class="level1 nav-6-11">
<a href="https://www.goldenscent.com/hair-care/beauty-tools.html">
<span>أدوات للشعر</span>
</a>
</li><li class="level1 nav-6-12 last">
<a href="https://www.goldenscent.com/hair-care/accessories.html">
<span>اكسسوارات للشعر</span>
</a>
</li>
</ul></li><li class="level0 nav-7 level-top parent">
<a href="https://www.goldenscent.com/beauty-tools.html" class="level-top">
<span>أدوات التجميل</span>
</a>
<ul class="level0"><li class="level1 nav-7-1 first">
<a href="https://www.goldenscent.com/beauty-tools/just-arrived.html">
<span>وصل حديثاً</span>
</a>
</li><li class="level1 nav-7-2">
<a href="https://www.goldenscent.com/beauty-tools/makeup-brushes.html">
<span>فرش المكياج</span>
</a>
</li><li class="level1 nav-7-3">
<a href="https://www.goldenscent.com/beauty-tools/accessories.html">
<span>اكسسوارات</span>
</a>
</li><li class="level1 nav-7-4">
<a href="https://www.goldenscent.com/beauty-tools/skin-devices.html">
<span>اجهزة للبشرة</span>
</a>
</li><li class="level1 nav-7-5 last">
<a href="https://www.goldenscent.com/beauty-tools/hair-removal-tools.html">
<span>ادوات لأزالة الشعر</span>
</a>
</li>
</ul></li><li class="level0 nav-8 level-top">
<a href="https://www.goldenscent.com/best-seller.html" class="level-top">
<span>الأكثر مبيعا</span>
</a>
</li><li class="level0 nav-9 level-top parent">
<a href="https://www.goldenscent.com/gifts-season.html" class="level-top">
<span>موسم الهدايا</span>
</a>
<ul class="level0"><li class="level1 nav-9-1 first">
<a href="https://www.goldenscent.com/gifts-season/for-her.html">
<span>لها</span>
</a>
</li><li class="level1 nav-9-2">
<a href="https://www.goldenscent.com/gifts-season/for-him.html">
<span>له</span>
</a>
</li><li class="level1 nav-9-3">
<a href="https://www.goldenscent.com/gifts-season/for-us.html">
<span>لنا</span>
</a>
</li><li class="level1 nav-9-4 last">
<a href="https://www.goldenscent.com/gifts-season/all-gifts.html">
<span>جميع الهدايا</span>
</a>
</li>
</ul></li><li class="level0 nav-10 level-top last">
<a href="https://www.goldenscent.com/end-of-2018-sale.html" class="level-top">
<span>تخفيضات نهاية عام 2018</span>
</a>
</li>                </ul></div>
</div><div class="block block-subscribe">
	<div class="block-title">
		<strong>
			<span>النشرة البريدية</span>
		</strong>
	</div>
    <form action="https://www.goldenscent.com/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail_510">
        <div class="block-content">
            <div class="form-subscribe-header">
                <label for="newsletter">Subscribe to the Black &amp; White mailing list to receive updates on new arrivals, special offers and other discount information.</label>
            </div>
            <div class="input-box">
               <input type="text" name="email" id="newsletter_510" title="الاشتراك بنشرتنا البريدية" class="input-text required-entry validate-email" placeholder="الاشتراك بنشرتنا البريدية"></div>
            <div class="actions">
                <button type="submit" title="اشترك الآن" class="button"><span><span>اشترك الآن</span></span></button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
    //<![CDATA[
        /* var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail_510');
    //]]>
	if(jQuery('.block-subscribe').parents('#popup-block').length) {
		jQuery('#popup-block .block-subscribe .actions button.button').on('click', function(){
			var button = jQuery(this);
			setTimeout(function(){
				if(!button.parent().find('input#newsletter_510').hasClass('validation-failed')){
					jQuery.cookie('blacknwhitePopupFlag', 'true', {
						path: '/'
					});
				}
			}, 500);
		});
	} */
    </script></div>				</aside><div class="clear"></div>
							</div>
        </div>
    </div>
</div>
