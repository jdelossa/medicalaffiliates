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
    if ($("body").hasClass("error404")){
        $("a.about").attr("href", "/#about");
        $("a.doctors").attr("href", "/#doctors");
        $("a.contact").attr("href", "/#contact");
    };
});