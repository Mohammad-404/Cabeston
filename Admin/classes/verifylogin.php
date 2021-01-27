<?php
	include("DBConnection.php");
	
	class adminlogin extends dbconnection
	{
		public $email;
		public $password;

		public function verify(){
			$query 	= "SELECT * FROM admin WHERE 
			admin_email = '$this->email' AND admin_password = '$this->password' ";
			$result = $this->performQuery($query);
			return 	  $this->fetchAll($result);
		}

	}
?>