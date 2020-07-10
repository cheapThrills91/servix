var App = App || {};

(function() {

	App.HomeSolucoesCarousel = {
		init: function() {
			this.swiper();
		},
		swiper: function(){

			var swiper = new Swiper('.home-solucoes', {
				slidesPerView: 3,
				// centeredSlides: true,
				loop: true,
				centeredSlides: true,
				spaceBetween : 5,
				pagination: {
					clickable: true,
				},
				autoplay: {
					delay: 3000,
				},

				breakpointsInverse: true,
				breakpoints: {
					// when window width is >= 991px
					991: {
						loop: true,
						slidesPerView: 5,
						spaceBetween: 15,
					}
				}
			});
		}
	}
})();