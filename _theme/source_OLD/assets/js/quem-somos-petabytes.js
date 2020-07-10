var App = App || {};

(function() {

	App.QuemSomosPeta = {
		init: function() {
			this.petabytes();
		},
		petabytes: function(){

			$('.quem-somos-petabytes').waypoint(function(direction) {
				// console.log('Reached ' + this.element.id + ' from ' + direction + ' direction.');

				var bar = new ProgressBar.SemiCircle(semiCircle, {
					strokeWidth: 8,
					easing: 'easeInOut',
					duration: 1400,
					color: '#363D54',
					trailColor: '#EEE',
					trailWidth: 1,
					svgStyle: null
				});
				bar.animate(1.0); // Number from 0.0 to 1.0
				this.destroy();
			}, {offset:'50%'});

		}
	}

})();