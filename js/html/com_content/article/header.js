$(window).on("load resize scroll",function(e){
	encAddClassScrollWindowHeight_Half('.what-header-outer', 'what-header-fix', '.what-header-outer');
	encVerticalCenter('.what-header-outer', '.what-header-inner', '.what-header-content');
	encFlexWidthCenter('.what-header-outer', '.what-header-center', 1.2, 1.2, 1.2, 1.8);
	var headerHeight = $('.what-header-outer').height();
	$('#what-main').css("padding-top", headerHeight);
	encAddClassScrollWindowHeight_Half(".what-header-brand-icon i", "logo-color", ".what-header-outer");
});

