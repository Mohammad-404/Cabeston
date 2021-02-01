<?php
	include("classes/class_deleteProduct.php");
	
	$id = $_GET['id'];
	$deleteProd = new deleteProd();
	$deleteProd->DeleteProductsAccept($id);
	header("location: ViewProductsAccept.php");

?>