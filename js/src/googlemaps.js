$(document).ready(function() {

  function initialize() {

  	var gmarkers = [];
  	var map = null;
  	var infowindow = null;

    var styles = [
    {
        "featureType": "all",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f0f0f0"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "gamma": 0.01
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "saturation": -31
            },
            {
                "lightness": -33
            },
            {
                "weight": 2
            },
            {
                "gamma": 0.8
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 30
            },
            {
                "saturation": 30
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "saturation": 20
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 20
            },
            {
                "saturation": -20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 10
            },
            {
                "saturation": -30
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "saturation": 25
            },
            {
                "lightness": 25
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "lightness": -20
            }
        ]
    }
];
		
		var mapOptions = {
        center: new google.maps.LatLng(41.65807,-91.5313452),
        zoom: 14,
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
        ['Wizard Today', 41.65807,-91.5313452]
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

});