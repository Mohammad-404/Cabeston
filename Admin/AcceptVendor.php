<?php
    include("classes/acceptsvendorsclass.php");

    $savesorders = new vendorsign();

    if (isset($_POST['sub'])) {
        $id                         = $_POST['id'];
        $savesorders->email         = $_POST['email'];
        $savesorders->password      = $_POST['password'];
        $savesorders->address       = $_POST['address'];
        $savesorders->phone         = $_POST['phone'];
        $savesorders->name          = $_POST['name'];
        $savesorders->business      = $_POST['business'];

        $savesorders->CreateVendor();
        $savesorders->DeletesVendorsac($id);

        //echo '<meta http-equiv="refresh" content="0">';
    }
    
    include("include/header.php");  
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
                                <form action="" method="post">
                                <table id="bootstrap-data-table" 
                                class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Name</th>
                                            <th>Business</th>
                                            <th>Accept</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $Printers  = $savesorders->ReadVendors();
                                            if ($Printers) {
                                            foreach ($Printers as $Rows) {
                                        ?>
                                        <tr>
                                            <td>
                                            <input type="email" name="email"
                                            hidden="hidden"
                                            value="<?php echo $Rows['email'];?>">

                                            <?php echo $Rows['email'];?>

                                            </td>
                                            <td>
                                            <input type="text" name="password"
                                            hidden="hidden"
                                            value="<?php echo $Rows['password'];?>">

                                            <?php echo $Rows['password']; ?>
                                            </td>
                                            <td>
                                            <input type="text" name="address"
                                            hidden="hidden"
                                            value="<?php echo $Rows['address'];?>">

                                                <?php echo $Rows['address']; ?>
                                            </td>
                                            <td>

                                            <input type="number" name="phone"
                                            hidden="hidden"
                                            value="<?php echo $Rows['phone'];?>">

                                                <?php echo $Rows['phone']; ?>
                                            </td>

                                            <td>

                                            <input type="text" name="name"
                                            hidden="hidden"
                                            value="<?php echo $Rows['name'];?>">
                                            
                                                <?php echo $Rows['name']; ?>        
                                            </td>

                                            <td>

                                            <input type="number" name="business"
                                            hidden="hidden"
                                            value="<?php echo $Rows['business'];?>">
                                            
                                            <?php echo $Rows['business']; ?>    
                                            </td>


                                            
                                                <?="
                                                <input type='hidden' name='id'
                                                value='{$Rows['id_vendor']}'>
                                                ";?>
                                            


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
