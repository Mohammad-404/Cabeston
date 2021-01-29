<?php
include("DBConnection.php");

class vendorsign extends dbconnection{
	
	public $email;
	public $password;
	public $address;
	public $phone;
	public $name;
	public $business;

	public function CreateVendor(){
		$query  = 
		"INSERT INTO vendor(name,password,email,address,phone,business)
		Values('$this->name','$this->password','$this->email','$this->address','$this->phone'
		,'$this->business')";
		
		if ($this->performQuery($query)) {
			$Error = "Successfully Add Vendor";
		}else{
			$Error = "Email Already Exists";
		}
		return $Error;
	}

	public function ReadVendors(){
		$query  	= "SELECT * FROM vendoraccept";
		$result 	= $this->performQuery($query);
		return 		  $this->fetchAll($result);
	} 

	public function DeletesVendorsac($id){
		$query  	= "DELETE FROM vendoraccept WHERE id_vendor ='$id'";
		$result 	= $this->performQuery($query);
		return 		  $this->fetchAll($result);
	} 
}

?>