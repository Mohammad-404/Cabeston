<?php
	include("DBConnection.php");
	
	class Vendors extends dbconnection
	{
		public $name;
		public $password;
		public $email;
		public $address;
		public $phone;

		public function ReadVendor($id){
			$query  	= "SELECT * FROM vendor WHERE id_vendor ='$id'";
			$result  	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function UpdateVindor($id){
			$query  	= "UPDATE vendor SET 
											name 			= '$this->name',
											password 		= '$this->password',	 
											email 			= '$this->email',
											address 		= '$this->address',
											phone 			= '$this->phone'
			WHERE id_vendor ='$id'";
			
			$result  	= $this->performQuery($query);
		}
	}

?>