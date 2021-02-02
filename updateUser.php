<?php
	session_start();
  if (!isset($_SESSION['user_id'])) {
    header("location: home.php");
  }
	include('classes/viewUser.php');
	$ReadUser	= new ReadUser();
	$id 		= $_SESSION['user_id'];

  if (isset($_POST['sub'])) {
    $ReadUser->name       = $_POST['name'];
    $ReadUser->email      = $_POST['email'];
    $ReadUser->password   = $_POST['password'];
    $ReadUser->address    = $_POST['address'];
    $ReadUser->phone      = $_POST['phone'];

    $ReadUser->UpdateUserINFO($id);
    header("location: profile.php");
  }




	$Results 	= $ReadUser->ReadProfile($id); 
	foreach ($Results as $valueInfUser);

	include('include/header.php');
?>


<!-- start main content -->
<main class="main-container">
<section class="men_area pt-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12"><!--9-->
				<br><br>
		<div id="shop-all" class="row">
			<div class="container">
	    	<div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
              <li class="breadcrumb-item active" aria-current="page"><a>User Details</a></li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <form action="" method="post">
                    <div class="mt-3">
                      <h4>
                      <input type="text" name="name" value="<?=$valueInfUser['cust_name'];?>">
                      </h4>
                      <button name="sub" class="btn btn-danger">SAVE</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="email" name="email" value="<?=$valueInfUser['cust_email'];?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="phone" maxlength="10" value="<?=$valueInfUser['cust_mobile'];?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="password" value="<?=$valueInfUser['cust_password'];?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="address" value="<?=$valueInfUser['cust_address'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </form>




					 </div>
				</div>
			</div>
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