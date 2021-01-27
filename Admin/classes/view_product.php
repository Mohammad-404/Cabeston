<?php
	include("DBConnection.php");

	class ViewVendor extends dbconnection
	{
		public function ViewProducts(){
			$query  	= "SELECT * FROM products";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}
	}


?>