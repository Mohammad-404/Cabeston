<?php
	include("DBConnection.php");

	/**
	 * 
	 */
	class thankYou extends dbconnection
	{
		public function NumberOrder(){
			$query  = "SELECT * FROM orders ORDER BY order_id DESC LIMIT 1";
			$result = $this->performQuery($query);
			return 	  $this->fetchAll($result);
		}
	}


?>