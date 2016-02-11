jQuery(document).ready(function($){
   $(window).scroll(function() {
       
       var headerH = $('.header-static-top').outerHeight(true);
//this will calculate header's full height, with borders, margins, paddings
		//console.log(headerH);
       var scrollVal = $(this).scrollTop();
        if ( scrollVal > headerH ) {
            $('.navbar-fixed-top').css({'background-color': 'rgba(247,247,247,0.95)'});
            $('.navbar .title h3').css({'color': '#545454'});
            $('.nav > li > a').css({'color': '#545454'});
        } else {
            $('.navbar-fixed-top').css({'background-color': 'transparent'});
            $('.navbar .title h3').css({'color': '#ffffff'});
            $('.nav > li > a').css({'color': '#ffffff'});
        }
    });
 });