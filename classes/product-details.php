<?php

	class Product_Details extends dbconnection
	{
		public $id;

		// public function Read_Product_Details(){
		// 	$query 	= "select products.pro_name,cetegory.cat_name from products
		// inner join cetegory ON products.cat_id = cetegory.cat_id where pro_id = '$this->id' ";

		// 	$result 	= $this->performQuery($query);
		// 	return 		  $this->fetchAll($result);
		// }

		public function ViewAllProducts(){
			//$query  	= "SELECT * FROM products WHERE  pro_id = '$this->id'";
			
			$query 		= "SELECT * FROM products 
			INNER JOIN vendor ON products.vendor_id = vendor.id_vendor 
			INNER JOIN cetegory ON products.cat_id  = cetegory.cat_id
			WHERE pro_id = '$this->id'";

			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result); 
		}

		public function ReadCategoryess($id){
			$query 	 	= "SELECT * FROM products 
			INNER JOIN cetegory ON products.cat_id = cetegory.cat_id
			WHERE pro_id = '$id'";

			$result		= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}
		
		// public function ReadBag($k){
		// 	$query 		= "SELECT * FROM products WHERE pro_id = '$k'";
		// 	$result 	= $this->performQuery($query);
		// 	return 		  $this->fetchAll($result);
		// }
	}



?>