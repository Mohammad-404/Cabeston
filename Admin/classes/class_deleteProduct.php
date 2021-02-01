<?php
	include("DBConnection.php");

	class deleteProd extends dbconnection
	{
		public function DeleteProducts($id){
			$query = "DELETE FROM products WHERE pro_id  = '$id' ";
			$this->performQuery($query);
		}

		public function DeleteProductsAc($id){
			$query = "DELETE FROM productssave WHERE pro_id  = '$id' ";
			$this->performQuery($query);
		}

	}
?>