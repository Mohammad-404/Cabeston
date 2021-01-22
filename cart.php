<?php
	session_start();
	include("classes/DBConnection.php");
	include("classes/shoping_cart_class.php");
	include("include/header.php");

	$Shoping_Cart = new Shoping_Cart();
?>
<!-- start main content -->
<main class="main-container">
<!-- shopping cart content -->
<section class="shopping-cart-area">
	<!-- Begin cart -->
	<div class="ld-subpage-content">

		<div class="ld-cart">

			<!-- Begin cart section -->
			<section class="ld-cart-section ptb-50">

				<div class="container">

					<div class="row">

						<div class="col-md-12">

							<!-- Begin table -->
							<table class="table cart-table">
								<thead>
								<tr>
									<th class="table-title">Product Image</th>
									<th class="table-title">Product Name</th>
									<th class="table-title">Price</th>
									<th class="table-title">Quantity</th>
									<th class="table-title">SubTotal</th>
									<th>
										<span class="close-button disabled"></span></th>
								</tr>
								</thead>


								<tbody>
									<?php
										$Subtotal = 0;
										if ($_SESSION['cart']) {
											foreach ($_SESSION['cart'] as $key => $value) {
												$ReadInfo = $Shoping_Cart->ReadCart($key);
												foreach ($ReadInfo as $Row){
												echo"
												<tr>
												<td class='product-name-col'>
													<a>
														<img class='img-responsive ImgCart' 
														src='UploadImages/{$Row['pro_image']}' 
															alt='White linen sheer dress'>
													</a>

												<td>
													<h2 class='product-name'>
														<a>{$Row['pro_name']}</a>
													</h2>
												</td>

												<td class='product-price-col'>
													<span class='product-price-special'>JD {$Row['pro_price']}</span>
												</td>
												<td>
													<div class='custom-quantity-input'>
														$value
													</div>
												</td>
												";
												
												echo "
													<td class='product-total-col'>
													<span class='product-price-special'>
													";
												echo "JD ".$total = $value*$Row['pro_price'];
												$Subtotal+=$total;
												echo
												"	
												</span>
												</td>
												";
												echo
												"
												<td>
													<a href='delete_cart.php?id=$key' class='close-button'>
													<i class='fa fa-times'></i></a>
												</td>

												</tr>
												</td>
												";
													
												}
											
											}
										}
									?>
								

								<!-- End tr -->
								</tbody>
							</table>
							<!-- End table -->

							<div class="mt-30"></div>

							<div class="row">

								<div class="col-md-8">

									<!-- Begin tab container -->
									<div class="tab-container left clearfix">


										<!-- Begin tab content -->
										<!-- /.tab-content -->
									</div>
									<!-- /.tab-container -->

								<div class="mt-30"></div>
									<a href="index.php" class="btn btn-custom-6 btn-lger min-width-lg">Continue Shopping</a>
								</div>

								<div class="mt-30 visible-sm visible-xs clearfix"></div>

								<div class="col-md-4">

									<table class="table total-table">

										<tbody>
										<tr>
											<td class="total-table-title">Subtotal:</td>
											<td>JD 
												<?php
													if ($Subtotal) {
														echo $Subtotal;
													}
												?>
											</td>
										</tr>
										</tbody>
									</table>
									<!-- End table -->

									<div class="mt-30"></div>

									<div class="text-right"><a href="#" class="btn btn-custom-6 btn-lger min-width-sm">Checkout</a>
									</div>

								</div>
								<!-- /.col-md-4 -->
							</div>
							<!-- /.row -->
						</div>
					</div>
				</div>

			</section>
			<!-- /.ld-cart-section -->

		</div>
		<!-- /.ld-cart -->
	</div>
	<!-- /.ld-subpage-content -->
	<!-- End Cart -->
</section>
<!-- end shopping cart content -->

</main>

<?php
	include('include/footer.php');
?>