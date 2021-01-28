<?php
	include("classes/customerclass.php");
	$customers = new  customers();
	$id = $_GET['id'];

	if (!isset($_GET['id'])) {
		header("location: customer.php");
	}

	$customers->DeleteCustomer($id);
	header("location: customer.php");
?>