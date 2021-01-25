<?php
	include("DBConnection.php");

	class ViewVendor extends dbconnection
	{
		public function ViewProducts($idvendor){
			$query  	= "SELECT * FROM products WHERE vendor_id = '$idvendor' ";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}
	}


?>