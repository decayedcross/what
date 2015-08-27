$('#header #section-4 #fixed nav a+a i').tap(50, function(){
	if(flag === 0){
		//var windowHeight = $(window).height();
		//var headerheight = $('#header #section-4 #fixed').outerHeight();
		//var navHeight = $('#header #section-4 #fixed nav #collapse ul').height();
		//var windowHeaderHeightMinus = windowHeight - headerheight;
		TweenLite.to('#header #section-4 #fixed nav #collapse', 1, {height: "200px"});
	}else{
		TweenLite.to('#header #section-4 #fixed nav #collapse', 1, {height: "0px"});
		flag = 0;
	}
});

/*var blogCatergorySectionArticleSectionRightH2 = '#blog-category .section .article .section .right .h2';
var blogCatergorySectionArticleSectionRightParagraphsP = '#blog-category .section .article .section .right .paragraphs p';

var homeNewsLetterInput = '#home #section-5 #fluid #row #col #bottom-row #bottom-col #inner-row #left-col input';
var homeNewsLetterBottomRowCol = '#home #section-5 #fluid #row #col #bottom-row #bottom-col';
var homeNewsLetterForm = '#home #section-5 #fluid #row #col #bottom-row #bottom-col #inner-row';

var headerSection3 = '#header #section-3';
var headerSection3Fixed = '#header #section-3 #fixed, #header #section-5 #fixed';
var headerSection3LogoLinearGradient = '#header-3-section-logo-linear-gradient, #header-5-section-logo-linear-gradient';
var headerSection3LogoLinearGradientStopA = '#header-3-section-logo-linear-gradient-stop-a, #header-5-section-logo-linear-gradient-stop-a';
var headerSection3LogoLinearGradientStopB = '#header-3-section-logo-linear-gradient-stop-b, #header-5-section-logo-linear-gradient-stop-b';
var headerSection3LogoPath = '#header-3-section-logo-path, #header-5-section-logo-path';
var headerSection3LogoText = '#header-3-section-logo-text, #header-5-section-logo-text';
var header3SectionLogoEllipse = '#header-3-section-logo-ellipse, #header-5-section-logo-ellipse';

var headerSection4FixedNavToggle = '#header #section-4 #fixed nav a+a i';
var headerSection4FixedNavCollapase = '#header #section-4 #fixed nav #collapse';
var headerSection4FixedNavCollapseUl = '#header #section-4 #fixed nav #collapse ul';
var headerSection4LogoLinearGradient = '#header-4-section-logo-linear-gradient';
var headerSection4LogoLinearGradientStopA = '#header-4-section-logo-linear-gradient-stop-a';
var headerSection4LogoLinearGradientStopB = '#header-4-section-logo-linear-gradient-stop-b';
var headerSection4LogoPath = '#header-4-section-logo-path';
var headerSection4LogoText = '#header-4-section-logo-text';
var header4SectionLogoEllipse = '#header-4-section-logo-ellipse';

var homeSection4Figure = '#home #section-4 figure';
var homeSection4FigureArticle = '#home #section-4 figure article';
var homeSection4FigureArticleH1 = '#home #section-4 figure article h1';
var homeSection4FigureArticleP = '#home #section-4 figure article p';
	
var aboutSection3 = '#about #section-3 div ul li article';
var aboutSection4Article = ' #about #section-4 div ul li section article';
var aboutSection4Button = ' #about #section-4 div ul li section a button';

var videoCategoryObject = '#video-category .object';
var videoCategoryObjectContent = '#video-category .object .content';
var videoCategoryObjectContentRightH2 = '#video-category .object .content .right h2';
var videoCategoryDescription = '#video-category .object .content .right .description';
var videoCategoryObjectContentLeft = '#video-category .object .content .left';
var videoCategoryObjectContentRight = '#video-category .object .content .right';

var contactSection2FormFiledsetPTextarea = '#contact .section-2 .horz-center form fieldset p textarea';
var contactSection3ContactMap = '#contact .section-3 .horz-center #contact-map';

var h = 'header';
var hS = '#header .section-1';
var hS1 = '#header .section-2';
var hS2 = '#header .section-3';
var hS2Svg = '#header .section-3 figure svg';
var hS2a = '#header .section-3 nav ul li a';

var headerSection4Shim = '#header #section-4 #shim';
var headerSection4Nav = '#header #section-4 nav';
var headerSection5Shim = '#header #section-5 #shim';
var headerSection5Nav = '#header #section-5 nav';

var flag = 0;*/

/*$(function() {
	$(window).scroll(function() {
		if(windowWidth > 768){
			var scroll = $(window).scrollTop();
			if (scroll >= 200){
				TweenLite.to($(headerSection3), 1, {visibility: "visible", ease: Bounce.easeOut});
				TweenLite.to($(headerSection3LogoLinearGradientStopA), 1, {stopColor: "#345b77", ease: Power2.easeOut});
				TweenLite.to($(headerSection3LogoLinearGradientStopB), 1, {stopColor: "#111e27", ease: Power2.easeOut});
				TweenLite.to($(header3SectionLogoEllipse), 1, {stroke: "#122c3e", ease: Power2.easeOut});
				TweenLite.to($(headerSection3LogoText), 1, {opacity: 0.1, stroke: "#ffea00", ease: Power2.easeOut});
				TweenLite.to($(headerSection3LogoPath), 1, {rotation: 360, transformOrigin: "center center", fill: "#ffea00", opacity: 1, ease: Circ.easeInOut});	
			}else{
				TweenLite.to($(headerSection3), 1, {visibility: "hidden", ease: Bounce.easeOut});
				TweenLite.to($(headerSection3LogoLinearGradientStopA), 1, {stopColor: "#3FA9F5", ease: Power2.easeOut});
				TweenLite.to($(headerSection3LogoLinearGradientStopB), 1, {stopColor: "#FFFFFF", ease: Power2.easeOut});
				TweenLite.to($(header3SectionLogoEllipse), 1, {stroke: "#000000", ease: Power2.easeOut});
				TweenLite.to($(headerSection3LogoText), 1, {opacity: 1, stroke: "#000000", ease: Power2.easeOut});
				TweenLite.to($(headerSection3LogoPath), 1, {rotation: -360, transformOrigin: "center center", fill: "#000000", opacity: 0.4, ease: Circ.easeInOut});
			}
		}
    });
});*/

/*$(headerSection4FixedNavToggle).tap(50, function(){
	if(flag === 0){
		var windowHeight = $(window).height();
		var windowWidth = $(window).width();
		var headerheight = $(header).outerHeight();
		var navHeight = $(headerSection4FixedNavCollapseUl).height();
		var windowHeaderHeightMinus = windowHeight - headerheight;
		
		TweenLite.to(headerSection4FixedNavCollapase, 1, {height: navHeight, top: headerheight});
		TweenLite.to(headerSection4LogoLinearGradientStopA, 1, {stopColor: "#286b9b" });
		TweenLite.to(headerSection4LogoLinearGradientStopB, 1, {stopColor: "#3FA9F5" });
		TweenLite.to(headerSection4LogoText, 0.25, {opacity: "0" });
		TweenLite.to(headerSection4LogoPath, 1, {opacity: "1", fill: "#ffff00", rotation: 360, transformOrigin:"center center"});
		flag++;
	}else{
		TweenLite.to(headerSection4FixedNavCollapase, 1, {height: "0px", top: "0px"});
		TweenLite.to(headerSection4LogoLinearGradientStopA, 1, {stopColor: "#3FA9F5" });
		TweenLite.to(headerSection4LogoLinearGradientStopB, 1, {stopColor: "#FFFFFF" });
		TweenLite.to(headerSection4LogoText, 1, {opacity: "0.6" });
		TweenLite.to(headerSection4LogoPath, 1, {opacity: "0.1", fill: "#000000", rotation:0, transformOrigin:"center center"});
		flag = 0;
	}
});*/

/*$(homeNewsLetterForm).submit(function() {
	console.log("Hello");
	var email = $(homeNewsLetterInput).val();
	$.ajax({
		url: 'templates/what/views/handlers/home/newsletter.php',
		type: 'POST',
		data: {"email": email},
		success: function(result){
			if(result === 'subscribed'){
				$(homeNewsLetterBottomRowCol).load('templates/what/views/handlers/home/newsletter_submission.php');
			}else{
				$(homeNewsLetterBottomRowCol).load('templates/what/views/handlers/home/newsletter_error.php');
			}
		}
	});
	return false;
});*/

//$(document).ready(function() {
	/*$("#photo-category #gallery").justifiedGallery({
        lastRow : 'nojustify', 
		rowHeight : 250,
		maxRowHeight: '200%',
		rel : 'gallery',
		margins : 8,
		fixedHeight: false,
		justifyThreshold: 0.75,
        sizeRangeSuffixes: {
            'lt100': '_t',
            'lt240': '_m',
            'lt320': '_n',
            'lt500': '',
            'lt640': '_z',
            'lt1024': '_b'
        },
    });*/	
	
	/*$(blogCatergorySectionArticleSectionRightH2).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});
	
	$(blogCatergorySectionArticleSectionRightParagraphsP).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});

	$(homeSection4Figure).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});
	
	$(homeSection4FigureArticle).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});
	
	$(homeSection4FigureArticleH1).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});	
	
	$(homeSection4FigureArticleP).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});	
	
	$(aboutSection3).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});	
	
	$(aboutSection4Article).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});	
	
	$(aboutSection4Button).matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});*/
//});

/*var callback = function(){
	ENC.height.EqualElementA_Divided(window, contactSection2FormFiledsetPTextarea, 3);
	ENC.height.EqualElementA_Divided(window, contactSection3ContactMap, 3);	
	
	ENC.height.EqualElement_Tallest('.slider .slides li');	
	ENC.height.EqualElementA('.slider', '.slides');
	ENC.width.EqualElementA('.slider', '.slider .slides li');
	ENC.height.EqualElementA('.slider', '.slider .slides li');
	
	ENC.height.EqualElementA(headerSection4Nav, headerSection4Shim);
	ENC.height.EqualElementA(headerSection5Nav, headerSection5Shim);
};*/

/*$('.slider').slider({
	indicators: true,
	height: $(window).outerHeight() / 3.75,
	transition: 500,
	interval: 6000
});*/

/*$(function() {
	windowWidth = $(window).outerWidth();
	hSHeight = $(hS).outerHeight();
	hS1Height = $(hS1).outerHeight();
	hS2Height = $(hS2).outerHeight();
	
	if(windowWidth > 768){
		ENC.height.EqualElementA(videoCategoryObjectContentRight, videoCategoryObjectContentLeft);
		$(videoCategoryObjectContent).matchHeight({
			byRow: false,
			property: 'min-height',
			target: null,
			remove: false
		});
		$(videoCategoryObjectContentRightH2).matchHeight({
			byRow: false,
			property: 'min-height',
			target: null,
			remove: false
		});
		$(videoCategoryDescription).matchHeight({
			byRow: false,
			property: 'min-height',
			target: null,
			remove: false
		});
	}
});*/



/*$(document).ready(callback);
$(window).load(callback);
$(window).scroll(callback);
$(window).resize(callback);*/