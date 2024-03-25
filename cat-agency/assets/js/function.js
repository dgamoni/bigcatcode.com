(function ($) {

	function msieversion() {
		var ua = window.navigator.userAgent;
		var msie = ua.indexOf("MSIE ");

		if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
			$('html').addClass("ie");
		}
		else {                // If another browser, return 0
			console.log('otherbrowser');
		}
		return false;
	}

	function scrollTop() {
		var box = $(".works");

		box.on("click", "button", function () {
			var $this = $(this),
				href = $this.attr("data-href"),
				topY = $(href).offset().top;
			TweenMax.to($(window), 1, {
				scrollTo: {
					y       : topY,
					autoKill: true
				},
				ease    : Power3.easeOut
			});
			return false;
		});
	}

	$(document).ready(function () {
		new WOW().init();
		msieversion();
		$(window).on('load', function(){
			$('.slider').slick({
				dots         : true,
				infinite     : true,
				arrows       : false,
				autoplay     : true,
				lazyLoad: 'progressive',
				// autoplay     : false,
				autoplaySpeed: 5000
			});
			setTimeout(function(){
				$('header.navbar').animate({'height':'100vh', 'opacity':'1'},400);
				if ($(window).scrollTop() > $(window).height() + 20) {
					$('.float-head').addClass('fixed');
					$('.top-hidden-menu').removeClass('hidden');
				}
				else {
					$('.float-head').removeClass('fixed');
					$('.top-hidden-menu').addClass('hidden');
					$('.ham-menu').removeClass('open');
					$('.top-hidden-menu').removeClass('open');

				}
			},300);
//
		});


		$('.works .btn-small').click(function () {
			scrollTop();
		});
		$('.testim .btn-small').click(function () {
			if ($(this).hasClass('show-more')) {
				$('.primary-test').show();
				$('.show-less').css('display', 'inline-block');
			} else {
				$('.primary-test').hide();
				$('.show-more').show();
			}
			$(this).hide();
		});


		$('.top-box').click(function () {
			$('.lang').toggleClass('active');
		});

	


		if ($('.float-head').length) {

			$(window).on('scroll load', function () {
				if ($(window).scrollTop() > $('header.navbar').height() + 20) {
					$('.float-head').addClass('fixed');
					$('.top-hidden-menu').removeClass('hidden');
				}
				else {
					$('.float-head').removeClass('fixed');
					$('.top-hidden-menu').addClass('hidden');
					$('.ham-menu').removeClass('open');
					$('.top-hidden-menu').removeClass('open');

				}
			});

		}


		$(".scroll_to").click(function (e) {
			e.preventDefault();
			var elementClick = $(this).attr("data-href");
			var destination = $('[data-id="' + elementClick + '"]').offset().top;

			if ($(this).parents('.top-menu')) {
				destination = $('[data-id="' + elementClick + '"]').offset().top;
//				$('.top-menu').parents('li').addClass('current-menu-item');
//				$(this).parents('li').addClass('current-menu-item');
			}

			if ($('.top-hidden-menu').hasClass('open') || $('.ham-menu').hasClass('open')) {
				$('.ham-menu').removeClass('open');
				$('.top-hidden-menu').removeClass('open');
				$('.top-hidden-menu .menu-list a').removeClass('current');
				$(this).parents('.top-hidden-menu').find('a[data-href="' + elementClick + '"]').addClass('current');
			}

			$('body,html').animate({ scrollTop: destination }, 800);
		});

		$(document).on('click', '.ham-icon', function () {

			if ($(window).scrollTop() < $('header.navbar').height()) {
				$('body,html').animate({ scrollTop: $('.float-head').offset().top +50}, 500);

				setTimeout(function(){
					$('.ham-menu').addClass('open');
					$('.top-hidden-menu').removeClass('hidden');
					$('.top-hidden-menu').addClass('open');
				},600);

			}
			else{
				$(this).parents('.ham-menu').toggleClass('open');
				$('.top-hidden-menu').toggleClass('open');
			}

		});


		$(this).keydown(function (eventObject) {
			if (eventObject.which == 27) {
				$('.ham-menu').removeClass('open');
				$('.top-hidden-menu').removeClass('open');
			}
		});


		$('.show_more_test').on('click', function () {
			$('.spoil-test-wrap').animate({'height': $('.spoil-test-wrap .main-test').height() + 40 + 'px'}, 500);
		});
		$('.show_less_test').on('click', function () {
			$('.spoil-test-wrap').animate({'height': '350px'}, 500);
		});


		function tabs() {

			$(".tab-item").click(function () {
				$(this).parents('.tabs-container').find(".tab-content").hide().css('opacity', '0');
				$(this).parents('.tabs-container').find(".tab-item").removeClass("active");
				$(this).addClass("active");

				var id = $(this).find('a').attr('data-href');
				$('.tab-content[data-id="' + id + '"]').show().css({ "height": "100%"}).animate({
					'opacity': '1'
				}, 500);

				return false;


			});
		}

		if ($('.tabs-container').length) {
			tabs();
		}


		$(document).on('click', '.spoil .show-more', function () {
			$(this).parents('.spoil').addClass('open');
			var spH = $(this).parents('.spoil').find('.spoil-content').height();
			$(this).parents('.spoil').find('.spoil-wrap').height(spH);
			$(this).hide();
			$('.show-less').show();
		});
		$(document).on('click', '.spoil .show-less', function () {
			$(this).parents('.spoil').removeClass('open');
			$(this).parents('.spoil').find('.spoil-wrap').height(900);
			$(this).hide();
			$('.show-more').show();
		});


		$('.inp-wrap .inp').on('focus', function(){
			$(this).parent().addClass('focused');
		}).on('blur', function(){
			$(this).parent().removeClass('focused');
		});



		function showHideModal(trig,targ){
			$(trig).on('click touchstart', function(e){
				e.preventDefault();
				var ot = $(window).scrollTop();
				if ($(window).width() < 767) {
					$('.request-modal').css({
						'position':'absolute',
						'overflow':'hidden',
						'top': ot
					});
					setTimeout(function () {
						$(targ).addClass('open');
						// $('.request-modal-overlay').addClass('open');
					}, 400);
					setTimeout(function () {
						// $(targ).addClass('open');
						$('.request-modal-overlay').addClass('open');
					}, 800);

				}
				else {
					$(targ).addClass('open');
				}
			});

			$(this).keydown(function (eventObject) {
				if (eventObject.which == 27){
					$(targ).removeClass('open');
					if($('.request-modal-overlay').is('.open')) {
						$('.request-modal-overlay').removeClass('open');
					}
				}
			});
			$('.close-modal').click(function(){
				$(targ).removeClass('open');
				$('.request-modal-overlay').removeClass('open');
			});
		}

		showHideModal('.showReqModal','.request-modal');
		$('.work-item').mouseenter(function(){
			$(this).find('.work-logo.image').fadeOut(300);
			$(this).find('.work-logo.desc').fadeIn(300);
		}).mouseleave(function(){
			$(this).find('.work-logo.desc').fadeOut(300);
			$(this).find('.work-logo.image').fadeIn(300);
		});

	});
})(jQuery);