jQuery(document).ready(function($){
   $(window).scroll(function() {
       
       var headerH = $('.navbar-fixed-top').outerHeight(true);
//this will calculate header's full height, with borders, margins, paddings
		//console.log(headerH);
       var scrollVal = $(this).scrollTop();
        if ( scrollVal > headerH ) {
            $('.navbar-fixed-top').css({'top': '22px'});
            $('.about-border').css({ 'border-top-left-radius' : '0'});
            $('.contact-border').css({ 'border-top-right-radius' : '0'});

        } else {
            $('.navbar-fixed-top').css({'top': '32px'});
            $('.about-border').css({ 'border-top-left-radius' : '25%'});
            $('.contact-border').css({ 'border-top-right-radius' : '25%'});
        }
    });
 });