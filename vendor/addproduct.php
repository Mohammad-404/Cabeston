<?php
    include("include/header.php");
    
    include("classes/createproduct_class.php");
    $insertprod = new insertprod();

    if (isset($_POST['sub'])) {
        $insertprod->pro_name            = $_POST["proname"];
        $insertprod->pro_desc            = $_POST["prodesc"];
        $insertprod->pro_price           = $_POST["price"];
        $insertprod->qty                 = $_POST["quan"];
        $insertprod->vendor_id           = $_SESSION['vendor_id'];
        $insertprod->vendor_name         = $_SESSION['vendor_name'];
        $insertprod->vendor_email        = $_SESSION['vendor_email'];
        $insertprod->Dates               = date('Y-m-d H:i:s');
        $insertprod->nico                = $_POST['nico'];
        $insertprod->size                = $_POST['size'];

        $insertprod->pro_image           = $_FILES['img1']['name'];
        $tmp_name                        = $_FILES['img1']['tmp_name'];

        $insertprod->pro_image1          = $_FILES['img2']['name'];
        $tmp_name1                       = $_FILES['img2']['tmp_name'];

        $insertprod->pro_image2          = $_FILES['img3']['name'];
        $tmp_name2                       = $_FILES['img3']['tmp_name'];

        $path                            = "../UploadImages/";
        $path1                           = "../UploadImages/";
        $path2                           = "../UploadImages/";

        move_uploaded_file($tmp_name, $path.$insertprod->pro_image);
        move_uploaded_file($tmp_name1, $path.$insertprod->pro_image1);
        move_uploaded_file($tmp_name2, $path.$insertprod->pro_image2);

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
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <form action="" method="post" enctype="multipart/form-data">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-12 col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Products</strong> <small> Maneger Products</small>
                            </div>
                            <div class="card-body card-block">

                                <div class="form-group">
                                    <label class=" form-control-label">Product Name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-shopping-cart"></i></div>
                                        <input class="form-control" type="text" name="proname">
                                    </div>
                                    <small class="form-text text-muted">ex. TV</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Product Description</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-leaf"></i></div>
                                        <input class="form-control" type="text" name="prodesc">
                                    </div>
                                    <small class="form-text text-muted">ex. Good Product</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Price</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input class="form-control" type="text" name="price">
                                    </div>
                                    <small class="form-text text-muted">ex. JD 10</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Quantities</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></div>
                                        <input class="form-control" type="number" name="quan">
                                    </div>
                                    <small class="form-text text-muted">ex. 1 or More</small>
                                </div> 

                                <div class="form-group">
                                    <label class=" form-control-label">Nicotine Strength</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></div>
                                        <input class="form-control" type="text" name="nico">
                                    </div>
                                    <small class="form-text text-muted">ex. 1 or More</small>
                                </div> 

                                <div class="form-group">
                                    <label class=" form-control-label">Bottle Size</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></div>
                                        <input class="form-control" type="text" name="size">
                                    </div>
                                    <small class="form-text text-muted">ex. 1 or More</small>
                                </div> 


                                <div class="form-group">
                                    <label class=" form-control-label">Image(1)</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa ti-gallery"></i></div>
                                        <input class="form-control" type="file" name="img1" required="required">
                                    </div>
                                    <small class="form-text text-muted">ex. Select Image product</small>
                                </div> 

                                <div class="form-group">
                                    <label class=" form-control-label">Image(2)</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa ti-gallery"></i></div>
                                        <input class="form-control" type="file" name="img2">
                                    </div>
                                    <small class="form-text text-muted">ex. Select Image product</small>
                                </div> 

                                <div class="form-group">
                                    <label class=" form-control-label">Image(3)</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa ti-gallery"></i></div>
                                        <input class="form-control" type="file" name="img3">
                                    </div>
                                    <small class="form-text text-muted">ex. Select Image product</small>
                                </div> 

                                <div class="form-group">
                                    <label class=" form-control-label">Categories</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa ti-layout-grid3"></i></div>
                                        <select name="categories">
                                            <?php
                                                $Printer = $insertprod->ViewCategories();
                                                foreach ($Printer as $value) {
                                                    echo"<option>";
                                                       echo  $value['cat_name'];
                                                    echo"</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted">ex. Electronic</small>
                                </div> 



<!--                                 <div class="form-group">
                                    <label class=" form-control-label">Phone input</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" type="text" name="phone" maxlength="10">
                                    </div>
                                    <small class="form-text text-muted">ex. (+962) 999-9999</small>
                                </div> -->




                                    <button name="sub" class="btn btn-success"><i class="fa fa-magic"></i>&nbsp; Insert</button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>
