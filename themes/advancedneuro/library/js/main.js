// File: library/main.js

var myOptions = {
    zoom: 11,
    center: new google.maps.LatLng(40.703788,-73.5726421),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]
};

//var map = new google.maps.Map(document.getElementById('map'), myOptions);

var officeOneLat = 40.691734,
	officeOneLng = -73.465361,
	officeTwoLat = 40.7197241,
	officeTwoLng = -73.6181785,

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
	title: 'Massapequa Office',
	infoWindow: {
		content: '<strong>Massapequa Office</strong>'
	}
});
map.addMarker ({
	lat: officeTwoLat,
	lng: officeTwoLng,
	title: 'Garden City Office',
	infoWindow: {
		content: '<strong>Garden City Office</strong>'
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


url = GMaps.staticMapURL({
  size: [600, 500],
  lat: 40.705134,
  lng: -73.6321873,
  markers: [
    {lat: 40.6867772, lng: -73.6340339},
    {lat: 40.7237881, lng: -73.6321029,}
  ]
});


$('<img/>').attr('src', url)
  .appendTo('#map');
