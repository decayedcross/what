if (window.matchMedia("(max-width: 767px)").matches) {
	encParallellHeight('#bapc-home-teaser #container #left', '#bapc-home-teaser #container #right', 1);
	encSetHalfHeight('main figure', 'main figure .grid');
	encSetSameHeightMinusMargin('main figure .grid', 'main figure .grid .grid-container');
	encEvenMargin('10px', '#image-1', '#image-2', '#image-3', '#image-4');
	encVerticalCenter('main figure .grid .grid-container .overlay', 'main figure .grid .grid-container .overlay .overlay-container', 'main figure .grid .grid-container .overlay .overlay-container .overlay-content');
	encHoverAddClass('main figure .grid .grid-container .overlay', 'active');
	encSetSameHeightMinusMargin('main figure .grid .grid-container', 'main figure .grid .grid-container .overlay');
	encHoverAddClassSub('#bapc-home-teaser #container #right .grid .overlay', 
	'#bapc-home-teaser #container #right .grid .overlay .overlay-container', 
	'bapc-home-overlay-content-h3-active', 
	'bapc-home-overlay-content-h3-non-active');
}else{
	encParallellHeight('#bapc-home-teaser #container #left', '#bapc-home-teaser #container #right', 1.2);
	encSetHalfHeight('main figure', 'main figure .grid');
	encSetSameHeightMinusMargin('main figure .grid', 'main figure .grid .grid-container');
	encEvenMargin('15px', '#image-1', '#image-2', '#image-3', '#image-4');
	encVerticalCenter('main figure .grid .grid-container .overlay', 'main figure .grid .grid-container .overlay .overlay-container', 'main figure .grid .grid-container .overlay .overlay-container .overlay-content');
	encHoverAddClass('main figure .grid .grid-container .overlay', 'active');
	encSetSameHeightMinusMargin('main figure .grid .grid-container', 'main figure .grid .grid-container .overlay');
	encHoverAddClassSub('#bapc-home-teaser #container #right .grid .overlay', 
	'#bapc-home-teaser #container #right .grid .overlay .overlay-container', 
	'bapc-home-overlay-content-h3-active', 
	'bapc-home-overlay-content-h3-non-active');
}

$(window).on("load resize scroll",function(e){
	var bapcHomeSectionH3Height = $('#bapc-home-section-3 .uk-overlay-panel h3').height();
	$('head').append('<style>#bapc-home-section-3 .uk-overlay-panel h3:before{margin-top:' + bapcHomeSectionH3Height + 'px;}</style>');
});