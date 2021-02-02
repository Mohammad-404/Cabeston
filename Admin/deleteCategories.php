<?php
	if (!isset($_GET['id'])) {
		header("location: home.php");
	}
	include("classes/categoriesclass.php");
	$id = $_GET['id'];
	$Categories = new Categories();
	$Categories->DeleteCat($id);
	header("location: CreateCategories.php");
?>