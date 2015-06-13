$(window).on("load resize scroll",function(e){
	//FOOTER
	encAllMinHeightsEqualElementA_Half(window, '#what-footer-section-1-outer');
	encVerticalCenter('#what-footer-section-1-outer', '#what-footer-section-1-inner', '#what-footer-section-1-content');
	encFlexWidthCenter('#what-footer-section-1-outer', '#what-footer-section-1-center', 1.2, 1.2, 1.2, 1.5);
});