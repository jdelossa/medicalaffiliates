jQuery(document).ready(function($){
  
  var bumpIt = function() {
    $('.push-footer').css('margin-bottom', $('#footer').height() + 34);
  },
      didResize = false;

  bumpIt();
  $(window).resize(function() { didResize = true; });
  
  setInterval(function() {
    if(didResize) {
      didResize = false;
      bumpIt();
    }
  }, 250);
  
});

