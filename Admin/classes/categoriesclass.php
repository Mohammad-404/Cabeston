<?php
	include("DBConnection.php");

	class Categories extends dbconnection
	{
		public $text1;
		public $text2;
		public $state;
		public $image1;

		public function AddCat(){
			$query 	= "INSERT INTO cetegory(cat_name,cat_desc,cat_image,stat) 
					  VALUES('$this->text1','$this->text2','$this->image1','$this->state')";
			$this->performQuery($query);
		}

		public function ViewCat(){
			$query 	= "SELECT * FROM cetegory";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		public function ViewCatby($id){
			$query 	= "SELECT * FROM cetegory WHERE cat_id ='$id'";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		public function DeleteCat($id){
			$query = "DELETE FROM cetegory WHERE cat_id = '$id'";
			$this->performQuery($query);
		}
		
		public function UpdateCat($id){
			$query = "UPDATE cetegory SET
											cat_name 	= '$this->text1',
											cat_desc 	= '$this->text2',
											stat 		= '$this->state',
											cat_image  	= '$this->image1'	
			WHERE cat_id = '$id'";
			$this->performQuery($query);
		}

	}


?>