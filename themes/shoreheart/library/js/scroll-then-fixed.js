jQuery(document).ready(function($){
   $(window).scroll(function() {
       
       var headerH = $('.navbar-fixed-top').outerHeight(true);
//this will calculate header's full height, with borders, margins, paddings
       var scrollVal = $(this).scrollTop();

        if ( scrollVal > headerH ) {
            $('.navbar-fixed-top').css({'background' : '#D24D57',
            	'-webkit-animation' : 'fadein 0.5s', '-moz-animation' : 'fadein 0.5s', 
        		'-ms-animation' : 'fadein 0.5s', '-o-animation' : 'fadein 0.5s', 'animation' : 'fadein 0.5s'
          });
            $('#contact-button a').css({'background-color' : '#414B55' });

            $('.buttons').css({'background-color' : '#D24D57' });
          
        } 
        else {
            $('.navbar-fixed-top').css({'background' : 'rgba(0,0,0,0.0)',
            	'-webkit-animation' : 'fadein 0.5s', '-moz-animation' : 'fadein 0.5s', 
        		'-ms-animation' : 'fadein 0.5s', '-o-animation' : 'fadein 0.5s', 'animation' : 'fadein 0.5s'
		      });
            $('#contact-button a').css({'background-color' : '#D24D57'  });

            $('.buttons').css({'background-color' : 'transparent' });
         
        }
        
    });
 });
