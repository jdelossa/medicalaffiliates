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
  var home = "http://anzalone.testing-multisite.dev/";
  if ($( "body" ).hasClass("single") || $("body").hasClass("error404")){
    $("a.about").attr("href", home + "#about");
    $("a.medical-staff").attr("href", home + "#medical-staff");
    $("a.patient-information").attr("href", home + "#patient-information");
    $("a.contact").attr("href", home + "#contact-us");
  };
});

