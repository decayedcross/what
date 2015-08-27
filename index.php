<?php 
defined('_JEXEC') or die;
require_once('config/init.php');

use joomla\router;
use joomla\module;
use joomla\article;
use framework\html;
use framework\string;

$html = new html();
$router = new router();
$article = new article();
$module = new module();
$string = new string();


$router->load(JRequest::getVar('id'), ROUTE, JRequest::getVar('option'), JRequest::getVar('view'), JRequest::getVar('layout'), JFactory::getConfig(), JUri::getInstance(), JURI::base());

/*Google Map Cords*/
$article->sectionContent('contact', '3-section');
$string->breakExplodeVars($article->introtext);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php $router->meta(); ?>

    <link href="templates/what/css/load.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div id="fb-root"></div>
    <?php
	$module->loadSections(__DIR__, 'header');
	$router->init();
	$module->loadSections(__DIR__, 'footer');
	?>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="templates/what/bower/jquery/dist/jquery.min.js"></script>
	<script src="templates/what/bower/matchHeight/jquery.matchHeight-min.js"></script>
	<script src="templates/what/bower/jQuery-Flex-Vertical-Center/jquery.flexverticalcenter.js"></script>
	<script src="templates/what/bower/jquery.tap/jquery.tap.min.js"></script>
	<script src="templates/what/bower/justifiedGallery/src/js/justifiedGallery.js"></script>
	<script src="templates/what/bower/gsap/src/minified/jquery.gsap.min.js"></script>
	<script src="templates/what/bower/gsap/src/minified/plugins/CSSPlugin.min.js"></script>
	<script src="templates/what/bower/gsap/src/minified/easing/EasePack.min.js"></script>
	<script src="templates/what/bower/gsap/src/minified/TweenLite.min.js"></script>
	<script src="templates/what/bower/velocity/velocity.min.js"></script>
	<script src="templates/what/enclave/js/slider.js"></script>
	<script src="templates/what/leviathan/src/js/init.js"></script>
	<script type="text/javascript">
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		window.twttr = (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0],
			t = window.twttr || {};
		  if (d.getElementById(id)) return t;
		  js = d.createElement(s);
		  js.id = id;
		  js.src = "https://platform.twitter.com/widgets.js";
		  fjs.parentNode.insertBefore(js, fjs);

		  t._e = [];
		  t.ready = function(f) {
			t._e.push(f);
		  };

		  return t;
		}(document, "script", "twitter-wjs"));
		$('.slider').slider({
			indicators: true,
			height: $(window).height() / 4,
			transition: 500,
			interval: 6000
		});
		$("#photo-category #gallery").justifiedGallery({
			lastRow : 'nojustify', 
			rowHeight : 250,
			maxRowHeight: '200%',
			rel : 'gallery',
			margins : 8,
			fixedHeight: false,
			justifyThreshold: 0.75,
			sizeRangeSuffixes: {
				'lt100': '_t',
				'lt240': '_m',
				'lt320': '_n',
				'lt500': '',
				'lt640': '_z',
				'lt1024': '_b'
			},
    	});
		
		var toggleStatus = 0;
		var toggle = '#header #section-4 #nav #toggle i';
		var collapse = '#header #section-4 #nav #collapse';
		var menu = '#header #section-4 #nav #collapse #menu';
		
		$(toggle).tap(function() {
			if(toggleStatus === 0){
				var currentMenuHeight = $(menu).outerHeight();
				TweenLite.to(collapse, 1, {height:currentMenuHeight});
				toggleStatus++;
			}else{
				TweenLite.to(collapse, 1, {height:"0"});
				toggleStatus = 0;
			}
		});
		
		$('#home #section-5 .row form').submit(function() {
			var email = $('#home #section-5 .row form input').val();
			$.ajax({
				url: 'templates/whatviews/handlers/home/newsletter.php',
				type: 'POST',
				data: {"email": email},
				success: function(result){
					if(result === 'subscribed'){
						$('#home #section-5 .row form').load('templates/what/views/handlers/home/newsletter_submission.php');
					}else{
						$('#home #section-5 .row form').load('templates/what/views/handlers/home/newsletter_error.php');
					}
				}
			});
			return false;
		});
		
		$("#contact-section-1-from").submit(function() {
			var date = $('#date').val();
			var ip = $('#ip').val();
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var phone = $('#phone').val();
			var email = $('#email').val();
			var subject = $('#subject').val();
			var message = $('#message').val();
			$.ajax({
				url: 'templates/what/views/handlers/contact/contact.php',
				type: 'POST',
				data: {"date": date, "ip": ip, "firstname": firstname, "lastname": lastname, "phone": phone, "email": email, "subject": subject, "message": message},
				success: function(result){
					if(result === 'true'){
						$('#contact-section-1-from').load('templates/what/views/handlers/contact/contact_submission.php');
					}
				}
			});
			return false;
		});

var headerSection3Nav = '#header #section-3 #nav';
var headerSection3NavMenu = '#header #section-3 #nav #menu ul';
TweenLite.set(headerSection3Nav, {height: 0, overflow: "hidden"});

$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	var headerSection3WindowHalfHeight = $(window).height() / 2;
	var headerSection3NavMenuHeight = $(headerSection3NavMenu).outerHeight();
	if (scroll >= headerSection3WindowHalfHeight){
		TweenLite.to(headerSection3Nav, 1, {height: headerSection3NavMenuHeight, ease: Elastic.easeOut.config(1, 0.3)});
	}else{
		TweenLite.to(headerSection3Nav, 1, {height: "0px", ease: Elastic.easeOut.config(0.3, 0.3)});
	}
});
		
function initialize() {
  	var gmarkers = [];
  	var map = null;
  	var infowindow = null;
    var styles = [
		{
			"featureType": "administrative",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#444444"
				}
			]
		},
		{
			"featureType": "landscape",
			"elementType": "all",
			"stylers": [
				{
					"color": "#ffffff"
				}
			]
		},
		{
			"featureType": "poi",
			"elementType": "all",
			"stylers": [
				{
					"visibility": "off"
				}
			]
		},
		{
			"featureType": "road",
			"elementType": "all",
			"stylers": [
				{
					"saturation": -100
				},
				{
					"lightness": 45
				}
			]
		},
		{
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#71c0f8"
				}
			]
		},
		{
			"featureType": "road",
			"elementType": "labels.text",
			"stylers": [
				{
					"color": "#000000"
				}
			]
		},
		{
			"featureType": "road",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#000000"
				}
			]
		},
		{
			"featureType": "road",
			"elementType": "labels.text.stroke",
			"stylers": [
				{
					"color": "#ffffff"
				}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "all",
			"stylers": [
				{
					"visibility": "simplified"
				}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
				{
					"color": "#71c0f8"
				}
			]
		},
		{
			"featureType": "road.arterial",
			"elementType": "labels.icon",
			"stylers": [
				{
					"visibility": "off"
				}
			]
		},
		{
			"featureType": "transit",
			"elementType": "all",
			"stylers": [
				{
					"visibility": "off"
				}
			]
		},
		{
			"featureType": "transit",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#000000"
				}
			]
		},
		{
			"featureType": "transit",
			"elementType": "labels.text.stroke",
			"stylers": [
				{
					"color": "#ffffff"
				}
			]
		},
		{
			"featureType": "water",
			"elementType": "all",
			"stylers": [
				{
					"color": "#71c0f8"
				},
				{
					"visibility": "on"
				}
			]
		},
		{
			"featureType": "water",
			"elementType": "labels.text.fill",
			"stylers": [
				{
					"color": "#000000"
				}
			]
		},
		{
			"featureType": "water",
			"elementType": "labels.text.stroke",
			"stylers": [
				{
					"color": "#ffffff"
				}
			]
		}
	];	
	
	var mapOptions = {
        center: new google.maps.LatLng(<?php echo $string->text_0; ?>,<?php echo $string->text_1; ?>),
        zoom: <?php echo $string->text_2; ?>,
        scrollwheel: false,
    	navigationControl: false,
    	scaleControl: true,
    	draggable: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        zoomControl: true,
        overviewMapControl: false,
        panControl: false,
        streetViewControl: false,
        styles: styles
     };

      map = new google.maps.Map(document.getElementById("contact-map"), mapOptions);

      google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
      });

      var locations = [
        ['Encounter Pain Relief', <?php echo $string->text_0; ?>,<?php echo $string->text_1; ?>]
       ];

      /*infowindow = new google.maps.InfoWindow({
        size: new google.maps.Size(150,50)
      });*/

      function setMarkers(locations) {
        for (var i = 0; i < locations.length; i++) {
          var location = locations[i];
          var myLatLng = new google.maps.LatLng(location[1], location[2]);
          var marker = new google.maps.Marker({
              position: myLatLng,
              animation: google.maps.Animation.DROP,
              map: map,
              title: location[0]
          });

					// Standard markers - if not using infobox
          google.maps.event.addListener(marker, "click", function () {
	        map.setCenter(marker.getPosition());
	        infowindow.setContent(this.html);
	        infowindow.open(map, this);
          });
          gmarkers.push(marker);
        }
      }

      // Add the markers
      setMarkers(locations);

  }

  // add window listener for GMaps
  google.maps.event.addDomListener(window, 'load', initialize);


	</script>
  </body>
</html>