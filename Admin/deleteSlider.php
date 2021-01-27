<?php
	if (!isset($_GET['id'])) {
		header("location: index.php");
	}
	include("classes/ViewVendor.php");
	$id = $_GET['id'];
	$Vendors = new Vendors();
	$Vendors->DeleteSlider($id);
	header("location: slider.php");
?>