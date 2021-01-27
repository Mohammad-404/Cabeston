<?php
	include("DBConnection.php");

	class orders extends dbconnection
	{
		public function ReadOrders(){
			$query = "
			SELECT order_details.order_id,orders.order_date,customer.cust_id,products.pro_id,
			order_details.qty,order_details.total,products.pro_name,customer.cust_mobile,
			customer.cust_address,products.pro_price FROM orders 
			INNER JOIN order_details ON orders.order_id  = order_details.order_id
			INNER JOIN customer 	 ON customer.cust_id = orders.cust_id
			INNER JOIN products 	 ON products.pro_id  = order_details.pro_id
			";
			$result = $this->performQuery($query);
			return 	  $this->fetchAll($result);
		}
	}
?>