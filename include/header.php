<?php
if( !headers_sent() && '' == session_id() ) {
	session_start();
}
	include_once('classes/DBConnection.php');
	include_once('classes/homepage.php');
	include("include/db.php");

?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<title>E-Shoping</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<!-- Fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link href="css/magnific-popup.css" rel="stylesheet">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skin-lblue.css">

	<link rel="stylesheet" href="css/ecommerce.css">

	<!-- Owl carousel -->
	<link href="css/owl.carousel.css" rel="stylesheet">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/revolutionslider_settings.css" media="screen" />

	<script src="js/vendor/modernizr-2.6.2.min.js"></script>



	<!--flex slider stylesheet-->
	<link rel="stylesheet" href="css/flexslider.css" />
	<!--lightbox stylesheet-->
	<link rel="stylesheet" href="css/image-light-box.css" />




	<style type="text/css">
		.change_img_pro{
			width: 100% !important;
			height: 220px !important;
		}
		.img_prod{
			width: 100% !important;
			height: 400px !important;
		}
		.img_details{
			width: 100% !important;
			height: 490px !important;	
		}
		.spacediv{
			margin-top: 50px;
		}
		.img_slidersss{
			width: 100% !important;
			height: 400px !important;
		}

		.color_price{
			color:green !important;
		}

		.butto{
			background-color:black !important;
			font-weight: bold !important;
			font-family: arial !important;
			border-radius: 100px 50px 100px 50px !important;
			font-size: 15px !important; 
		}

		.edittext{
			color: white !important;
			font-weight: bold !important;
		}

		.ImgCart{
			height: 200px !important;
		}


		.card {
		    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
		}

		.card {
		    position: relative;
		    display: flex;
		    flex-direction: column;
		    min-width: 0;
		    word-wrap: break-word;
		    background-color: #fff;
		    background-clip: border-box;
		    border: 0 solid rgba(0,0,0,.125);
		    border-radius: .25rem;
		}

		.card-body {
		    flex: 1 1 auto;
		    min-height: 1px;
		    padding: 1rem;
		}

		.gutters-sm {
		    margin-right: -8px;
		    margin-left: -8px;
		}

		.gutters-sm>.col, .gutters-sm>[class*=col-] {
		    padding-right: 8px;
		    padding-left: 8px;
		}
		.mb-3, .my-3 {
		    margin-bottom: 1rem!important;
		}

		.bg-gray-300 {
		    background-color: #e2e8f0;
		}
		.h-100 {
		    height: 100%!important;
		}
		.shadow-none {
		    box-shadow: none!important;
		}
		.shadows{
			box-shadow: 5px 5px 10px black !important;
		}
		.logoimg{
			width: 200px;
			height: 100px;
		}
		.logofoter{
			width: 200px;
		}
		.colorprice{
			color:green !important;
		}
		.imgcateee{
			width:100% !important;
			height: 150px !important;
		}
		.indes{
			width:20px !important;
		}
	</style>
</head>

<body class="style-14">

<!-- Start Loading -->
<section class="loading-overlay">
	<div class="Loading-Page">
		<h1 class="loader">Loading...</h1>
	</div>
</section>
<!-- End Loading  -->

<!-- start header -->
<header>
	<!-- Top bar starts -->
	<div class="top-bar">
		<div class="container">

			<!-- Contact starts -->
			<div class="tb-contact pull-left">
				<!-- Email -->
				<i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:m.almasri97.me@gmail.com">
					m.almasri97.me@gmail.com
				</a>
				&nbsp;&nbsp;
				<!-- Phone -->
				<i class="fa fa-phone color"></i> &nbsp; +962 (795)-(439)-152
			</div>
			<!-- Contact ends -->

			<!-- Shopping kart starts -->
			<div class="tb-shopping-cart pull-right">
				<!-- Link with badge -->
				<a href="#" class="btn btn-white btn-xs b-dropdown"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down color"></i> 
				<span class="badge badge-color">
				<?php
				//print_r($_SESSION['cart']);
					$num = 0;
					if (isset($_SESSION['cart'])) {
						foreach ($_SESSION['cart'] as $value) {
							$num++;
						}
					}
					echo $num;
				?>
				</span></a>
				<!-- Dropdown content with item details -->
				<div class="b-dropdown-block">
					<!-- Heading -->
					<h4><i class="fa fa-shopping-cart color"></i> Your Items</h4>
					<ul class="list-unstyled">
						
						<?php
							if (isset($_SESSION['cart'])) {
								foreach ($_SESSION['cart'] as $k => $v) {
									$query 			= "SELECT * FROM products WHERE pro_id = '$k'";
									$result 		= mysqli_query($conn,$query);
									$valueIcons		= mysqli_fetch_assoc($result);
									echo"
										<li>
											<div class='cart-img'>
												<a>
												  <img src='UploadImages/{$valueIcons['pro_image']}' alt='Not Found' class='img-responsive' />
												</a>
											</div>
											<!-- Item heading and price -->
											<div class='cart-title'>
												<h5><a>{$valueIcons['pro_name']}</a></h5>
												<!-- Item price -->
												<span class='label label-color label-sm'>
												JD {$valueIcons['pro_price']}</span>
											</div>
											<div class='clearfix'></div>
										</li>
									";											
								}
							}		
						?>
					</ul>
					<a href="cart.php" class="btn btn-white btn-sm">View Cart</a> 
					&nbsp; <!-- <a href="#" class="btn btn-color btn-sm">Checkout</a> -->
				</div>
			</div>
			<!-- Shopping kart ends -->

			<!-- Langauge starts -->
			<div class="tb-language dropdown pull-right btn btn-primary">
					<?php
						if (isset($_SESSION['user_name'])) {
							echo"
								<a href='#' data-target='#' data-toggle='dropdown' class='edittext'>
								<i class='fa fa-globe edittext'></i> 
								".$_SESSION['user_name']."
								<i class='fa fa-angle-down color edittext'></i>
								</a>


								<ul class='dropdown-menu dropdown-mini' role='menu'>
									<li><a href='profile.php'>Profile</a></li>
									<li><a href='logout.php'>Logout</a></li>
								</ul>
							";
						}elseif(isset($_SESSION['vendor_name'])){
							echo"
								<a href='#' data-target='#' data-toggle='dropdown' class='edittext'>
								<i class='fa fa-globe edittext'></i> 
								".$_SESSION['vendor_name']."
								<i class='fa fa-angle-down color edittext'></i>
								</a>


								<ul class='dropdown-menu dropdown-mini' role='menu'>
									<li><a href='vendor/index.php'>Profile</a></li>
									<li><a href='logout.php'>Logout</a></li>
								</ul>
							";
						}else{
							echo"
								<a href='login.php' class='edittext'>
									<i class='fa fa-globe edittext'></i> 
									Login
								</a>
							";
						}
					?> 
			</div>
			<!-- Language ends -->

			<!-- Search section for responsive design -->
			<div class="tb-search pull-left">
				<a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
				<div class="b-dropdown-block">
					<form action="resultsearch.php" method="post">
						<div class="input-group">
							
							<select name="nico" class="form-control">
									<option> Select Nicotine </option>
									<?php
									$id = $_GET['id'];
									$H  	 = new HomePage();
									
									$qq = $H->ReadCategoryIDS($id);
									
									foreach($qq as $outputs);
									
									if ($outputs['cat_name'] == "FreeBase") {
										$N 	 	 = $H->ReadNicotine();
										$compare  = "Free";
										$compare1 = "free";
										
										foreach($N as $NI){
											$str 	 = substr($NI['nico'],0,4);
											if($str == $compare || $str == $compare1){
													echo"<option value='{$NI['nico']}'>{$NI['nico']}</option>";	 
											}
										}
									}elseif($outputs['cat_name'] == "Saltnic"){
										$compare2 = "Salt";
										$compare3 = "salt";
									foreach($N as $NI){
										$str 	 = substr($NI['nico'],0,4);
										if($str == $compare2 || $str == $compare3){
													echo"<option value='{$NI['nico']}'>{$NI['nico']}</option>";	
										}
									}
								}	
									?>
							</select>

								<span class="input-group-btn">
									<button class="btn btn-color" name="sub">Nicotine</button>
								</span>
						</div>
					</form>
				</div>
			</div>
			<!-- Search section ends -->

			<!-- Social media starts -->
			<div class="tb-social pull-right">
				<div class="brand-bg text-right">
					<!-- Brand Icons -->
					<a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
					<a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
				</div>
			</div>
			<!-- Social media ends -->

			<div class="clearfix"></div>
		</div>
	</div>

	<!-- Top bar ends -->

	<!-- Header One Starts -->
	<div class="header-1">

		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<!-- Logo section -->
					<div class="logo">
						<h1><a href="home.php"><i class="fa fa-bookmark-o"></i>
							<img class="logoimg" src="img/logo2021.jpg">
						</a></h1>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
					<!-- Search Form -->
					<div class="header-search">
						<form action="resultsearch.php" method="post">
							<div class="input-group">
						<!-- <input type="text" class="form-control" placeholder="Type Something"> -->
									<select name="nico" class="form-control">
									<option> Select Nicotine </option>
									<?php
									$id = $_GET['id'];
									$H  	 = new HomePage();
									
									$qq = $H->ReadCategoryIDS($id);
									
									foreach($qq as $outputs);
									
									if ($outputs['cat_name'] == "FreeBase") {
										$N 	 	 = $H->ReadNicotine();
										$compare  = "Free";
										$compare1 = "free";
										
										foreach($N as $NI){
											$str 	 = substr($NI['nico'],0,4);
											if($str == $compare || $str == $compare1){
													echo"<option value='{$NI['nico']}'>{$NI['nico']}</option>";	 
											}
										}
									}elseif($outputs['cat_name'] == "Saltnic"){
										$compare2 = "Salt";
										$compare3 = "salt";
									foreach($N as $NI){
										$str 	 = substr($NI['nico'],0,4);
										if($str == $compare2 || $str == $compare3){
													echo"<option value='{$NI['nico']}'>{$NI['nico']}</option>";	
										}
									}
									}
									?>
									</select>
									
									<span class="input-group-btn">
										<button class="btn btn-color" name="sub">Nicotine</button>
									</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Navigation starts -->

		<div class="navi">
			<div class="container">
				<div class="navy">
					<ul>
						<!-- Main menu -->
						<li><a href="home.php">Home</a>
							<!-- Submenu -->
<!-- 							<ul>

								<li><a href="index.html">Home 1</a></li>
								<li><a href="index-2.html"><span>Home 2</span></a></li>
								<li><a href="index-3.html"><span>Home 3</span></a></li>

							</ul> -->
						</li>
<!-- 
						<li><a href="#">Features</a>
							<ul>
								<li><a href="#">Footer</a>
									<ul>
										<li><a href="footer-one.html">Footer1</a></li>
										<li><a href="footer-two.html">Footer2</a></li>
										<li><a href="footer-three.html">Footer3</a></li>
									</ul>
								</li>
								<li><a href="#">Price Table</a>
									<ul>
										<li><a href="price-table-one.html">Price Table1</a></li>
										<li><a href="price-table-two.html">Price Table2</a></li>

									</ul>
								</li>

							</ul>
						</li>
 -->
 						<li><a href="#">Category</a>
 							<ul>
						<?php
							$homepagess = new HomePage();
							$rop = $homepagess->ReadC();
							if ($rop) {
							foreach ($rop as $Ca) {

							echo"
							  <li>
							  <a href='product.php?id={$Ca['cat_id']}'>
							  {$Ca['cat_name']}
							  </a>
							  </li>
							";
						?>			
								
						<?php } } ?>
							</ul>
						</li>

<!-- 
						<li><a href="#">Blog</a>
							<ul>
								<li><a href="blog.html"><span>Blog Default</span></a></li>
								<li><a href="blog-masonry.html"><span>Blog Masonry</span></a></li>
								<li><a href="blog-full-width.html"><span>Blog Full Width</span></a></li>
								<li><a href="single-post.html"><span>Single Page 1</span></a></li>
								<li><a href="single-post-v2.html"><span>Single Page 2</span></a></li>
							</ul>
						</li>

						<li><a href="#">Pages</a>
							<ul>
								<li><a href="shop.html"><span>Shop</span></a></li>
								<li><a href="single-product.html"><span>Single product</span></a></li>
								<li><a href="shopping-cart.html"><span>Cart</span></a></li>
								<li><a href="checkout.html"><span>Checkout</span></a></li>
								<li><a href="wishlist.html"><span>Wishlist</span></a></li>
								<li><a href="signin.html"><span>Sign In</span></a></li>
								<li><a href="signup.html"><span>Sign Up</span></a></li>
								<li><a href="404.html"><span>404 Page</span></a></li>
							</ul>
						</li>
 -->
						<!-- <li><a href="about.php">About Us</a></li> -->
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Navigation ends -->

	</div>

	<!-- Header one ends -->

</header>
<!-- end header -->

