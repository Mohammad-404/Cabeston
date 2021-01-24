<?php
	include("classes/DBConnection.php");

	
	class contact extends dbconnection
	{
		public $name;
		public $email;
		public $phone;
		public $message;

		public function insertcontact(){
			$query = "INSERT INTO contactus(email,msg,phone,name)
			VALUES('$this->name','$this->email','$this->phone','$this->message')";
			
			if ($this->performQuery($query)) {
				$Error = "Successfully Sent ! ";
			}
			return $Error;
		}			

	}

?>