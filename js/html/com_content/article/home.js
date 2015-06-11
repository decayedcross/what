$(window).on("load resize scroll",function(e){
	encAllMinHeightsEqualElementA(window, '#what-home-section-1, #what-home-section-1-0, #what-home-section-1-1, #what-home-section-1-2');
	encAllMinHeightsEqualElementA(window, '#what-home-section-2');
	
	encAllMinHeightsEqualElementA_Half(window, '#what-home-section-3-paralax');
	
	
	encFlexWidthCenter('#what-home-section-1', '.what-home-section-1-overlay-content', 1.2, 1.2, 1.2, 2);
	encFlexWidthCenter('#what-home-section-2', '.what-home-section-2-center', 1.2, 1.2, 1.2, 1.2);
	
	encVerticalCenter('#what-home-section-2', '#what-home-section-2-inner', '#what-home-section-2-content');
	
	
	//SECTION 3
	encAllMinHeightsEqualElementA_Half(window, '#what-home-section-3-outer');
	encVerticalCenter('#what-home-section-3-outer', '#what-home-section-3-inner', '#what-home-section-3-content');
	encFlexWidthCenter('#what-home-section-3-outer', '#what-home-section-3-center', 1.2, 1.2, 1.2, 1.5);
	
	//SECTION 4
	encAllMinHeightsEqualElementA_Half(window, '#what-home-section-4-outer');
	encVerticalCenter('#what-home-section-4-outer', '#what-home-section-4-inner', '#what-home-section-4-content');
	encFlexWidthCenter('#what-home-section-4-outer', '#what-home-section-4-center', 1.2, 1.2, 1.2, 1.5);
	
	//SECTION 5
	encVerticalCenter('#what-home-section-5-outer', '#what-home-section-5-inner', '#what-home-section-5-content');
	
	//SECTION 6
	encAllMinHeightsEqualElementA_Half(window, '#what-home-section-6-outer');
	encVerticalCenter('#what-home-section-6-outer', '#what-home-section-6-inner', '#what-home-section-6-content');
	encFlexWidthCenter('#what-home-section-6-outer', '#what-home-section-6-center', 1.2, 1.2, 1.2, 1.5);

	//SECTION 7
	encAllHeightsEqualElementA_Half(window, '#what-home-section-7-outer');
	encVerticalCenter('#what-home-section-7-outer', '#what-home-section-7-inner', '#what-home-section-7-content');

	encAllHeightsEqualElementA('#what-home-section-7-outer', '#what-home-section-7-cover, #what-home-section-7-google-map');
});

$(document).ready(function() {

  function initialize() {

  	var gmarkers = [];
  	var map = null;
  	var infowindow = null;

    var styles = [
    {
        "featureType": "all",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#353535"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
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
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "landscape.natural.landcover",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#777777"
            },
            {
                "lightness": 17
            }
        ]
    }
];

      var mapOptions = {
        center: new google.maps.LatLng(55.869998, -4.263405),
        zoom: 13,
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

      map = new google.maps.Map(document.getElementById("what-home-section-7-cover"), mapOptions);

      google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
      });

      var locations = [
        ['Daily Record Building', 55.861136, -4.257803]
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


