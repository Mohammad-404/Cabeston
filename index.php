<?php
	include('include/header.php');
?>


	<!-- start main content -->
	<main class="main-container">
	<!-- new collection directory -->
	<section id="content-block" class="slider_area">
		<div class="container">
			<div class="content-push">
				<div class="row">
					<div class="col-md-3 col-md-push-9">
						<div class="sidebar-navigation">
							<div class="title">Categories<i class="fa fa-angle-down"></i></div>
							<div class="list">
								<?php
									$C = $homepage->ReadCategory();
									foreach ($C as $Ca) {
								?>
								<?="
								<a class='entry' href='product.php?id={$Ca['cat_id']}'>
									<span><i class='fa fa-angle-right'></i>{$Ca['cat_name']}</span>
								</a>
								"
								?>
								
								<?php } ?>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="col-md-9 col-md-pull-3">

						<div class="header_slider">
							<article class="boss_slider">
								<div class="tp-banner-container">
									<div class="tp-banner tp-banner0">
										<ul>
											<!-- SLIDE  -->
										<?php
											$Result = $homepage->ReadSliders();
											foreach ($Result as $Row) {
										?>
											<li data-target="_self" data-transition="flyin" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
												<!-- MAIN IMAGE -->
												<?=
												"
												<img src='UploadImages/{$Row['image']}' 
												alt='slidebg1' 
												data-lazyload='UploadImages/{$Row['image']}'
												data-bgposition='left center' data-kenburns='off' 
												data-duration='14000' data-ease='Linear.easeNone' 
												data-bgpositionend='right center' />
												"
												?>
												<!-- LAYER NR. 1 -->
												<?="
												<div class='tp-caption very_big_white randomrotate customout rs-parallaxlevel-0' data-x='270' data-y='140' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' 
												data-speed='300' data-start='500' data-end='4800' data-endspeed='300' data-easing='easeInOutBack' 
												data-endeasing='easeOutBack' data-elementdelay='0.1' 
												data-endelementdelay='0.1' style='z-index: 2;'> 
												{$Row['textone']} 
												</div>
												"
												?>
												<!-- LAYER NR. 2 -->
												<?="
												<div class='tp-caption very_large_white_text randomrotate customout rs-parallaxlevel-0' data-x='270' data-y='250' data-customout='x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;' data-speed='300' data-start='800' data-end='4800' data-endspeed='300' data-easing='easeInOutBack' data-endeasing='easeOutBack' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index: 2;'> 
												{$Row['texttow']}
												 </div>
												}
												"
												?>
											</li>
										<?php
											}
										?>
										</ul>
										<div class="slideshow_control"></div>
									</div><!-- /.tp-banner -->
								</div>
							</article>
						</div><!-- /.header_slider -->

						<div class="clear"></div>

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- end new collection directory -->



<section id="popular-product" class="ecommerce">
	<div class="container">
		<!-- Shopping items content -->
		<div class="shopping-content">

			<!-- Block heading two -->
			<div class="block-heading-two">
				<h3><span>Categories</span></h3>
			</div>

			<div class="row">
				<?php
				$result_per_page 		= 4;
				$number_of_result 		= $homepage->NumberRowInAllCetegory();
					
				$number_of_page 		= ceil($number_of_result/$result_per_page);

				    if (!isset($_GET['page'])) {
				    	$page = 1;
				    }else{
				    	$page = $_GET['page'];
				    }
				   
		      	$this_page_first_result = ($page - 1) * $result_per_page;

				$printer = $homepage->displayDataInPages($this_page_first_result,$result_per_page);

				foreach ($printer as $key => $row) {
				?>
				<div class="col-md-3 col-sm-6">
					<!-- Shopping items -->
					<div class="shopping-item">
						<!-- Image -->
						
						<?=
						"<a>
							<img class='img-responsive' src='UploadImages/{$row['cat_image']}' alt='Not Found' />
						</a>
						"
						?>
						<!-- Shopping item name / Heading -->
						<?=
						"
							<h3>
								<a>{$row['cat_name']}</a>
							</h3>
						"
						?>	
						<?=
						"
							<h4>
								<a>{$row['cat_desc']}</a>
							</h4>
						"
						?>						
						<div class="clearfix"></div>
						<!-- Buy now button -->

						<?=
						"<div class='visible-xs'>
							<a class='btn btn-color btn-sm' href='product.php?id={$row['cat_id']}'>Shoping Now</a>
						</div>
						"?>

						<!-- Shopping item hover block & link -->
						<?=
						"<div class='item-hover bg-color hidden-xs'>
							<a href='product.php?id={$row['cat_id']}'>Shoping Now</a>
						</div>
						"
						?>
						
						<!-- Hot tag -->
						<span class="hot-tag bg-red">NEW</span>
					</div>
				</div>
			<?php 
				} 
			?>
			</div>
			<!-- Pagination -->
			<div class="shopping-pagination pull-right">
				<ul class="pagination">
					<li class="disabled"><a href="#">&laquo;</a></li>
					<!-- <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> -->
					<?php
						for ($page=1; $page <= $number_of_page ; $page++) { 
					?>
					<?php 
						echo '<li> <a href="index.php?page='.$page.'">'.$page.'</a></li>'; 
						}
					?>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<!-- Pagination end-->
		</div>
	</div>
</section>


	<!-- Start Our Shop Items -->

	<!-- Recent items Starts -->
	<section id="recent-product">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section class="related-products">



						<!-- Block heading two -->
						<div class="block-heading-two">
							<h3><span>Products Items</span></h3>
						</div>

						<div class="related-products-wrapper">

							<div class="related-products-carousel">

								<div class="product-control-nav">
									<a class="prev"><i class="fa fa-angle-left"></i></a>
									<a class="next"><i class="fa fa-angle-right"></i></a>
								</div>


								<div class="row product-listing">
									<div id="product-carousel" class="product-listing">

										<div class="product  item first ">

											<article>


												<figure>
													<a href="#">
														<img src="img/temp-images/T_2_front-300x300.jpg" class="img-responsive" alt="T_2_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>

												<h4 class="title"><a href="#">Premium Quality</a></h4>


												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>

										</div>

										<div class="product  item first ">

											<article>


												<figure>
													<a href="#">
														<img src="img/temp-images/T_5_front-300x300.jpg" class="img-responsive " alt="T_5_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>


												<h4 class="title"><a href="#">Ninja Silhouette</a></h4>


												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>

										</div>

										<div class="product  item first ">

											<article>


												<figure>
													<a href="#">
														<img src="img/temp-images/hoodie_2_front-300x300.jpg" class="img-responsive" alt="hoodie_2_front">
													</a>
													<figcaption><span class="amount">$35.00</span></figcaption>
												</figure>




												<h4 class="title"><a href="#">Woo Ninja</a></h4>


												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>

										</div>

										<div class="product  item first ">

											<article>


												<figure>
													<a href="#">
														<img src="img/temp-images/T_4_front-300x300.jpg" class="img-responsive" alt="T_4_front">
													</a>
													<figcaption>
														<span class="amount">$20.00</span></figcaption>
												</figure>




												<h4 class="title"><a href="#">Ship Your Idea</a></h4>


												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>

										</div>

										<div class="product  item first ">

											<article>


												<figure>
													<a href="#">
														<img src="img/temp-images/T_7_front-300x300.jpg" class="img-responsive" alt="T_7_front">
													</a>
													<figcaption><span class="amount">$18.00</span></figcaption>
												</figure>




												<h4 class="title"><a href="#">Happy Ninja</a></h4>


												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>

										</div>

										<div class="product  item first ">

											<article>


												<figure>
													<a href="#">
														<img src="img/temp-images/T_6_front-300x300.jpg" class="img-responsive" alt="T_6_front">
													</a>
													<figcaption><span class="amount">$20.00</span></figcaption>
												</figure>




												<h4 class="title"><a href="#">Woo Ninja</a></h4>


												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>

										</div>

										<div class="product  item first ">

											<article>


												<figure>
													<a href="#">
														<img src="img/temp-images/hoodie_4_front-300x300.jpg" class="img-responsive" alt="hoodie_4_front">
													</a>
													<figcaption><span class="amount">$35.00</span></figcaption>
												</figure>




												<h4 class="title"><a href="#">Happy Ninja</a></h4>


												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>

										</div>

										<div class="product  item first ">

											<article>


												<figure>
													<a href="#">
														<img src="img/temp-images/hoodie_3_front-300x300.jpg" class="img-responsive" alt="hoodie_3_front">
													</a>
													<figcaption><span class="amount">$35.00</span></figcaption>
												</figure>




												<h4 class="title"><a href="#">Patient Ninja</a></h4>


												<a href="#" class="button-add-to-cart">Add to cart</a>
											</article>

										</div>
									</div>

								</div>
							</div>

						</div>

					</section>
				</div>
			</div>
		</div>
	</section>

	<!-- Recent items Ends -->


	<div class="bt-block-home-parallax" style="background-image: url(img/resource/parallax2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="lookbook-product">
						<h2><a href="#" title="">Collection 2016 </a></h2>
						<ul class="simple-cat-style">
							<li><a href="#" title="">Dresses</a></li>
							<li><a href="#" title="">Coats & Jackets</a></li>
							<li><a href="#" title="">Jeans</a></li>
						</ul>
						<a href="#" title="">read more</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.bt-block-home-parallax -->

	<!-- Start Our Clients -->

	<section id="Clients" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="Last-items-shop col-md-3 col-sm-6">

					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Special Offer</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Special Offer</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="img/small/50.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="img/small/51.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="img/small/52.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3 col-sm-6">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Best Sellers</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Best Sellers</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="img/small/53.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="img/small/54.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="img/small/55.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3 col-sm-6">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Featured</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Featured</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="img/small/56.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="img/small/57.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="img/small/55.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3 col-sm-6">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Sales</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Sales</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="img/small/55.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="img/small/58.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="img/small/50.jpg" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- End Our Clients  -->

</main>
<!-- end main content -->



<!-- start footer area -->
<footer class="footer-area-content">

	<div class="container">
		<div class="footer-wrapper style-3">
			<div class="type-1">
				<div class="footer-columns-entry">
					<div class="row">
						<div class="col-md-3">
							<img alt="" src="img/footer-logo.png" class="footer-logo">
							<div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
							<div class="footer-address">30 South Avenue San Francisco<br> Phone: +78 123 456 123<br> Email: <a href="mailto:Support@demo.com">Support@demo.com</a><br>
								<a target="_blank" href="http://iglyphic.com/"><b>www.lookcare.com</b></a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Customer Care</h3>
							<ul class="column">
								<li><a href="#">Terms & Condition</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Shipping Charge</a></li>
								<li><a href="#">Shipping Track</a></li>
								<li><a href="#">Payment Method</a></li>
								<li><a href="#">Order History</a></li>
								<li><a href="#">Returns</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Your Account</h3>
							<ul class="column">
								<li><a href="#">My Account</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Affiliate Dashboard</a></li>
								<li><a href="#">Billing Address</a></li>
								<li><a href="#">Cancel Order</a></li>
								<li><a href="#">Order History</a></li>
								<li><a href="#">Returns</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Shop Information</h3>
							<ul class="column">
								<li><a href="#">About Company</a></li>
								<li><a href="#">Become Member</a></li>
								<li><a href="#">License Details</a></li>
								<li><a href="#">Custom Service</a></li>
								<li><a href="#">Tax Information</a></li>
								<li><a href="#">Order History</a></li>
								<li><a href="#">Job & Vacancies</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-3">
							<h3 class="column-title">Company working hours</h3>
							<div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
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
							<div class="footer-links">
								<a href="#">Site Map</a>
								<a href="#">Search</a>
								<a href="#">Terms</a>
								<a href="#">Advanced Search</a>
								<a href="#">Orders and Returns</a>
								<a href="#">Contact Us</a>
							</div>
							<div class="copyright">Created with by <a target="_blank" href="http://iglyphic.com/">iGlyphic</a> . All right reserved</div>
						</div>
						<div class="cell-view">
							<div class="payment-methods">
								<a href="#"><img alt="" src="img/payment-method-1.png"></a>
								<a href="#"><img alt="" src="img/payment-method-2.png"></a>
								<a href="#"><img alt="" src="img/payment-method-3.png"></a>
								<a href="#"><img alt="" src="img/payment-method-4.png"></a>
								<a href="#"><img alt="" src="img/payment-method-5.png"></a>
								<a href="#"><img alt="" src="img/payment-method-6.png"></a>
							</div>
						</div>
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



<script type="text/javascript">

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



</script>


</body>


</html>