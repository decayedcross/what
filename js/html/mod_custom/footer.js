$(window).on("load resize scroll",function(e){
	//FOOTER
	encAllMinHeightsEqualElementA_Divided(window, '#what-footer-outer', 24);
	encVerticalCenter('#what-footer-outer', '#what-footer-inner', '#what-footer-content');
	encFlexWidthCenter('#what-footer-outer', '#what-footer-center', 1.2, 1.2, 1.2, 1.6);
});