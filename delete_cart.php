<?php
	session_start();

	if (!isset($_GET['id']) || empty($_GET['id'])) {
		header("home.php");
	}
	$id = $_GET['id'];

	if (isset($_SESSION['cart'])) {
		unset($_SESSION['cart'][$id]);
		header("location: cart.php");
	}
?>