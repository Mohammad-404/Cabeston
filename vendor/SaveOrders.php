<?php
    include("include/header.php");  
    include("classes/DBConnection.php");
    include_once("classes/classSaveOrders.php");

    $orders = new savesorders();
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
                            </div>
                            <div class="card-body">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $Printers  = $orders->ReadAllOrdersSave();
                                            if ($Printers) {
                                            foreach ($Printers as $Rows) {
                                        ?>
                                        <tr>
                                            <td><?php echo $Rows['order_id']; ?></td>
                                            <td><?php echo $Rows['dateorder']; ?></td>
                                            <td><?php echo $Rows['custid']; ?></td>
                                            <td><?php echo $Rows['proid']; ?></td>
                                            <td><?php echo $Rows['qty']; ?></td>
                                            <td><?php echo "JD ".$Rows['total']; ?></td>
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
