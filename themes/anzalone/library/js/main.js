// File: library/main.js

var myOptions = {
    zoom: 12,
    center: new google.maps.LatLng(40.6955625,-73.4644011),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"water","elementType":"all","stylers":[{"hue":"#76aee3"},{"saturation":38},{"lightness":-11},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"hue":"#8dc749"},{"saturation":-47},{"lightness":-17},{"visibility":"on"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#c6e3a4"},{"saturation":17},{"lightness":-2},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"hue":"#cccccc"},{"saturation":-100},{"lightness":13},{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"hue":"#5f5855"},{"saturation":6},{"lightness":-31},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[]}]};

//var map = new google.maps.Map(document.getElementById('map'), myOptions);

var officeOneLat = 40.6955625,
	officeOneLng = -73.4644011,

	map = new GMaps({
		div: '#map',
		lat: officeOneLat,
		lng: officeOneLng,
		options: myOptions
	});

//Markers

map.addMarker ({
	lat: officeOneLat,
	lng: officeOneLng,
	title: 'Vincent Anzalone Medical Services',
	infoWindow: {
		content: '<strong>Vincent Anzalone Medical Services</strong>'
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
  size: [300, 200],
  lat: 40.6955625,
  lng: -73.4644011,
  markers: [
    {lat: 40.6955625, lng: -73.4644011},
  ]
});


$('<img/>').attr('src', url)
  .appendTo('#map');
