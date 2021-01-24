<?php	
	include("classes/contact_class.php");
	$c = new contact();

	if (isset($_POST['sub'])) {
		$c->name  		= $_POST['name'];
		$c->email 		= $_POST['email'];
		$c->phone 		= $_POST['phone'];
		$c->message 	= $_POST['message'];
		$MSG = $c->insertcontact();		
		echo '<meta http-equiv="refresh" content="0">';
	}
	

	include("include/header.php");
?>
<!-- start main content -->
<main class="main-container">
<!-- contact content -->


	<!-- Start Contact Us -->

	<div id="Contact" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="Contact-Form">
							<form class="leave-comment contact-form" method="post" action="" 
							id="cform" autocomplete="on">
								<div class="Contact-us">
									<?php
										if (isset($MSG)) {
											echo"
											<div class='alert alert-success' role='alert'>
											  $MSG
											</div>
											";
										}

									?>
									<div class="form-input col-md-4">
										<input type="text" name="name" placeholder="Your Name" required>
									</div>
									<div class="form-input col-md-4">
										<input type="email" name="email" placeholder="Email" required>
									</div>
									<div class="form-input col-md-4">
										<input type="text" name="phone" placeholder="Phone">
									</div>
									<div class="form-input col-md-12">
										<textarea class="txt-box textArea" name="message" cols="40" rows="7" id="messageTxt" placeholder="Message" spellcheck="true" required></textarea>
									</div>
									<div class="form-submit col-md-12">
										<input type="submit" name="sub" class="btn btn-custom-6" value="Send Message">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">

					<div class="Contact-Info">
						<h4>Contact Details</h4>
						<div class="tex-contact">
							<p>jash ash  sakkda skjd kjasdkjasnkjd.</p>
						</div>
						<div class="Block-Contact col-md-6">
							<p>Phone :</p>
							<ul>
								<li>
									<i class="fa fa-phone"></i>
									<span>+962 (079) 543 - 9152</span>
								</li>
								<li>
									<i class="fa fa-fax"></i>
									<span>+52 (5165) 65 - 669</span>
								</li>
							</ul>
						</div>
						<div class="Block-Contact col-md-6">
							<p>Email :</p>
							<ul>
								<li>
									<i class="fa fa-envelope"></i>
									<span>m.almasri97.me@gmail.com</span>
								</li>
							</ul>
						</div>
						<div class="Block-Contact col-md-12">
							<p>Address :</p>
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<span>Amman.</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contact Us -->
<!-- end contact content -->

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
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-medkit"></i>
										<div class="mini-service-info">
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
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
</main>
<!-- end main content -->
<div class="clearfix"></div>
<?php
	include("include/footer.php");
?>