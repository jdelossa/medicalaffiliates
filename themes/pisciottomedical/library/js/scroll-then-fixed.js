jQuery(document).ready(function($){
   $(window).scroll(function() {
       
      var headerH = $('#hero').outerHeight(true);
      //this will calculate header's full height, with borders, margins, paddings
		  //console.log(headerH);
      var scrollVal = $(this).scrollTop();
        if ( scrollVal > headerH ) {
            $('.navbar-fixed-top').css({'background-color': '#ffffff'});
        } else {
            $('.navbar-fixed-top').css({'background-color': 'rgba(255,255,255,0.7)'});
        }
    });
 });