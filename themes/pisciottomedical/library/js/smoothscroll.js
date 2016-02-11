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
  var homepage = "http://pisciotto.testing-multisite.dev/"
  if($("body").hasClass("single") || $("body").hasClass("error404") ){
    $("a.home").attr("href", homepage + "/#home");
    $("a.about").attr("href", homepage + "/#about");
    $("a.physicians").attr("href", homepage + "/#physicians");
    $("a.accepted-insurance").attr("href", homepage + "/#insurance");
    $("a.offices").attr("href", homepage + "/#offices");
  };
});

