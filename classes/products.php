<?php

	class products extends dbconnection
	{
		public $id;

		public function ViewAllProducts($This_is_first_page,$result_per_page){
			$query  	= "SELECT * FROM products WHERE cat_id = '$this->id' 
			LIMIT ".$This_is_first_page . ',' . $result_per_page;			
			$result 	= $this->performQuery($query);
			return 	  	  $this->fetchAllArray($result);
		} 		

		public function NumberRowInAllProducts(){
			$query  	= "SELECT * FROM products WHERE cat_id = '$this->id' ";
			$result		= $this->performQuery($query);
			return 		  $this->performRows($result);
		}

		public function ReadCategoryess($id){
			$query 	 	= "SELECT * FROM cetegory WHERE cat_id = '$id'";
			$result		= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}
		
		// public function ReadBag($k){
		// 	$query 		= "SELECT * FROM products WHERE pro_id = '$k'";
		// 	$result 	= $this->performQuery($query);
		// 	return 		  $this->fetchAll($result);
		// }

				
	}
