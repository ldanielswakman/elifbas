








$(window).resize(function() {
  	resized();
});

$(window).load(function() {
  	
  	loaded();
  	resized();
  	buttonize();
  	
});

$(window).scroll(function() {
	var offset = window.pageYOffset;
	var trgt = offset/2;
	TweenMax.to($('.slowScroll'), 0.25, {marginTop:trgt, force3D: true});
});

var resized = function() {
	updateGlobals();
	if(wW<=1024) {
		$('div#homeImage img').css('height','auto').css('width','100%');
	}else{
		var iH = wH-300;
		$('div#homeImage img').css('height',iH+'px').css('width','auto');
	}
	if(wH<=690) {
		var iH = wH-200;
		$('div#homeImage img').css('height',iH+'px').css('width','auto');
	}
	
},

loaded = function() {
	TweenMax.to($('body'), 0.5, {opacity:1});
	if ($('body').checkHasClass('home')==='true') {
		runHome();
	}
	if ($('body').checkHasClass('page-template-page_egitimler')==='true') {
		runEgitimler();
	}
	if ($('body').checkHasClass('page-template-page_tiyatro')==='true') {
		runTiyatro();
	}
	if ($('body').checkHasClass('page-template-page_hakkimda')==='true') {
		runHakkimda();
	}
	if ($('body').checkHasClass('page-template-page_iletisim')==='true') {
		runIletisim();
	}
},

runHome = function() {

	console.log('run Home');

	var 	homeBigText = $('div#homeBigText'),
			homeSmallText = $('div#homeSmallText'),
			homeImage = $('div#homeImage'),
			siteBranding = $('div.site-branding'),
			headerBrush = $('div#headerBrush')
	;
	
	TweenMax.to(homeBigText, 0, {x:-100});
	TweenMax.to(homeImage, 0, {x:100});
	TweenMax.to(homeSmallText, 0, {x:-100});
	TweenMax.to(headerBrush, 0, {opacity:0, x:-20});
	TweenMax.to(homeBigText, 2, {x:0, opacity:1, force3D: true});
	TweenMax.to(homeImage, 2, {x:0, opacity:1, delay:1, force3D: true});
	TweenMax.to(homeSmallText, 2, {x:0, opacity:1, delay:1.5, force3D: true});
	TweenMax.to(siteBranding, 2, {opacity:1, delay:2, force3D: true});
	TweenMax.to(headerBrush, 2, {x:0, opacity:1, delay:2.5, force3D: true});
	
	$.each( $('li.menu-item') , function( k, v ) {
	
		var _d = 3 + (k*0.15);
		TweenMax.to($(this), 2, {opacity:1, delay:_d});
	
	});
	
},

runEgitimler = function() {

	var		siteBranding = $('div.site-branding'),
			headerEgitimlerContainer = $('div#headerEgitimlerContainer')
	;

	TweenMax.to($(siteBranding), 2, {opacity:1, delay:0});
	TweenMax.to(headerEgitimlerContainer, 2, {opacity:1, backgroundPosition:"100px 0px", delay:0});

	$.each( $('li.menu-item') , function( k, v ) {
	
		var _d = 0.15 + (k*0.15);
		TweenMax.to($(this), 2, {opacity:1, delay:_d});
	
	});

	$.each( $('div.egitim') , function( k, v ) {
	
		var _d = 0.5 + (k*0.35);
		TweenMax.to($(this), 2, {opacity:1, delay:_d});
	
	});

	var egitimDetailButton = $('div.egitimDetailButton');

	$.each( egitimDetailButton, function( k, v ) {
	
		$(this).mouseup(function() {
			$(this).parent().find('div.egitimDetail').css('height','auto');
			TweenMax.to($(this).parent().find('div.egitimDetail'), 2, {opacity:1});
		});
	
	});

},

runHakkimda = function() {
	
	var		siteBranding = $('div.site-branding')
	;

	TweenMax.to($(siteBranding), 2, {opacity:1, delay:0});
	TweenMax.to($('span#hakkimdaInfo1'), 2, {opacity:1, delay:0.5});
	TweenMax.to($('span#hakkimdaInfo2'), 2, {opacity:1, delay:0.75});
	TweenMax.to($('span#hakkimdaInfo3'), 2, {opacity:1, delay:0.9});
	TweenMax.to($('div#hakkimdaContent p'), 2, {opacity:1, delay:1.5});

	

	$.each( $('li.menu-item') , function( k, v ) {
	
		var _d = 0.15 + (k*0.15);
		TweenMax.to($(this), 2, {opacity:1, delay:_d});
	
	});

	

},

runTiyatro = function() {

	var		siteBranding = $('div.site-branding')
	;

	TweenMax.to($(siteBranding), 2, {opacity:1, delay:0});

	$.each( $('li.menu-item') , function( k, v ) {
	
		var _d = 0.15 + (k*0.15);
		TweenMax.to($(this), 2, {opacity:1, delay:_d});
	
	});

},

runIletisim = function() {

	var		siteBranding = $('div.site-branding')
	;

	TweenMax.to($(siteBranding), 2, {opacity:1, delay:0});

	$.each( $('li.menu-item') , function( k, v ) {
	
		var _d = 0.15 + (k*0.15);
		TweenMax.to($(this), 2, {opacity:1, delay:_d});
	
	});

	$.each( $('div.itelisimItem') , function( k, v ) {
	
		var _d = 0.5 + (k*0.15);
		TweenMax.to($(this), 2, {opacity:1, delay:_d});
	
	});

	

},

buttonize = function() {

	

},

fadeoutPage = function() {
	TweenMax.to($('body'), 0.5, {opacity:0});
}

;









/* =========================================================================================== */
/*                                                                                             */
/*                                                                                             */
/*           TOOLS
/*                                                                                             */
/*                                                                                             */
/* =========================================================================================== */

function updateGlobals () {wW = window.innerWidth; wH = window.innerHeight;}
function random (num) {return Math.floor((Math.random() * num) + 1);}
function shuffle(o){for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x); return o;};
$.fn.checkHasClass=function(a){ return this.hasClass(a).toString(); };
$.fn.o=function(a){ this.css('opacity',a); };
$.fn.mt=function(a){ this.css('marginTop',a+'px'); };
$.fn.h=function(a){ this.css('height',a+'px'); };
function IsEmail(email) { var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; return regex.test(email); }
function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}