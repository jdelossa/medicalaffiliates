$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]");var t=-80;if(e.length){$("html,body").animate({scrollTop:e.offset().top+t},1e3);return!1}}})});$(document).ready(function(){if($("body").hasClass("single")){$("a.about").attr("href","/anzalone_wordpress/#about");$("a.medical-staff").attr("href","/anzalone_wordpress/#medical-staff");$("a.patient-information").attr("href","/anzalone_wordpress/#patient-information");$("a.contact").attr("href","/anzalone_wordpress/#contact-us")}});