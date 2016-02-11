// File: library/main.js

var myOptions = {
    zoom: 12,
    center: new google.maps.LatLng(40.6900789,-73.3570156),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]
};

//var map = new google.maps.Map(document.getElementById('map'), myOptions);


// South Shore Cardiovascular Office Locations

var officeOneLat = 40.676059,
	officeOneLng = -73.416459,
	officeTwoLat = 40.696464,
	officeTwoLng = -73.309228,

	map = new GMaps({
		div: '#map',
		lat: officeOneLat,
		lng: officeOneLng,
		lat: officeTwoLat,
		lng: officeTwoLng,
		options: myOptions
	});

//Markers

map.addMarker ({
	lat: officeOneLat,
	lng: officeOneLng,
	title: 'Amityville Office',
	infoWindow: {
		content: '<strong>Amityville Office</strong>'
	}
});

map.addMarker ({
	lat: officeTwoLat,
	lng: officeTwoLng,
	title: 'West Islip Office',
	infoWindow: {
		content: '<strong>West Islip Office</strong>'
	}
});


// Update center
$(document).on('click', '.pan-to-marker', function(e) {
  e.preventDefault();

  var lat, lng;

  var $index = $(this).data('marker-index');
  var $lat = $(this).data('marker-lat');
  var $lng = $(this).data('marker-lng');

  if ($index != undefined) {
    // using indices
    var position = map.markers[$index].getPosition();
    lat = position.lat();
    lng = position.lng();
  }
  else {
    // using coordinates
    lat = $lat;
    lng = $lng;
  }

  map.setCenter(lat, lng);
});



