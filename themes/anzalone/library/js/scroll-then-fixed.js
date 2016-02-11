jQuery(document).ready(function($){
   $(window).scroll(function() {
       
       var headerH = $('.navbar-static-top').outerHeight(true);
//this will calculate header's full height, with borders, margins, paddings
		//console.log(headerH);
       var scrollVal = $(this).scrollTop();
        if ( scrollVal > headerH ) {
            $('.navbar-static-top').css({'postion': 'fixed'});
        } else {
            $('.navbar-static-top').css({'position': 'static'});
        }
    });
 });