<?php include"include/header.php"?>

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <?php include"include/sidebar.php"?>
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-body">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <a href="materials.php">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-purple"><?php echo $con->query("select * from category")->num_rows;?></h4>
                                                    <h6 class="text-muted m-b-0">Category</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="fa fa-bar-chart f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <a href="client-products.php">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-green"><?php echo $con->query("select * from subcategory")->num_rows;?></h4>
                                                    <h6 class="text-muted m-b-0">Product Pages</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="ti-agenda f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div> -->
                                <!-- <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <a href="teams.php">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-yellow"><?php echo $con->query("SELECT * from admin")->num_rows;?></h4>
                                                    <h6 class="text-muted m-b-0">Devlopers Teams</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="ti-user f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                    <a href="materials.php">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-red"><?php echo $con->query("select * from user where access = 1")->num_rows;?></h4>
                                                    <h6 class="text-muted m-b-0">Seo team</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="ti-user f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div> -->
                                <div class="col-xl-3 col-md-6">
                                    <div class="card"><a href="client.php">
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h4 class="text-c-purple"><?php echo $con->query("select * from user where access = 0 and staff = 0")->num_rows;?></h4>
                                                        <h6 class="text-muted m-b-0">Clients</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <i class="ti-user f-28"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                    <a href="client.php">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-green"><?php echo $con->query("select * from blog")->num_rows;?></h4>
                                                    <h6 class="text-muted m-b-0">All Blogs</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="ti-agenda f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-yellow"><?php echo $con->query("SELECT * from user")->num_rows;?></h4>
                                                    <h6 class="text-muted m-b-0">Seo Blogs</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="ti-agenda f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <h4 class="text-c-red"><?php echo $con->query("SELECT * from blog where access = 0")->num_rows;?></h4>
                                                    <h6 class="text-muted m-b-0">Client Blogs</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="ti-agenda f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card"><a href="package.php">
                                            <div class="card-block">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h4 class="text-c-purple"><?php echo $con->query("select * from package")->num_rows;?></h4>
                                                        <h6 class="text-muted m-b-0">Packages</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <i class="ti-package f-28"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "Bright Steel Centre",
        "image": "",
        "brand": "Pipe",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "bestRating": "5",
            "worstRating": "1",
            "ratingCount": "5"
        }
    }

</script>
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/pages/widget/excanvas.js"></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- slimscroll js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<!-- amchart js -->
<script src="../../www.amcharts.com/lib/3/amcharts.js"></script>
<script src="assets/pages/widget/amchart/gauge.js"></script>
<script src="assets/pages/widget/amchart/serial.js"></script>
<script src="assets/pages/widget/amchart/light.js"></script>
<script src="assets/pages/widget/amchart/pie.min.js"></script>
<script src="../../www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<!-- menu js -->
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js"></script>
<!-- custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
