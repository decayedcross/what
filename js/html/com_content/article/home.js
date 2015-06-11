$(window).on("load resize scroll",function(e){
	encAllMinHeightsEqualElementA(window, '#what-home-section-1, #what-home-section-1-0, #what-home-section-1-1, #what-home-section-1-2');
	encAllMinHeightsEqualElementA(window, '#what-home-section-2');
	
	encAllMinHeightsEqualElementA_Half(window, '#what-home-section-3-paralax');
	
	
	encFlexWidthCenter('#what-home-section-1', '.what-home-section-1-overlay-content', 1.2, 1.2, 1.2, 2);
	encFlexWidthCenter('#what-home-section-2', '.what-home-section-2-center', 1.2, 1.2, 1.2, 1.2);
	
	encVerticalCenter('#what-home-section-2', '#what-home-section-2-inner', '#what-home-section-2-content');
	
	
	//SECTION 3
	encAllMinHeightsEqualElementA_Half(window, '#what-home-section-3-outer');
	encVerticalCenter('#what-home-section-3-outer', '#what-home-section-3-inner', '#what-home-section-3-content');
	encFlexWidthCenter('#what-home-section-3-outer', '#what-home-section-3-center', 1.2, 1.2, 1.2, 1.5);
	
	//SECTION 4
	encAllMinHeightsEqualElementA_Half(window, '#what-home-section-4-outer');
	encVerticalCenter('#what-home-section-4-outer', '#what-home-section-4-inner', '#what-home-section-4-content');
	encFlexWidthCenter('#what-home-section-4-outer', '#what-home-section-4-center', 1.2, 1.2, 1.2, 1.5);
	
	//SECTION 5
	encVerticalCenter('#what-home-section-5-outer', '#what-home-section-5-inner', '#what-home-section-5-content');
	
	//SECTION 6
	encAllMinHeightsEqualElementA_Half(window, '#what-home-section-6-outer');
	encVerticalCenter('#what-home-section-6-outer', '#what-home-section-6-inner', '#what-home-section-6-content');
	encFlexWidthCenter('#what-home-section-6-outer', '#what-home-section-6-center', 1.2, 1.2, 1.2, 1.5);
});



