<?php
	session_start();
	include("classes/DBConnection.php");
	include("classes/shoping_cart_class.php");
	if (isset($_SESSION['vendor_name'])) {
		header("location: home.php");
	}

	$Shoping_Cart = new Shoping_Cart();

	// $result = 0;
	// foreach ($_SESSION['cart'] as $key => $value) {
	// $var_qty = $Shoping_Cart->ReadQTYproducts($key);
	// $variable = $Shoping_Cart->ReadDateProducts($key);

	// foreach ($variable as $row);
	
	// foreach ($var_qty as $qty_final);

	// echo $value;

	// echo $qty_final['qty']."<br>";
	// echo $value;
	// 	echo "<br>";
	// $FQTY = $qty_final['qty'] - $value;
	// echo $FQTY;
	
	//echo $FQTY = $qty_final['qty'] - $value;		
	//echo $Shoping_Cart->total  			= $row['pro_price']*$value;
	//echo $Shoping_Cart->pro_id 			= $key;
	// echo $Shoping_Cart->quantity 		= $value;
	// echo $Shoping_Cart->nico 	    	= $_SESSION['nico'];
	// echo $Shoping_Cart->Resultquantity 	= $FQTY;

	// die;
	// }

	if (isset($_SESSION['cart'])) {

	if (isset($_POST['subm'])) {
		if (isset($_SESSION['user_name']) && isset($_SESSION['user_id'])) {
			$Shoping_Cart->cust_id 		= $_SESSION['user_id']; //login user id using session
			$Shoping_Cart->date 		= date('Y-m-d H:i:s');
			$Shoping_Cart->last_id 		= $Shoping_Cart->InsertDateOrder();

			foreach ($_SESSION['cart'] as $key => $value) {
				$variable = $Shoping_Cart->ReadDateProducts($key);
				$var_qty = $Shoping_Cart->ReadQTYproducts($key);
				foreach ($variable as $row);
				foreach ($var_qty  as $qty_final);

				$FQTY = $qty_final['qty'] - $value;		
				$Shoping_Cart->total  			= $row['pro_price']*$value;
				$Shoping_Cart->pro_id 			= $key;
			    $Shoping_Cart->quantity 		= $value;
			
				$Shoping_Cart->nico 	    	= $_SESSION['nico'];
				$Shoping_Cart->InsertDateOrderDetails();
				$Shoping_Cart->editqty($FQTY);
			}
			unset($_SESSION['cart'],$_SESSION['nico']);
			header("location: Thank.php");
		}else{
			header("location: login.php");
		}
	}
}
	include("include/header.php");
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
										if (isset($_SESSION['cart'])) {
											foreach ($_SESSION['cart'] as $key => $value) {
												$ReadInfo = $Shoping_Cart->ReadCart($key);
												foreach ($ReadInfo as $Row){
												echo"
												<tr>
												<td class='product-name-col'>
													<a>
														<img class='img-responsive ImgCart' 
														src='UploadImages/{$Row['pro_image']}' 
															alt='Not Found'>
													</a>
												</td>

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
									<a href="home.php" class="btn btn-custom-6 btn-lger min-width-lg">Continue Shopping</a>
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
								<form action="" method="post">
									<div class="text-right">
										<input type="submit" name="subm" value="Checkout" class="btn btn-custom-6 btn-lger min-width-sm butto">
									</div>
								</form>
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