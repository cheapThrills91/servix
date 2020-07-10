var App = App || {};

(function() {

	App.ChangeIcon = {
		init: function() {
			this.ChangeIcon();
		},
		ChangeIcon: function(){
			$('.item').click(function(){
				$(this).toggleClass('open');
			});
		}
	}
})();