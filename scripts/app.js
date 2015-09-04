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
	
	var audio;
	var playlist;
	var tracks;
	var current;

	audioInit();
	function audioInit(){
		current = 0;
		audio = $('audio');
		playlist = $('#playlist');
		tracks = playlist.find('li a');
		len = tracks.length - 1;
		audio[0].volume = 0.10;
		audio[0].play();
		playlist.find('a').click(function(e){
			e.preventDefault();
			link = $(this);
			current = link.parent().index();
			run(link, audio[0]);
		});
		audio[0].addEventListener('ended',function(e){
			current++;
			if(current == len){
				current = 0;
				link = playlist.find('a')[0];
			}else{
				link = playlist.find('a')[current];    
			}
			run($(link),audio[0]);
		});
	}
	function run(link, player){
			player.src = link.attr('href');
			par = link.parent();
			par.addClass('active').siblings().removeClass('active');
			audio[0].load();
			audio[0].play();
	}
});