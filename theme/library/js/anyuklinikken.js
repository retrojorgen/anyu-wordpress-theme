(function($) {
	$(function() {

		var menuToggle = false;

		$('img').attr({
			'width': '',
			'height': ''
		});

		$('.menu-item-has-children>a').on('click',function(event) {
			event.preventDefault();
		});

		$('.mobile-menu-toggle').on('touchstart', function(event) {
			$('.main-navigation>ul').toggle();
		});

		$(window).on('scroll', function(event) {
			if(window.innerWidth > 500) {
				var scrolled = $(window).scrollTop();

				if($('.hero').length) {
					$('.hero').css('background-position-y', -(scrolled/4));
				}

				if($('.post-image-article')) {
					$('.post-image-article').css('background-position-y', -(scrolled/2));	
				}
			}

			if(scrolled > 0 && !menuToggle) {
				console.log(scrolled);
				$('.main-header').addClass('active');
				menuToggle = true;
				
			}

			if(scrolled <= 0 && menuToggle) {
				$('.main-header').removeClass('active');
				menuToggle = false;
			}
		});
	});
})(jQuery);