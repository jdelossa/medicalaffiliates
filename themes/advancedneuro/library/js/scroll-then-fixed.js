jQuery(document).ready(function($){
   $(window).scroll(function() {
       
       var headerH = $('.jumbotron').outerHeight(true);
//this will calculate header's full height, with borders, margins, paddings
		//console.log(headerH);
       var scrollVal = $(this).scrollTop();
        if ( scrollVal > headerH ) {
            $('.header').css({'background-color' : 'rgba(255,255,255,0.8)' });
        } 
        else {
            $('.header').css({'background-color' : '#ffffff'});
        }
    });
 });