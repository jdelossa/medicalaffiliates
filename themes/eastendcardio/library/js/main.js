// File: library/main.js
var myOptions = {
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]}]
};

var officeOneLat = 40.933264,
    officeOneLng = -72.648901,
  	officeTwoLat = 41.110391,
  	officeTwoLng = -72.361276,

	map = new GMaps({
		div: '#map',
		lat: officeOneLat,
		lng: officeOneLng,
		options: myOptions,
    center: new google.maps.LatLng(40.933264,-72.648901),
	});

  map2 = new GMaps({
    div: '#map2',
    lat: officeTwoLat,
    lng: officeTwoLng,
    options: myOptions,
    center: new google.maps.LatLng(41.110391,-72.361276),
  });


//Markers

map.addMarker ({
	lat: officeOneLat,
	lng: officeOneLng,
	title: 'Riverhead Office',
	infoWindow: {
		content: '<strong>Riverhead Office</strong>'
	}
});

map2.addMarker ({
	lat: officeTwoLat,
	lng: officeTwoLng,
	title: 'Greenport Office',
	infoWindow: {
		content: '<strong>Greenport Office</strong>'
	}
});

url = GMaps.staticMapURL({
  size: [400, 200],
  lat: 41.0187336,
  lng: -72.50477,
  markers: [
    {lat: 40.933264, lng: -72.648901},
    {lat: 41.110391, lng: -72.361276}
  ]
});


$('<img/>').attr('src', url)
  .appendTo('#map');
$('<img/>').attr('src', url)
  .appendTo('#map2');
