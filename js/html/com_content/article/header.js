$(window).on("load resize scroll",function(e){
encFlexWidthCenter('#what-header', '#large', 1.2, 1.2, 1.2, 2);

/*
var parentElement = window;
var childElement = '#what-header';
var parentElementHeight = $(parentElement).height() / 2;
var childElementHeight = $(childElement).height();
	
var parentMinusChildHeight = parentElementHeight - childElementHeight;

$(childElement).css("top", parentMinusChildHeight);
*/
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    var headerHeight = $("#what-header").height();
    var scrollValue = windowHeight - headerHeight;
    if (scroll >= scrollValue / 2) {
        $("#what-header").addClass("what-header-nav-large-scroll");
    } else {
        $("#what-header").removeClass("what-header-nav-large-scroll");
    }
});

/*startClass = '#what-header';
minusClass = 'uk-slidenav-position';
endClass = 'what-header-nav-large-scroll';


		var header = $(startClass);
	var minusClassHeight = $(minusClass).height();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
		
		var parentElement = window;
var childElement = '#what-header';
var parentElementHeight = $(parentElement).height() / 2;
var childElementHeight = $(childElement).height();
	
var parentMinusChildHeight = parentElementHeight - childElementHeight;
		
	var windowHeight = $(window).height();
	var windowHeightDivide = windowHeight / 8;
	var windowHeightMinus = windowHeightDivide + minusClassHeight;
        if (scroll >= windowHeightMinus) {
            $(startClass).css("top", -windowHeightMinus);
        } else {
            $(startClass).css("top", parentMinusChildHeight);
        }
		console.log(scroll);
    });*/