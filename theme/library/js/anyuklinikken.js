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

		$('.mobile-menu-toggle').on('click', function(event) {
		//$('.mobile-menu-toggle').on('touchstart', function(event) {
			$('.top-nav').toggleClass('mobile-show');
			$('body').toggleClass('mobile-hide');
			console.log($('.top-nav'));
		});

		$(window).on('scroll', function(event) {
			var scrolled = $(window).scrollTop();
			if(scrolled > 10) {
				$('.main-header').addClass('highlight-menu')
			} else {
				$('.main-header').removeClass('highlight-menu')
			}
			if($('.hero').length > 0) {
				$('.hero-content').css('opacity',1 - (scrolled/600));
			} else {
			}

			if(window.innerWidth > 500) {
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