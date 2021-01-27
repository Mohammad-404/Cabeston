<?php
	include("DBConnection.php");
	
	class Vendors extends dbconnection
	{
		public $name;
		public $password;
		public $email;
		public $address;
		public $phone;
		public $text1;
		public $text2;
		public $image1;

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

		public function AddSlider(){
			$query 	= "INSERT INTO slider(textone,texttow,image) 
					  VALUES('$this->text1','$this->text2','$this->image1')";
			$this->performQuery($query);
		}

		public function ViewSlider(){
			$query 	= "SELECT * FROM slider";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		public function ViewSliderby($id){
			$query 	= "SELECT * FROM slider WHERE id_slider ='$id'";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		public function DeleteSlider($id){
			$query = "DELETE FROM slider WHERE id_slider = '$id'";
			$this->performQuery($query);
		}
		
		public function UpdateSlider($id){
			$query = "UPDATE slider SET
											textone 	= '$this->text1',
											texttow 	= '$this->text2',
											image  		= '$this->image1'	
			WHERE id_slider = '$id'";
			$this->performQuery($query);
		}
	}

?>