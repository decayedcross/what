$(window).on("load resize scroll",function(e){
	//ABOUT SECTION 1
	encAllMinHeightsEqualElementA_Half(window, '#what-about-section-1-outer');
	encVerticalCenter('#what-about-section-1-outer', '#what-about-section-1-inner', '#what-about-section-1-content');
	encFlexWidthCenter('#what-about-section-1-outer', '#what-about-section-1-center', 1.2, 1.2, 1.2, 1.5);

	//ABOUT SECTION 2
	encAllMinHeightsEqualElementA_Half(window, '#what-about-section-2-outer');
	encVerticalCenter('#what-about-section-2-outer', '#what-about-section-2-inner', '#what-about-section-2-content');
	encFlexWidthCenter('#what-about-section-2-outer', '#what-about-section-2-center', 1.2, 1.2, 1.2, 1.5);

	//ABOUT SECTION 3
	encAllMinHeightsEqualElementA_Half(window, '#what-about-section-3-outer');
	encVerticalCenter('#what-about-section-3-outer', '#what-about-section-3-inner', '#what-about-section-3-content');
	encFlexWidthCenter('#what-about-section-3-outer', '#what-about-section-3-center', 1.2, 1.2, 1.2, 1.5);

	//ABOUT SECTION 4
	encAllMinHeightsEqualElementA_Half(window, '#what-about-section-4-outer');
	encVerticalCenter('#what-about-section-4-outer', '#what-about-section-4-inner', '#what-about-section-4-content');
	encFlexWidthCenter('#what-about-section-4-outer', '#what-about-section-4-center', 1.2, 1.2, 1.2, 1.2);

	/*var aboutSection2OuterHeight = $(window).height() / 2;
	var aboutSection2H2Height = $('.what-about-section-2-h2').height();
	var aboutSection2ArticleLeftFigureHeight = $('#what-about-section-2-article-left-figure').height();
	var aboutSection2PHeight = $('#what-about-section-2-article-left-p').height();
	
	var aboutSection2OuterRealHeight = aboutSection2OuterHeight - aboutSection2H2Height;
	var aboutSection2ItemHeight = aboutSection2OuterRealHeight / 2;

	$('#what-about-section-2-article-left-figure').css("min-height", aboutSection2ItemHeight);
	$('#what-about-section-2-article-left-p').css("min-height", aboutSection2ItemHeight);*/
});