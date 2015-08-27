var h = 'header';
var hS1 = '#header-s1-out';
var hS2 = '#header-s2-out';
var hS2Svg = 'header #header-s2-out #header-s2-inn #header-s2-con #header-s2-cen figure svg';
var hS2a = 'header #header-s2-out #header-s2-inn #header-s2-con #header-s2-cen nav ul li a';

var callback = function (){
	windowWidth = $(window).outerWidth();
	
	if(windowWidth < 768){
		TweenLite.set('header', {display: "none"});
		TweenLite.set('main', {paddingTop: 0});
	}else{
		TweenLite.set('header', {display: "block"});
	}
	
	ENC.align.horizontalCenter(window, '#header-s1-cen, #home-s1-cen, #about-s1-cen, #about-s2-cen, #about-s3-cen, #about-s4-cen, #about-s5-cen, #blog, #video, #photo', 1.05, 1.4, 1.5, 1.6);
	ENC.align.horizontalCenter(window, '#about-s5-out #about-s5-inn #about-s5-con #about-s5-cen .slider .slides li', 1.05, 1.4, 1.5, 1.6);
	ENC.align.horizontalCenter('.pagination', '.pagination ul', 1.05, 1.4, 1.5, 1.6);
	ENC.height.EqualElement_Tallest('#about-s3-out #about-s3-inn #about-s3-con #about-s3-cen ul li');
	ENC.height.EqualElement_Tallest('#about-s3-out #about-s3-inn #about-s3-con #about-s3-cen ul li article');
	ENC.height.EqualElementA('.slider .slides', '.slider .slides li');
	ENC.height.EqualElementA('.blog-article article .left', '.blog-article article .left time');
	ENC.height.EqualElementA('.video-article article .left', '.video-article article .left time');
	ENC.height.EqualElementA_Divided(window, '.video-article figure iframe', 2);
	ENC.height.EqualElement_Tallest('.video-container-intro .bottom .right p', '.object');	
};

var what = function(){
	$('.slider').slider({
		indicators: true,
		height: $(window).height() / 4,
		transition: 500,
		interval: 6000
	});
};

$(function() {
	windowWidth = $(window).outerWidth();
	hS1Height = $(hS1).outerHeight();
	hS2Height = $(hS2).outerHeight();
	
	TweenLite.set(hS1, {height:hS1Height, visibility: "visible"});
	
	TweenLite.set(hS2, {visibility: "hidden"});
	TweenLite.set(hS2a, {visibility: "hidden"});
	TweenLite.set(hS2Svg, {visibility: "hidden"});
	
    $(window).scroll(function() {
		if(windowWidth > 768){
			var scroll = $(window).scrollTop();
			if (scroll >= hS1Height - 100){
				TweenLite.to($(hS1), 1, {visibility: "hidden", ease: SlowMo.ease.config(0.7, 0.7, false)});

				TweenLite.to($(hS2), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)});
				TweenLite.to($(hS2a), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)}); 
				TweenLite.to($(hS2Svg), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)});

			} else {
				TweenLite.to($(hS1), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)});

				TweenLite.to($(hS2), 1, {visibility: "hidden", ease: SlowMo.ease.config(0.7, 0.7, false)});
				TweenLite.to($(hS2a), 1, {visibility: "hidden", ease: SlowMo.ease.config(0.7, 0.7, false)}); 
				TweenLite.to($(hS2Svg), 1, {visibility: "hidden", ease: SlowMo.ease.config(0.7, 0.7, false)});
			}	
		}
    });
});

ENC.hover.AddClassParentFind('#blog .blog-container .bottom .right a button', '.bottom', '.left > time > span', 'border-active', 'background-active');
ENC.hover.AddClassParentFind('#video .video-container-lead .bottom .right a button', '.bottom', '.left > time > span', 'border-active', 'background-active');
ENC.hover.AddClassParentFind('#video .video-container-intro .bottom .right a button', '.bottom', '.left > time > span', 'border-active', 'background-active');

$(document).ready(callback);
$(window).load(callback, what);
$(window).scroll(callback);
$(window).resize(callback);




  // Move img src into background-image
      /*  $('img').each(function () {
		  imageHeight = $(this).height;
          $(this).css('background-image', 'url(' + $(this).attr('src') + ')' );
          $(this).attr('src', 'data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==');
			$(this).height(imageHeight);
        });*/