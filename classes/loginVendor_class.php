<?php
	class LoginVendor extends dbconnection
	{
		public $email;
		public $password;

		public function CheckLoginVendor(){
			$query 		= "SELECT * FROM vendor WHERE 
			email   = '$this->email' AND password = '$this->password' ";
			
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

	}

?>