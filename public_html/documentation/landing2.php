
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="keywords" content="Twitter, tweets, scheduled tweets, buffer, drip-feed, schedule, bookmarklet, chrome extension, twitter buffer, twitter queue, queue, facebook, facebook scheduling, social media, social media management, linked in"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<meta name="apple-itunes-app" content="app-id=490474324">


		<link rel="shortcut icon" href="https://d389zggrogs7qo.cloudfront.net/images/favicon.ico" />
		<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/noojglkidnpfjbincgijbaiedldjfbhh">
		<link href='//fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>

		<title>Ghost Writer</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UgUPVVJbGwACUVlRBAA="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&&console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(i.console=!0,-1!==n.indexOf("dev")&&(i.dev=!0),-1!==n.indexOf("nr_dev")&&(i.nrDev=!0))}catch(a){}i.nrDev&&r.on("internal-error",function(t){e(t.stack)}),i.dev&&r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&&(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:24,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,t(5),window.onerror=e;try{throw new Error}catch(f){"stack"in f&&(t(1),t(2),"addEventListener"in window&&t(3),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)&&t(4),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:11,2:10,3:8,4:12,5:3,6:25,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t){if(window.addEventListener){var e=t("handle"),n=t("ee");t(1),window.addEventListener("click",function(){e("inc",["ck"])},!1),window.addEventListener("hashchange",function(){e("inc",["hc"])},!1),n.on("pushState-start",function(){e("inc",["ps"])})}},{1:9,ee:"QJf3ax",handle:"D5DuLP"}],6:[function(t){t("loader").features.ins=!0},{loader:"G9z0Bl"}],7:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(1),i=t(2);t("loader").features.stn=!0,t(3);var a=Event;n.on("fn-start",function(t){var e=t[0];e instanceof a&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof a&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),i.on("fn-start",function(){this.bstStart=Date.now()}),i.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:11,2:10,3:9,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],8:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=t("ee").create(),i=t(1)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t,e){function n(){return s}if(t[1]){var r=t[1];if("function"==typeof r){var s=a(r,"nr@wrapped",function(){return i(r,"fn-",n,r.name||"anonymous")});this.wrapped=t[1]=s,o.emit("initEventContext",[t,e],this.wrapped)}else"function"==typeof r.handleEvent&&i.inPlace(r,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:26,ee:"QJf3ax",gos:"7eSDFh"}],9:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState","replaceState"],"-")},{1:26,ee:"QJf3ax"}],10:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:26,ee:"QJf3ax"}],11:[function(t,e){function n(t,e,n){t[0]=i(t[0],"fn-",null,n)}function r(t,e,n){function r(){return a}this.ctx={};var a={"nr@context":this.ctx};o.emit("initTimerContext",[t,n],a),t[0]=i(t[0],"fn-",r,n)}var o=t("ee").create(),i=t(1)(o);e.exports=o,i.inPlace(window,["setTimeout","setImmediate"],"setTimer-"),i.inPlace(window,["setInterval"],"setInterval-"),i.inPlace(window,["clearTimeout","clearImmediate"],"clearTimeout-"),o.on("setInterval-start",n),o.on("setTimer-start",r)},{1:26,ee:"QJf3ax"}],12:[function(t,e){function n(){f.inPlace(this,p,"fn-",o)}function r(t,e){f.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").create(),s=t(1),c=t(2),f=c(a),u=c(s),d=window.XMLHttpRequest,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=a,window.XMLHttpRequest=function(t){var e=new d(t);try{a.emit("new-xhr",[],e),e.hasOwnProperty("addEventListener")&&u.inPlace(e,["addEventListener","removeEventListener"],"-",o),e.addEventListener("readystatechange",n,!1)}catch(r){try{a.emit("internal-error",[r])}catch(i){}}return e},i(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{1:8,2:26,ee:"QJf3ax"}],13:[function(t){function e(t){var e=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!e.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=n(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(e.cat=d.split(", ").pop())}}else e.status=0;r.cbTime=this.cbTime,o("xhr",[e,r,this.startTime])}}}function n(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1),u=window.XMLHttpRequest;t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=e,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,e){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=n(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{a.emit("internal-error",[n])}catch(r){}}};for(var u=0;c>u;u++)e.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof u&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof u&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof u&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:14,3:12,4:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],14:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],15:[function(t,e){function n(t){return function(){r(t,[(new Date).getTime()].concat(i(arguments)))}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(t,e){window.NREUM[e]=n("api-"+e)}),e.exports=window.NREUM},{1:24,2:25,handle:"D5DuLP"}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):void(r.q&&(r.q[t]||(r.q[t]=[]),r.q[t].push(e)))}var r=t("ee").create();e.exports=n,n.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info,e=f.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){s(d,function(e,n){e in t||(t[e]=n)});var n="https"===u.split(":")[0]||t.sslForHttp;p.proto=n?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=p.proto+t.agent,e.parentNode.insertBefore(r,e)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=window,f=c.document;t(2);var u=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-768.min.js"},p=e.exports={offset:i(),origin:u,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),c.addEventListener("load",n,!1)):(f.attachEvent("onreadystatechange",r),c.attachEvent("onload",n)),a("mark",["firstbyte",i()])},{1:24,2:15,handle:"D5DuLP"}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],24:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&&(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],25:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],26:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@original",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=t,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:25,ee:"QJf3ax"}]},{},["G9z0Bl",4,13,7,6,5]);</script>

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="apple-touch-icon" sizes="57x57" href="https://d389zggrogs7qo.cloudfront.net/images/ios/touch-icon-iphone-57.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="https://d389zggrogs7qo.cloudfront.net/images/ios/touch-icon-iphone-114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="https://d389zggrogs7qo.cloudfront.net/images/ios/touch-icon-iphone-72.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="https://d389zggrogs7qo.cloudfront.net/images/ios/touch-icon-iphone-144.png" />

		<link rel="stylesheet" href="https://d389zggrogs7qo.cloudfront.net/css/homepage_bundle.0bac6a1e973d65078d37ab884989bb43.gz.css" type="text/css" />
		<link rel="stylesheet" href="https://d389zggrogs7qo.cloudfront.net/webfonts/webfonts_bundle.0c901bab6211068beeeedc32e2ba57a9.gz.css" type="text/css" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

		<script src="https://d389zggrogs7qo.cloudfront.net/js/shared/base.min.a785033f1d469fbce94f3e5cb5f5d4fa.js"></script>

		<meta name="p:domain_verify" content="e2e101dca8a3f2dbf1cad5fc55a44da1"/> <!-- pinterest verification -->

		<!-- twitter ads -->
		<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
		<script type="text/javascript">twttr.conversion.trackPid('l6nqy', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
		<noscript>
			<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l6nqy&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
			<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l6nqy&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
		</noscript>
		<!-- end twitter ads -->

		<!-- Facebook Conversion Code for Registrations -->
		<script>(function() {
				var _fbq = window._fbq || (window._fbq = []);
				if (!_fbq.loaded) {
					var fbds = document.createElement('script');
					fbds.async = true;
					fbds.src = '//connect.facebook.net/en_US/fbds.js';
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(fbds, s);
					_fbq.loaded = true;
				}
			})();
			window._fbq = window._fbq || [];
			window._fbq.push(['track', '6028060374356', {'value':'0.00','currency':'USD'}]);
		</script>
		<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6028060374356&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
		<!-- End Facebook Conversion Code for Registrations -->



		<script src="https://d389zggrogs7qo.cloudfront.net/js/bundles/homepage_bundle.6f7627718ef970c7605fca76b349c028.gz.js"></script>
		<script src="https://www.google.com/jsapi"></script>

		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-18896347-1']);
			_gaq.push(['_setDomainName', '.buffer.com']);
			_gaq.push(['_setCustomVar', 1, 'Plan', 'null', 1]);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<script type='text/javascript'>
			var _bmq = _bmq || [];
		</script>
	</head>
	<body id="start_page" class="nobar">
		<ul class="js-notices notices clearfix">
		</ul>


		<div class="new-landing-page">

			<section class="navigation grid" id="js-navigation">
				<div class="container">
					<div class="controls">
						<a href="/" class="logo">Just Talking</a>
						<ul class="nav">
							<li>
								<a href="/" class="js-sign-in-only">Log in</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<div class="headings">
				<h1>Personalized Tweet Service for Busy Networkers</h1>
				<h2>Reputation Building and Social Media Management</h2>
			</div>
			<div class="signin">
				<a href="/oauth/twitter?csrf_token=91184538286d6296a262850552008965&authenticate=true&authorize=true"
					class="large twitter button btn-rounded">
					<i class="ss-icon ss-social">twitter</i> Sign up with Twitter
				</a>
				<div class="secondary">
					<a href="#" class="js-sign-in-email">or sign up with email</a>
				</div>
				<div class="business-cta">
					<a href="/business?utm_campaign=landing_page" class="business-button large button btn-rounded">See plans for Teams and Agencies</a>
				</div>
			</div>


			<div class="below">
				<div id="explore-buffer">
					<p>DISCOVER BUFFER FOR:</p>
				</div>

				<div id="landing-tabs">
					<ul>
						<li id="li_individual" onclick="switchTab('individual')" class="active"><a>Individuals</a>
						</li>
						<li id="li_business" onclick="switchTab('business')"><a>Teams and Agencies</a></li>
					</ul>

							<div class="longform-section longform-section-gray">
								<div class="longform-container">
									<h4 class="tagline-title">Daily tweet recommendations recommended according to your personality,
									aspirations, and interests.  </h4>

									<p>Ghost tailors and recommends your tweets according to need to build your reputation and following
										to result in the growth of your name. .</p>

									<p>Professional social media recommeneded tweets and scheduling according to your personality.</p>

									<p>Final editing, scheduling, and approval by you (if desired)</p>


									<div class="tagline-link">
										<a href="#" class="js-sign-in icon-arrow icon-arrow-schedule" target="_blank"></a>
									</div>


								</div>
							</div>
							<div class="homepage-img start-img1" id="homepage-img1"></div>
							<div class="longform-section longform-section-white" id="schedule-section">
								<div class="longform-container">
									<h4 class="tagline-title">Build your repuation without the effort.</h4>

									<p>Easy customization of timing, tweet categories, and interests.</p>

									<div class="tagline-link">
										<a href="#" class="js-sign-in icon-arrow icon-arrow-schedule"  target="_blank"></a>
									</div>
								</div>
							</div>

													<div class="social social-placeholder"></div>
												</div>
											</div>
											<a href="#" class="large  js-sign-in-business twitter button btn-rounded schedule-cta">
												Schedule your first post now
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="business" style="display: none">
							<div class="longform-section longform-section-white" id="testimonial-section">
								<div class="longform-container">
									<h4 class="tagline-title">Join the 2,500+ businesses and agencies already using Buffer</h4>
								</div>
							</div>
							<div class="longform-section longform-section-gray">
								<div class="longform-container">
									<h4 class="tagline-title">Schedule content</h4>

									<p>Buffer allows your marketing team to share content at the best possible times throughout the day in order to drive more traffic and increase fan engagement. Get the most out of your content.</p>

									<div class="tagline-link">
										<a href="#" class="js-sign-in-business icon-arrow icon-arrow-business" target="_blank"></a>
									</div>


								</div>
							</div>
							<div class="homepage-img" id="homepage-img6"></div>
							<div class="longform-section longform-section-white" id="schedule-section">
								<div class="longform-container">
									<h4 class="tagline-title">Collaborate with your team</h4>

									<p>Streamline your social media management by efficiently coordinating with your team. Allow multiple people to contribute while easily managing permissions and moderating contributions.
									</p>

									<div class="tagline-link">
										<a href="#" class="js-sign-in-business icon-arrow icon-arrow-business"  target="_blank"></a>
									</div>


								</div>
							</div>
							<div class="homepage-img" id="homepage-img7"></div>
							<div class="longform-section longform-section-black">
								<div class="longform-container">
									<h4 class="tagline-title">Identify insights</h4>

									<p>Easily visualize the impact of your social media marketing with our rich analytics. Track engagement, conversions, and trends in order to prioritize your efforts.
									</p>
								</div>
							</div>
							<div class="homepage-img" id="homepage-img8"></div>
							<div class="longform-section longform-section-gray" id="social-section">
								<div class="longform-container">
									<h4 class="tagline-title">Buffer is available on all of your favorite social networks</h4>

									<div>
										<div class="social-section">
											<div class="social-container">
												<div class="social-row">
													<div class="social social-twitter">
														<div class="social-img social-twitter-icon"></div>
														<h5>TWITTER</h5>
														<p>Profiles.</p>
													</div>

												</div>
											</div>
											<a href="#" class="large twitter js-sign-in-business button btn-rounded schedule-cta">
												Start your free Ghost Writer Business Trial
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<script>
					function switchTab(tab) {
						document.getElementById("individual").style.display = "none";
						document.getElementById("business").style.display = "none";
						document.getElementById("li_individual").setAttribute("class", "");
						document.getElementById("li_business").setAttribute("class", "");
						document.getElementById(tab).style.display = "block";
						document.getElementById("li_" + tab).setAttribute("class", "active");
					}
				</script>
				<!-- brian refactor -->

				<section class="footer grid" id="js-footer">
					<div class="container">
						<div class="grid-row">
							<div class="col one-fifth">
								<h6>Buffer</h6>
								<ul class="blank footer-list">
									<li><a class="footer-list-item" href="/about">About Us</a></li>
									<li><a class="footer-list-item" href="/about/team">Our Team</a></li>
									<li><a class="footer-list-item" href="http://buffer.uservoice.com/forums/257855-feedback-and-ideas/status/354259">Feedback</a></li>
									<li><a class="footer-list-item" href="mailto:hello@bufferapp.com">Contact Us</a></li>
									<li><a class="footer-list-item" href="/press">Press</a></li>
								</ul>
							</div>

							<div class="col one-fifth">
								<h6>Help &amp; Support</h6>
								<ul class="blank footer-list">
									<li><a class="footer-list-item" href="/faq">FAQ</a></li>
									<li><a class="footer-list-item" href="/guides">Guides &amp; Tutorials</a></li>
									<li><a class="footer-list-item" href="/oops">Password Reset</a></li>
									<li><a class="footer-list-item" href="mailto:hello@bufferapp.com">Contact Us</a></li>
									<li><a class="footer-list-item" href="https://twitter.com/buffer">Tweet @ Us</a></li>
								</ul>
							</div>



							<div class="col one-fifth">
								<h6>Culture</h6>
								<ul class="blank footer-list">
									<li><a class="footer-list-item" href="https://blog.bufferapp.com">Social Media Blog</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="grid-row footer-copyright">
						Copyright &copy; 2015 GhostWriter &bull; <a href="#">Privacy</a> &bull; <a href="#">Terms</a> &bull; <a href="#">Security</a>
					</div>
				</section>

				</html -->
			</div>



		</div>

		<script>
			$(function() {
				$('.expand-footer').click(function() {
					$(this).hide()
					$('.more-footer').fadeIn(200);
				});
			});
		</script>


		<!-- this is the login modal partial -->
		<div id="modal-login-only" class="reveal-modal login-modal ajax js-login-modal">
	<span class="or-wrapper">
			<span >Login to your Buffer account</span>
	</span>
			<div class="row social-buttons js-normal-signup"
				  style="">
				<a href="/oauth/twitter?csrf_token=91184538286d6296a262850552008965&skip_signup=true"
					class="large twitter button">
					<i class="ss-icon ss-social">twitter</i> Login with Twitter
				</a>
				<a href="/oauth/facebook?csrf_token=91184538286d6296a262850552008965&skip_signup=true"
					class="large facebook button">
					<i class="ss-icon ss-social">facebook</i> Login with Facebook
				</a>
				<a href="/oauth/linkedin?csrf_token=91184538286d6296a262850552008965&skip_signup=true"
					class="large linkedin button">
					<i class="ss-icon ss-social">linkedin</i> Login with LinkedIn
				</a>
			</div>

			<form action="/signin" method="post" class="js-normal-signup"
					style="">
				<div class="content row">

			<span class="or-wrapper">
				<span class="or-text">or</span>
			</span>

					<div class="row">
						<input type="text" name="email" id="email" autocomplete="off" placeholder="Your Email Address"/>
					</div>

					<div class="row">
						<input type="password" name="password" id="password" autocomplete="off" placeholder="Your Password"/>
						<input type="hidden" name="lat" id="lat" />
						<input type="hidden" name="lng" id="lng" />
						<input type="hidden" name="csrf_token" id="csrf" value="91184538286d6296a262850552008965" />
					</div>


					<div class="submit-actions" style="width: 100%">
						<input type="submit" name="signin" value="Login" class="btn-primary create-primary js-signin-full" style="width: 100%"/>
						<input type="hidden" name="skip_signup" id="skip_signup" value="true" />
					</div>

					<div class="forgot-pass ">
						<a href="/oops">Forgot password?</a>
					</div>
				</div>
			</form>
		</div>
		<div id="modal-login" class="reveal-modal login-modal ajax js-login-modal ">
			<div class="row social-buttons js-normal-signup"
				  style="">
				<a href="/oauth/twitter?csrf_token=91184538286d6296a262850552008965"
					class="large twitter button">
					<i class="ss-icon ss-social">twitter</i> Sign in with Twitter
				</a>
				<a href="/oauth/facebook?csrf_token=91184538286d6296a262850552008965"
					class="large facebook button">
					<i class="ss-icon ss-social">facebook</i> Sign in with Facebook
				</a>
				<a href="/oauth/linkedin?csrf_token=91184538286d6296a262850552008965"
					class="large linkedin button">
					<i class="ss-icon ss-social">linkedin</i> Sign in with LinkedIn
				</a>
			</div>
			<form action="/signin" method="post" class="js-normal-signup"
					style="">
				<div class="content row">

			<span class="or-wrapper">
				<span class="or-text">or</span>
			</span>

					<div class="row">
						<input type="text" name="email" id="email" autocomplete="off" placeholder="Your Email Address"/>
					</div>

					<div class="row">
						<input type="password" name="password" id="password" autocomplete="off" placeholder="Your Password"/>
						<input type="hidden" name="lat" id="lat" />
						<input type="hidden" name="lng" id="lng" />
						<input type="hidden" name="csrf_token" id="csrf" value="91184538286d6296a262850552008965" />
					</div>


					<div class="submit-actions">
						<input type="submit" name="signin" value="Create Account" class="btn-primary create-primary"/>
						<input type="submit" name="signin" value="Sign In" class="simple submit-primary" />
					</div>

					<div class="checkbox">
						<input type="checkbox" name="remember" id="remember" checked="checked" />
						<label for="remember">Keep me signed in</label>
					</div>

					<div class="forgot-pass ">
						<a href="/oops">Forgot password?</a>
					</div>
				</div>
			</form>
		</div>
		<div id="modal-login-trial" class="reveal-modal login-modal ajax js-login-modal">
			<form action="/signin" method="post" class="chunky-form">
				<input type='hidden' name='trial-plan' value='' id='business-login-with-trial'>

				<div class="row no-border no-padding description">
					<h4>We're setting up your trial...</h4>
					<h5>Create a free account below or log in to your existing Ghost account!</h5>
					<div class="row no-border no-padding">
						<label for="email">Your email</label>
						<input type="text" name="email" id="email" autocomplete="off"/>
					</div>
					<div class="row no-border no-padding">
						<label for="password">Your password</label>
						<input type="password" name="password" id="password" autocomplete="off" />
						<input type="hidden" name="csrf_token" value="91184538286d6296a262850552008965" />
						<input type="hidden" name="lat" id="lat" />
						<input type="hidden" name="lng" id="lng" />
					</div>
					<div class="checkbox">
						<input type="checkbox" name="remember" id="remember" checked="checked" /><label for="remember">Keep me signed in</label>
					</div>
					<div class="submit-actions">
						<input type="submit" name="signin" value="Create Account" class="blue create-primary"/> <span class="or-text">or</span> <input type="submit" name="signin" value="Sign In" class="simple submit-primary" />
					</div>
				</div>
			</form>
		</div>
		<div id="modal-login-email" class="reveal-modal login-modal ajax js-login-modal">
	<span class="or-wrapper">
			<span>Sign up with Email</span>
	</span>
			<form action="/signin" method="post" class="js-normal-signup">
				<div class="content row">

					<div class="row">
						<input type="text" name="email" id="email" autocomplete="off" placeholder="Your Email Address"/>
					</div>

					<div class="row">
						<input type="password" name="password" id="password" autocomplete="off" placeholder="Your Password"/>
						<input type="hidden" name="lat" id="lat" />
						<input type="hidden" name="lng" id="lng" />
						<input type="hidden" name="csrf_token" id="csrf" value="91184538286d6296a262850552008965" />
					</div>


					<div class="checkbox">
						<input type="checkbox" name="remember" id="remember" checked="checked" /><label for="remember">Keep me signed in</label>
					</div>

					<div class="forgot-pass " >
						<a href="/oops">Forgot password?</a>
					</div>

					<div class="submit-actions">
						<input type="submit" name="create_account" value="Create account" class="btn-primary js-signin-full btn-rounded" id="create-account"/>
						<input type="hidden" name="skip_signup" id="skip_signup" value="false" />

					</div>


				</div>
			</form>
		</div>

		<script>
			buffer.csrfToken = "91184538286d6296a262850552008965";
			buffer.data.isOptimal = false;

		</script>


		<!-- AddThis-->
		<script type="text/javascript"
				  src="//s7.addthis.com/js/300/addthis_widget.js#provider=buffer">
		</script>


		<script type="text/html" id="template-notice">
			{{#message}}
			<span>
			<span class="message">{{{message}}}</span>
			{{#action}}
			<a href="{{url}}"{{#id}} id="{{id}}"{{/id}} class="cta">{{text}}</a>
				{{/action}}
		</span>
			{{/message}}
		</script>


		<script>
			$('.js-sign-in-only').click(function(ev){
				ev.preventDefault();
				$('#modal-login-only').reveal();
				setTimeout(function(){$('div#modal-login-only input#email').focus()}, 500);
			});
		</script>

		<script>
			$('.js-sign-in-email').click(function(ev){
				ev.preventDefault();
				$('#modal-login-email').reveal();
				setTimeout(function(){$('div#modal-login-email input#email').focus()}, 500);
			});
		</script>

		<script>
			$('.js-sign-in-business').click(function(ev){
				ev.preventDefault();
				$('#modal-login-trial').reveal();
				setTimeout(function(){$('div#modal-login-trial input#email').focus()}, 500);
			});
		</script>

		<script type="text/javascript" defer>
			var _kiq = _kiq || [];
			(function(){
				setTimeout(function(){
					var d = document, f = d.getElementsByTagName('script')[0], s = d.createElement('script'); s.type = 'text/javascript';
					s.async = true; s.src = '//s3.amazonaws.com/ki.js/50685/d9G.js'; f.parentNode.insertBefore(s, f);
				}, 1);
			})();
		</script>



		<script>
			$(function() {
				$('.expand-footer').click(function() {
					$('.more-footer').fadeIn(200);
					$(this).animate({ 'opacity': '0' });
				});
			});
		</script>

		<div id="supportbar">
			<a href="mailto:hello@bufferapp.com" class="email">Get in Touch</a>
			<a href="http://buffer.uservoice.com/forums/85149-general" target="_blank" class="uservoice">Submit an Idea</a>
		</div>

		<div id="modal-support" class="reveal-modal">
			<div class="content">
				<p class="loading">Loading...</p>
			</div>
			<a class="close-reveal-modal" title="Close">&#215;</a>
		</div>


		<script>
			buffer.csrf = "91184538286d6296a262850552008965";
		</script>

		<script>
			buffer.data.safeimage_key = "";
		</script>

		<script src="https://d389zggrogs7qo.cloudfront.net/js/specific/buffermetrics.min.5cf5e1d04e5f254e2c93148a60999518.js"></script>



		<script src="//d2wy8f7a9ursnm.cloudfront.net/bugsnag-2.min.js"
				  data-apikey="0f9c7d216f9500a7f4472bd44986692c"
				  autoNotify="false"></script>
		<script>
			// Manually set onerror to avoid Bugsnag's wrap funciton
			window.onerror = function(message, url, lineNo, charNo, exception){
				Bugsnag.notifyException(exception);
			}
		</script>

		<!--  Quantcast Tag -->
		<script>
			qcdata = {} || qcdata;
			(function(){
				var elem = document.createElement('script');
				elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://pixel") + ".quantserve.com/aquant.js?a=p-rw_1uEX-gMkjA";
				elem.async = true;
				elem.type = "text/javascript";
				var scpt = document.getElementsByTagName('script')[0];
				scpt.parentNode.insertBefore(elem,scpt);
			}());


			var qcdata = {qacct: 'p-rw_1uEX-gMkjA',
				orderid: '',
				revenue: ''
			};
		</script>
		<noscript>
			<img src="//pixel.quantserve.com/pixel/p-rw_1uEX-gMkjA.gif?labels=_fp.event.Default" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
		</noscript>
		<!-- End Quantcast Tag -->
		<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"222b46027f","applicationID":"3258331","transactionName":"NFdbYBZZWBUDB0FdVg0deFcQUVkITSxaWVxMW1dQAUA=","queueTime":0,"applicationTime":63,"atts":"GBBYFl5DSxs=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-768.min.js"}</script></body>
</html>
