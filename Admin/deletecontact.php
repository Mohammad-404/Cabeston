<?php
	if (!isset($_GET['id'])) {
		header("location: index.php");
	}

	include("classes/classContact.php");

	$id = $_GET['id'];
	$Contact = new Contact();
	$Contact->DeleteContact($id);
	header("location: contact.php");
?>