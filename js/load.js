var videoCategoryObject = '#video-category .object';
var videoCategoryObjectContent = '#video-category .object .content';
var videoCategoryObjectContentRightH2 = '#video-category .object .content .right h2';
var videoCategoryDescription = '#video-category .object .content .right .description';

var h = 'header';
hS = '#header .section-1';
var hS1 = '#header .section-2';
var hS2 = '#header .section-3';
var hS2Svg = '#header .section-3 figure svg';
var hS2a = '#header .section-3 nav ul li a';

var homeParallax2Section2 = '#home .parallax-2 .section-2';
var homeParallax2Section2FigureDiv = '#home .parallax-2 .section-2 .what-section-center figure div';
var homeParallax2Section2FigureDivA = '#home .parallax-2 .section-2 .what-section-center figure div a';
var homeParallax2Section2FigureDivFigcaption = '#home .parallax-2 .section-2 .what-section-center figure div figcaption';
var homeParallax2Section2FigureDivFigcaptionP = '#home .parallax-2 .section-2 .what-section-center figure div figcaption p';
var homeParallax2Section2VerticalCenter = '#home .parallax-2 .section-2 .what-section-center .vertical-center';

var homeParallax2Section3 = '#home .parallax-2 .section-3';

var callback = function(){
	ENC.height.EqualElementA(homeParallax2Section2FigureDivA, homeParallax2Section2FigureDivFigcaption);
	ENC.height.EqualElementA_Divided(window, homeParallax2Section2, 1.25);
	ENC.height.EqualElementA_Divided(window, homeParallax2Section3, 1.25);

	ENC.height.EqualElement_Tallest(videoCategoryObjectContentRightH2);
	ENC.height.EqualElement_Tallest('#about .section-4 .what-section-center ul li section article figure');
	ENC.height.EqualElement_Tallest('#about .section-4 .what-section-center ul li section article h2');
	ENC.height.EqualElement_Tallest('#about .section-4 .what-section-center ul li section article');
	ENC.height.EqualElement_Tallest('#about .section-4 .what-section-center ul li section article p');
	ENC.height.EqualElement_Tallest('#about .section-4 .what-section-center ul li section a button');
	ENC.height.EqualElement_Tallest('#about .section-3 .what-section-center ul li article p');
	ENC.height.EqualElement_Tallest('#about .section-3 .what-section-center ul li article h2');
	ENC.width.EqualElementA('.slider', '.slider .slides li');
	ENC.height.EqualElementA_Divided(window, '#about .parallax-1 .section-2', 2);

	var homeSection1ObjectImg = '#home .section-1 .object a div';
	var homeSection1ObjectContent = '#home .section-1 .object .content';

	var homeSection1ObjectImgHeight = $(homeSection1ObjectImg).outerHeight();
	var homeSection1ObjectContentHeight = $(homeSection1ObjectContent).outerHeight();
	var homeParallax2Section2FigureDivHeight = $(homeParallax2Section2FigureDiv).outerHeight();

	$(homeParallax2Section2FigureDivFigcaptionP).css({"top":homeParallax2Section2FigureDivHeight / 4.5});
	$(homeSection1ObjectContent).css({"top":-homeSection1ObjectImgHeight / 1.25});
	//$(homeParallax2Section2VerticalCenter).css({"top":-homeSection1ObjectImgHeight / 1.25});
};

$('.slider').slider({
	indicators: true,
	height: $(window).outerHeight() / 3.75,
	transition: 500,
	interval: 6000
});

$(function() {
	windowWidth = $(window).outerWidth();
	hSHeight = $(hS).outerHeight();
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
				TweenLite.to($(hS), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)});
				TweenLite.to($(hS1), 1, {visibility: "hidden", ease: SlowMo.ease.config(0.7, 0.7, false)});
				TweenLite.to($(hS2), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)});
				TweenLite.to($(hS2a), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)}); 
				TweenLite.to($(hS2Svg), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)});

			} else {
				TweenLite.to($(hS), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)});
				TweenLite.to($(hS1), 1, {visibility: "visible", ease: SlowMo.ease.config(0.7, 0.7, false)});

				TweenLite.to($(hS2), 1, {visibility: "hidden", ease: SlowMo.ease.config(0.7, 0.7, false)});
				TweenLite.to($(hS2a), 1, {visibility: "hidden", ease: SlowMo.ease.config(0.7, 0.7, false)}); 
				TweenLite.to($(hS2Svg), 1, {visibility: "hidden", ease: SlowMo.ease.config(0.7, 0.7, false)});
			}	
		}
    });
});


$(document).ready(callback);
$(window).load(callback);
$(window).scroll(callback);
$(window).resize(callback);