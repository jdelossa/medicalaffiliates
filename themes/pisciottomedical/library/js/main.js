// File: library/main.js

// MAP STYLES

var myOptions = {
    zoom: 11,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]}]
  };

// OFFICE ONE && OFFICE TWO

var officeOneLat = 40.701894,
    officeOneLng = -73.883348,
    officeTwoLat = 40.7237881,
    officeTwoLng = -73.6321029,

	map = new GMaps({
		div: '#map',
		lat: officeOneLat,
		lng: officeOneLng,
		center: new google.maps.LatLng(40.715,-73.75),
		options: myOptions
	});

  map.addMarker ({
  	lat: officeOneLat,
  	lng: officeOneLng,
  	title: 'Glendale Office',
  	infoWindow: {
  		content: '<p>Glendale Office</p>'
  	}
  });

  map.addMarker ({
    lat: officeTwoLat,
    lng: officeTwoLng,
    title: 'Mineola Office',
    infoWindow: {
      content: '<p>Mineola Office</p>'
    }
  });


// PAN TO MARKER

$(document).on('click', 'pan-to-marker', function(e){
    e.preventDefault();

    var lat, lng;

    var $index = $(this).data('marker-index');
    var $lat = $(this).data('marker-lat');
    var $lng = $(this).data('marker-lng');

    if($index != undefined) {

        var position = map.markers[$index].getPosition();
        lat = position.lat();
        lng = position.lng();
    }
    else {
        lat = $lat;
        lng = $lng;
    }
    map.setCenter(lat, lng);
});