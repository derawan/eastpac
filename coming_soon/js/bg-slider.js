/*
|--------------------------------------------------------------------------
	Light Template BG slider JS
|--------------------------------------------------------------------------
*/
document.addEventListener("touchstart", function() {},false);
(function ($) {
	"use strict";
		
	$('body').vegas({
	  overlay: true,
	  transition: 'fade', 
	  transitionDuration: 4000,
	  delay: 10000,
	  animation: 'random',
	  animationDuration: 20000,
	  timer: false,
	  slides: [
		{ src: 'images/i-1.jpeg' },
		{ src: 'images/i-2.jpeg' },
		{ src: 'images/i-3.jpeg' },
		{ src: 'images/i-4.jpeg' },
		{ src: 'images/i-5.jpg' }
			
	  ]
	});

})(jQuery);
	
/*
|--------------------------------------------------------------------------
	End
|--------------------------------------------------------------------------
*/