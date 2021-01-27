<?php
	include("classes/class_deleteProduct.php");
	
	$id = $_GET['id'];
	$deleteProd = new deleteProd();
	$deleteProd->DeleteProducts($id);
	header("location: viewProduct.php");

?>