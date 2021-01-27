<?php
	include("DBConnection.php");
	/**
	 * 
	 */
	class classdeleteVendor extends dbconnection
	{
		public function deletevendor($id){
			$query = "DELETE FROM vendor WHERE id_vendor = '$id'";
			$this->performQuery($query);
		}	

		public function deleteAdmin($id){
			$query = "DELETE FROM admin WHERE admin_id = '$id'";
			$this->performQuery($query);
		}		
	}



?>