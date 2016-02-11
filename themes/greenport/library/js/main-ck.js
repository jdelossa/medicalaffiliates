// File: library/main.js
var myOptions={zoom:17,center:new google.maps.LatLng(41.0632334,-72.3246891),mapTypeId:google.maps.MapTypeId.ROADMAP,scrollwheel:!1,navigationControl:!1,mapTypeControl:!1,scaleControl:!1,draggable:!1,styles:[{featureType:"water",stylers:[{visibility:"on"},{color:"#b5cbe4"}]},{featureType:"landscape",stylers:[{color:"#efefef"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#83a5b0"}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#bdcdd3"}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#ffffff"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#e3eed3"}]},{featureType:"administrative",stylers:[{visibility:"on"},{lightness:33}]},{featureType:"road"},{featureType:"poi.park",elementType:"labels",stylers:[{visibility:"on"},{lightness:20}]},{},{featureType:"road",stylers:[{lightness:20}]}]},officeOneLat=41.0632334,officeOneLng=-72.3246891,map=new GMaps({div:"#map",lat:officeOneLat,lng:officeOneLng,options:myOptions});map.addMarker({lat:officeOneLat,lng:officeOneLng,title:"Peter Kelt Medical Services",infoWindow:{content:"<strong>Peter Kelt Medical Services</strong>"}});$(document).on("click",".pan-to-marker",function(e){e.preventDefault();var t,n,r=$(this).data("marker-index"),i=$(this).data("marker-lat"),s=$(this).data("marker-lng");if(r!=undefined){var o=map.markers[r].getPosition();t=o.lat();n=o.lng()}else{t=i;n=s}map.setCenter(t,n)});url=GMaps.staticMapURL({size:[600,500],lat:41.0632334,lng:-72.3246891,markers:[{lat:41.0632334,lng:-72.3246891}]});$("<img/>").attr("src",url).appendTo("#map");