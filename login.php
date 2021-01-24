<?php
	include('classes/DBConnection.php');
	include('classes/login_class.php');
	include('classes/loginVendor_class.php');	
	session_start();
	if (isset($_SESSION['user_id']) || isset($_SESSION['cust_email']) || 
		isset($_SESSION['user_name']) || isset($_SESSION['vendor_email'])) 
	{
		header("location: index.php");	
	}


	$l = new LoginUser();
	$v = new LoginVendor();

	if (isset($_POST['sub'])) {
		if ($_POST['bus'] == "Customer") {
			$l->email 			= $_POST['email'];
			$l->password 		= $_POST['pass'];
			$Result 			= $l->CheckLogin();
			if ($Result) {
				$_SESSION['user_id']  		= $Result[0]['cust_id'];
				$_SESSION['cust_email']		= $Result[0]['cust_email'];
				$_SESSION['user_name'] 		= $Result[0]['cust_name'];
				header("location: index.php");
			}else{
				$FaildLogin = "USER NOT FOUND !";
			}
		}

		if ($_POST['bus'] == "Vendor") {
			$v->email 			= $_POST['email'];
			$v->password 		= $_POST['pass'];
			$Result 			= $v->CheckLoginVendor();
			if ($Result) {
				$_SESSION['vendor_id']  		= $Result[0]['id_vendor'];
				$_SESSION['vendor_email']		= $Result[0]['email'];
				$_SESSION['vendor_name'] 		= $Result[0]['name'];
				$_SESSION['vendor_phone'] 		= $Result[0]['phone'];
				header("location: index.php");
			}else{
				$FaildLogin = "USER NOT FOUND !";
			}
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
						<br>
						<label class="control-label">Select Your Business</label>
							<div class="mb10">
								<select name="bus" class="form-control chosen-select" data-placeholder="">
									<option value="Vendor">Vendor</option>
									<option value="Customer">Customer</option>
								</select>
							</div><br>
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