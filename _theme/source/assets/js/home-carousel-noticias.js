var App = App || {};

(function() {

	App.HomeNoticiasCarousel = {
		init: function() {
			this.swiper();
		},
		swiper: function(){
			var swiper = new Swiper('.noticias-carrossel', {
				centeredSlides: true,
				slidesPerView: 1,

				pagination: {
					el: '.noticias-swiper-pagination',
				},

				autoplay: {
					delay: 3000,
				},

				breakpointsInverse: true,
				breakpoints: {
					// when window width is >= 991px
					991: {
						centeredSlides: false,
						slidesPerView: 3,
						spaceBetween: 15,
					}
				}
			});
		}
	}
})();