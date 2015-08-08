var videoCategoryObject = '#video-category .object';
var videoCategoryObjectContent = '#video-category .object .content';
var videoCategoryObjectContentRightH2 = '#video-category .object .content .right h2';
var videoCategoryDescription = '#video-category .object .content .right .description';


var callback = function(){
	ENC.height.EqualElement_Tallest(videoCategoryObjectContentRightH2);
	//$(videoCategoryDescription).hide();
};

$(document).ready(callback);
$(window).load(callback);
$(window).scroll(callback);
$(window).resize(callback);