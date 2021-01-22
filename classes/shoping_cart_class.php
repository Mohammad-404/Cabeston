<?php
	class Shoping_Cart extends dbconnection
	{
		public $cust_id;
		public $date;

		public $pro_id;
		public $quantity;
		public $last_id;
		public $total;

		public function InsertDateOrder(){
			$query 	= "INSERT INTO orders(order_date,cust_id) 
			VALUES ('$this->date','$this->cust_id')";
			$this->performQuery($query);
			return mysqli_insert_id($this->conn);
		}

		public function ReadDateProducts($k){
			$query 		= "SELECT * FROM products WHERE pro_id = '$k' ";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function InsertDateOrderDetails(){
			$query 		= "INSERT INTO order_details(order_id,pro_id,qty,total) 
			VALUES('$this->last_id','$this->pro_id','$this->quantity','$this->total')";
			$result 	= $this->performQuery($query); 
			return 		  $this->fetchAll($result);
		}

		public function ReadCart($k){
			$query 		= "SELECT * FROM products WHERE pro_id = '$k'";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}


	}



?>