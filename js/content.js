var menuIconActive = $(".menu-icon-active");
var menuIconCurrent = $(".menu-icon-current");
var nav = $("#what-header #small #nav");

$(document).ready(function($){
	
	
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav, #what-header #large #nav #menu, #what-header #large #nav #menu li, #what-header #large #nav #menu li a');
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav #social');
	encVerticalCenter('#what-header #large #nav #social', '#what-header #large #nav #social #inner', '#what-header #large #nav #social .content');
	encFlexWidthCenter(window, '#what-contact-section-3-center', 1.3, 1.4, 1.5, 1.7);
	encAllMinHeightsEqualElementA(window, '.camera_loader');
	encAllMinHeightsEqualElementA('.roles li', '.roles');
	encAllMinHeightsEqualElementA_Half(window, '#contact-map');
	encFlexWidthCenter(window, '#what-home-section-2-center, #what-footer-center, #what-home-section-5-parallax-1-center, #what-about-section-2-parallax-2-center, #what-about-section-1-parallax-2-center, #what-home-section-4-parallax-1-center, #what-about-section-2-parallax-1-center, #what-services-section-1-parallax-2-center, #what-contact-section-1-parallax-2-center', 1.1, 1.2, 1.3, 1.4);
	jQuery(window).resize(
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav, #what-header #large #nav #menu, #what-header #large #nav #menu li, #what-header #large #nav #menu li a'),
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav #social'),
	encVerticalCenter('#what-header #large #nav #social', '#what-header #large #nav #social #inner', '#what-header #large #nav #social .content'),
	encFlexWidthCenter(window, '#what-home-section-2-center, #what-footer-center, #what-home-section-5-parallax-1-center, #what-about-section-2-parallax-2-center, #what-about-section-1-parallax-2-center, #what-home-section-4-parallax-1-center, #what-about-section-2-parallax-1-center, #what-services-section-1-parallax-2-center, #what-contact-section-1-parallax-2-center', 1.1, 1.2, 1.3, 1.4),
	encFlexWidthCenter(window, '#what-contact-section-3-center', 1.3, 1.4, 1.5, 1.7),
	encAllMinHeightsEqualElementA_Half(window, '#contact-map')
	);
	jQuery(window).load(
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav, #what-header #large #nav #menu, #what-header #large #nav #menu li, #what-header #large #nav #menu li a'),
	encAllHeightsEqualElementA('#what-header #large #brand', '#what-header #large #nav #social'),
	encVerticalCenter('#what-header #large #nav #social', '#what-header #large #nav #social #inner', '#what-header #large #nav #social .content'),
	encFlexWidthCenter(window, '#what-home-section-2-center, #what-footer-center, #what-home-section-5-parallax-1-center, #what-about-section-2-parallax-2-center, #what-about-section-1-parallax-2-center, #what-home-section-4-parallax-1-center, #what-about-section-2-parallax-1-center, #what-services-section-1-parallax-2-center, #what-contact-section-1-parallax-2-center', 1.1, 1.2, 1.3, 1.4),
	encFlexWidthCenter(window, '#what-contact-section-3-center', 1.3, 1.4, 1.5, 1.7),
	encAllMinHeightsEqualElementA_Half(window, '#contact-map')
	);
	
	whatWindowHeight = $(window).height();
	$('#what-header #small, #what-header #small #top').height(whatWindowHeight / 12);
	whatHeaderSmallHeight = $('#what-header #small').height();
	$('#what-home-section-1-outer').css("padding-top", whatHeaderSmallHeight);
	
	count = 0;
	$("#what-header #small #menu-icon").click(function() {
		console.log(count);
		if(count == 1){
			count = 0;
			$('#what-header #small #nav').slideUp('slow');
			
			TweenLite.to(".menu-icon-current", 1, {opacity: 1, rotation:180});
			TweenLite.to(".menu-icon-active", 0.5, {opacity: 0, rotation:-90});
			
			TweenLite.to("#what-header #small", 1, {backgroundColor:"#1f1f1f"});
	
			TweenLite.to("#what-header #small #nav", 1, {backgroundPosition: "-100% -100%", backgroundSize: "100% 100%", boxShadow: "inset 0 0 0 1000px rgba(0, 0, 0, 0)"});
			
			TweenLite.to("#what-header #small #top #brand", 1, {color:"#FFF", rotationY:0, transformOrigin:"left top", fontSize: "1rem"});

		}else{
			$('#what-header #small #nav').slideDown();
			
			TweenLite.to(".menu-icon-current", 0.5, {opacity: 0, rotation:-90});
			TweenLite.to(".menu-icon-active", 1, {opacity: 1, rotation:180});
			
			TweenLite.to("#what-header #small #nav", 1, {height:whatWindowHeight, backgroundPosition: "-100% 100%", backgroundSize: "100% 100%", boxShadow: "inset 0 0 0 1000px rgba(0, 0, 0, 0.8)"});
			
			TweenLite.to("#what-header #small", 1, {backgroundColor:"red"});
			
			TweenLite.to("#what-header #small #top #brand", 1, {rotationY:360, transformOrigin:"left top", fontSize: "1.5rem"});
			
			count++;
		}
	});
});


$(document).ready(function($) {
	var b = 0;  
    var inbetweenB = 5000;  //milliseconds   
    function cycleThruB(){
        var bmax = $(".roles-2 li").length -1;
        $(".roles-2 li:eq(" + b + ")")
            .animate({"opacity" : "1"} ,600)
            .delay(inbetweenB)
            .animate({"opacity" : "0"}, 600, function(){
                (b == bmax) ? b=0 : b++;
                cycleThruB();
            });
        }
    cycleThruB();
	
	encAllMinHeightsEqualElementA('.roles-2 li', '.roles-2');
});

$(document).ready(function($) {
	$('#what-home-slideshow').camera({
			alignment: "center", //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
			autoAdvance: true,	//true, false
			mobileAutoAdvance: true, //true, false. Auto-advancing for mobile devices
			barDirection: "leftToRight",	//'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
			barPosition: "bottom",	//'bottom', 'left', 'top', 'right'
			easing: "easeInOutExpo",	//for the complete list http://jqueryui.com/demos/effect/easing.html
			mobileEasing: "",	//leave empty if you want to display the same easing on mobile devices and on desktop etc.
			fx: "simpleFade",	
			mobileFx: "",		//leave empty if you want to display the same effect on mobile devices and on desktop etc.
			hover: false,	//true, false. Puase on state hover. Not available for mobile devices
			loader: "pie",
			loaderColor: "#eeeeee", 
			loaderBgColor: "#222222", 
			loaderOpacity: 0.8,	//0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, .8, .9, 1
			loaderPadding: 2,	//how many empty pixels you want to display between the loader and its background
			loaderStroke: 7,
			navigation: true,	//true or false, to display or not the navigation buttons
			navigationHover: false,
			mobileNavHover: false,	//same as above, but only for mobile devices
			opacityOnGrid: false,
			overlayer: false,
			pagination: false,
			playPause: false,	//true or false, to display or not the play/pause buttons
			pauseOnClick: false,	//true, false. It stops the slideshow when you click the sliders.
			thumbnails: false,
			time: 5000,	//milliseconds between the end of the sliding effect and the start of the nex one
			transPeriod: 3000,
			minHeight: 380,
			onStartLoading: function(){
				//TweenLite.to(".cameraSlide_0", 10, {rotation: 0, opacity: 0, scale: 0, x: 0, y: 0});
				//TweenLite.to(".cameraSlide_1", 10, {rotation: 0, opacity: 1, scale: 0, x: 0, y: 0});
				//TweenLite.to(".cameraSlide_2", 10, {rotation: 0, opacity: 0, scale: 0, x: 0, y: 0});
				
				//TweenLite.to("#what-home-slideshow", 1, {backgroundColor: "#000"});
				//TweenLite.to(".caption", 10, {opacity: 0});
   				//TweenLite.to(".imgLoaded", 1, {rotation: 0, opacity: 0, scale: 0.5});
				//TweenLite.to(".imgLoaded", 10, {rotation: 0, opacity: 0, scale: 0.5, x: 0, y: 0});
			},
			onLoaded: function(){

				//TweenLite.to(".cameraSlide_0", 10, {rotation: 0, opacity: 0, scale: 0, x: 0, y: 0});
				//TweenLite.to(".cameraSlide_1", 10, {rotation: 0, opacity: 1, scale: 0, x: 0, y: 0});
				//TweenLite.to(".cameraSlide_2", 10, {rotation: 0, opacity: 0, scale: 0, x: 0, y: 0});
				
				//TweenLite.to("#what-home-slideshow", 1, {backgroundColor: "#000"});
				//TweenLite.to(".caption", 10, {opacity: 0});
   				//TweenLite.to(".imgLoaded", 1, {rotation: 0, opacity: 0, scale: 0.5});
				//TweenLite.to(".imgLoaded", 10, {rotation: 0, opacity: 0, scale: 0.5, x: 0, y: 0});
			},
			onStartTransition: function(){
				
				//TweenLite.to(".cameraSlide_0", 10, {rotation: 0, opacity: 0, scale: 0, x: 0, y: 0});
				//TweenLite.to(".cameraSlide_1", 10, {rotation: 0, opacity: 1, scale: 10, x: 0, y: 0});
				//TweenLite.to(".cameraSlide_2", 10, {rotation: 0, opacity: 0, scale: 0, x: 0, y: 0});
				
				//TweenLite.to("#what-home-slideshow", 1, {backgroundColor: "#000"});
				//TweenLite.to(".caption", 10, {opacity: 0});
				//TweenLite.to(".imgLoaded", 1, {rotation: 0, opacity: 0, scale: 0.5, x: 0, y: 0});
				//TweenLite.to(".imgLoaded", 10, {rotation: 0, opacity: 0, scale: 0.5, x: 0, y: 0});
			},
			onEndTransition: function(){
				
				//TweenLite.to(".cameraSlide_0", 10, {rotation: 0, opacity: 1, scale: 0.5, x: 0, y: 0});
				//TweenLite.to(".cameraSlide_1", 10, {rotation: 0, opacity: 0, scale: 0, x: 0, y: 0});
				//TweenLite.to(".cameraSlide_2", 10, {rotation: 0, opacity: 1, scale: 0.5, x: 0, y: 0});
				
				//TweenLite.to("#what-home-slideshow", 1, {backgroundColor: "#000"});
				//TweenLite.to(".caption", 10, {opacity: 1});
				//TweenLite.to(".imgLoaded", 50, {rotation: 0, opacity: 1, scale: 2, x: 500, y: -500});
				//TweenLite.from(".imgLoaded", 10, {rotation: 0, opacity: 1, scale: 2, x: -500, y: -500});
			}
		});
	var j = 0;  
    var inbetween = 5000;  //milliseconds   
    function cycleThru(){
        var jmax = $(".roles li").length -1;
        $(".roles li:eq(" + j + ")")
            .animate({"opacity" : "1"} ,600)
            .delay( inbetween )
            .animate({"opacity" : "0"}, 600, function(){
                (j == jmax) ? j=0 : j++;
                cycleThru();
            });
        }
    cycleThru();
});

$(window).scroll(function(){
    var top = $(this).scrollTop();
	var section_1Height = $('#what-home-section-1-outer').height();
	var section_1HeightDivide = section_1Height / 2;
	if(top > section_1HeightDivide - 200){
        $('#bar-35').animate(
			{width:'35%'}, 
			{
				duration: 5000,
				delay: 0,
				step: function(now, fx) {
					var bar35= Math.round(now);
					$('#percent-35').html(bar35 + '%');
				}
			}        
		);
		
		$('#bar-40').animate(
			{width:'40%'}, 
			{
				duration: 5000,
				delay: 0,
				step: function(now, fx) {
					var bar40= Math.round(now);
					$('#percent-40').html(bar40 + '%');
				}
			}        
		);

		$('#bar-55').animate(
			{width:'55%'}, 
			{
				duration: 5000,
				delay: 0,
				step: function(now, fx) {
					var bar55= Math.round(now);
					$('#percent-55').html(bar55 + '%');

				}
			}        
		);

		$('#bar-75').animate(
			{width:'75%'}, 
			{
				duration: 5000,
				delay: 0,
				step: function(now, fx) {
					var bar75= Math.round(now);
					$('#percent-75').html(bar75 + '%');

				}
			}        
		);   
	}
});