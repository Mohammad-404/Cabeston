<?php
	session_start();
	include('classes/classuser_details.php');
	$DetailsUser	= new DetailsUser();
	$id 	       	= $_SESSION['user_id'];
  $R            = $DetailsUser->DetailsCustomer($id); 
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
              <li class="breadcrumb-item active" aria-current="page">
                <a href="profile.php">User Profile</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                <a>Orders Details</a>  
              </li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-lg-12 col-md-8">

              <?php
                $R      = $DetailsUser->DetailsCustomer($id); 

                  if ($R){ //is_array($Results) || is_object($Results)
                  foreach ($R as $UserD){
              ?>
              <div class="card mb-3 shadows">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Order ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$UserD['order_id'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Product Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$UserD['pro_name'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Quantities</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$UserD['qty'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Total</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$UserD['total'];?>
                    </div>
                  </div>
                  <br>
                        </div>
                      </div>
                        <?php
                          }
                        }  
                        ?>
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