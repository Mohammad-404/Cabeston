<?php
    include("include/header.php");  
    include("classes/class_order.php");
    include_once("classes/classSaveOrders.php");

    $orders      = new orders();
    $savesorders = new savesorders();
    $idVendor    = $_SESSION["vendor_id"];

    if (isset($_POST['sub'])) {
        $savesorders->idOrder       = $_POST['orderid'];
        $savesorders->DateOrder     = $_POST['orderdate'];
        $savesorders->CustomerID    = $_POST['custid'];
        $savesorders->ProductID     = $_POST['proid'];
        $savesorders->Quantities    = $_POST['qty'];
        $savesorders->Total         = $_POST['total'];

        $Message = $savesorders->saves($idVendor);

        // echo '<meta http-equiv="refresh" content="0">';
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
                                <?php
                                    if (isset($Message)) {
                                        echo"
                                        <div class='alert alert-primary' role='alert'>
                                          $Message
                                        </div>
                                        ";
                                    }
                                ?>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                <table id="bootstrap-data-table" 
                                class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Number Order</th>
                                            <th>Order Date</th>
                                            <th>Customer ID</th>
                                            <th>Product ID</th>
                                            <th>Quantites</th>
                                            <th>Total</th>
                                            <th>Save Orders</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $id_vendor   = $_SESSION['vendor_id'];
                                            $Printers    = $orders->ReadOrders($id_vendor);
                                            if ($Printers) {
                                            foreach ($Printers as $Rows) {
                                        ?>
                                        <tr>
                                            <td>
                                            <input type="number" name="orderid"
                                            hidden="hidden"
                                            value="<?php echo $Rows['order_id'];?>">

                                            <?php echo $Rows['order_id'];?>

                                            </td>
                                            <td>
                                            <input type="text" name="orderdate"
                                            hidden="hidden"
                                            value="<?php echo $Rows['order_date'];?>">

                                            <?php echo $Rows['order_date']; ?>
                                            </td>
                                            <td>
                                            <input type="number" name="custid"
                                            hidden="hidden"
                                            value="<?php echo $Rows['cust_id'];?>">

                                                <?php echo $Rows['cust_id']; ?>
                                            </td>
                                            <td>

                                            <input type="number" name="proid"
                                            hidden="hidden"
                                            value="<?php echo $Rows['pro_id'];?>">

                                                <?php echo $Rows['pro_id']; ?>
                                            </td>

                                            <td>

                                            <input type="number" name="qty"
                                            hidden="hidden"
                                            value="<?php echo $Rows['qty'];?>">
                                            
                                                <?php echo $Rows['qty']; ?>        
                                            </td>

                                            <td>

                                            <input type="number" name="total"
                                            hidden="hidden"
                                            value="<?php echo $Rows['total'];?>">
                                            
                                            <?php echo "JD ".$Rows['total']; ?>    
                                            </td>
                                            <td><input type="submit" name="sub" value="Save" class="btn btn-primary"></td>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
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
