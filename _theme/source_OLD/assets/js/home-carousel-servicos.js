var App = App || {};

(function() {

	App.HomeServicosCarousel = {
		init: function() {
			this.swiper();
			this.startAnimation();
		},
		swiper: function(){

			var swiper = new Swiper('.home-servicos', {
				slidesPerView: 3,
				// centeredSlides: true,
				loop: true,
				centeredSlides: true,
				spaceBetween : 5,
				pagination: {
					clickable: true,
				},
				autoplay: {
					delay: 3500,
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
		},

		startAnimation: function(){
			// $('.quem-somos-petabytes').waypoint(function(direction) {
			// 	// console.log('Reached ' + this.element.id + ' from ' + direction + ' direction.');


			// }, {offset:'50%'});
		}
	}
})();