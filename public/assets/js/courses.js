(function ($) {
	"use strict";
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if (scroll != 0) {
			$("header").addClass("background-header");
		} else {
			$("header").removeClass("background-header");
		}
	})
	// Menu Dropdown Toggle
	if ($('.menu-trigger').length) {
		$(".menu-trigger").on('click', function () {
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				var width = $(window).width();
				if (width < 991) {
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
// let url = window.location.href;
// let id = url.slice(-1);
// console.log(id)
let url = window.location.search;
const urlParams = new URLSearchParams(url);
let id=urlParams.get('id')
console.log('id=',id)
if(id==1){
	document.getElementById('thanwy').addEventListener('click', () => {
		document.getElementById('english').style.display = "block";
		document.getElementById('english').style.cssText = 'display: flex; flex-direction: row; '
		document.getElementById('arabic').style.display = "none";
		document.getElementById('title').innerHTML = "1st Preparatory";
	
		document.getElementById('thanwy').style.cssText = "color:#f5a425"
		document.getElementById('prep').style.cssText = "color:white"
	
	
		console.log("clicked")
	
	})
	
	document.getElementById('prep').addEventListener('click', () => {
		document.getElementById('arabic').style.display = "block";
		document.getElementById('arabic').style.cssText = 'display: flex; flex-direction: row;'
		document.getElementById('title').innerHTML = "???????? ???????????? ????????";
		document.getElementById('english').style.display = "none";
		document.getElementById('prep').style.cssText = "color:#f5a425"
		document.getElementById('thanwy').style.cssText = "color:white"
		console.log("clicked-prep")
	})
}
else if(id==2){
	document.getElementById('thanwy').addEventListener('click', () => {
		document.getElementById('english').style.display = "block";
		document.getElementById('english').style.cssText = 'display: flex; flex-direction: row; '
		document.getElementById('arabic').style.display = "none";
		document.getElementById('title').innerHTML = "2st Preparatory";
	
		document.getElementById('thanwy').style.cssText = "color:#f5a425"
		document.getElementById('prep').style.cssText = "color:white"
	
	
		console.log("clicked")
	
	})
	
	document.getElementById('prep').addEventListener('click', () => {
		document.getElementById('arabic').style.display = "block";
		document.getElementById('arabic').style.cssText = 'display: flex; flex-direction: row;'
		document.getElementById('title').innerHTML = "?????????? ???????????? ????????";
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
		document.getElementById('title').innerHTML = "3st Preparatory";
	
		document.getElementById('thanwy').style.cssText = "color:#f5a425"
		document.getElementById('prep').style.cssText = "color:white"
	
	
		console.log("clicked")
	
	})
	
	document.getElementById('prep').addEventListener('click', () => {
		document.getElementById('arabic').style.display = "block";
		document.getElementById('arabic').style.cssText = 'display: flex; flex-direction: row;'
		document.getElementById('title').innerHTML = "?????????? ???????????? ????????";
		document.getElementById('english').style.display = "none";
		document.getElementById('prep').style.cssText = "color:#f5a425"
		document.getElementById('thanwy').style.cssText = "color:white"
		console.log("clicked-prep")
	})
}
// var url =document.getElementsByClassName('card-link')
// for(var i=0;i<url.length;i++){
//     console.log(url[i].href)
//     var urlid=url[i].href
//     let params = new URLSearchParams(urlid.search);
//     let id = params.get('id');
//     console.log(id)
// }
// const params = new URLSearchParams(window.location.href);
// const id = params.get("id");
// let urlid=window.location.href
// let params = new URLSearchParams(urlid.search);
// let id = params.get('id');
// console.log(id)

