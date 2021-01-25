<?php
	include("DBConnection.php");

	class insertprod extends dbconnection
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
		public $vendor_name;
		public $vendor_email;
		public $Dates;

		public function InsertProduct(){
			$query = "INSERT INTO products(
			pro_name,pro_desc,pro_price,qty,pro_image,pro_image1,pro_image2,cat_id,vendor_id,vendor_name,vendor_email,Dates)
			VALUES(
			'$this->pro_name','$this->pro_desc','$this->pro_price','$this->qty',
			'$this->pro_image','$this->pro_image1','$this->pro_image2','$this->cat_id',
			'$this->vendor_id','$this->vendor_name','$this->vendor_email','$this->Dates')";
			 $this->performQuery($query);
		}

		public function ViewIdCategories($cat){
			$query   	= "SELECT cat_id FROM cetegory WHERE cat_name = '$cat' ";
			$result  	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}

		public function ViewCategories(){
			$query  	= "SELECT * FROM cetegory";
			$result 	= $this->performQuery($query);
			return 		  $this->fetchAll($result);
		}
	}

?>