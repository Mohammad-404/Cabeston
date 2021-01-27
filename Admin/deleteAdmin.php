<?php
	include("classes/classdeleteVendor.php");
	$c = new  classdeleteVendor();
	$id = $_GET['id'];
	if (!isset($_GET['id'])) {
		header("profileAdmin.php");
	}
	$c->deleteAdmin($id);
	header("location: profileAdmin.php");
?>