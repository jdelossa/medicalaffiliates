jQuery(document).ready(function(e){if(sci_google_address!==""){geocoder=new google.maps.Geocoder;geocoder.geocode({address:sci_google_address},function(e,t){if(t==google.maps.GeocoderStatus.OK){var n=google.maps.MapTypeId.ROADMAP;switch(sci_google_maptype){case"roadmap":var n=google.maps.MapTypeId.ROADMAP;break;case"satellite":var n=google.maps.MapTypeId.SATELLITE;break;case"hybrid":var n=google.maps.MapTypeId.HYBRID;break;case"terrain":var n=google.maps.MapTypeId.TERRAIN}var r={zoom:parseInt(sci_google_zoom),center:e[0].geometry.location,mapTypeId:n},i=new google.maps.Map(document.getElementById("sci-google-map"),r),s=new google.maps.Marker({map:i,position:e[0].geometry.location})}})}});