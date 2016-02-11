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
  var home = "http://cipolla.testing-multisite.dev/";
  if ($( "#single" ).hasClass("doctor-page") || $("body").hasClass("error404")){
    $("a.about-nav").attr("href", home +"#about");
    $("a.medical-staff-nav").attr("href", home +"#medical-staff");
    $("a.insurance-nav").attr("href", home +"#insurance");
    $("a.contact-nav").attr("href", home +"#contact");
  };
});

