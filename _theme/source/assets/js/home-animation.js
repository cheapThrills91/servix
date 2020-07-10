var App = App || {};

(function() {

	App.homeAnimation = {
		init: function() {
			this.changeBackground();
			this.animateRec();
		},
		changeBackground: function(){

			var homeMenu = $('.navbar');

			$('#headerNavbar').click(function(){
				homeMenu.toggleClass('blue-menu');
			});
		},
		animateRec: function(){

			$('.home-carousel-solucoes').waypoint(function(direction) {
				//console.log('Reached ' + this.element.id + ' from ' + direction + ' direction.');

				$('.rect-solucoes').addClass('animate');

			}, {offset:'80%'});

			$('.home-carousel-servicos').waypoint(function(direction) {
				//console.log('Reached ' + this.element.id + ' from ' + direction + ' direction.');

				$('.rect-servicos').addClass('animate');

			}, {offset:'80%'});

		}
	}
})();