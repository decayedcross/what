var callback = function (){
	ENC.align.horizontalCenter(window, '#home-s1-cen, #about-s1-cen, #about-s2-cen, #about-s3-cen, #about-s4-cen, #about-s5-cen, #blog, .blog-article', 1.05, 1.4, 1.5, 1.6);
	ENC.align.horizontalCenter(window, '#about-s5-out #about-s5-inn #about-s5-con #about-s5-cen .slider .slides li', 1.05, 1.4, 1.5, 1.6);
	ENC.height.EqualElement_Tallest('#about-s3-out #about-s3-inn #about-s3-con #about-s3-cen ul li');
	ENC.height.EqualElement_Tallest('#about-s3-out #about-s3-inn #about-s3-con #about-s3-cen ul li article');
	ENC.height.EqualElementA('.slider .slides', '.slider .slides li');
	ENC.height.EqualElementA('.blog-article article .left', '.blog-article article .left time');
};

var whatShow = function(){
	//$('html').fadeIn(450);
};

var whatSlider = function(){
	$('.slider').slider({
		indicators: true,
        height: $(window).height() / 4,
        transition: 500,
        interval: 6000
	});
};

ENC.hover.AddClassRemoveClass('#blog .blog-container .bottom .right a button', '#blog .blog-container .bottom', 'border-active', 'border-non-active');
ENC.hover.AddClassRemoveClass('#blog .blog-container .bottom .right a button', '#blog .blog-container .bottom .left time span', 'background-active', 'background-non-active');
ENC.hover.AddClassRemoveClass('#blog .blog-container .bottom .right a button', '#blog .blog-container .top a img', 'image-active', 'image-non-active');

$(document).ready(callback);
$(window).load(callback, whatSlider);
$(window).scroll(callback);
$(window).resize(callback);


  // Move img src into background-image
      /*  $('img').each(function () {
		  imageHeight = $(this).height;
          $(this).css('background-image', 'url(' + $(this).attr('src') + ')' );
          $(this).attr('src', 'data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==');
			$(this).height(imageHeight);
        });*/