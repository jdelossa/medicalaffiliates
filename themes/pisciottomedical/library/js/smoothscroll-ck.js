$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]");var t=-80;if(e.length){$("html,body").animate({scrollTop:e.offset().top+t},1e3);return!1}}})});$(document).ready(function(){if($("body").hasClass("single")){$("a.home").attr("href","http://wuhwebsites.winthrop.org/pisciotto_wordpress/#home");$("a.about").attr("href","http://wuhwebsites.winthrop.org/pisciotto_wordpress/#about");$("a.physicians").attr("href","http://wuhwebsites.winthrop.org/pisciotto_wordpress/#physicians");$("a.accepted-insurance").attr("href","http://wuhwebsites.winthrop.org/pisciotto_wordpress/#insurance");$("a.offices").attr("href","http://wuhwebsites.winthrop.org/pisciotto_wordpress/#offices")}});