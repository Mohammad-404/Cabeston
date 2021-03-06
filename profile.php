<?php
	session_start();
	include('classes/viewUser.php');
	$ReadUser	= new ReadUser();
	$id 		= $_SESSION['user_id'];
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
              <li class="breadcrumb-item active" aria-current="page">
              
              <?="<a href='user_details.php?id={$id}'>Orders Details</a>";?>  

              </li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <div class="mt-3">
                      <h4><?=$valueInfUser['cust_name'];?></h4>

                      <?="<a href='updateUser.php?id={$_SESSION['user_id']}' class='btn btn-primary'>UPDATE</a>"?>
                    
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
                      <?=$valueInfUser['cust_email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$valueInfUser['cust_mobile'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$valueInfUser['cust_password'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$valueInfUser['cust_address'];?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>





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