$(window).load(function() {
	$("#loader").fadeOut("slow");
});
$(document).ready(function(){

	// Highlight the top nav as scrolling occurs
   $('body').scrollspy({
      target: '.navbar-fixed-top',
      offset: 51
   });

   // Offset for Main Navigation
   $('.navbar-default').affix({
      offset: {
         top: 40
      }
   });

   //nicescroll
  $("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#191919",cursoropacitymin:.5});
  function initNice() {
    if($(window).innerWidth() <= 960) {
      $('html').niceScroll().remove();
    } else {
      $("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#191919",cursoropacitymin:.5});
    }
  }
  $(window).load(initNice);
  $(window).resize(initNice);
});

