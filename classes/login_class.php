<?php
	include('DBConnection.php');
	/**
	 * 
	 */
	class LoginUser extends dbconnection
	{
		public $email;
		public $password;

		public function CheckLogin(){
			$query 		= "SELECT * FROM customer WHERE 
			cust_email  = '$this->email' AND cust_password = '$this->password' ";
			
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

	}

?>