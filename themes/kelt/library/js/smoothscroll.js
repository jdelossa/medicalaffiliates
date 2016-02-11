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
  var home = "http://kelt.testing-multisite.dev/";
  if ($( "body" ).hasClass("single") || $('section').hasClass("privacy-page") || $('body').hasClass("error404")){
    $("a.about").attr("href", home + "#about");
    $("a.patient-information").attr("href", home + "#patient-information");
    $("a.contact").attr("href", home + "#contact");
  };
});

