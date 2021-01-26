<?php
	include("DBConnection.php");
	/**
	 * 
	 */
	class ReadUser extends dbconnection
	{
		public $name;
		public $email;
		public $password;
		public $phone;
		public $address;

		public function ReadProfile($id){
			$query  	= "SELECT * FROM customer where cust_id ='$id'";
			$result  	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function UpdateUserINFO($id){
			$query = "UPDATE customer SET 
											cust_name 		= '$this->name',
											cust_email 		= '$this->email',
											cust_password 	= '$this->password',
											cust_mobile 	= '$this->phone',
											cust_address 	= '$this->address'
			WHERE cust_id = '$id'";

			$this->performQuery($query);
		}
	}

?>