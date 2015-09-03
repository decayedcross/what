document.addEventListener("DOMContentLoaded", function(event){
	init();
    TweenLite.set('body', { 
		margin: 0, 
		padding: 0,
		boxSizing: "border-box"
	});
	
	$(".state").tap(function(){
		TweenLite.to('#united-states', 0.1, {opacity: 0});
		currentWidth = $(window).width();
		currentHeight = $(window).height();
		TweenLite.to('.box', 1, {top: 0, left: 0, height: currentHeight, width: currentWidth, zIndex: 1});
		var cssId = this.id;
		$.ajax({
			url: 'templates/what/_ajaxHandlers/choose.php',
			type: 'POST',
			data: {"cssId": cssId},
			success: function(result){
				$('#state-active').html(result);
			}
		});
	});

	$(".box").tap(function(){
		TweenLite.to('#united-states', 0.1, {opacity: 1});
		TweenLite.to('.box', 1, {height: 0, width: 0});
	});
});