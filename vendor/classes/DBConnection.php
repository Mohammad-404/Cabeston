<?php
	include("config.php");

	class dbconnection
	{
		public $conn;

		function __construct()
		{
			$this->openconnection();			
		}

		public function openconnection(){
			$this->conn = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBNAME);
			return $this->conn ? $this->conn : die("ERROR CONNECT DATABASE"); 
		}

		public function performQuery($query){
			$result = mysqli_query($this->conn,$query);
			return $result ? $result : FALSE;
		}

		public function fetchAll($result){
			$rowSet = array();
			while ($row = mysqli_fetch_assoc($result)) {
				$rowSet[] = $row;
			}
			return count($rowSet) >= 1 ? $rowSet : FALSE;
		}
	}
?>