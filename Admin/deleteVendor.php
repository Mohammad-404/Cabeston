<?php
	include("classes/classdeleteVendor.php");
	$c = new  classdeleteVendor();
	$id = $_GET['id'];
	if (!isset($_GET['id'])) {
		header("profileVendor.php");
	}
	$c->deletevendor($id);
	header("location: profileVendor.php");
?>