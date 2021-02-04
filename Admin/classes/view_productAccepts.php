<?php
	include("DBConnection.php");

	class ViewVendor extends dbconnection
	{

		public $pro_name;
		public $pro_desc;
		public $pro_price;
		public $qty;
		public $pro_image;
		public $pro_image1;
		public $pro_image2;
		public $cat_id;
		public $vendor_id;
		public $Dates;
		public $size;
		public $nec;
		public function InsertProduct(){
			$query = "INSERT INTO products(
			pro_name,pro_desc,pro_price,qty,pro_image,pro_image1,pro_image2,cat_id,vendor_id,Dates,nico,size)
			VALUES(
			'$this->pro_name','$this->pro_desc','$this->pro_price','$this->qty',
			'$this->pro_image','$this->pro_image1','$this->pro_image2','$this->cat_id',
			'$this->vendor_id','$this->Dates','$this->nec','$this->size')";
			 $this->performQuery($query);
		}

		public function ViewProductsID($id){
			$query  	= "SELECT * FROM productssave WHERE pro_id = '$id'";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}


		public function ViewProducts(){
			$query  	= "SELECT * FROM products";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function ViewProductsAccept(){
			$query  	= "SELECT * FROM productssave";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function DeleteProducts($id){
			$query = "DELETE FROM productssave WHERE pro_id  = '$id' ";
			$this->performQuery($query);
		}


	}


?>