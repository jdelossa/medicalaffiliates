$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]");var t=-80;if(e.length){$("html,body").animate({scrollTop:e.offset().top+t},1e3);return!1}}})});$(document).ready(function(){if($("#wrapper").hasClass("doctor-page")){$("a.about").attr("href","http://wuhwebsites.winthrop.org/advanced_neuro_wordpress/#about");$("a.insurance").attr("href","http://wuhwebsites.winthrop.org/advanced_neuro_wordpress/#insurance");$("a.contact").attr("href","http://wuhwebsites.winthrop.org/advanced_neuro_wordpress/#contact")}else if($("#wrapper").hasClass("error-page")){$("a.about").attr("href","http://wuhwebsites.winthrop.org/advanced_neuro_wordpress/#about");$("a.insurance").attr("href","http://wuhwebsites.winthrop.org/advanced_neuro_wordpress/#insurance");$("a.contact").attr("href","http://wuhwebsites.winthrop.org/advanced_neuro_wordpress/#contact")}});$(document).ready(function(){$("#menu-toggle").click(function(e){e.preventDefault();$("#sidebar-wrapper").toggleClass("toggled");$("#wrapper").toggleClass("toggled");$(".navbar-toggle").toggleClass("toggled")})});$(document).ready(function(){$(".home .sidebar-nav > li > a").click(function(e){e.preventDefault();$("#sidebar-wrapper").removeClass("toggled");$("#wrapper").removeClass("toggled")})});