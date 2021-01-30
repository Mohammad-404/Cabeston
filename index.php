<?php
	include('classes/DBConnection.php');
	include('classes/homepage.php');
	$homepage 			= new homepage();
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
									if ($C) {
									foreach ($C as $Ca) {
								?>
								<?="
								<a class='entry' href='product.php?id={$Ca['cat_id']}'>
									<span><i class='fa fa-angle-right'></i>{$Ca['cat_name']}</span>
								</a>
								"
								?>
								
								<?php } } ?>
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
											if ($Result) {
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
						
						<?php
						if (!empty($row['cat_image'])) {
							echo"<a>
								<img class='img-responsive imgcateee' src='UploadImages/{$row['cat_image']}' alt='Not Found' />
								</a>";
						}else{
							echo"<a>
								<img class='img-responsive' src='img/photos/media-doc.png' alt='Not Found' />
								</a>";
						}
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
						<?php
							if ($row['stat']) {
								echo"<span class='hot-tag bg-red'>{$row['stat']}</span>";
							}
						?>
						

					</div>
				</div>
			<?php 
				} 
			?>
			</div>
			<!-- Pagination -->
			<div class="shopping-pagination pull-right">
					<!-- <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> -->
					<?php
					echo '<ul class="pagination">';

						if ($page != 1) {
							echo '<li class="">
							<a href="index.php?page='.($page-1).'">&laquo;</a>
							</li>';
						}

						for ($i=1; $i <= $number_of_page ; $i++) { 

					?>
					<?php 
					
						echo '
						<li> 
						<a href="index.php?page='.$i.'">'.$i.'</a>
						</li>'; 
						
					}
						if ($page < ($number_of_page)) {
							echo '<li><a href="index.php?page='.($page+1).'">&raquo;</a></li>';
						}
					echo "</ul>";
					?>
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
							
										<?php
										if ($homepage->ReadProducts()) {
											$ResultProduct = $homepage->ReadProducts();
											
											foreach ($ResultProduct as $RowProduct) {
										?>			
										<div class="product  item first ">
											<article>		
												<figure>
													<a>
														<?php
														if (!empty($RowProduct['pro_image'])) {
														echo"
															<img 
															src='UploadImages/{$RowProduct['pro_image']}' class='img-responsive change_img_pro' alt='Not Found'>
															";					
														}else{
															echo"
															<img 
															src='img/photos/media-doc.png' class='img-responsive change_img_pro' alt='Not Found'>
															";						
														}
														?>
													
													</a>
													<figcaption><span class="amount">
														<?="{$RowProduct['pro_name']}";?>
													</span></figcaption>
												</figure>
												<h4 class="title"><a href="#">
												<?=
												"{$RowProduct['pro_name']}
												"
												?>
													
												</a></h4>
												<?="
												<a href='product_details.php?id={$RowProduct['pro_id']}' class='button-add-to-cart'>
												Add to cart
												</a>
												"?>
											</article>
										</div>
										<?php
											}
										}
										?>
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


	<!-- Start Our Clients -->
</main>
<!-- end main content -->


<?php
	include('include/footer.php');
?>