$(window).on("load resize scroll",function(e){
	encFlexWidthCenter(window, '.what-blog-h1, .what-blog', 1.6, 1.6, 1.6, 1.6);
	encAllMinHeightsEqualElementA_Half(window, '.what-blog');
	encAllHeightsEqualElementA_Half(window, '.what-blog-image');
	encAllWidthsEqualElementA('.what-blog', '.what-blog-image');
	
	encFlexWidthCenter(window, '#what-blogArticle-section', 1.5, 1.5, 1.5, 1.5);
	
});