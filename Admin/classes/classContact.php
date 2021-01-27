<?php
include("DBConnection.php");

class Contact extends dbconnection
{
	public function viewContact(){
		$query  	 = "SELECT * FROM contactus";
		$result 	 = $this->performQuery($query);
		return 		   $this->fetchAll($result);
	}

	public function DeleteContact($id){
		$query  	 = "DELETE FROM contactus WHERE id = '$id'";
		$result 	 = $this->performQuery($query);
	}

}


?>