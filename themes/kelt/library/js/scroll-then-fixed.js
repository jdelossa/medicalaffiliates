jQuery(document).ready(function($){
   $(window).scroll(function() {
       
       var headerH = $('#home').outerHeight(true);
//this will calculate header's full height, with borders, margins, paddings
		//console.log(headerH);
       var scrollVal = $(this).scrollTop();
        if ( scrollVal > headerH ) {
            // $('.navbar-static-top').css({'position': 'fixed', 'top' : '80px', 'width' : '100%'});

        } else {
            // $('.navbar-static-top').css({'position': 'relative', 'top' : '0'});
            // $('.single.navbar-static-top').css({'position': 'relative !important' });

        }
    });
 });