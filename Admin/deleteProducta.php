<?php
	include("classes/class_deleteProduct.php");
	
	$id = $_GET['id'];
	$deleteProd = new deleteProd();
	$deleteProd->DeleteProductsAc($id);
	header("location: AcceptProduct.php");

?>