<?php
class vendorsign extends dbconnection{
	
	public $email;
	public $password;
	public $address;
	public $phone;
	public $name;
	public $business;

	public function CreateVendor(){
		$query  = 
		"INSERT INTO vendoraccept(name,password,email,address,phone,business)
		Values('$this->name','$this->password','$this->email','$this->address','$this->phone'
		,'$this->business')";
		
		if ($this->performQuery($query)) {
			$Error = "Your Account is Under Review !";
		}else{
			$Error = "Email Already Exists";
		}
		return $Error;
	} 


}

?>