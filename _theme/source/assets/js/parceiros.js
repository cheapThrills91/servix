var App = App || {};

(function() {

	App.ParceirosAccordion = {
		init: function() {
			this.ParceirosAccordion();
		},
		ParceirosAccordion: function(){

			// First you'll need to disable the default collapsible
			// behavior on large screens:

			$('a[data-toggle="collapse"]').click(function(e){
				if ( $(window).width() >= 992 ) {
					// Should prevent the collapsible and default anchor linking
					// behavior for screen sizes equal or larger than 768px.
					e.preventDefault();
					e.stopPropagation();
				}
			});

			var $win;

			// Function toggles bootstrap collapse based on window width.
			function toggleCollapse($win) {
				// Small screens
				if ($win.width() < 991) {
					$('.panel-collapse').collapse('hide');
				}
				if ($win.width() >= 992) {
						$('.panel-collapse').collapse('show');
				}
			}

			// Set collapsible appearance on window load;
			toggleCollapse($(window));

			// Toggle collapsibles on resize. Optional if you want
			// to be able to show/hide on window resize.
			$(window).on('resize', function() {
				var $win = $(this);
				toggleCollapse($win);
			});

		}
	}
})();