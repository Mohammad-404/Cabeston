<?php

    class searchs extends dbconnection
    {
        public $nicot;

        public function readnico(){
            $query      = "SELECT * FROM products WHERE nico = '$this->nicot'";
			$result = $this->performQuery($query);
			return 	  $this->fetchAll($result);
        }
    }


?>