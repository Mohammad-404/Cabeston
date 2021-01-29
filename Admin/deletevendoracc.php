<?php
	include("classes/acceptsvendorsclass.php");
	
	$id = $_GET['id'];
	$deleteProd = new vendorsign();
	$deleteProd->DeletesVendorsac($id);
	header("location: AcceptVendor.php");

?>