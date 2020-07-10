var App = App || {};

(function() {

	App.CarouselBullets = {
		init: function() {
			this.swiper();
			this.scrollto();
		},
		swiper: function(){

			var swiper = new Swiper('.home-carousel-banner', {
				draggable: true,
				pagination: {
					el: '.banner-pagination',
				},
				autoplay: {
					delay: 6000,
				},
			});
		},
		scrollto: function(){
			$("#forHomeSolucoes").click(function() {
				$('html,body').animate({
					scrollTop: $('#homeSolucoes').offset().top-72
				}, 'slow');
			});
		}
	}
})();