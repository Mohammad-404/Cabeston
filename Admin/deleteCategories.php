<?php
	if (!isset($_GET['id'])) {
		header("location: index.php");
	}
	include("classes/categoriesclass.php");
	$id = $_GET['id'];
	$Categories = new Categories();
	$Categories->DeleteCat($id);
	header("location: CreateCategories.php");
?>