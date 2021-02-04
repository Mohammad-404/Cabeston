<?php
	session_start();
	include('classes/DBConnection.php');
	include('classes/product-details.php');


	$product_details 	= new Product_Details();
	$id_pro = $_GET['id'];
	
	if (!isset($_GET['id']) || empty($_GET['id'])) {
		header("home.php");
	}

	$product_details->id = $id_pro;
	$Compare = $product_details->ViewAllProducts();
	foreach ($Compare as $Qty);

	if (isset($_POST['sub'])) {

	if (!isset($_SESSION['vendor_name'])) {
		if ($_POST['quan'] <= $Qty['qty']) {
		$_SESSION['cart'][$id_pro] = $_POST['quan']; 
		$_SESSION['nico'] 		   = $_POST['Nico'];
		header("location:cart.php");
		}else{
			$error = "The operation Failed, please reduce the quantity";
		}		
	}else{
		header("location: home.php");
	}
	
}



	include('include/header.php');
?>

<div class="spacediv"></div>
<!-- start main content -->
<main class="main-container">
<section class="product_content_area pt-40">
	<!-- start of page content -->

	<div class="lookcare-product-single container">

		<div class="row">

			<div class="main col-xs-12" role="main">

				<div class=" product">

					<div class="row">
							<div>
								<?php
									if (isset($error)) {
										echo"
										<div class='alert alert-danger' role='alert'>
										 	$error !
										</div>
										";
									}
								?>
							</div>
						<div class="col-md-5 col-sm-6 summary-before ">
							<div class="product-slider product-shop">
								<span class="onsale">Sale!</span>
								<ul class="slides">
									<?php
									$product_details->id = $_GET['id'];
									$Results			 = $product_details->ViewAllProducts();
									foreach ($Results as $value) {
									if (!empty($value['pro_image'])) {
									echo"
									<li data-thumb='UploadImages/{$value['pro_image']}'>
										<a href='UploadImages/{$value['pro_image']}' data-imagelightbox='gallery' class='hoodie_7_front ss'>
										<img src='UploadImages/{$value['pro_image']}' class='attachment-shop_single img_slidersss' alt='image'>
										</a>
									</li>
									";
									}else{
									echo"
									<li data-thumb='img/photos/media-doc.png'>
										<a href='img/photos/media-doc.png' data-imagelightbox='gallery' class='hoodie_7_front ss'>
										<img src='img/photos/media-doc.png' class='attachment-shop_single img_slidersss' alt='image'>
										</a>
									</li>
									";

									}
									if ($value['pro_image1'] != "") {
									echo"
									<li data-thumb='UploadImages/{$value['pro_image1']}'>
										<a href='UploadImages/{$value['pro_image1']}' data-imagelightbox='gallery' class='hoodie_7_front ss'>
										<img src='UploadImages/{$value['pro_image1']}' class='attachment-shop_single img_slidersss' alt='image'>
										</a>
									</li>
									";
									}
									if ($value['pro_image2'] != "") {
									echo"
									<li data-thumb='UploadImages/{$value['pro_image2']}'>
										<a href='UploadImages/{$value['pro_image2']}' data-imagelightbox='gallery' class='hoodie_7_front ss'>
										<img src='UploadImages/{$value['pro_image2']}' class='attachment-shop_single img_slidersss' alt='image'>
										</a>
									</li>
									";
									}
								}
									?>
								</ul>
							</div>
						</div>

						<div class="col-sm-6 col-md-7 product-review entry-summary">

							<h1 class="product_title"><?="{$value['pro_name']}"?></h1>
							<p>
								<?="Name : {$value['name']}"?>
							</p>
							<p>
								<?="Email : {$value['email']}"?>
							</p>
							<p>
								<?="Date : {$value['Dates']}"?>
							</p>


							<p>
								<?php 
									if ($value['size'] != "") {	
								?>
									<span>Bottle Size : </span>
									<?="{$value['size']}"?>
								
								<?php } ?>
							</p>


						<form class="variations_form cart" action="" method="post">

							<div id="total">
								<p class="price">
									<ins><span class="amount color_price">
										<span style="color:black;">Price :</span>
										 JD <?="{$value['pro_price']}"?></span></ins>
								</p>
							</div>


													
								<div class="input-group" style="padding-bottom:20px;">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-dark btn-number"  
										data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>

								    <input type="text" size="4" min="1" id="quantity" name="quan" class="form-control input-number" 
									value="1" step="1" max="100" class="indes" style="width:50px;text-align:center;">
								
								    <input type="hidden" id="quantitydb" value="<?="{$value['qty']}"?>" >

                                        <button type="button" class="quantity-right-plus btn btn-dark btn-number" 
										data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                </div>


								<?php
									if($value['qty'] != 0){
								?>
								<button name="sub" class="cart-button">Add to cart</button>
								<?php
									}else{
										echo "<p class='cart-button' style='width:135px;'>Out od Stock</p>";
									}
								?>
							</form>


							<div class="share-social-icons">

								<a href="#" target="_blank" title="Share on Facebook">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="#" target="_blank" title="Share on Twitter">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#" target="_blank" title="Pin on Pinterest">
									<i class="fa fa-pinterest"></i>
								</a>
								<a href="#" target="_blank" title="Share on Google+">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>

						</div>
						<!-- .summary -->

					</div>

					<div class="wrapper-description">

						<ul class="tabs-nav clearfix">
							<li class="active">Description</li>
						</ul>
						<div class="tabs-container product-comments">

							<div class="tab-content">
								<section class="related-products">

									<h2>Product Description</h2>

									<p>
										<?="{$value['pro_desc']}"?>
									</p>

								</section>
							</div>
						</div>
					</div>
				</div>
				<!-- #product-293 -->
			</div>
			<!-- end of main -->
		</div>
		<!-- end of .row -->
	</div>
	<!-- end of page content -->
</section>

<!-- service area -->
	<section class="block gray no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box no-margin go-simple">
						<div class="mini-service-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-paper-plane"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p></p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p></p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-medkit"></i>
										<div class="mini-service-info">
											<h3>Friendly Stuff</h3>
											<p></p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>24/h Support</h3>
											<p></p>
										</div>
									</div><!-- Mini Service -->
								</div>
							</div>
						</div><!-- Mini Service Sec -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
<!-- end service area -->
</main>
<!-- end main content -->
<script>

$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity   = parseInt($('#quantity').val());
        var quantitydb = parseInt($('#quantitydb').val());
        // If is not undefined
            
		if(quantity != quantitydb){
            $('#quantity').val(quantity + 1);
		}
          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
		
            // Increment
            if(quantity>1){
            $('#quantity').val(quantity - 1);
            }
    });
    
});
</script>
<?php
	include('include/footer.php');
?>


<!-- 
<script type="text/javascript">
	$(document).ready(function(){
	  $("#size").click(function(){
	    $("#total").hide();
	  });
	  $(".btn2").click(function(){
	    $("p").show();
	  });
	});
</script> -->