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
})(window.jQuery);

let url = window.location.href;
//let id = url.slice(-1);
let string=url.slice(-3)
let arr=string.split('/')
let id=arr[1]
let therd=arr[0]
console.log('id=',id)
console.log('3rd=',therd)
console.log(arr)

if(id==1 && therd=='s'){
	console.log('1st secondry')
	document.getElementById('thanwy').addEventListener('click', () => {
		document.getElementById('english').style.display = "block";
		document.getElementById('english').style.cssText = 'display: flex; flex-direction: row; '
		document.getElementById('arabic').style.display = "none";
		document.getElementById('title').innerHTML = "1st secondry";
	
		document.getElementById('thanwy').style.cssText = "color:#f5a425"
		document.getElementById('prep').style.cssText = "color:white"
	
	
		console.log("1st")
	
	})
	
	document.getElementById('prep').addEventListener('click', () => {
		document.getElementById('arabic').style.display = "block";
		document.getElementById('arabic').style.cssText = 'display: flex; flex-direction: row;'
		document.getElementById('title').innerHTML = "أولى ثانوي عربى";
		document.getElementById('english').style.display = "none";
		document.getElementById('prep').style.cssText = "color:#f5a425"
		document.getElementById('thanwy').style.cssText = "color:white"
		console.log("clicked-prep")
	})
}
else if(id==2 && therd=='s'){
	console.log('2st secondry')
	document.getElementById('thanwy').addEventListener('click', () => {
		document.getElementById('english').style.display = "block";
		document.getElementById('english').style.cssText = 'display: flex; flex-direction: row; '
		document.getElementById('arabic').style.display = "none";
		document.getElementById('title').innerHTML = "2st secondry";
	
		document.getElementById('thanwy').style.cssText = "color:#f5a425"
		document.getElementById('prep').style.cssText = "color:white"
	
		console.log("2st")
	
	})
	
	document.getElementById('prep').addEventListener('click', () => {
		document.getElementById('arabic').style.display = "block";
		document.getElementById('arabic').style.cssText = 'display: flex; flex-direction: row;'
		document.getElementById('title').innerHTML = "ثانيه ثانوي عربى";
		document.getElementById('english').style.display = "none";
		document.getElementById('prep').style.cssText = "color:#f5a425"
		document.getElementById('thanwy').style.cssText = "color:white"
		console.log("clicked-prep")
	})
}
else if(therd==3 && id==1) {
	console.log('2daby')
	document.getElementById('thanwy').addEventListener('click', () => {
		document.getElementById('english').style.display = "block";
		document.getElementById('english').style.cssText = 'display: flex; flex-direction: row; '
		document.getElementById('arabic').style.display = "none";
		document.getElementById('title').innerHTML = "3st secondry 2daby";
	
		document.getElementById('thanwy').style.cssText = "color:#f5a425"
		document.getElementById('prep').style.cssText = "color:white"
	
		console.log('2daby')
	
	})
	
	document.getElementById('prep').addEventListener('click', () => {
		document.getElementById('arabic').style.display = "block";
		document.getElementById('arabic').style.cssText = 'display: flex; flex-direction: row;'
		document.getElementById('title').innerHTML = "ثالثه ثانوي ادبي";
		document.getElementById('english').style.display = "none";
		document.getElementById('prep').style.cssText = "color:#f5a425"
		document.getElementById('thanwy').style.cssText = "color:white"
		console.log("clicked-prep")
	})
}
else if(therd==3 && id==2) {
	document.getElementById('thanwy').addEventListener('click', () => {
		document.getElementById('english').style.display = "block";
		document.getElementById('english').style.cssText = 'display: flex; flex-direction: row; '
		document.getElementById('arabic').style.display = "none";
		document.getElementById('title').innerHTML = "3st secondry 3loom";
	
		document.getElementById('thanwy').style.cssText = "color:#f5a425"
		document.getElementById('prep').style.cssText = "color:white"
	
	
		console.log("clicked")
	
	})
	
	document.getElementById('prep').addEventListener('click', () => {
		document.getElementById('arabic').style.display = "block";
		document.getElementById('arabic').style.cssText = 'display: flex; flex-direction: row;'
		document.getElementById('title').innerHTML = "ثالثه ثانوي علوم";
		document.getElementById('english').style.display = "none";
		document.getElementById('prep').style.cssText = "color:#f5a425"
		document.getElementById('thanwy').style.cssText = "color:white"
		console.log("clicked-prep")
	})
}
else{
	document.getElementById('thanwy').addEventListener('click', () => {
		document.getElementById('english').style.display = "block";
		document.getElementById('english').style.cssText = 'display: flex; flex-direction: row; '
		document.getElementById('arabic').style.display = "none";
		document.getElementById('title').innerHTML = "3st secondry ryada";
	
		document.getElementById('thanwy').style.cssText = "color:#f5a425"
		document.getElementById('prep').style.cssText = "color:white"
	
	
		console.log("clicked")
	
	})
	
	document.getElementById('prep').addEventListener('click', () => {
		document.getElementById('arabic').style.display = "block";
		document.getElementById('arabic').style.cssText = 'display: flex; flex-direction: row;'
		document.getElementById('title').innerHTML = "ثالثه ثانوي رياضه";
		document.getElementById('english').style.display = "none";
		document.getElementById('prep').style.cssText = "color:#f5a425"
		document.getElementById('thanwy').style.cssText = "color:white"
		console.log("clicked-prep")
	})
}

