$(window).on("load resize scroll",function(e){
	//OURWORK SECTION 1
	encAllMinHeightsEqualElementA_Half(window, '#what-ourwork-section-1-outer');
	encVerticalCenter('#what-ourwork-section-1-outer', '#what-ourwork-section-1-inner', '#what-ourwork-section-1-content');
	encFlexWidthCenter('#what-ourwork-section-1-outer', '#what-ourwork-section-1-center', 1.2, 1.2, 1.2, 1.5);

	//OURWORK SECTION 2
	encAllMinHeightsEqualElementA_Half(window, '#what-ourwork-section-2-outer');
	encVerticalCenter('#what-ourwork-section-2-outer', '#what-ourwork-section-2-inner', '#what-ourwork-section-2-content');
	encFlexWidthCenter('#what-ourwork-section-2-outer', '#what-ourwork-section-2-center', 1.2, 1.2, 1.2, 1.5);
});