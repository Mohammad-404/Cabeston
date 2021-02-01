<?php  
    include("classes/view_productAccepts.php");
    $ViewVendor = new ViewVendor();
    $id  = $_GET['id'];


        $RORO = $ViewVendor->ViewProductsID();
        foreach ($RORO as $RERE);
        echo $RERE['pro_image'];
        die;

    if (isset($_POST['sub'])) {
        $RORO = $ViewVendor->ViewProductsID($id);
        foreach ($RORO as $RERE);

        $insertprod->pro_name            = $_POST["proname"];
        $insertprod->pro_desc            = $_POST["prodesc"];
        $insertprod->pro_price           = $_POST["price"];
        $insertprod->qty                 = $_POST["quan"];
        $insertprod->vendor_id           = $_SESSION['vendor_id'];
        $insertprod->Dates               = date('Y-m-d H:i:s');
        $insertprod->size                = $_POST['size'];

        if ($_FILES['img1']['name'] != "") {
        }else{
            $insertprod->pro_image            = $RERE['pro_image'];
            $insertprod->pro_image1           = $RERE['pro_image1'];
            $insertprod->pro_image2           = $RERE['pro_image2'];
        }
        
        //here give id categories
        $cat                             = $_POST['categories'];
        $giveIdCat                       = $insertprod->ViewIdCategories($cat);
        foreach ($giveIdCat as $value){
        $insertprod->cat_id = $value['cat_id'];
        }
        //end code

        $insertprod->InsertProduct();
        echo '<meta http-equiv="refresh" content="0">';   
    }    

?>
