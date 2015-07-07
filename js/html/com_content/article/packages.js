$(window).on("load resize scroll",function(e){
	encAllHeightsEqualElement_Tallest('.what-packages-section-2-package');
	encAllHeightsEqualElement_Tallest('.what-packages-section-2-package-paragraph');
	encAllHeightsEqualElement_Tallest('.what-packages-section-2-package-offers-list');
	encFlexWidthCenter(window, '#what-packages-section-2-center', 1, 1.2, 1.1, 1.2);
});