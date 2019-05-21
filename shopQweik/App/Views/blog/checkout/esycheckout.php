
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar"><head><!-- this line of code (googleanalytics/ga) should be at the first of all lines --><script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
        h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
        (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
        })(window,document.documentElement,'async-hide','dataLayer',4000,
        {'GTM-K7WWVTX':true});</script><!-- BEGIN GOOGLE UNIVERSAL ANALYTICS CODE --><script type="text/javascript">
        //<![CDATA[
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            
ga('create', 'UA-54180853-1', 'auto');

ga('send', 'pageview');
            ga('require', 'GTM-K7WWVTX');            

        //]]>
        </script><!-- END GOOGLE UNIVERSAL ANALYTICS CODE --><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1099.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script><title>قولدن سنت</title><meta name="description" content="عطور، مكياج، العناية بالبشرة، الجمال، ماركات ✓ توصيل مجاني ✓استبدال مجاني ✓ عينات مجانية ✓الدفع عند الاستلام -تسوق اونلاين في المملكة العربية السعودية 

"><meta name="keywords" content="عطور، مكياج، مستحضرات التجميل، العناية بالبشرة، الجمال، تسوق اون لاين، متجر الكتروني، المملكة العربية السعودية، او دي برفيوم، او دي تواليت، شحن مجاني، عينات مجانية، توصيل مجاني، أصلي، منتجات جديدة"><meta name="robots" content="INDEX,FOLLOW"><link rel="icon" href="https://assets.goldenscent.com/favicon/default/favicon.ico" type="image/x-icon"><link rel="shortcut icon" href="https://assets.goldenscent.com/favicon/default/favicon.ico" type="image/x-icon"><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"><meta name="viewport" content="width=device-width"><script type="text/javascript">
	if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
		var viewportmeta = document.querySelector('meta[name="viewport"]');
		if (viewportmeta) {
        	viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0';
        	document.body.addEventListener('gesturestart', function() {
        		viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
    		}, false);
       	}
 	}
	var currentLang = "ar";
</script><link rel="stylesheet" type="text/css" href="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/shopgo/ec/css/checkout.css" media="all"><link rel="stylesheet" type="text/css" href="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/css/amasty/amgiftwrap/amgiftwrap.css" media="all"><link rel="stylesheet" type="text/css" href="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/css/giftwrap.css" media="all"><link rel="stylesheet" type="text/css" href="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/css/swiper.css" media="all"><link rel="stylesheet" type="text/css" href="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/css/giftwraprtl.css" media="all"><script type="text/javascript" src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/js/checkout/checkout.lib.js"></script><script type="text/javascript" src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/js/checkout/checkout.js"></script><link rel="alternate" hreflang="ar-kw" href="https://kw.goldenscent.com/easycheckout/"><link rel="alternate" hreflang="en-kw" href="https://kw.goldenscent.com/en/easycheckout/"><link rel="alternate" hreflang="en-ae" href="https://ae.goldenscent.com/en/easycheckout/"><link rel="alternate" hreflang="ar-ae" href="https://ae.goldenscent.com/easycheckout/"><link rel="alternate" hreflang="ar" href="https://www.goldenscent.com/easycheckout/"><link rel="alternate" hreflang="en" href="https://www.goldenscent.com/en/easycheckout/"><script>var dataLayer = dataLayer || [];dataLayer.push({"visitorId":"371760","visitorLoginState":"Logged in","visitorType":"General","visitorLifetimeValue":0,"visitorExistingCustomer":"No"})</script><script>shopgoStoresDataLayer = [{"visitorId":"371760","visitorLoginState":"Logged in","visitorType":"General","visitorLifetimeValue":0,"visitorExistingCustomer":"No"}];</script><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TG5VHC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w, d, s, l, i){w[l] = w[l] || []; w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'}); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer'?'&l=' + l:''; j.async = true; j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-TG5VHC');</script><!-- End Google Tag Manager --><meta name="google-site-verification" content="teW-YZTpfhg7jM41X4WQKb_5DyBGTv4Ikx4aiG1MPl0"><style>
#lc_chat_layout #lc_chat_header{
background-color:#EC008C !important;
}
.section-title a {
    white-space: nowrap;
    font-weight: bold !important;
}
.cms-year-end-sale .mfooter, .cms-super-saver-offers .mfooter, .cms-oud-collection .mfooter, .cms-gifts-season .mfooter, .cms-gifts-season-for-her .mfooter, .gifts-season .mfooter, .cms-gifts-season-for-him .mfooter, .cms-gifts-season-for-him .mfooter, .cms-shop-and-save .mfooter, .cms-golden-scent-coupons .mfooter, .cms-spring-offers .mfooter, .cms-best-of-the-best .mfooter{
display:none;
}
.cms-super-saver-offers .std, .cms-oud-collection .std, .cms-gifts-season .std, .cms-gifts-season-for-her .std, .gifts-season .std, .cms-gifts-season-for-him .std, .cms-gifts-season-for-him .std, .cms-shop-and-save .std, .cms-golden-scent-coupons .std, .cms-spring-offers .std, .cms-best-of-the-best .std{
padding:0;}
.cms-year-end-sale .ui-panel-wrapper{
padding-bottom:80px;
}
.best-product-seller .swiper-slide {
    width: auto !important;
}
.grid_9 iframe{
    display: block;
    margin: 0 auto 14px;
}
</style><!-- hide estimation date in track your order page --><script>jQuery(document).ready(function(){if (jQuery('#TrackInfo .nav-link .header-info').length >= 6){jQuery('#TrackInfo .nav-link .header-info').eq(0).parent().hide();}});</script><script>jQuery(document).ready(function(){
jQuery('span:contains("-INF")').parent().hide();
});</script><style>
        .cash-on-delivery {
            display: inline-block;
            border: #ccc solid 1px;
            padding: 5px;
            color: #000;
            background: #efefef;
            margin: 5px 0;
            font-weight: normal;
            font-size: 1em;
        }
        </style></head><body class=" ec-index-index retina-ready floating-header header-slider onlyhome-slider hover-effect hover-scale popup-mobile popup-tablet sticky-mobile sticky-tablet rtl boxed-layout none sidebar-left k-rtl">
                <div class="wrapper">
                        <div class="page">
                                <div class="main-container col1-layout">
                    <div class="main">
                                                <div class="col-main">
                                                        <div id="algolia-autocomplete-container" class="mangolia"></div><script type="text/javascript">
    var websiteCode = 'SA';
    var defaultCountry = 'SA';

    var countryCodes = {
        "SA": {
            "countryCode": "+966",
            "couriers": ["5"],
            "totNumOfDigits":9,
            "validationDigits":1
        },
        "KW": {
            "countryCode": "+965",
            "couriers": ["5", "6", "9"],
            "totNumOfDigits":8,
            "validationDigits":1
        },
        "AE": {
            "countryCode": "+971",
            "couriers": ["50", "52", "54", "55", "56", "58"],
            "totNumOfDigits":9,
            "validationDigits":2
        }
    };

    if (countryCodes[websiteCode] === undefined) {
        countryCodes[websiteCode] = countryCodes[defaultCountry];
    }

</script><style>
@media only screen and (max-width: 768px){
#checkout-review-table tfoot tr td {
    display: inline !important;
}
#checkout-review-table td {
    padding: .8em .8em;
}
}

a.logo{
	display:inline-block;padding:14px 0 10px;height:27px;width:240px;
}
.row:before, .row:after{
	display:table;
	content:" ";
}
.row:after{
	clear:both;
}
.paypal-logo{
	float:left;
}

.col-xs-8 {
    float: right;
    width: 70%;
    text-align: right;
}
a.logo{
	width:200px;
}
div#shopgo_easy_checkout input[type=text]{
	padding: 0 1em;
}
div#shopgo_easy_checkout .shippingNewAddressForm input[type=text]{
	padding: 0.6em 1em;
}

</style><div id="shopgo_easy_checkout" class="main container">
	<script type="text/javascript">
		var baseUrl = "https://www.goldenscent.com/";

		// CITIES INTEGRATION: START
		var citiesUsername = 'shopgo';
		var storeCode = 'ar_sa';
		var autocompleteAllowAnyValue = '0';
		autocompleteAllowAnyValue = autocompleteAllowAnyValue === '0' ? false : true;
		// CITIES INTEGRATION: END

		var geonamesUsername = 'shopgo';
		var citiesDataSource = 'geonames_api';
        var translationData = {"Please enter your details below to complete your purchase.":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0628\u064a\u0627\u0646\u0627\u062a\u0643 \u0644\u0627\u0643\u0645\u0627\u0644 \u0627\u0644\u0637\u0644\u0628","Fill your billing information.":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0644 \u0628\u064a\u0627\u0646\u0627\u062a \u0627\u0644\u062f\u0641\u0639","Fill your shipping information.":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0628\u064a\u0627\u0646\u0627\u062a \u0627\u0644\u0634\u062d\u0646","Select region":"\u0627\u0644\u0645\u062d\u0627\u0641\u0638\u0629","Ship to different address":"\u0627\u0644\u0634\u062d\u0646 \u0627\u0644\u0649 \u0639\u0646\u0648\u0627\u0646 \u0622\u062e\u0631","Update":"\u062a\u062d\u062f\u064a\u062b","Use update button to view the availabe payments and shipping methods based on your location.":"\u0627\u0636\u063a\u0637 \u0647\u0646\u0627 \u0644\u0645\u0639\u0631\u0641\u0629 \u0627\u0633\u0639\u0627\u0631 \u0627\u0644\u0634\u062d\u0646 \u0648 \u0627\u0644\u062f\u0641\u0639","Choose your shipping method.":"\u0627\u062e\u062a\u0631 \u0637\u0631\u064a\u0642\u0629 \u0627\u0644\u062f\u0641\u0639","How are you going to pay ?":"\u0643\u064a\u0641 \u0633\u062a\u062f\u0641\u0639\u061f","Review your order":"\u0645\u0631\u0627\u062c\u0639\u0629 \u0627\u0644\u0637\u0644\u0628","Check your order details.":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0645\u0631\u0627\u062c\u0639\u0629 \u0645\u0639\u0644\u0648\u0645\u0627\u062a \u0627\u0644\u0637\u0644\u0628","Your credit card will be charged for":"\u0627\u0644\u0645\u0628\u0644\u063a \u0627\u0644\u0630\u064a \u0633\u064a\u062a\u0645 \u0627\u0642\u062a\u0637\u0627\u0639\u0647 \u0645\u0646 \u0628\u0637\u0627\u0642\u062a\u0643 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646\u064a\u0629","Your order has been placed successfully!":"\u0646\u0631\u062c\u0648 \u0627\u0644\u0627\u0646\u062a\u0638\u0627\u0631...\u0633\u0646\u0642\u0648\u0645 \u0628\u062a\u062d\u0648\u064a\u0644\u0643 \u0644\u062a\u0623\u0643\u064a\u062f \u0627\u0644\u0637\u0644\u0628","You will be redirected to the payment gateway":"\u0633\u064a\u062a\u0645 \u062a\u062d\u0648\u064a\u0644\u0643 \u0627\u0644\u0649 \u0628\u0648\u0627\u0628\u0629 \u0627\u0644\u062f\u0641\u0639","Loading":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u0644\u0627\u0646\u062a\u0638\u0627\u0631","Click here to place your order !":"\u0627\u0636\u063a\u0637 \u0647\u0646\u0627 \u0644\u0627\u062a\u0645\u0627\u0645 \u0637\u0644\u0628\u0643","Click here to update the quantity":"\u0627\u0636\u063a\u0637 \u0647\u0646\u0627 \u0644\u062a\u062d\u062f\u064a\u062b \u0627\u0644\u0643\u0645\u064a\u0629","Check the required fields in the billing and shipping information section in order to show the available shipping methods.":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u0644\u062a\u0623\u0643\u062f \u0645\u0646 \u0639\u0646\u0648\u0627\u0646 \u0627\u0644\u0634\u062d\u0646","Please enter your first name":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0627\u0644\u0627\u0633\u0645 \u0627\u0644\u0623\u0648\u0644","Please enter city name in english.":" \u0628\u0627\u0644\u0644\u063a\u0629 \u0627\u0644\u0627\u0646\u0643\u0644\u064a\u0632\u064a\u0629","Please enter your last name":" \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0627\u0644\u0627\u0633\u0645 \u0627\u0644\u0627\u062e\u064a\u0631","Please enter your address":" \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0627\u0644\u0639\u0646\u0648\u0627\u0646","Please select your state\/province":" \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0627\u0644\u0648\u0644\u0627\u064a\u0629","Please enter your city":" \u0627\u062f\u062e\u0644 \u0627\u0633\u0645 \u0627\u0644\u0645\u062f\u064a\u0646\u0629","Please enter your postcode":" \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0627\u0644\u0631\u0645\u0632 \u0627\u0644\u0628\u0631\u064a\u062f\u064a","Please enter your telephone number":" \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0631\u0642\u0645 \u0627\u0644\u0647\u0627\u062a\u0641","Please enter a valid email address":" \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0628\u0631\u064a\u062f \u0627\u0644\u0643\u062a\u0631\u0648\u0646\u064a \u0635\u062d\u064a\u062d","Billing Information":" \u0645\u0639\u0644\u0648\u0645\u0627\u062a \u0627\u0644\u062f\u0641\u0639","Shipping Information":" \u0645\u0639\u0644\u0648\u0645\u0627\u062a \u0627\u0644\u0634\u062d\u0646","First Name":" \u0627\u0644\u0627\u0633\u0645 \u0627\u0644\u0627\u0648\u0644","Last Name":" \u0627\u0644\u0627\u0633\u0645 \u0627\u0644\u0627\u062e\u064a\u0631","Email Address":" \u0627\u0644\u0628\u0631\u064a\u062f \u0627\u0644\u0627\u0644\u0643\u062a\u0631\u0648\u0646\u064a","Address":" \u0627\u0644\u0639\u0646\u0648\u0627\u0646","Country":" \u0627\u0644\u062f\u0648\u0644\u0629","City":" \u0627\u0644\u0645\u062f\u064a\u0646\u0629","State\/Province":" \u0627\u0644\u0648\u0644\u0627\u064a\u0629 - \u0627\u0644\u0645\u062d\u0627\u0641\u0638\u0629","Zip\/Postal Code":" \u0627\u0644\u0631\u0645\u0632 \u0627\u0644\u0628\u0631\u064a\u062f\u064a","Telephone":" \u0631\u0642\u0645 \u0627\u0644\u0647\u0627\u062a\u0641","Alternative Telephone":" \u0631\u0642\u0645 \u0627\u0644\u0647\u0627\u062a\u0641 \u0627\u0644\u0628\u062f\u064a\u0644","Shipping Method":" \u0637\u0631\u064a\u0642\u0629 \u0627\u0644\u0634\u062d\u0646","Sorry":" no quotes are available for this order at this time.","Payment Information":" \u0637\u0631\u064a\u0642\u0629 \u0627\u0644\u062f\u0641\u0639","Product Name":" \u0627\u0633\u0645 \u0627\u0644\u0645\u0646\u062a\u062c","Price":" \u0627\u0644\u0633\u0639\u0631","Qty":" \u0627\u0644\u0643\u0645\u064a\u0629","Subtotal":" \u0627\u0644\u0645\u062c\u0645\u0648\u0639 \u0627\u0644\u0641\u0631\u0639\u064a","Grand Total":" \u0627\u0644\u0645\u062c\u0645\u0648\u0639 \u0627\u0644\u0643\u0644\u064a","Place Order":" \u0625\u062a\u0645\u0627\u0645 \u0627\u0644\u0634\u0631\u0627\u0621","Please enter your password":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u0643\u0644\u0645\u0629 \u0627\u0644\u0645\u0631\u0648\u0631","Please confirm your password.":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0625\u0639\u0627\u062f\u0629 \u0643\u062a\u0627\u0628\u0629 \u0643\u0644\u0645\u0629 \u0627\u0644\u0645\u0631\u0648\u0631","Already have an account ? Please login here.":"\u0647\u0644 \u062a\u0645\u0644\u0643 \u062d\u0633\u0627\u0628 \u0645\u0633\u0628\u0642\u0627\u064b\u061f \u0642\u0645 \u0628\u0627\u0644\u062a\u0633\u062c\u064a\u0644 \u0645\u0646 \u0647\u0646\u0627","There is already a customer registered using this email address. Please login using this email address or enter a different email address to register your account.":"\u0647\u0646\u0627\u0643 \u0628\u0627\u0644\u0641\u0639\u0644 \u062d\u0633\u0627\u0628 \u0644\u0646\u0641\u0633 \u0627\u0644\u0628\u0631\u064a\u062f \u0627\u0644\u0625\u0644\u0643\u062a\u0631\u0648\u0646\u064a\u060c \u0645\u0646 \u0641\u0636\u0644\u0643 \u0642\u0645 \u0628\u062a\u0633\u062c\u064a\u0644 \u0627\u0644\u062f\u062e\u0648\u0644 \u0628\u0647\u0630\u0627 \u0627\u0644\u0625\u064a\u0645\u064a\u0644 \u0623\u0648 \u0642\u0645 \u0628\u0627\u0644\u062a\u0633\u062c\u064a\u0644 \u0628\u0625\u064a\u0645\u064a\u0644 \u0645\u062e\u062a\u0644\u0641.","Oops!":"\u0623\u0648\u0647!","The minimum password length is 6":"\u064a\u062c\u0628 \u0623\u0646 \u062a\u0643\u0648\u0646 \u0643\u0644\u0645\u0629 \u0627\u0644\u0645\u0631\u0648\u0631 6 \u0623\u062d\u0631\u0641 \u0639\u0644\u0649 \u0627\u0644\u0623\u0642\u0644","Use next button to view the availabe payments and shipping methods based on your location.":"\u0627\u0633\u062a\u062e\u062f\u0645 \u0632\u0631 \u0627\u0644\u062a\u0627\u0644\u064a \u0644\u0645\u0634\u0627\u0647\u062f\u0629 \u0637\u0631\u0642 \u0627\u0644\u062f\u0641\u0639 \u0648\u0627\u0644\u0634\u062d\u0646 \u0627\u0644\u0645\u062a\u0627\u062d\u0629 \u0644\u0643.","Please accept terms and conditions":".\u0623\u0642\u0628\u0644 \u0628\u0634\u0631\u0648\u0637 \u0648\u0623\u062d\u0643\u0627\u0645 \u0627\u0644\u0645\u062a\u062c\u0631","Login":" \u062a\u0633\u062c\u064a\u0644 \u0627\u0644\u062f\u062e\u0648\u0644","Password":" \u0643\u0644\u0645\u0629 \u0627\u0644\u0645\u0631\u0648\u0631","Forgot Your Password?":" \u0646\u0633\u064a\u062a \u0643\u0644\u0645\u0629 \u0627\u0644\u0633\u0631\u061f","Terms and Conditions":" \u0627\u0644\u0634\u0631\u0648\u0637 \u0648 \u0627\u0644\u0627\u062d\u0643\u0627\u0645","Preferable date for shipment":" \u0648\u0642\u062a \u0627\u0633\u062a\u0644\u0627\u0645 \u0627\u0644\u0637\u0644\u0628","When do you want to get your order ?":" \u0627\u062e\u062a\u0631 \u0645\u0648\u0639\u062f \u0627\u0633\u062a\u0644\u0627\u0645 \u0627\u0644\u0637\u0644\u0628","Select city...":"\u0627\u062f\u062e\u0644 \u0627\u0633\u0645 \u0627\u0644\u0645\u062f\u064a\u0646\u0629","Please specify the shipping address to see available options.":"\u062d\u062f\u0651\u062f \u0648\u0633\u0644\u064a\u0629 \u0627\u0644\u0634\u062d\u0646 \u0645\u0646 \u0628\u064a\u0646 \u0627\u0644\u062e\u064a\u0627\u0631\u0627\u062a \u0627\u0644\u062a\u0627\u0644\u064a\u0629","Name on Card":"\u0627\u0644\u0627\u0633\u0645 \u0627\u0644\u0645\u0648\u062c\u0648\u062f \u0639\u0644\u0649 \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646","Credit Card Type":"\u0646\u0648\u0639 \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646","Expiration Date":"\u062a\u0627\u0631\u064a\u062e \u0627\u0646\u062a\u0647\u0627\u0621 \u0635\u0644\u0627\u062d\u064a\u0629 \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646","Month":"\u0627\u0644\u0634\u0647\u0631","Year":"\u0627\u0644\u0633\u0646\u0629","Please select your credit card type":"\u0645\u0646 \u0641\u0636\u0644\u0643 \u0627\u062e\u062a\u0631 \u0646\u0648\u0639 \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u062a\u0626\u0645\u0627\u0646 \u0627\u0644\u062e\u0627\u0635\u0629 \u0628\u0643.","Please enter your credit card number":"\u0645\u0646 \u0641\u0636\u0644\u0643 \u0627\u062f\u062e\u0644 \u0627\u0644\u0631\u0642\u0645 \u0627\u0644\u062e\u0627\u0635 \u0628\u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646","Please enter your credit card expiration month":"\u0646\u0633\u064a\u062a \u0623\u0646 \u062a\u0642\u0648\u0645 \u0628\u0625\u062f\u062e\u0627\u0644 \u062a\u0627\u0631\u064a\u062e \u0627\u0646\u062a\u0647\u0627\u0621 \u0635\u0644\u0627\u062d\u064a\u0629 \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646","Please enter your name (as on the card)":"\u0645\u0646 \u0641\u0636\u0644\u0643 \u0623\u062f\u062e\u0644 \u0627\u0633\u0645\u0643 \u0644\u0645\u0627 \u0647\u0648 \u0645\u0643\u062a\u0648\u0628 \u062a\u0645\u0627\u0645\u0627\u064b \u0641\u064a \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646","Grand Total Excl. Tax":"\u0645\u062c\u0645\u0648\u0639 \u0627\u0644\u0645\u0628\u0644\u063a \u0645\u0646 \u062f\u0648\u0646 \u0627\u0644\u0636\u0631\u064a\u0628\u0629","TERMS OF SERVICE":"\u0634\u0631\u0648\u0637 \u0627\u0644\u062e\u062f\u0645\u0629","Coupon Code":"\u0631\u0645\u0632 \u0627\u0644\u062a\u062e\u0641\u064a\u0636"," Shipping & Handling (Flat Rate - Fixed) ":"\u062a\u0643\u0644\u0641\u0629 \u0627\u0644\u0634\u062d\u0646","Credit Card Number":"\u0627\u0644\u0631\u0642\u0645 \u0639\u0644\u0649 \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u062a\u0626\u0645\u0627\u0646","--Please Select--":"--\u0627\u062e\u062a\u0631  \u0645\u0646 \u0647\u0646\u0627--"," is required field.":" \u062d\u0642\u0644 \u0645\u0637\u0644\u0648\u0628","Tax":"\u0627\u0644\u0636\u0631\u064a\u0628\u0629","Flat Rate":"\u062a\u0643\u0644\u0641\u0629 \u0627\u0644\u0634\u062d\u0646","Please enter your credit card expiration year":"\u0645\u0646 \u0641\u0636\u0644\u0643 \u0623\u062f\u062e\u0644 \u0633\u0646\u0629 \u0627\u0646\u062a\u0647\u0627\u0621 \u0635\u0644\u0627\u062d\u064a\u0629 \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646 \u0627\u0644\u062e\u0627\u0635\u0629 \u0628\u0643.","Grand Total Incl. Tax":"\u0627\u0644\u062a\u0643\u0644\u0641\u0629 \u0628\u0639\u062f \u0627\u0644\u0636\u0631\u064a\u0628\u0629","Please enter valid email address.":"\u0645\u0646 \u0641\u0636\u0644\u0643 \u0623\u062f\u062e\u0644 \u0628\u0631\u064a\u062f \u0625\u0644\u0643\u062a\u0631\u0648\u0646\u064a \u0635\u062d\u064a\u062d!","Please enter your password.":"\u0627\u062f\u062e\u0644 \u0643\u0644\u0645\u0629 \u0627\u0644\u0645\u0631\u0648\u0631 \u0627\u0644\u0635\u062d\u064a\u062d\u0629","Please select your credit card verification number":"\u0645\u0646 \u0641\u0636\u0644\u0643 \u0623\u062f\u062e\u0644 \u0631\u0645\u0632 \u0627\u0644\u062a\u0623\u0643\u064a\u062f \u0641\u064a \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646 \u0627\u0644\u062e\u0627\u0635\u0629 \u0628\u0643.","Close":"\u0625\u063a\u0644\u0627\u0642","Select a shipping method to show the available payment methods.":" \u0627\u062e\u062a\u0631 \u0648\u0633\u064a\u0644\u0629 \u0627\u0644\u0634\u062d\u0646 \u0644\u062a\u0638\u0647\u0631 \u0648\u0633\u0627\u0626\u0644 \u0627\u0644\u062f\u0641\u0639 \u0627\u0644\u0645\u062a\u0627\u062d\u0629","Find your city\u0027s spelling by Aramex here.":"\u0627\u0636\u063a\u0637 \u0647\u0646\u0627 \u0644\u0645\u0639\u0631\u0641\u0629 \u0627\u0633\u0645 \u0645\u062f\u064a\u0646\u062a\u0643 \u062d\u0633\u0628 Aramex.","Please enter your coupon code":"\u0645\u0646 \u0641\u0636\u0644\u0643 \u0627\u062f\u062e\u0644 \u0643\u0648\u062f \u0627\u0644\u062a\u062e\u0641\u064a\u0636"," Apply Coupon":"\u0641\u0639\u0651\u0644 \u0627\u0644\u0631\u0645\u0632 ","Confirm Password":" \u062a\u0623\u0643\u064a\u062f \u0643\u0644\u0645\u0629 \u0627\u0644\u0645\u0631\u0648\u0631","Loading ...":" \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u0644\u0627\u0646\u062a\u0638\u0627\u0631 ...","Please agree to all the terms and conditions before placing the order.":" \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u0644\u0645\u0648\u0627\u0641\u0642\u0629 \u0639\u0644\u0649 \u062c\u0645\u064a\u0639 \u0627\u0644\u0634\u0631\u0648\u0637 \u0648 \u0627\u0644\u0627\u062d\u0643\u0627\u0645 \u0642\u0628\u0644 \u0627\u062a\u0645\u0627\u0645 \u0627\u0644\u0634\u0631\u0627\u0621","Please select a shipping method.":" \u064a\u0631\u062c\u0649 \u0627\u062e\u062a\u064a\u0627\u0631 \u0637\u0631\u064a\u0642\u0629 \u0627\u0644\u062f\u0641\u0639","Please select a payment method.":" \u064a\u0631\u062c\u0649 \u0627\u062e\u062a\u064a\u0627\u0631 \u0637\u0631\u064a\u0642\u0629 \u0627\u0644\u0634\u062d\u0646","Next":"\u0627\u0644\u062a\u0627\u0644\u064a","Apply Coupon":"\u0627\u0633\u062a\u062e\u062f\u0627\u0645 \u0643\u0648\u0628\u0648\u0646","Area":"\u0627\u0644\u062d\u064a","Please enter your area":"\u0627\u062f\u062e\u0644 \u0627\u0633\u0645 \u0627\u0644\u062d\u064a"," -- Select -- ":" -- \u0627\u062e\u062a\u0631 -- ","Street\/Landmark":"\u0627\u0644\u0634\u0627\u0631\u0639 \/ \u0627\u0642\u0631\u0628 \u0645\u0639\u0644\u0645","Building No.\/ Floor":"\u0631\u0642\u0645 \u0627\u0644\u0639\u0645\u0627\u0631\u0647 \/ \u0627\u0644\u0637\u0627\u0628\u0642","Please enter your street or landmark":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0625\u062f\u062e\u0627\u0644 \u0627\u0633\u0645 \u0627\u0644\u0634\u0627\u0631\u0639 \u0627\u0648 \u0627\u0644\u0628\u0646\u0627\u064a\u0629","Street or Landmark":"\u0627\u0644\u0634\u0627\u0631\u0639 \u0627\u0648 \u0627\u0642\u0631\u0628 \u0645\u0639\u0644\u0645","Building No. or Floor":"\u0631\u0642\u0645 \u0627\u0644\u0639\u0645\u0627\u0631\u0647 \/ \u0627\u0644\u0637\u0627\u0628\u0642","An SMS message has been sent to your mobile number":"\u0644\u0642\u062f \u062a\u0645 \u0627\u0631\u0633\u0627\u0644 \u0631\u0633\u0627\u0644\u0629 \u0646\u0635\u064a\u0629 \u0642\u0635\u064a\u0631\u0629 \u0625\u0644\u0649 \u062c\u0648\u0627\u0644\u0643","Please enter valid phone number":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0625\u062f\u062e\u0627\u0644 \u0631\u0642\u0645 \u0647\u0627\u062a\u0641 \u0635\u062d\u064a\u062d","Please specify the shipping method to see available payment options.":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062e\u062a\u064a\u0627\u0631 \u0648\u0633\u064a\u0644\u0629 \u0627\u0644\u0634\u062d\u0646 \u0644\u062a\u062a\u0645\u0643\u0646 \u0645\u0646 \u0645\u0634\u0627\u0647\u062f\u0629 \u0637\u0631\u0642 \u0627\u0644\u062f\u0641\u0639","You will be charged an extra fee of":"\u0633\u064a\u062a\u0645 \u0627\u0636\u0627\u0641\u0629 \u0645\u0628\u0644\u063a \u0648\u0642\u062f\u0631\u0647","Credit \/ Debit Card":"\u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646","PayPal":"\u0628\u064a \u0628\u0627\u0644 (PayPal)","Expiration Month":"\u0634\u0647\u0631 \u062a\u0627\u0631\u064a\u062e \u0627\u0646\u062a\u0647\u0627\u0621 \u0627\u0644\u0628\u0637\u0627\u0642\u0629","Expiration Year":"\u0633\u0646\u0629 \u062a\u0627\u0631\u064a\u062e \u0627\u0646\u062a\u0647\u0627\u0621 \u0627\u0644\u0628\u0637\u0627\u0642\u0629","Card number is invalid.":"\u0631\u0642\u0645 \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646 \u063a\u064a\u0631 \u0635\u0627\u0644\u062d","Card has expired.":"\u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646 \u0645\u0646\u062a\u0647\u064a\u0629 \u0627\u0644\u0635\u0644\u0627\u062d\u064a\u0629","Card verification number is invalid.":"\u0631\u0642\u0645 \u062a\u0623\u0643\u064a\u062f \u0628\u0637\u0627\u0642\u0629 \u0627\u0644\u0627\u0626\u062a\u0645\u0627\u0646 \u063a\u064a\u0631 \u0635\u0627\u0644\u062d","Card holder name is invalid.":"\u0625\u0633\u0645 \u062d\u0627\u0645\u0644 \u0627\u0644\u0628\u0637\u0627\u0642\u0629 \u063a\u064a\u0631 \u0635\u0627\u0644\u062d"};
        var isVirtual = false;
		var countryRegions = {"config":{"show_all_regions":true,"regions_required":["AT","CA","EE","FI","FR","DE","LV","LT","RO","ES","CH","US"]}};
		var geoCountryCode = '';
        var noPostcodeCountries = ["AF","AX","AL","DZ","AS","AD","AO","AI","AQ","AG","AR","AM","AW","AU","AT","AZ","BS","BH","BD","BB","BY","BE","BZ","BJ","BM","BT","BO","BA","BW","BV","BR","IO","VG","BN","BG","BF","BI","KH","CM","CA","CV","KY","CF","TD","CL","CN","CX","CC","CO","KM","CG","CD","CK","CR","CI","HR","CU","CY","CZ","DK","DJ","DM","DO","EC","EG","SV","GQ","ER","EE","ET","FK","FO","FJ","FI","FR","GF","PF","TF","GA","GM","GE","DE","GH","GI","GR","GL","GD","GP","GU","GT","GG","GN","GW","GY","HT","HM","HN","HK","HU","IS","IN","ID","IR","IQ","IE","IM","IL","IT","JM","JP","JE","JO","KZ","KE","KI","KW","KG","LA","LV","LB","LS","LR","LY","LI","LT","LU","MO","MK","MG","MW","MY","MV","ML","MT","MH","MQ","MR","MU","YT","MX","FM","MD","MC","MN","ME","MS","MA","MZ","MM","NA","NR","NP","NL","AN","NC","NZ","NI","NE","NG","NU","NF","MP","KP","NO","OM","PK","PW","PS","PA","PG","PY","PE","PH","PN","PL","PT","PR","QA","RE","RO","RU","RW","BL","SH","KN","LC","MF","PM","WS","SM","ST","SA","SN","RS","SC","SL","SG","SK","SI","SB","SO","ZA","GS","KR","ES","LK","VC","SD","SR","SJ","SZ","SE","CH","SY","TW","TJ","TZ","TH","TL","TG","TK","TO","TT","TN","TR","TM","TC","TV","UG","UA","AE","GB","US","UY","UM","VI","UZ","VU","VA","VE","VN","WF","EH","YE","ZM","ZW"];
        var reloadDelay = 1;
        var delayInterval = 1500;
        var inputMaxLength = 3000;
        var isNumericTel = true;
        var consoleLog = true;
		var defaultShippingMethod = 'flatrate_flatrate';		var defaultPaymentMethod = 'free';        var cityInput = 'autocomplete';
	</script><div class="ui one column page grid stackable">
		<div class="row">
			<div class="column">
				<div class="ui basic segment" style="margin-bottom: 0; padding-bottom: 0;">
					<h2 class="ui left floated medium header">
						<i class="lock icon large"></i>
						<div class="content">
                            إتمام الطلب                            <div class="sub header">الرجاء إدخال البيانات في الأسفل لإتمام طلبكم</div>
                        </div>
					</h2>
					<h2 class="ui right floated medium header">
						<div class="content">
							<a href="https://www.goldenscent.com/" title="" class="logo">
                                <strong></strong>
                                <img class="ar" src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/logo.svg" alt=""></a>
						</div>
					</h2>
				</div>
					<div class="ui info message">
		<i class="icon info"></i>الرجاء ادخال البيانات التالية لاكمال عملية الشراء.	</div>
				<div id="globalMessages" class="ui error message hidden">
					<i class="warning icon"></i>
					<i class="close icon"></i>
				</div>
				<div class="ui section divider"></div>
			</div>
		</div>
	</div>
	<div class="ui three column page grid stackable">
		<div class="column">
            
<div class="ui fluid form segment billingOpen">
    <h3 class="ui header">
        <i class="id icon large"></i>
        <div class="content">
             معلومات الدفع            <div class="sub header">الرجاء ادخل بيانات الدفع</div>
        </div>
    </h3>
</div>
<div class="ui fluid form segment billing">
    <h3 class="ui small header">
        <i class="user icon large"></i>
        <div class="content">
             معلومات الدفع            <div class="sub header">الرجاء ادخل بيانات الدفع</div>
        </div>
    </h3>
                <input type="hidden" name="billing[save_in_address_book]" id="billing:save_in_address_book" value="1"><input type="hidden" name="billing[address_id]" id="billing:address_id" value="11520443"><div class="billingNewAddressForm">
        <div class="two fields">
            <div class="field">
                <label> الاسم الاول</label>
                <input placeholder=" الاسم الاول" type="text" name="billing[firstname]" id="billing:firstname" class="required" value="fayez"></div>
            <div class="field">
                <label> الاسم الاخير</label>
                <input placeholder=" الاسم الاخير" type="text" name="billing[lastname]" id="billing:lastname" class="required" value="almalki"></div>
        </div>
        <div class="field">
            <label> البريد الالكتروني</label>
            <input placeholder=" البريد الالكتروني" type="text" name="billing[email]" id="billing:email" class="required" value="f-933@hotmail.com"></div>

        <div class="field">
            <label> الدولة</label>
            <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="الدولة"><option value="SA" selected>المملكة العربية السعودية</option></select></div>
        

        <div class="field">
            <label> المدينة</label>
            <select placeholder=" المدينة" type="text" name="billing[city]" id="billing:city" class="required"></select></div>

        <div class="field">
            <label>الحي</label>
            <select placeholder="الحي" type="text" name="billing[region]" id="billing:area" class="required"></select></div>

        <div class="field">
            <label>الشارع / اقرب معلم</label>
            <input placeholder="الشارع او اقرب معلم" type="text" name="billing[street][]" id="billing:street1" class="required" value=""></div>
        <div class="field">
            <label>رقم العماره / الطابق</label>
            <input placeholder="رقم العماره / الطابق" type="text" name="billing[street][]" id="billing:street2" value=""></div>

        <div class="two fields">
            <div class="field">
                <label> الرمز البريدي</label>
                <input placeholder=" الرمز البريدي" type="text" name="billing[postcode]" id="billing:postcode" class="required" value="31444"></div>
            <!--<div class="field">
                <label for="billing:region_id" class="required"> الولاية - المحافظة</label>
                <div class="input-box">
                    <select id="billing:region_id" name="billing[region_id]" title=" الولاية - المحافظة" class="validate-select required">
                        <option value="">من فضلك اختر منطقة, ولاية أو مقاطعة</option>
                    </select>
                </div>
            </div>-->
            <!--<div class="field">
                <label for="billing:region" class="required"> الولاية - المحافظة</label>
                <div class="input-box">
                    <input type="text" id="billing:region" name="billing[region]" value=""  title=" الولاية - المحافظة" class="input-text "/>
                </div>
            </div>-->
        </div>
        <div class="three fields gsTelephone">
            <label> رقم الهاتف</label>
            <div class="field" style="width: 25%;">
                <input placeholder="" type="text" name="billing[telephone][]" id="billing:addressCountryCode" class="required" value="" tabindex="-1" readonly></div>
            <div class="field" style="width: 75%;">
                <input placeholder="0501234567" type="text" name="billing[telephone][]" id="billing:telephone" class="required" value=""></div>
        </div>
                                        <div id="billing_error_messages" class="ui error message"></div>
    </div>
            <div class="inline field" style="margin-top: 10px;">
            <input type="hidden" id="billing:use_for_shipping" name="billing[use_for_shipping]" value="1"><div id="billing:ship_to_different_address" class="ui checkbox">
                <input type="checkbox"><label for="billing:ship_to_different_address"></label>

            </div>
            <label>الشحن الى عنوان آخر</label>
        </div>
    </div>
            <div class="ui fluid form segment shipping">
    <h3 class="ui small header">
        <i class="user icon large"></i>
        <div class="content">
             معلومات الشحن            <div class="sub header">الرجاء ادخال بيانات الشحن</div>
        </div>
    </h3>
                <input type="hidden" name="shipping[save_in_address_book]" id="shipping:save_in_address_book" value="1"><input type="hidden" name="shipping[address_id]" id="shipping:address_id" value="11520443"><div class="shippingNewAddressForm">
        <div class="two fields">
            <div class="field">
                <label> الاسم الاول</label>
                <input placeholder=" الاسم الاول" type="text" name="shipping[firstname]" id="shipping:firstname" class="required" value="fayez"></div>
            <div class="field">
                <label> الاسم الاخير</label>
                <input placeholder=" الاسم الاخير" type="text" name="shipping[lastname]" id="shipping:lastname" class="required" value="almalki"></div>
        </div>
        <div class="field">
            <label> البريد الالكتروني</label>
            <input placeholder=" البريد الالكتروني" type="text" name="shipping[email]" id="shipping:email" class="required" value="f-933@hotmail.com"></div>

        <div class="field">
            <label> الدولة</label>
            <select name="shipping[country_id]" id="shipping:country_id" class="validate-select" title="الدولة" onchange="if(window.shipping)shipping.setSameAsBilling(false);"><option value="SA" selected>المملكة العربية السعودية</option></select></div>
        
        <div class="field">
            <label> المدينة</label>
            <select placeholder=" المدينة" type="text" name="shipping[city]" id="shipping:city" class="required"></select></div>

        <div class="field">
            <label>الحي</label>
            <select placeholder="الحي" type="text" name="shipping[region]" id="shipping:area" class="required"></select></div>

        <div class="field">
            <label>الشارع / اقرب معلم</label>
            <input placeholder="الشارع او اقرب معلم" type="text" name="shipping[street][]" id="shipping:street1" class="required"></div>
        <div class="field">
            <label>رقم العماره / الطابق</label>
            <input placeholder="رقم العماره / الطابق" type="text" name="shipping[street][]" id="shipping:street2"></div>

        <div class="two fields">

            <div class="field">
                <label> الرمز البريدي</label>
                <input placeholder=" الرمز البريدي" type="text" name="shipping[postcode]" id="shipping:postcode" class="required" value="31444"></div>

            <!--<div class="field">
                <label for="shipping:region_id" class="required"> الولاية - المحافظة</label>
                <div class="input-box">
                    <select id="shipping:region_id" name="shipping[region_id]" title=" الولاية - المحافظة" class="validate-select required">
                        <option value="">من فضلك اختر منطقة, ولاية أو مقاطعة</option>
                    </select>
                </div>
            </div>-->
            <!--<div class="field">
                <label for="shipping:region" class="required"> الولاية - المحافظة</label>
                <div class="input-box">
                    <input type="text" id="shipping:region" name="shipping[region]" value=""  title=" الولاية - المحافظة" class="input-text "/>
                </div>
            </div>-->
        </div>
        <div class="three fields gsTelephone">
            <label> رقم الهاتف</label>
            <div class="field" style="width: 25%;">
                <input placeholder="" type="text" name="shipping[telephone][]" id="shipping:addressCountryCode" class="required" value="" tabindex="-1" readonly></div>
            <div class="field" style="width: 75%;">
                <input placeholder="0512345678" type="text" name="shipping[telephone][]" id="shipping:telephone" class="required" value=""></div>
        </div>
                                <div id="shipping_error_messages" class="ui error message"></div>
    </div>
</div>        </div>
		<div class="column">
            <div id="shipping-method" class="ui form segment shipping-method">
    <div class="ui inverted dimmer">
        <div class="content">
            <div class="center"><div class="ui text loader">الرجاء الانتظار</div></div>
        </div> 
    </div>
    <h3 class="ui small header">
        <i class="truck icon large"></i>
        <div class="content">
            طريقة الشحن            <div class="sub header">اختر طريقه الشحن</div>
        </div>
    </h3>
            <dl class="sp-methods"><dt>تكلفة الشحن الموّحدة</dt>
            <div class="ui form">
                <div class="grouped inline fields">
                                                                                                        <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="shipping_method" value="flatrate_flatrate" id="s_method_flatrate_flatrate" checked><label></label>
                                    </div>
                                    <label for="s_method_flatrate_flatrate">موّحدة                                                                                                                        <span class="price">0  ر.س</span>                                                                            </label>
                                </div>
                                                                                        </div>
            </div>
                <script type="text/javascript">
            jQuery(function ($){
                $('#payment-form .radio input').attr('checked', false).eq(0).attr('checked', true);
                $('.form.payment').removeClass('error');
            });
        </script></dl><div class="ui error message"></div>
</div>
            <div class="ui form segment payment">
    <div class="ui inverted dimmer">
        <div class="ui text loader">الرجاء الانتظار</div>
    </div>
    <h3 class="ui small header">
        <i class="payment icon large"></i>
        <div class="content">
            بيانات الدفع            <div class="sub header">ما هي طريقه الدفع المفضله لديك؟</div>
        </div>
            </h3>
    <form id="payment-form">
    <div class="ui form">
        <div class="">
                                                                        <div class="inline field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="payment[method]" id="p_method_phoenix_cashondelivery" value="phoenix_cashondelivery" title="الدفع عند الاستلام" checked class="radio validate-one-required-by-name"><label></label>
                        </div>
                        <label class="truncate" for="p_method_phoenix_cashondelivery">
                            <div><span>الدفع عند الاستلام </span></div> 
                            <div><span><img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/phoenix_cashondelivery.png" class="phoenix_cashondelivery"></span></div>
                            <span class="clear"></span> 
                        </label>
                    </div>
                                                    <div class="payment_form_details">
                        <fieldset class="form-list"><ul class="ui list" id="payment_form_phoenix_cashondelivery" style="display:none;"><div class="item">سيتم احتساب <span class="price">25  ر.س</span> رسوم اضافيه.</div>
        			</ul></fieldset></div>
                                                                <div class="inline field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="payment[method]" id="p_method_payfortcc" value="payfortcc" title="البطاقة الائتمانية &lt;BR&gt; بطاقة مدى البنكية" class="radio validate-one-required-by-name"><label></label>
                        </div>
                        <label class="truncate" for="p_method_payfortcc">
                            <div><span>البطاقة الائتمانية <br> بطاقة مدى البنكية </span></div> 
                            <div><span><img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/payfortcc.png" class="payfortcc"></span></div>
                            <span class="clear"></span> 
                        </label>
                    </div>
                                                    <div class="payment_form_details">
                        <ul id="payment_form_payfortcc" class="form-list" style="display:none"><li>
        *حقول مطلوبة        <div class="input-box field">
            <label for="payfortcc_cc_owner" class="input-field">*الاسم على البطاقة</label>
            <input type="text" title="الاسم على البطاقة" class="input-text required-entry" id="payfortcc_cc_owner" name="" value="" maxlength="50"></div>
    </li>
    <!--<li>
        <div class="input-box field">
            <label for="payfortcc_cc_type" class="input-field">*نوع بطاقة الأتمان</label>
            <select id="payfortcc_cc_type" name="" class="required-entry validate-cc-type-select cc-dropdown">
                <option value="">--أختر من فضلك--</option>
                                        <option value="VI">Visa</option>
                            <option value="MC">MasterCard</option>
                        </select>
        </div>
    </li>-->
    <li>
        <div class="input-box field">
            <label for="payfortcc_cc_number" class="input-field">*رقم بطاقة الائتمان</label>
            <input type="text" id="payfortcc_cc_number" name="" title="رقم بطاقة الائتمان" class="input-text validate-cc-number validate-cc-type required-entry" value="" maxlength="16"></div>
    </li>
    <li id="payfortcc_cc_type_exp_div">
        <div class="input-box field">
            <label class="input-field">*تاريخ الانتهاء</label>
            <!-- workaround for semantic ui validation -->
            <label style="display:none" for="payfortcc_expiration" class="input-field">*شهر تاريخ انتهاء البطاقة</label>
            <label style="display:none" for="payfortcc_expiration_yr" class="input-field">*سنة تاريخ انتهاء البطاقة</label>
            <!-- workaround end -->
            <div class="v-fix">
                <select id="payfortcc_expiration" name="" class="month validate-cc-exp required-entry cc-dropdown half"><option value="" selected>الشهر</option><option value="1">01 - يناير</option><option value="2">02 - فبراير</option><option value="3">03 - مارس</option><option value="4">04 - أبريل</option><option value="5">05 - مايو</option><option value="6">06 - يونيو</option><option value="7">07 - يوليو</option><option value="8">08 - أغسطس</option><option value="9">09 - سبتمبر</option><option value="10">10 - أكتوبر</option><option value="11">11 - نوفمبر</option><option value="12">12 - ديسمبر</option></select><select id="payfortcc_expiration_yr" name="" class="year required-entry cc-dropdown half"><option value="" selected>السنة</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></div>
        </div>
    </li>
            <li id="payfortcc_cc_type_cvv_div">
        <div class="input-box field">
            <label for="payfortcc_cc_cid" class="input-field">*رقم تأكيد بطاقة الائتمان</label>
            <div class="v-fix">
                <input type="text" title="رقم تأكيد بطاقة الائتمان" class="input-text cvv required-entry validate-cc-cvn third" id="payfortcc_cc_cid" name="" value="" maxlength="4"><img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/verify-code-payfort.svg"></div>
        </div>
    </li>
    </ul><script type="text/javascript">
    payfortFort.BASE_URL = "https://www.goldenscent.com/";
    payfortFort.integrationType = "merchantPage2";
</script></div>
                                                                <div class="inline field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="payment[method]" id="p_method_banktransfer" value="banktransfer" title="حوالة بنكية" class="radio validate-one-required-by-name"><label></label>
                        </div>
                        <label class="truncate" for="p_method_banktransfer">
                            <div><span>حوالة بنكية </span></div> 
                            <div><span><img src="https://assets.goldenscent.com/skin/frontend/blacknwhite/default/images/banktransfer.png" class="banktransfer"></span></div>
                            <span class="clear"></span> 
                        </label>
                    </div>
                                                    <div class="payment_form_details">
                            <div class="ui basic segment" id="payment_form_banktransfer" style="display:none;">
        <div>
            <p class="banktransfer-instructions-content agreement-content">
                سيتم الشحن بعد تحويل المبلغ الى  أحد الحسابات التاليه :<br><br>
البنك الأهلي : <br>
رقم الحساب : 08660602000105<br><br>
IBAN:  SA 30 1000 0008 6606 0200 0105 <br><br>
بنك سامبا :<br>
رقم الحساب : 10950974<br><br>
IBAN:  SA89 4000 0000 0000 1095 0974<br><br>
بنك الراجحي<br><br>
رقم الحساب : 255608010127720<br>
IBAN: SA13 8000 0255 6080 1012 7720            </p>
        </div>
    </div>
                    </div>
                                    </div>
    </div>
</form>

<script>
    var autoSelectFirstMethod = "";
    jQuery(function ($){
        var payfort_json = function(){
            jQuery.ajax({'url':'https://www.goldenscent.com/easycheckout/index/savePayment/', 'type':'POST', 'data':{'payment[method]':'payfortcc'}}).done(function(response){jQuery('#checkout-review-table-wrapper').html(JSON.parse(response).update_section.html);});
        } ;
        $('#p_method_payfortcc').change(function() {
            payfort_json();
        });
        if($('#p_method_payfortcc').is(':checked')) { payfort_json();}
        setTimeout(function (){
            var radios = $('#payment-form .radio');
            if (!autoSelectFirstMethod) {
               radios.find('input').attr('checked', false).eq(0).click();
           }
       }, 200);
    });
 </script><div class="ui error message"></div>
</div>
<form id="discount-coupon-form" action="https://www.goldenscent.com/checkout/cart/couponPost/" method="post">
    <div class="column">
        <div class="ui fluid form segment">
            <h3 class="ui small header">
                <i class="dollar icon large"></i>
                <div class="content">
                    كوبونات الخصم                    <div class="sub header">لديك كوبون خصم؟</div>
                </div>
            </h3>
            <div class="fields">
                <div class="input-box field">
                    <label for="coupon-code">إذا كنت تملك كوبونا فقم بإدخال الكود.</label>
                    <input type="hidden" name="remove" id="remove-coupone" value="0"><input type="hidden" name="return_url" value="https://www.goldenscent.com/easycheckout/"><input type="text" title="كود الكوبون" class="input-text" id="coupon-code" name="coupon_code" value="" maxlength="50">
                     
                     
                    <div id="coupon-errors" class="ui error message">
                        <ul class="list"></ul></div>
                    <div id="coupon-success" class="ui success message hidden">
                        <ul class="list"></ul></div>
                     
                     
                    <div class="two fields">
                        <button type="button" title="نفذ" id="apply-coupon-button" class="apply-btn button ui teal small" onclick="discountForm.submit(false)" value="نفذ"><span><span>نفذ</span></span></button>
                        <button style="display:none" id="remove-coupon-button" type="button" title="إزالة" class="button ui small" onclick="discountForm.submit(true)" value="إزالة"><span><span>إزالة</span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
//<![CDATA[
    var discountForm = new VarienForm('discount-coupon-form');
    discountForm.submit = function(isRemove) {
        var form = jQuery('#discount-coupon-form');
        jQuery('#coupon-errors, #coupon-success').hide().find('.list').html('');

        if (isRemove) {
            $('coupon-code').removeClassName('required-entry');
            $('remove-coupone').value = "1";
        } else {
            $('coupon-code').addClassName('required-entry');
            $('remove-coupone').value = "0";
        }
        if (jQuery('#coupon-code').val() == ''){
            jQuery('#coupon-errors .list').append('<li>يرجى إدخال كود الخصم');
            jQuery('#coupon-errors').show();
            return;
        }

        jQuery.ajax({
            url: jQuery(form).attr('action'),
            dataType: 'json',
            data: jQuery(form).serialize(),
            type: 'post'
        }).done(function(response) {
            if (response.success.length > 0) {
                jQuery.each(response.success, function() {
                    jQuery('#coupon-success .list').append('<li>' + this + '');
                    jQuery('#coupon-success').removeClass('hidden').show();

                    if (isRemove) {
                        jQuery('#coupon-code').val('');
                        jQuery('#remove-coupon-button').hide();
                        jQuery('#apply-coupon-button').show();
                    } else {
                        jQuery('#remove-coupon-button').show();
                        jQuery('#apply-coupon-button').hide();
                    }
                });
                //refresh order info
                easyCheckout.savePayment();
            } else if (response.error.length > 0) {
                jQuery.each(response.error, function() {
                    jQuery('#coupon-errors .list').append('<li>' + this + '');
                    jQuery('#coupon-errors').show();
                    jQuery('#apply-coupon-button').show();
                });
            }
        });
        return false;

        if (isRemove) {
            $('coupon-code').removeClassName('required-entry');
            $('remove-coupone').value = "1";
        } else {
            $('coupon-code').addClassName('required-entry');
            $('remove-coupone').value = "0";
        }
        return VarienForm.prototype.submit.bind(discountForm)();
    }
//]]>
</script><style>
    #coupon-code{
        height:37px;
    }
</style><div class="ui form segment success">
            <div class="discount">
                <h3><i class="gift-box-icon"></i> أضف صندوق هديه</h3>
                <div class="discount-form">
                                            <!-- Already selected options list -->
                        <a class="remove-gift hidden" id="remove-gift">احذف</a>
                        <button type="button" id="showGiftWrapPopUpButton" title="Show Gift Wrap Options" class="options-btn" value="Show Gift Wrap Options">
                            <span>
                                <span> اعرض خيارات تغليف الهدايا</span>
                            </span>
                        </button>
                                    </div>
            </div>
            

<script type="text/javascript">
    var amgiftwrap_base_url = 'https://www.goldenscent.com/';
    var amgiftwrap_only_button = '0';
    var amgiftwrap_design_id = '';
    var amgiftwrap_card_id = '';
    var $j = jQuery;
    $j(document).ready(function () {
        /*
         *   delete default "Gift Message" boxes
         */

        $j('.remove-gift').removeAttr('href').click(function(){
           $j.fancybox.close();
           $j.get('https://www.goldenscent.com/giftwrap/index/deleteGiftBox/').done(function(){
               $j('.remove-gift').hide();
               easyCheckout.savePayment();//refresh review
            });
        });
        $j('#onepage-checkout-shipping-method-additional-load').remove();

        /*
         *   process GiftWrap buttons and show PopUp calls
         */
        $j('#showGiftWrapPopUpButton').click(function () {
            $j.fancybox('<div class="amgiftwrap-loader"><img src="https://www.goldenscent.com/media/amasty/amgiftwrap/loader.gif"><div>');
            $j.ajax({
                type: "POST",
                url: "https://www.goldenscent.com/giftwrap/index/getFormHtml/"
            })
                .done(function (data) {
                    $j.fancybox(data);

                    /*
                     *  enable tabs
                     */
                    (function () {
                        $j('.tabs').each(function (index, el) {
                            new CBPFWTabs(el);
                        });
                    })();

                    /*
                     *  select & apply stored data
                     */
                    if (amgiftwrap_design_id > 0) {
                        $j('.ca-choose.design[data-value="' + amgiftwrap_design_id + '"]').click();
                        $j('.remove-gift').show();
                    }
                    if (amgiftwrap_card_id > 0) {
                        $j('.ca-choose.card[data-value="' + amgiftwrap_card_id + '"]').click();
                        $j('.remove-gift').show();
                    }

                    //no redirection
                    amgiftwrap_only_button = 1;
                    $j('#amgiftwrap_popup_form_save_button').click(function () {
                         setTimeout(function(){
                             $j('.remove-gift').removeClass('hidden').show();
                             easyCheckout.savePayment();//refresh review
                         }, 2000);
                    });

                    $j('.remove-gift').removeAttr('href').click(function(){
                       $j.fancybox.close();
                       $j.get('https://www.goldenscent.com/giftwrap/index/deleteGiftBox/').done(function(){
                           $j('.remove-gift').hide();
                           easyCheckout.savePayment();//refresh review
                        });
                    });
                });
        });
    });

    jQuery('body').on('change', '.billingNewAddressForm :input', function() {
        var newAddressLi = jQuery("#billing-address-select_listbox li");
        newAddressLi.length && newAddressLi[newAddressLi.length-1].click();
    });
    jQuery('body').on('change', '.shippingNewAddressForm :input', function() {
        var newAddressLi = jQuery("#shipping-address-select_listbox li");
        newAddressLi.length && newAddressLi[newAddressLi.length-1].click();
    });
</script></div>
        </div>
		<div class="column">
            <div class="ui form segment review">
	<div class="ui inverted dimmer">
		<div class="ui text loader">الرجاء الانتظار</div>
	</div>
	<h3 class="ui small header reviewTop">
		<i class="cart icon large"></i>
		<div class="content">
            مراجعة الطلب            <div class="sub header">معلومات الطلب</div>
		</div>
	</h3>
  
    <style>
.notice{
	background:#BEA16C;
	padding: 8px 10px;
	margin-bottom: 10px;
	border-radius: 4px;
	font-weight: normal;
	color: #fff;
	text-align: center;
}
</style><div id="checkout-review-table-wrapper">
	    <table class="data-table ui collapsing basic table" id="checkout-review-table"><col><col width="1"><col width="1"><col width="1"><thead><tr><th rowspan="1">اسم المنتج</th>
                <th colspan="1" class="a-center">السعر</th>
                <th rowspan="1" class="a-center">الكمية</th>
                <th colspan="1" class="a-center">المجموع الفرعي</th>
            </tr></thead><tbody><tr><td><h3 class="product-name">مانسيرا فيلفيت فانيلا</h3>
                <dl class="item-options"><dt>Size</dt>
            <dd>120 مل                            </dd>
                    </dl></td>
            <td>
                            <span class="cart-price">
        
                            <span class="price">359  ر.س</span>            
        </span>
            </td>
        <td class="a-center">
                1            </td>
            <td>
                            <span class="cart-price">
        
                            <span class="price">359  ر.س</span>            
        </span>


            </td>
    </tr><tr><td><h3 class="product-name">عينة مجانية</h3>
            </td>
            <td>
                            <span class="cart-price">
        
                            <span class="price">0  ر.س</span>            
        </span>
            </td>
        <td class="a-center">
                1            </td>
            <td>
                            <span class="cart-price">
        
                            <span class="price">0  ر.س</span>            
        </span>


            </td>
    </tr></tbody><style>
.vat-msg{
    display: inline-block;
    font-size: 12px;
}
</style><tfoot><tr><td style="" colspan="3">
        المجموع     </td>
    <td style="" class="sub-total-price a-right">
        <span class="price">359  ر.س</span>    </td>
</tr><tr><td style="" colspan="3">
        رسوم الدفع عند الاستلام    </td>
    <td style="" class="a-right">
        <span class="price">25  ر.س</span>    </td>
</tr><tr class="summary-details-amrules summary-details" style="display:none;"><td class="a-right" colspan="3">
                <strong>خصم 10% عند إتمام الشراء</strong>                
            </td>
            <td class="a-right" rowspan="1">
                -<span class="price">36  ر.س</span>            </td>
        </tr><tr class="summary-total "><td colspan="3" style="" class="a-right">
                     <div class="discount-code-cart">خصم</div>
            </td>
    <td style="" class="a-right">
                    <span class="price">‏-36  ر.س</span>            </td>
</tr><tr><td style="" colspan="3">
        رسوم الشحن    </td>
    <td style="" class="a-right">
        <span class="price">0  ر.س</span>    </td>
</tr><!--
    <tr>
        <td style="" colspan="1">الضريبة</td>
        <td style="" class="a-right"><span class="price"><span class="price">16  ر.س</span></span></td>
    </tr>
--><tr><td style="" colspan="3">
        <strong>المجموع الكلي</strong>
    </td>
    <td style="" class="a-right">
        <strong><span class="price">348  ر.س</span></strong>
    </td>
</tr><tr><td colspan="4" style="" class="a-right"><span class="vat-msg">تتضمن الضريبة وجميع الرسوم المستحقة</span></td>
    </tr></tfoot></table></div>    <div class="checkout-agreements">
    </div>                		<div class="ui error message"></div>
</div>
<button id="placeOrderBtn" class="fluid ui teal huge button usePopup" style="" onclick="easyCheckout.saveOrder()" data-content="اضغط هنا لاتمام طلبك"> إتمام الشراء</button>	        </div>
	</div>
	<div id="pageDimmer" class="ui page dimmer">
		<div class="content">
			<div class="center">
				<h2 class="ui inverted icon header successDimmer" style="display: none">
					<i class="icon circular inverted emphasized green check"></i>
                    نرجو الانتظار...سنقوم بتحويلك لتأكيد الطلب                    <div class="sub header"></div>
				</h2>
				<h2 class="ui inverted icon header redirectDimmer" style="display: none">
					<i class="icon circular inverted emphasized green url"></i>
                    سيتم تحويلك الى بوابة الدفع                    <div class="sub header"></div>
				</h2>
			</div>
		</div>
	</div>
</div>
                        </div>
                    </div>
                </div>
                                

<!-- Category hit template -->
<template id="autocomplete_categories_template" style="display:none;"><div class="algoliasearch-autocomplete-hit" data-href="{{url}}">
        {{#image_url}}
            <div class="thumb">
                <img data-src="{{image_url}}"></div>
        <div style="display:none;">{{/image_url}}&gt;</div>

        <div class="info{{^image_url}}-without-thumb{{/image_url}}">
        <div style="display:none;">

            {{#_highlightResult.path}}
                {{{_highlightResult.path.value}}}
            {{/_highlightResult.path}}
            {{^_highlightResult.path}}
                {{{path}}}
            {{/_highlightResult.path}}

            {{#product_count}}
                <small>({{product_count}})</small>
            {{/product_count}}
        </div>

        </div>
        <div class="clearfix"></div>
    </div>
</template><!-- Page hit template --><template id="autocomplete_pages_template" style="display:none;"><div class="algoliasearch-autocomplete-hit" data-href="{{url}}">
        <div class="info-without-thumb" style="display:none;">
            {{{_highlightResult.name.value}}}

                <div class="details" style="display:none;">
                    {{{content}}}
                </div>

        </div>
        <div class="clearfix"></div>
    </div>
</template><!-- Extra attribute hit template --><template type="text/template" id="autocomplete_extra_template"><div class="algoliasearch-autocomplete-hit" data-href="{{url}}">
        <div class="info-without-thumb">
            {{{_highlightResult.value.value}}}
        </div>
        <div class="clearfix"></div>
    </div>
</template><!-- Suggestion hit template --><template style="display:none;" id="autocomplete_suggestions_template"><div class="algoliasearch-autocomplete-hit" data-href="{{url}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="algolia-glass-suggestion magnifying-glass" width="24" height="24" viewbox="0 0 128 128"><g transform="scale(2.5)"><path stroke-width="3" d="M19.5 19.582l9.438 9.438"></path><circle stroke-width="3" cx="12" cy="12" r="10.5" fill="none"></circle><path d="M23.646 20.354l-3.293 3.293c-.195.195-.195.512 0 .707l7.293 7.293c.195.195.512.195.707 0l3.293-3.293c.195-.195.195-.512 0-.707l-7.293-7.293c-.195-.195-.512-.195-.707 0z"></path></g></svg><div class="info-without-thumb">
            {{{_highlightResult.query.value}}}

            {{#category}}
                <span class="text-muted">خلال</span> <span class="category-tag">{{category}}</span>
            {{/category}}
        </div>
        <div class="clearfix"></div>
    </div>
</template><!-- General autocomplete menu template --><template style="display:none" type="text/template" id="menu-template"><div class="autocomplete-wrapper">
        <div class="col12">
            <div class="aa-dataset-products"></div>
        </div>
        <div class="col3">
            <div class="other-sections">
                <div class="aa-dataset-suggestions"></div>
                                    <div class="aa-dataset-0"></div>
                                    <div class="aa-dataset-1"></div>
                                    <div class="aa-dataset-2"></div>
                                    <div class="aa-dataset-3"></div>
                                    <div class="aa-dataset-4"></div>
                                    <div class="aa-dataset-5"></div>
                                    <div class="aa-dataset-6"></div>
                                    <div class="aa-dataset-7"></div>
                                    <div class="aa-dataset-8"></div>
                                    <div class="aa-dataset-9"></div>
                            </div>
        </div>
    </div>
</template><script>
    jQuery(function ($){
        $(window).on('scroll', function (){
            if($(window).scrollTop() > 0){
                $('#algolia-autocomplete-container .aa-dropdown-menu').addClass('fixedsearch');
            } else {
                $('#algolia-autocomplete-container .aa-dropdown-menu').removeClass('fixedsearch');
            }
        });
    });
</script><style type="text/css">
.fixedsearch{
  top:-21px !important;
}
</style><!-- Product hit template --><template style="display:none;" id="instant-hit-template">
    {{#hits}}
        <div class="col-md-4 col-sm-6 product-box">
            <div class="result-wrapper">
                <div class="col-xs-12 new-container">
                    <div class="" id="new-item">
                        <span class="new-item new-item-product-page" id="new">
                          جديد                        </span>
                    </div>
                </div>
              {{#news_from_date}}
                <input type="hidden" value="{{news_from_date}}" class="fromDate"><input type="hidden" value="{{news_to_date}}" class="toDate">
              {{/news_from_date}}
                <a data-href="{{url}}" class="result">
                  <span class="result-content">
                      <span class="result-thumbnail">
                          {{#image_url}}<img data-src="{{ image_url }}">{{/image_url}}
                          {{^image_url}}<span class="no-image"></span>{{/image_url}}
                         {{^in_stock}} <div class="out-of-stock-label">غير متوفر حالياً</div>{{/in_stock}}
                      </span>
                      <span class="result-sub-content">
                          <h3 class="result-title text-ellipsis">
                              {{{ _highlightResult.name.value }}}
                          </h3>
                          <h3 class="result-title brand-name">{{{ _highlightResult.brand_new.value }}}</h3>

                          <span class="ratings">
                              <span class="ratings-wrapper">
                                  <span class="ratings-sub-content">
                                      <span class="rating-box">
                                          <span class="rating" style="width:{{rating_summary}}%" width="148" height="148"></span>
                                      </span>
                                  </span>
                                  <span class="price">
                                      <span class="price-wrapper">
                                          <span>
                                              {{#price.SAR.default_original_formated}}
                                                  <span class="before_special">
                                                      {{price.SAR.default_original_formated}}
                                                  </span>
                                              {{/price.SAR.default_original_formated}}
                                              <span class="after_special {{#price.SAR.default_original_formated}}promotion{{/price.SAR.default_original_formated}}">
                                                  {{price.SAR.default_formated}}
                                              </span>
                                          </span>
                                      </span>
                                  </span>
                                  
                               

                                                              <span class="button-holder"><button type="button" title="أضف إلى السلة" class="button btn-cart" onclick="setLocation('')"><span><span>أضف إلى السلة</span></span></button></span>
                              </span>
                          </span>
                          <span class="result-description text-ellipsis">{{{ _highlightResult.description.value }}}</span>
                      </span>
                  </span>
                  <span class="clearfix"></span>
                </a>
            </div>
        </div>
    {{/hits}}
</template><!-- Search statistics template (used for displaying hits' count and time of query) --><template style="display:none;" id="instant-stats-template">
    {{#hasOneResult}}
        1 result found
    {{/hasOneResult}}

    {{#hasManyResults}}
        {{^hasNoResults}}
            {{first}}-{{last}} من        {{/hasNoResults}}
       {{#helpers.formatNumber}}{{nbHits}}{{/helpers.formatNumber}} تم العثور خلال    {{/hasManyResults}}

    خلال {{seconds}} ثواني</template><!-- Refinements lists item template --><template style="display:none;" id="refinements-lists-item-template"><label class="{{cssClasses.label}}">
        <input type="checkbox" class="{{cssClasses.checkbox}}" value="{{name}}">{{name}}
        {{#isRefined}}<span class="cross-circle"></span>{{/isRefined}}
        <span class="{{cssClasses.count}}">
            {{#helpers.formatNumber}}{{count}}{{/helpers.formatNumber}}
        </span>
    </label>
</template><!-- Current refinements template --><template style="display:none;" type="text/template" id="current-refinements-template"><div class="cross-wrapper">
        <span class="clear-cross clear-refinement"></span>
    </div>
    <div class="current-refinement-wrapper">
        {{#label}}
            <span class="current-refinement-label">{{label}}{{^operator}}:{{/operator}}</span>
        {{/label}}

        {{#operator}}
            {{{displayOperator}}}
        {{/operator}}

        {{#exclude}}-{{/exclude}}

        <span class="current-refinement-name">{{name}}</span>
    </div>
</template></div>
        </div>
        <script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 965382119;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script><script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script><noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/965382119/?value=0&amp;guid=ON&amp;script=0"></div>
</noscript>

        <script type="text/javascript">
            var easyCheckoutDataLayer = [
                {
                    domain: baseUrl
                }
            ];
        </script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"a6d12c656b","applicationID":"154606972","transactionName":"MgQGYEZQXhcEWxEMWwtOJVdAWF8KSl0EFk0GCQFXX15FEEpRCwFRHU4NWlBUSA==","queueTime":0,"applicationTime":1588,"atts":"HkMFFg5KTRk=","errorBeacon":"bam.nr-data.net","agent":""}</script></body></html>
