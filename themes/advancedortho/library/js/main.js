// File: library/main.js

// MAP STYLES

var myOptions = {
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"landscape","stylers":[{"hue":"#F1FF00"},{"saturation":-27.4},{"lightness":9.4},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#0099FF"},{"saturation":-20},{"lightness":36.4},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#00FF4F"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FFB300"},{"saturation":-38},{"lightness":11.2},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00B6FF"},{"saturation":4.2},{"lightness":-63.4},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#9FFF00"},{"saturation":0},{"lightness":0},{"gamma":1}]}]
};

// OFFICE ONE

var officeOneLat = 40.6867772,
    officeOneLng = -73.6340339,

	map = new GMaps({
		div: '#rockville-map',
		lat: officeOneLat,
		lng: officeOneLng,
		center: new google.maps.LatLng(40.6867772,-73.6340339),
		options: myOptions
	});

	map.addMarker ({
  	lat: officeOneLat,
  	lng: officeOneLng,
  	title: 'Rockville Centre Office',
  	infoWindow: {
  		content: '<p>Rockville Centre Office</p>'
  	}
  });

// OFFICE TWO

var officeTwoLat = 40.7240353,
    officeTwoLng = -73.6346184,

  mapProp = new GMaps({
    div: '#garden-map',
    lat: officeTwoLat,
    lng: officeTwoLng,
    center: new google.maps.LatLng(40.7240353,-73.6346184),
    options: myOptions

  });

  mapProp.addMarker ({
    lat: officeTwoLat,
    lng: officeTwoLng,
    title: 'Garden City Office',
    infoWindow: {
      content: '<p>Garden City Office</p>'
    }
  });


  





