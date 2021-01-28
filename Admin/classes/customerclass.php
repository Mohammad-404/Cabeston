<?php
	include("DBConnection.php");

	class customers extends dbconnection
	{
		public $name;
		public $email;
		public $address;
		public $mobile;
		public $password;

		public function ReadCustomer(){
			$query 		= "SELECT * FROM customer";
 			$result 	= $this->performQuery($query);
 			return 		  $this->fetchAll($result);
		}

		public function ReadCustomerUpdate($id){
			$query 		= "SELECT * FROM customer WHERE cust_id = '$id'";
 			$result 	= $this->performQuery($query);
 			return 		  $this->fetchAll($result);
		}

		public function DeleteCustomer($id){
			$query 		= "DELETE FROM customer WHERE cust_id = '$id'";
 			$this->performQuery($query);
		}

		public function UpdateCustomer($id){
			$query 		= "UPDATE customer SET 
										   cust_name 		= '$this->name',
										   cust_email 		= '$this->email',
										   cust_address 	= '$this->address',
										   cust_mobile 		= '$this->mobile',
										   cust_password 	= '$this->password'
			WHERE cust_id = '$id'";
 			$this->performQuery($query);
		}
	}

?>