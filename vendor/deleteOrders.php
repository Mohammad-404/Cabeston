<?php
	include("classes/class_order.php");
	$orders = new orders();
	$id_order = $_GET['id'];
	$orders->DeleteOrders($id_order);
	header("location: filterOrders.php");
?>