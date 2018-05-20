(function($) {
	$(function() {
		$(".mobile-menu-toggle").on('click', function (event) {
			console.log('fis');
			$(event.target).toggleClass("active");
			$("#menu-main-menu").toggleClass("active");
		});

		$("img").removeAttr("height");
	});
})(jQuery);