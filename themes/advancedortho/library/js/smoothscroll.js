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
  var home = "http://advancedortho.testing-multisite.dev/";
  if($("body").hasClass("error404")){
    $("a.tab-about").attr("href", home + "#about");
    $("a.tab-staff").attr("href", home + "#medical-staff-rc");
    $("a.tab-contact").attr("href", home + "#contact-rc");
  }
});

$(document).ready(function(){
  $(".rockville-centre" ).click(function() {
    $("a.tab-staff").attr("href", "#medical-staff-rc");
    $("a.tab-contact").attr("href", "#contact-rc");
  });
  $( ".garden-city" ).click(function() {
    $("a.tab-staff").attr("href", "#medical-staff-gc");
    $("a.tab-contact").attr("href", "#contact-gc");
    google.maps.event.trigger(map, 'resize');
    map.setCenter(latlng);
  });
});

