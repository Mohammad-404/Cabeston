
<!-- start footer area -->
<footer class="footer-area-content">

	<div class="container">
		<div class="footer-wrapper style-3">
			<div class="type-1">
				<div class="footer-columns-entry">
					<div class="row">
						<div class="col-md-3">
							<img alt="" src="img/footer-logo.png" class="footer-logo">
							<div class="footer-description">s hdas dasjsk dkjas</div>
							<div class="footer-address">Amman<br> Phone: +962 795 439 152<br> Email: <a href="mailto:Support@demo.com">
								m.almasri97.me@gmail.com
							</a><br>
								<a target="_blank" href="#"><b>www.Ecommerce.com</b></a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Customer Care</h3>
							<ul class="column">
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Your Account</h3>
							<ul class="column">
								<li><a href="Profile.php">My Account</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Shop Information</h3>
							<ul class="column">
								<li><a href="#">About</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-3">
							<h3 class="column-title">Company working hours</h3>
							<div class="footer-description">ajksbashbdkjsabd</div>
							<div class="footer-description">
								<b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
								<b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
								<b>Sunday:</b> Closed
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="footer-bottom footer-wrapper style-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-bottom-navigation">
						<div class="cell-view">
<!-- 							<div class="footer-links">
								<a href="#">Site Map</a>
								<a href="#">Search</a>
								<a href="#">Terms</a>
								<a href="#">Advanced Search</a>
								<a href="#">Orders and Returns</a>
								<a href="#">Contact Us</a>
							</div> -->
							<div class="copyright"> Copyright <a target="_blank" href="#">Mohammad AL-Masri</a> . All right reserved</div>
						</div>
<!-- 						<div class="cell-view">
							<div class="payment-methods">
								<a href="#"><img alt="" src="img/payment-method-1.png"></a>
								<a href="#"><img alt="" src="img/payment-method-2.png"></a>
								<a href="#"><img alt="" src="img/payment-method-3.png"></a>
								<a href="#"><img alt="" src="img/payment-method-4.png"></a>
								<a href="#"><img alt="" src="img/payment-method-5.png"></a>
								<a href="#"><img alt="" src="img/payment-method-6.png"></a>
							</div>
						</div> -->
					</div>
				</div>
			</div>

		</div>
	</div>



</footer>
<!-- footer area end -->


<!-- All script -->
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<!-- Scroll up js
============================================ -->
<script src="js/jquery.scrollUp.js"></script>
<script src="js/menu.js"></script>
<!-- new collection section script -->
<script src="js/swiper/idangerous.swiper.min.js"></script>
<script src="js/swiper/swiper.custom.js"></script>

<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.countdown.min.js"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>



<script src="js/flexslider/jquery.flexslider-min.js"></script>
<script src="js/image-lightbox/imagelightbox.js"></script>


<script type="text/javascript">

	/*-----------------------------------------------------------------------------------*/
	/* Flex Slider
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().flexslider) {

		// Product Page Flex Slider
		$('.product-slider').flexslider({
			animation: "slide",
			animationLoop: false,
			slideshow: false,
			prevText: '<i class="fa fa-angle-left"></i>',
			nextText: '<i class="fa fa-angle-right"></i>',
			animationSpeed: 250,
			controlNav: "thumbnails"
		});
	}

	/*-----------------------------------------------------------------------------------*/
	/* Product Carousel
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().owlCarousel) {
		var productCarousel = $("#product-carousel");
		productCarousel.owlCarousel({
			loop: true,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				900: {
					items: 3
				},
				1100: {
					items: 4
				}
			}
		});

		// Custom Navigation Events
		$(".product-control-nav .next").on("click", function() {
			productCarousel.trigger('next.owl.carousel');
		});

		$(".product-control-nav .prev").on("click", function() {
			productCarousel.trigger('prev.owl.carousel');
		});
	}

	/* Main Slider */
	$('.tp-banner0').show().revolution({
		dottedOverlay: "none",
		delay: 5000,
		startWithSlide: 0,
		startwidth: 869,
		startheight: 520,
		hideThumbs: 10,
		hideTimerBar: "on",
		thumbWidth: 50,
		thumbHeight: 50,
		thumbAmount: 4,
		navigationType: "bullet",
		navigationArrows: "solo",
		navigationStyle: "round",
		touchenabled: "on",
		onHoverStop: "on",
		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,
		parallax: "mouse",
		parallaxBgFreeze: "on",
		parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
		keyboardNavigation: "off",
		navigationHAlign: "right",
		navigationVAlign: "bottom",
		navigationHOffset: 30,
		navigationVOffset: 30,
		soloArrowLeftHalign: "left",
		soloArrowLeftValign: "center",
		soloArrowLeftHOffset: 50,
		soloArrowLeftVOffset: 8,
		soloArrowRightHalign: "right",
		soloArrowRightValign: "center",
		soloArrowRightHOffset: 50,
		soloArrowRightVOffset: 8,
		shadow: 0,
		fullWidth: "on",
		fullScreen: "off",
		spinner: "spinner4",
		stopLoop: "on",
		stopAfterLoops: -1,
		stopAtSlide: -1,
		shuffle: "off",
		autoHeight: "off",
		forceFullWidth: "off",
		hideThumbsOnMobile: "off",
		hideNavDelayOnMobile: 1500,
		hideBulletsOnMobile: "off",
		hideArrowsOnMobile: "off",
		hideThumbsUnderResolution: 0,
		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 500,
		hideAllCaptionAtLilmit: 500,
		videoJsPath: "rs-plugin/videojs/",
		fullScreenOffsetContainer: ""
	});


	/*-----------------------------------------------------------------------------------*/
	/* Tabs
	 /*-----------------------------------------------------------------------------------*/
	$(function() {
		var $tabsNav = $('.tabs-nav'),
				$tabsNavLis = $tabsNav.children('li');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.tab-content').stop(true, true).hide()
					.first().show();
			$this.children('li').first().addClass('active').stop(true, true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);
			$this.siblings().removeClass('active').end()
					.addClass('active');
			var idx = $this.parent().children().index($this);
			$this.parent().next().children('.tab-content').stop(true, true).hide().eq(idx).fadeIn();
			e.preventDefault();
		});

	});


	/*-----------------------------------------------------------------------------------*/
	/*	Tabs Widget
	 /*-----------------------------------------------------------------------------------*/
	$('.footer .tabbed .tabs li:first-child, .tabbed .tabs li:first-child').addClass('current');
	$('.footer .block:first, .tabbed .block:first').addClass('current');


	$('.tabbed .tabs li').on("click", function() {
		var $this = $(this);
		var tabNumber = $this.index();

		/* remove current class from other tabs and assign to this one */
		$this.siblings('li').removeClass('current');
		$this.addClass('current');

		/* remove current class from current block and assign to related one */
		$this.parent('ul').siblings('.block').removeClass('current');
		$this.closest('.tabbed').children('.block:eq(' + tabNumber + ')').addClass('current');
	});



	/*-----------------------------------------------------------------------------------*/
	/*	Image Lightbox
	 /*  http://osvaldas.info/image-lightbox-responsive-touch-friendly
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().imageLightbox) {

		// ACTIVITY INDICATOR

		var activityIndicatorOn = function() {
					$('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
				},
				activityIndicatorOff = function() {
					$('#imagelightbox-loading').remove();
				},


		// OVERLAY

				overlayOn = function() {
					$('<div id="imagelightbox-overlay"></div>').appendTo('body');
				},
				overlayOff = function() {
					$('#imagelightbox-overlay').remove();
				},


		// CLOSE BUTTON

				closeButtonOn = function(instance) {
					$('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function() {
						$(this).remove();
						instance.quitImageLightbox();
						return false;
					});
				},
				closeButtonOff = function() {
					$('#imagelightbox-close').remove();
				},

		// ARROWS

				arrowsOn = function(instance, selector) {
					var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

					$arrows.appendTo('body');

					$arrows.on('click touchend', function(e) {
						e.preventDefault();

						var $this = $(this),
								$target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
								index = $target.index(selector);

						if ($this.hasClass('imagelightbox-arrow-left')) {
							index = index - 1;
							if (!$(selector).eq(index).length)
								index = $(selector).length;
						} else {
							index = index + 1;
							if (!$(selector).eq(index).length)
								index = 0;
						}

						instance.switchImageLightbox(index);
						return false;
					});
				},
				arrowsOff = function() {
					$('.imagelightbox-arrow').remove();
				};

		// Lightbox for individual image
		var lightboxInstance = $('a[data-imagelightbox="lightbox"]').imageLightbox({
			onStart: function() {
				overlayOn();
				closeButtonOn(lightboxInstance);
			},
			onEnd: function() {
				closeButtonOff();
				overlayOff();
				activityIndicatorOff();
			},
			onLoadStart: function() {
				activityIndicatorOn();
			},
			onLoadEnd: function() {
				activityIndicatorOff();
			}
		});

		// Lightbox for product gallery
		var gallerySelector = 'a[data-imagelightbox="gallery"]';
		var galleryInstance = $(gallerySelector).imageLightbox({
			quitOnDocClick: false,
			onStart: function() {
				overlayOn();
				closeButtonOn(galleryInstance);
				arrowsOn(galleryInstance, gallerySelector);
			},
			onEnd: function() {
				overlayOff();
				closeButtonOff();
				arrowsOff();
				activityIndicatorOff();
			},
			onLoadStart: function() {
				activityIndicatorOn();
			},
			onLoadEnd: function() {
				activityIndicatorOff();
				$('.imagelightbox-arrow').css('display', 'block');
			}
		});

	}



</script>


</body>


</html>