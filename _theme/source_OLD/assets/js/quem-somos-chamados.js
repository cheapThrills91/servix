var App = App || {};

(function() {

	App.QuemSomosChamados = {
		init: function() {
			this.chamados();
		},
		chamados: function(){

			$(".progress").each(function() {
				$(this).waypoint(function() {
				var progressBar = $(".progress-bar");
				progressBar.each(function(indx){
						$(this).css("width", $(this).attr("aria-valuenow") + "%");
				});
				}, {
						triggerOnce: true,
						offset: 'bottom-in-view'
					});
			});
		}
	}
})();