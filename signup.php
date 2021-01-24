<?php
	include("classes/DBConnection.php");
	include("classes/createaccount.php");
	include("classes/Vendoraccount.php");
	
	$signup 		= new signup();
	$vendorsign 	= new vendorsign();

	
	if (isset($_POST['sub'])) {
		if ($_POST['bus'] == "Customer") {
			$signup->email 		= $_POST['email'];
			$signup->password 	= $_POST['password'];
			$repassword 		= $_POST['re_password'];
			$signup->address 	= $_POST['address'];
			$signup->phone 		= $_POST['phone'];
			$signup->name	 	= $_POST['username'];
			$signup->business 	= $_POST['bus'];

			if ($_POST['password'] == $_POST['re_password']) {
					$Error = $signup->CreateUser();
			}else{
					$Error = "The Password is Different";	
			}
		}

		if($_POST['bus'] == "Vendor"){
			$vendorsign->email 		= $_POST['email'];
			$vendorsign->password 	= $_POST['password'];
			$repassword 			= $_POST['re_password'];
			$vendorsign->address 	= $_POST['address'];
			$vendorsign->phone 		= $_POST['phone'];
			$vendorsign->name	 	= $_POST['username'];
			$vendorsign->business 	= $_POST['bus'];
			if ($_POST['password'] == $_POST['re_password']) {
					$Error = $vendorsign->CreateVendor();
			}else{
					$Error = "The Password is Different";	
			}	
		}
}


	include('include/header.php');
?>
<!-- start main content -->
<main class="container">

	<section>

		<div class="signuppanel">

			<div class="row">

				<div class="col-md-6">

					<div class="signup-info">
						<div class="logopanel">
							<h1><span>[</span> E-Commerce <span>]</span></h1>
						</div><!-- logopanel -->

						<div class="mb20"></div>

						<h5><strong>E-Commerce Website!</strong></h5>
						<!-- 
						<p>kjaskjdnasdnasjdnjk.</p>
						<div class="mb20"></div>

						<div class="feat-list">
							<i class="fa fa-wrench"></i>
							<h4 class="text-success">Easy to Customize</h4>
						</div>

						<div class="feat-list">
							<i class="fa fa-compress"></i>
							<h4 class="text-success">Fully Responsive Layout</h4>
						</div>

						<div class="feat-list mb20">
							<i class="fa fa-search-plus"></i>
							<h4 class="text-success">Retina Ready</h4>
						</div> 
					-->
					</div><!-- signup-info -->

				</div><!-- col-sm-6 -->

				<div class="col-md-6">

					<form method="post" action="#">
						<?php
							if (isset($Error)) {
								echo"
									<div class='alert alert-danger' role='alert'>
									  $Error !
									</div>
								";
							}
						?>
						<h3 class="nomargin">Sign Up</h3>
						<p class="mt5 mb20">Already a member? 
							<a href="login.php">
								<strong>Sign In</strong>
							</a>
						</p>
					<!-- 					
						<label class="control-label">Name</label>
						<div class="row mb10">
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="Firstname" />
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="Lastname" />
							</div>
						</div> 
					-->

						<div class="mb10">
							<label class="control-label">Username</label>
							<input type="text" name="username" class="form-control" />
						</div>

						<div class="mb10">
							<label class="control-label">Password</label>
							<input type="password" name="password" class="form-control" />
						</div>

						<div class="mb10">
							<label class="control-label">Retype Password</label>
							<input type="password" name="re_password" class="form-control" />
						</div>
						<br>
						<label class="control-label">Select Your Business</label>
							<div class="mb10">
								<select name="bus" class="form-control chosen-select" data-placeholder="">
									<option value="Vendor">Vendor</option>
									<option value="Customer">Customer</option>
								</select>
							</div><br>

						<div class="mb10">
							<label class="control-label">Email Address</label>
							<input type="text" name="email" class="form-control" />
						</div>
						<div class="mb10">
							<label class="control-label">Address</label>
							<input type="text" name="address" class="form-control" />
						</div>
						<div class="mb10">
							<label class="control-label">Phone Number</label>
							<input type="text" name="phone" class="form-control" maxlength="10" />
						</div>
						<br>
						<button class="btn btn-success btn-block" name="sub">Sign Up</button>
					</form>
				</div><!-- col-sm-6 -->

			</div><!-- row -->



		</div><!-- signuppanel -->

	</section>
</main>
<!-- end  main content -->
<?php
	include('include/footer.php');
?>