<?php
class signup extends dbconnection{
	
	public $email;
	public $password;
	public $address;
	public $phone;
	public $name;
	public $business;

	public function CreateUser(){
		$query  = 
		"INSERT INTO customer(cust_name,cust_email,cust_password,cust_mobile,cust_address,business)
		Values('$this->name','$this->email','$this->password','$this->phone','$this->address',
		'$this->business')";
		
		if ($this->performQuery($query)) {
			header("location: login.php");
		}else{
			$Error = "Email Already Exists";
		}
		return $Error;
	} 


}
?>