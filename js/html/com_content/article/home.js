$(document).ready(function() {
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
});

jQuery(function(){
		jQuery('#camera-slideshow_92').camera({
			alignment: "topCenter", //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
			autoAdvance: true,	//true, false
			mobileAutoAdvance: true, //true, false. Auto-advancing for mobile devices
			barDirection: "leftToRight",	//'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
			barPosition: "bottom",	//'bottom', 'left', 'top', 'right'
			cols: 0,
			easing: "swing",	//for the complete list http://jqueryui.com/demos/effect/easing.html
			mobileEasing: "swing",	//leave empty if you want to display the same easing on mobile devices and on desktop etc.
			fx: "simpleFade",	
			mobileFx: "simpleFade",		//leave empty if you want to display the same effect on mobile devices and on desktop etc.
			gridDifference: 250,	//to make the grid blocks slower than the slices, this value must be smaller than transPeriod
			height: "30.24390243902439%",
			imagePath: 'http://livedemo00.template-help.com/joomla_53693/templates/theme3099/images/',
			hover: true,	//true, false. Puase on state hover. Not available for mobile devices
			loader: "none",
			loaderColor: "#eeeeee", 
			loaderBgColor: "#222222", 
			loaderOpacity: 0.8,	//0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, .8, .9, 1
			loaderPadding: 2,	//how many empty pixels you want to display between the loader and its background
			loaderStroke: 7,
			minHeight: "191px",	//you can also leave it blank
			navigation: true,	//true or false, to display or not the navigation buttons
			navigationHover: false,
			mobileNavHover: false,	//same as above, but only for mobile devices
			opacityOnGrid: false,
			overlayer: false,
			pagination: false,
			playPause: false,	//true or false, to display or not the play/pause buttons
			pauseOnClick: false,	//true, false. It stops the slideshow when you click the sliders.
			pieDiameter: 38,
			piePosition: "rightTop",	//'rightTop', 'leftTop', 'leftBottom', 'rightBottom'
			portrait: false, //true, false. Select true if you don't want that your images are cropped
			rows: 4,
			slicedCols: 6,	//if 0 the same value of cols
			slicedRows: 4,	//if 0 the same value of rows
			thumbnails: false,
			time: 7000,	//milliseconds between the end of the sliding effect and the start of the nex one
			transPeriod: 1500	//lenght of the sliding effect in milliseconds
		});
	});

$(window).on("load resize scroll",function(e){	
	/*SECTION 1*/
	/*SECTION 2*/		
	encFlexWidthCenter('#what-home-section-2-content', '#what-home-section-2-top', 1.1, 1.2, 1.2, 1.6);	
	encFlexWidthCenter('#what-home-section-2-content', '#what-home-section-2-bottom-center', 1.1, 1.2, 1.2, 1.6);	
	encAllHeightsEqualElementA('#what-home-section-2-top-right', '#what-home-section-2-top-left');
	/*SECTION 3*/
	encFlexWidthCenter('#what-home-section-3-parallax-1-outer', '#what-home-section-3-parallax-1-center', 1.1, 1.2, 1.2, 1.6);	
	/*SECTION 4*/
	encFlexWidthCenter('#what-home-section-3-parallax-2-outer', '#what-home-section-3-parallax-2-center', 1.1, 1.2, 1.2, 1.6);	
	/*SECTION 5*/		
	encFlexWidthCenter('#what-home-section-4-parallax-1-outer', '#what-home-section-4-parallax-1-center', 1.1, 1.2, 1.2, 1.6);		
	/*SECTION 6*/	
	encFlexWidthCenter('#what-home-section-4-parallax-2-outer', '#what-home-section-4-parallax-2-center', 1.1, 1.2, 1.2, 1.6);	
	encAllWidthsEqualElementA_Divided('#what-home-section-4-parallax-2-center', "#what-home-section-6", 3);
	/*SECTION 7*/	
	encAllHeightsEqualElementA_Divided(window, "#what-home-section-7-map", 2);	
	var windowSize = $(window).width();
	if (windowSize <= 767) {
		encAllHeightsEqualElementA_Divided(window, "#what-home-section-7-contact", 2);	
		console.log(windowSize);
	}		
	$('#what-home-section-1-outer').attr('style','min-height:191px !important');
});

function checkWidth() {
	var windowSize = $(window).width();
	if (windowSize == 1200) {
		$('#what-home-section-1-outer').attr('style','min-height:575px !important');
		console.log(windowSize);
	}
}


