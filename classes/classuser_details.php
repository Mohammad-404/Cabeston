<?php
include("DBConnection.php");

class DetailsUser extends dbconnection
{
	public function DetailsCustomer($id){
		$query 	 = "
					SELECT * FROM orders 
					INNER JOIN order_details ON orders.order_id  = order_details.order_id
					INNER JOIN customer 	 ON customer.cust_id = orders.cust_id
					INNER JOIN products 	 ON products.pro_id  = order_details.pro_id
					WHERE customer.cust_id = '$id'
					";

		$result  = $this->performQuery($query);
		return 	   $this->fetchAll($result); 
	}

	// public function OrdersUser($id){
	// 	$query = "";
	// }
}


?>