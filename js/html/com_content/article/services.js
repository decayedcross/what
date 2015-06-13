$(window).on("load resize scroll",function(e){
	//SERVICES SECTION 1
	encAllMinHeightsEqualElementA_Half(window, '#what-services-section-1-outer');
	encVerticalCenter('#what-services-section-1-outer', '#what-services-section-1-inner', '#what-services-section-1-content');
	encFlexWidthCenter('#what-services-section-1-outer', '#what-services-section-1-center', 1.2, 1.2, 1.2, 1.5);

	//SERVICES SECTION 2
	encAllMinHeightsEqualElementA_Half(window, '#what-services-section-2-outer');
	encVerticalCenter('#what-services-section-2-outer', '#what-services-section-2-inner', '#what-services-section-2-content');
	encFlexWidthCenter('#what-services-section-2-outer', '#what-services-section-2-center', 1.2, 1.2, 1.2, 1.5);
	encAllHeightsEqualElement_Tallest('.what-services-section-2-figure-article-container');
	
	//SERVICES SECTION 3
	encAllMinHeightsEqualElementA_Half(window, '#what-services-section-3-outer');
	encVerticalCenter('#what-services-section-3-outer', '#what-services-section-3-inner', '#what-services-section-3-content');
	encFlexWidthCenter('#what-services-section-3-outer', '#what-services-section-3-center', 1.2, 1.2, 1.2, 1.5);
	
	//SERVICES SECTION 4
	encAllMinHeightsEqualElementA_Half(window, '#what-services-section-4-outer');
	encVerticalCenter('#what-services-section-4-outer', '#what-services-section-4-inner', '#what-services-section-4-content');
	encFlexWidthCenter('#what-services-section-4-outer', '#what-services-section-4-center', 1.2, 1.2, 1.2, 1.5);
});