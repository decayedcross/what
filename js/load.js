var videoCategoryObject = '#video-category .object';
var videoCategoryObjectContent = '#video-category .object .content';
var videoCategoryObjectContentRightH2 = '#video-category .object .content .right h2';
var videoCategoryDescription = '#video-category .object .content .right .description';


var callback = function(){
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

};

$('.slider').slider({
	indicators: true,
	height: $(window).outerHeight() / 3.75,
	transition: 500,
	interval: 6000
});

$(document).ready(callback);
$(window).load(callback);
$(window).scroll(callback);
$(window).resize(callback);