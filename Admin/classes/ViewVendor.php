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

		public function ReadAllVendor(){
			$query  	= "SELECT * FROM vendor";
			$result  	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function ReadAllAdmin(){
			$query  	= "SELECT * FROM admin";
			$result  	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function ReadAdmin($id){
			$query  	= "SELECT * FROM admin WHERE admin_id ='$id'";
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

		public function UpdateAdmin($id){
			$query  	= "UPDATE admin SET 
										admin_fullname 			= '$this->name',
										admin_password 			= '$this->password',
										admin_email 			= '$this->email'
			WHERE admin_id ='$id'";
			
			$result  	= $this->performQuery($query);
		}

		public function insertAdmin(){
			$query = "INSERT INTO admin(admin_fullname,admin_password,admin_email)
			VALUES('$this->name','$this->password','$this->email')";
			$this->performQuery($query);
		}
	}

?>