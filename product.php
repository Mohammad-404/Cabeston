<?php
	include('classes/DBConnection.php');
	include('classes/products.php');
	$product 			= new products();
	include('include/header.php');
?>


<!-- start main content -->
<main class="main-container">
<section class="men_area pt-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12"><!--9-->
				
<!-- 				<div class="row">
					<div class="col-lg-12">
						<div class="kat-shoe-bg imgframe6">
							<img src="img/large-banner-4.png" alt="" />
						</div>
					</div>
				</div> -->
				<br><br>
				<div id="shop-all" class="row">


					<!-- Product Item #1 -->
					<?php
					$product->id 			= $_GET['id']; 
					$result_per_page 		= 20;
					$number_of_result 		= $product->NumberRowInAllProducts();
						
					$number_of_page 		= ceil($number_of_result/$result_per_page);

					    if (!isset($_GET['page'])) {
					    	$page = 1;
					    }else{
					    	$page = $_GET['page'];
					    }
					   
			      	$this_page_first_result = ($page - 1) * $result_per_page;

					$printer = $product->ViewAllProducts($this_page_first_result,$result_per_page);
					if ($printer) {
					foreach ($printer as $key => $row) {
					?>

					<div class="col-xs-12 col-sm-6 col-md-4 product-item filter-best">
						<div class="product-img">
							<?="
							<img src='UploadImages/{$row['pro_image']}' class='img_prod' alt='product'>
							"?>
							<div class="product-hover">
								<div class="product-cart">
									<?="
										<a class='btn btn-secondary btn-block' 
										href='product_details.php?id={$row['pro_id']}'
										>
										Quick View</a>
										"
									?>
								</div>
							</div>
						</div>
						<!-- .product-img end -->
						<?="
						<div class='product-bio'>
							<h4>
								<a>{$row['pro_name']}</a>
							</h4>
							<p class='product-price'>$ {$row['pro_price']}</p>
						</div>
						";?>
						<!-- .product-bio end -->
					</div>
				<?php } 
			}?>
					<!-- .product-item end -->

				</div>
			</div>
			<!-- /.col-md-3 -->
		</div>
	</div>
</section>

	<section class="block gray no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box no-margin go-simple">
						<div class="mini-service-sec">
							<div class="row">
								<div class="col-md-12">
									<div class="mini-service">
										<div class="mini-service-info">
										<!-- Pagination -->
										<div class="shopping-pagination pull-right">
											<ul class="pagination">
												<li class="disabled"><a href="#">&laquo;</a></li>
												<!-- <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> -->
												<?php
													for ($page=1; $page <= $number_of_page ; $page++) { 
												?>
												<?php 
													echo '<li> 
													<a href="product.php?id='.$_GET['id'].'&page='.$page.'">'.$page.'</a></li>'; 
													}
												?>
												<li><a href="#">&raquo;</a></li>
											</ul>
										</div>
										<!-- Pagination end-->

										</div>
									</div><!-- Mini Service -->
								</div>
						</div><!-- Mini Service Sec -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
</main>
<!-- end main content -->

<?php
	include('include/footer.php');
?>