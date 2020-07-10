var App = App || {};

(function() {

	App.HeaderMenu = {
		init: function() {
			this.headerScroll();
		},
		headerScroll: function(){

			$(document).scroll(function () {
				var $nav = $(".navbar-fixed-top");
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
			});

			//Change navbar icon to X
			$('#headerNavbar').click(function(){
				$(this).toggleClass('close');
			});

		}
	}
})();