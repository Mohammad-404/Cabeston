<?php
 	include("DBConnection.php");

 	class status extends dbconnection
 	{
 		public function ReadMoneyCountProd($id){
			$query = "SELECT order_id,SUM(order_details.total) AS AllTotal,COUNT(products.pro_id) AS AllPRO
			,SUM(order_details.qty) AS SumAllQty
			FROM order_details 
			INNER JOIN products ON products.pro_id  = order_details.pro_id
            WHERE vendor_id  = '$id'
			";

			$result = $this->performQuery($query);
			return 	  $this->fetchAll($result);
 		}
 	}

?>
