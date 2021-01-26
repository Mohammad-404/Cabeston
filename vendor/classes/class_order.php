<?php
	include("DBConnection.php");

	class orders extends dbconnection
	{
		public function ReadOrders($id_vendor){
			$query = "
			SELECT * FROM orders 
			INNER JOIN order_details ON orders.order_id  = order_details.order_id
			INNER JOIN customer 	 ON customer.cust_id = orders.cust_id
			INNER JOIN products 	 ON products.pro_id  = order_details.pro_id
			WHERE vendor_id  = '$id_vendor'
			";
			$result = $this->performQuery($query);
			return 	  $this->fetchAll($result);
		}

		public function ReadOrdersFilter($id_vendor){
			$query = "SELECT order_id,SUM(total) AS AllTotal,COUNT(order_details.qty) AS AllQty
			,SUM(order_details.qty) AS SumAllQty 
			FROM order_details 
			INNER JOIN products ON products.pro_id  = order_details.pro_id
            WHERE vendor_id  = '$id_vendor' GROUP BY order_id
			";

			$result = $this->performQuery($query);
			return 	  $this->fetchAll($result);
		}
	}
?>