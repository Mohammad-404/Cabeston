<?php

	require('DBConnection.php');

class profileUser extends dbconnection
{
	public $cust_name;
	public $cust_email;
	public $cust_password;
	public $cust_mobile;
	public $cust_address;

	public function ReadInfoUser($name_cust){
		$query 		= "SELECT cust_id FROM customer WHERE cust_name = '$name_cust' ";
		$result 	= $this->performQuery($query);
		return 		  $this->fetchAll($result);
	}

	public function viewcustomer($id){
		$query  	= "SELECT * FROM customer WHERE cust_id = '$id' ";
		$result 	= $this->performQuery($query);
		return 	 	  $this->fetchAll($result);
	}

	public function UpdateCustomer($id){	
	    $query = "
	        UPDATE customer SET 
	               cust_name     = '$this->cust_name',
	               cust_email    = '$this->cust_email',
	               cust_password = '$this->cust_password',
	               cust_mobile   = '$this->cust_mobile',
	               cust_address  = '$this->cust_address'
	        WHERE cust_id = '$id'
	    ";
	    $this->performQuery($query);
	}

}

?>