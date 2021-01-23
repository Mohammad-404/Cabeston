<?php
	include('classes/DBConnection.php');
	include('classes/login_class.php');	
	session_start();
	$l = new LoginUser();

	if (isset($_POST['sub'])) {
		$l->email 			= $_POST['email'];
		$l->password 		= $_POST['pass'];
		$Result 			= $l->CheckLogin();
		if ($Result) {
			$_SESSION['user_id']  		= $Result[0]['cust_id'];
			$_SESSION['cust_email']		= $Result[0]['cust_email'];
			$_SESSION['user_name'] 		= $Result[0]['cust_name'];
			header("location: cart.php");
		}else{
			$FaildLogin = "USER NOT FOUND !";
		}
	}

	include('include/header.php');
?>
<!-- start main content -->
<main class="container">

	<section>

		<div class="signinpanel">

			<div class="row">

				<div class="col-md-5 col-md-offset-1">
					
				<?php
					if (isset($FaildLogin)) {
						echo"
							<div class='alert alert-danger' role='alert'>
							  $FaildLogin
							</div>
						";					
					}
				?>
					
					<form method="post" action="">
						<h4 class="nomargin">Sign In</h4>
						<p class="mt5 mb20">Login to access your account.</p>
						<input type="text" name="email" class="form-control uname" placeholder="Email" />

						<input type="password" name="pass" class="form-control pword" placeholder="Password" />
						<a href="#"><small>Forgot Your Password?</small></a>
						<button name="sub" class="btn btn-success btn-block">Sign In</button>
					</form>
				</div><!-- col-sm-5 -->

				<div class="col-md-5 col-md-push-1">

					<div class="signin-info">
						<div class="logopanel">
							<h1><span>[</span> E-Commerce <span>]</span></h1>
						</div><!-- logopanel -->

						<div class="mb20"></div>

						<h5><strong>Welcome to E-Commerce WebSite !</strong></h5>
						<ul>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> [m.almasri@gmail.com] </li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> [079543154]</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> Amman </li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> asdouuas</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> and much more...</li>
						</ul>
						<div class="mb20"></div>
						<strong>Not a member? <a href="signup.php">Sign Up</a></strong>
					</div><!-- signin0-info -->

				</div><!-- col-sm-7 -->



			</div><!-- row -->


		</div><!-- signin -->

	</section>
</main>
<!-- end  main content -->
<?php
	include('include/footer.php');
?>