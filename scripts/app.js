document.addEventListener("DOMContentLoaded", function(event){
	//INIT LEVIATHAN
	init();
	
	//SET BODY CSS
    TweenLite.set('body', { 
		margin: 0, 
		padding: 0,
		boxSizing: "border-box"
	});
	
	//AJAX CALL TO DETERMINE WHAT CITIES BELONG TO WHAT STATE
	$(".state").tap(function(){
		currentWidth = $(window).width();
		currentHeight = $(window).height();
		TweenLite.to('#united-states', 0.1, {opacity: 0});
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

	//CLOSE CITY CHOOSE
	$(".box").tap(function(){
		TweenLite.to('#united-states', 0.1, {opacity: 1});
		TweenLite.to('.box', 1, {height: 0, width: 0});
	});
	
	//SETUP AUDIO
	var audio;
	var playlist;
	var tracks;
	var current;

	audioInit();
	
	function audioInit(){
		current = 0;
		audio = $('#audio');
		if(audio[0] !== undefined){
			playlist = $('#playlist');
			tracks = playlist.find('li a');
			len = tracks.length - 1;
			audio[0].volume = 0.10;
			//audio[0].play();
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
	}
	function run(link, player){
			player.src = link.attr('href');
			par = link.parent();
			par.addClass('active').siblings().removeClass('active');
			audio[0].load();
			audio[0].play();
	}
	
	//WALLOP HOME SLIDESHOW
	var wallopEl = document.querySelector('.Wallop');
	if(wallopEl !== null){
		var wallop = new Wallop(wallopEl, {carousel: true});

		var paginationDots = Array.prototype.slice.call(document.querySelectorAll('.Wallop-dot'));

		/*
		Attach click listener on the dots
		*/
		paginationDots.forEach(function (dotEl, index) {
		  dotEl.addEventListener('click', function() {
			wallop.goTo(index);
			init();
		  });
		});

		/*
		Listen to wallop change and update classes
		*/
		wallop.on('change', function(event){
		  init();
		  TweenLite.to('.Wallop-item', 1, {opacity:0, backgroundPosition: "100% 100%"});
		  TweenLite.to('.Wallop-item h1', 1, {opacity: 0});
		  TweenLite.to('.Wallop-item h2', 1, {y: -100, opacity: 0, ease: Elastic.easeOut.config(0.1, 0.7)});

		  TweenLite.to(document.querySelector('.Wallop-item--current'), 1, {opacity:1, backgroundPosition: "0% 0%"});
		  TweenLite.to(document.querySelector('.Wallop-item--current h1'), 4, {opacity: 1});
		  TweenLite.to(document.querySelector('.Wallop-item--current h2'), 2.5, {y: 0, opacity: 1, ease: Power3.easeInOut});

		  $(document.querySelector('.Wallop-dot--current')).removeClass('Wallop-dot--current');
		  $(paginationDots[event.detail.currentItemIndex]).addClass('Wallop-dot--current');
		});

		$(".next").tap(function() {
		  wallop.next();
		});

		$(".previous").tap(function() {
		  wallop.previous();
		});

		//AUTOPLAY

		/*var count = wallop.allItemsArrayLength;
		var start = wallop.currentItemIndex;
		var end = count+1;
		var index = start;    

		$(function(){
			setInterval(function() {
				wallop.goTo(index);     
				++index;
				if (index == end) {index=start;}
			},5000);
		});*/	
	}
});