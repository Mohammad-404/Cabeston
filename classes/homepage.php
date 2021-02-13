<?php
	//require('DBconnection.php');

	class HomePage extends dbconnection
	{

		//Slider in Home Page is a Top page 
		public function ReadSliders(){
			$query 	= "SELECT * FROM slider";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		//view category
		public function ReadCategory(){
			$query    	= "SELECT * FROM cetegory";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function ReadCategoryIDS($id){
			$query    	= "SELECT cat_name FROM cetegory WHERE cat_id = '$id'";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		//view category
		public function ReadC(){
			$query    	= "SELECT * FROM cetegory";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		//view Products
		public function ReadProducts(){
			$query    	= "SELECT * FROM products LIMIT 0,15";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		// //view Products
		// public function ReadProductsNicot(){
		// 	$query    	= "SELECT * FROM products ";
		// 	$result 	= $this->performQuery($query);
		// 	return 		  $this->fetchAll($result);
		// }

		//view all product but need number pages
		public function NumberRowInAllCetegory(){
			$query  = "SELECT * FROM cetegory";
			$result = $this->performQuery($query);
			return 	  $this->performRows($result);
		}

		public function displayDataInPages($this_page_first_result,$result_per_page){
			$query  = "SELECT * FROM cetegory 
			LIMIT ".$this_page_first_result . ',' . $result_per_page;
			$result = $this->performQuery($query);
			return    $this->fetchAllArray($result);
		}

		public function ReadBag($k){
			$query 		= "SELECT * FROM products WHERE pro_id = '$k'";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function ReadNicotine(){
			$query 		= "SELECT nico FROM products GROUP BY nico DESC";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

	}




