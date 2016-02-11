$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      var space = -80;
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top + space
        }, 1000);
        return false;
      }
    }
  });
});

$(document).ready(function(){
  var home = "http://advancedneuro.testing-multisite.dev/";
  if ($( "#wrapper" ).hasClass("doctor-page") || $( "#wrapper" ).hasClass("error-page")){
    $("a.about").attr("href", home + "#about");
    $("a.insurance").attr("href", home + "#insurance");
    $("a.contact").attr("href", home + "#contact");
  }
});
