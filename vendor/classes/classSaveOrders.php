<?php
	// include("DBConnection.php");

	class savesorders extends dbconnection
	{
		public $idOrder; 
		public $DateOrder; 
		public $CustomerID; 
		public $ProductID; 
		public $Quantities;
		public $Total;


		public function saves($idVendor){
			$query 		= "INSERT INTO saveorders
			(order_id,dateorder,custid,proid,qty,total,vendor_id)
			
			VALUES('$this->idOrder','$this->DateOrder','$this->CustomerID','$this->ProductID','$this->Quantities','$this->Total','$idVendor')";
			$result 	= $this->performQuery($query);
			if ($result) {
				$Message = "Save Order Successfully !";
			}else{
				$Message = "Failed !";
			}
			return $Message;
		}

		public function ReadAllOrdersSave($idVendor){
			$query  	= "SELECT * FROM saveorders WHERE vendor_id='$idVendor'";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}
	}

?>