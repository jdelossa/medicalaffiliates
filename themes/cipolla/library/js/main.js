// File: library/main.js

var myOptions = {
    zoom: 11,
    center: new google.maps.LatLng(40.755878,-73.3138625),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]}]
};

//var map = new google.maps.Map(document.getElementById('map'), myOptions);

var officeOneLat = 40.755878,
	officeOneLng = -73.3138625,

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
	title: 'Anthony Cipolla Medical Services',
	infoWindow: {
		content: '<strong>Anthony Cipolla Medical Services</strong>'
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
  size: [500, 200],
  lat: 40.755878,
  lng: -73.3138625,
  markers: [
    {lat: 40.755878, lng: -73.3138625},
  ]
});


$('<img/>').attr('src', url)
  .appendTo('#map');
