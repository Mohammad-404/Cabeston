<?php
    include("include/header.php");  
    include("classes/view_productAccepts.php");
    $insertprod = new ViewVendor();
    // if (isset($_GET['id'])) {
       
    // }
    







    if (isset($_POST['sub'])) {
        $id  = $_POST['id'];
        $RORO = $insertprod->ViewProductsID($id);
        foreach ($RORO as $RERE);
        
        $insertprod->pro_name            = $_POST["p_name"];
        $insertprod->pro_desc            = $_POST["p_desc"];
        $insertprod->pro_price           = $_POST["p_price"];
        $insertprod->qty                 = $_POST["p_qty"];
        $insertprod->vendor_id           = $_POST["v_id"];

        $insertprod->cat_id              = $_POST['c_id'];
        $insertprod->vendor_id           = $_POST['v_id'];
        $insertprod->Dates               = $_POST['Dates'];
        $insertprod->size                = $_POST['size']; 
        $insertprod->nec                = $_POST['nec']; 


        $insertprod->pro_image            = $RERE['pro_image'];
        $insertprod->pro_image1           = $RERE['pro_image1'];
        $insertprod->pro_image2           = $RERE['pro_image2'];

        $insertprod->InsertProduct();
        $insertprod->DeleteProducts($id);
        echo '<meta http-equiv="refresh" content="0">';   
    }    

?>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
 
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                                <span style="color:blue;">Post Accept</span>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <table id="bootstrap-data-table" 
                                class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Quantities</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th>Image3</th>
                                            <th>Size</th>
                                            <th>Accept</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $Printers   = 
                                            $insertprod->ViewProductsAccept();
                                            if ($Printers) {
                                            foreach ($Printers as $Rows) {
                                        ?>
                                        <tr>
                                            <td><?php echo $Rows['pro_id']; ?></td>
                                            <input type="int" name="p_id" hidden="hidden" value="<?=$Rows['pro_id']?>">


                                            <td><?php echo $Rows['pro_name']; ?></td>
                                            <input type="text" name="p_name" hidden="hidden" value="<?=$Rows['pro_name']?>">
                                            
                                            <td><?php echo $Rows['pro_desc']; ?></td>
                                            <input type="text" name="p_desc" hidden="hidden" value="<?=$Rows['pro_desc']?>">

                                            <td><?php echo $Rows['pro_price']; ?></td>
                                            <input type="text" name="p_price" hidden="hidden" value="<?=$Rows['pro_price']?>">

                                            <td><?php echo $Rows['qty']; ?></td>
                                            <input type="text" name="p_qty" hidden="hidden" value="<?=$Rows['qty']?>">

                                            <input type="text" name="c_id" hidden="hidden" value="<?=$Rows['cat_id']?>">

                                            <input type="text" name="v_id" hidden="hidden" value="<?=$Rows['vendor_id']?>">

                                            <input type="text" name="Dates" hidden="hidden" value="<?=$Rows['Dates']?>">

                                            <input type="text" name="size" hidden="hidden" value="<?=$Rows['size']?>">
                                            <input type="text" name="nec" hidden="hidden" value="<?=$Rows['nico']?>">

                                            <td>
                                                <?php
                                                 echo"
                                                 <img class='imgtables' src='../UploadImages/{$Rows['pro_image']}'>
                                                    ";
                                                 ?>
                                                     
                                            </td>
                                            
                                            <td>
                                                <?php
                                                 echo"
                                                 <img class='imgtables' src='../UploadImages/{$Rows['pro_image1']}'>
                                                    ";
                                                 ?>
                                                     
                                            </td>
                                            
                                            <td>
                                                <?php
                                                 echo"
                                                 <img class='imgtables' src='../UploadImages/{$Rows['pro_image2']}'>
                                                    ";
                                                 ?>
                                                     
                                            </td>

                                            <td><?php echo $Rows['size']; ?></td>

                                        <?="
                                            <input type='hidden' name='id'
                                            value='{$Rows['pro_id']}'
                                            >
                                        "?>
                                        </form>

                                            <?="

                                            <td>
                                            <input type='submit' 
                                            value='Accept' name='sub'
                                            class='btn btn-primary t'>
                                            </td>
                                            ";?>

                                            

                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /Widgets -->

        <?php
            include("include/footer.php");
        ?>

        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
</script>

</body>
</html>
