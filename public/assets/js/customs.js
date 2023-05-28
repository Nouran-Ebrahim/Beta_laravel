(function ($) {
	"use strict";
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();
  
		if (scroll != 0) {
		  $("header").addClass("background-header");
		} else {
		  $("header").removeClass("background-header");
		}
	})


	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				var width = $(window).width();
				if(width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);	
				}				
				$('html,body').animate({
					scrollTop: (target.offset().top) - 80
				}, 700);
				return false;
			}
		}
	});
	$('.owl-courses-item').owlCarousel({
		items:4,
		loop:true,
		dots: true,
		nav: true,
		autoplay: true,
		margin:30,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:4
			  }
		  }
	  })
})(window.jQuery);
document.getElementById('thanwy').addEventListener('click',()=>{
	document.getElementById('thawy-content').style.display="flex";
   
	document.getElementById('prep-content').style.display="none";

document.getElementById('thanwy').style.cssText="color:#f5a425"
document.getElementById('prep').style.cssText="color:white"

	
console.log("clicked")

})

document.getElementById('prep').addEventListener('click',()=>{
	document.getElementById('prep-content').style.display="flex";
   

	document.getElementById('thawy-content').style.display="none";
	document.getElementById('prep').style.cssText="color:#f5a425"
	document.getElementById('thanwy').style.cssText="color:white"
console.log("clicked-prep")
})


