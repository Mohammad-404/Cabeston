<?php
	session_start();
	include("classes/Thank_Class.php");
	$thankYou = new thankYou();
	
	if (!isset($_SESSION['user_id']) || !isset($_SESSION['vendor_id'])) {
		header("locoation: home.php");
	}

	$results = $thankYou->NumberOrder();
	foreach ($results as $ValuesID);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Orders Number</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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

		.desings{
			box-shadow: 1px 1px 10px 1px black;
			margin-top: 150px;
			padding:100px;
			text-align: center;
			font-weight: bold;
			font-size: 20px;
			font-family: arial;
		}
		.id{
			margin-top: 50px;
			color: red;
			font-weight: bold;
			font-size: 20px !important;
		}
		.btn{
			background-color:black;
			color:white; 
			border-radius: 10px;
			font-weight: bold;
			padding: 10px;
			box-shadow: 1px 1px 10px 1px black;
		}
		.btn:hover{
			color:yellow;
		}
	</style>
</head>
<body>

	<main class="main-container">
	<!-- new collection directory -->
	<section class="slider_area">
		<div class="container">
			<div class="content-push">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="sidebar-navigation desings">
								<p>Thank You For Shoping, Your ID :</p>
								<?="<p class='id'>".$ValuesID['order_id']."</p>";?>
							<a href="home.php" class="btn">Home Page</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>


</body>
</html>