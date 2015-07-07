$(window).on("load resize scroll",function(e){
	//ABOUT SECTION 1 
	encFlexWidthCenter('#what-about-section-1-outer', '#what-about-section-1-center', 1.05, 1.2, 1.3, 1.6);
	//ABOUT SECTION 2
	encFlexWidthCenter('#what-about-section-2-parallax-1-outer', '#what-about-section-2-parallax-1-center', 1.05, 1.2, 1.3, 1.6);
	//ABOUT SECTION 3
	encFlexWidthCenter('#what-about-section-2-parallax-2-outer', '#what-about-section-2-parallax-2-center', 1.05, 1.2, 1.3, 1.6);
	//ABOUT SECTION 4
	encFlexWidthCenter('#what-about-section-3-parallax-1-outer', '#what-about-section-3-parallax-1-center', 1.05, 1.2, 1.3, 1.6);
	//ABOUT SECTION 5
	encFlexWidthCenter('#what-about-section-3-parallax-2-outer', '#what-about-section-3-parallax-2-center', 1.05, 1.2, 1.3, 1.6);
	
	encAllHeightsEqualElementA('#what-about-section-2-article-wrap', '#what-about-section-2-figure');
	encAllHeightsEqualElementA_Half(window, '.what-about-section-4-image');
});