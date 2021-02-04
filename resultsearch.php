<?php
    include_once('classes/DBConnection.php');
	include_once("classes/search.php");
    include('include/header.php');
    $searchs = new searchs();
	if(isset($_POST['sub'])){
		$searchs->nicot = $_POST['nico'];
	}
?>



	<!-- start main content -->
	<main class="main-container">


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
										if ($searchs->readnico()) {
											$ResultProduct = $searchs->readnico();
											
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