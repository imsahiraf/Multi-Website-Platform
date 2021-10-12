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
                               <?php if($_SESSION['staffloggedin']){?>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                    <a href="myblog.php">
                                        <div class="card-block">
                                            <div class="row align-items-center">

                                                <div class="col-8">
                                                    <h4 class="text-c-purple">
                                                        <?php echo $con->query("select * from blog where buid=$uid and cuid =$csid")->num_rows;?>
                                                    </h4>
                                                    <h6 class="text-muted m-b-0">MyBlogs</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="ti-agenda f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <?php } if(isset($_SESSION['userloggedin'])){
                        $mb = $con->query("select * from blog where buid=$uid and cuid = $uid")->num_rows;
                        $sb = $con->query("select * from blog where cuid = $uid and buid != $uid")->num_rows;
//                        $ab = $con->query("select blog.*,user.user from user inner join blog on user.buid=blog.buid order by user.user")->num_rows;
                        $as = $con->query("select * from user where csid =$uid")->num_rows;
                        $a = $con->query("select * from subcategory where cuid=$uid")->num_rows;
                        echo ' <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                    <a href="myblog.php">
                                        <div class="card-block">
                                            <div class="row align-items-center">

                                                <div class="col-8">
                                                    <h4 class="text-c-purple">
                                                        '.$mb.'
                                                    </h4>
                                                    <h6 class="text-muted m-b-0">MyBlogs</h6>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <i class="ti-agenda f-28"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                        <div class="col-xl-3 col-md-6">
                        <div class="card">
                        <a href="products.php">
                           <div class="card-block">
                              <div class="row align-items-center">
                                 <div class="col-8">
                                    <h4 class="text-c-green">'.$a.'</h4>
                                    <h6 class="text-muted m-b-0">Pages</h6>
                                 </div>
                                 <div class="col-4 text-right">
                                    <i class="ti-bag f-28"></i>
                                 </div>
                              </div>
                           </div>
                           </a>
                        </div>
                     </div><div class="col-xl-3 col-md-6">
                           <div class="card">
                           <a href="blogss.php">
                              <div class="card-block">
                                 <div class="row align-items-center">
                                    <div class="col-8">
                                       <h4 class="text-c-green">'.$sb.'</h4>
                                       <h6 class="text-muted m-b-0">Staff Blogs</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                       <i class="ti-agenda f-28"></i>
                                    </div>
                                 </div>
                              </div>
                            </a>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                           <div class="card">
                           <a href="staff.php">
                              <div class="card-block">
                                 <div class="row align-items-center">
                                    <div class="col-8">
                                       <h4 class="text-c-blue">'.$as.'</h4>
                                       <h6 class="text-muted m-b-0">Staff</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                       <i class="ti-user f-28"></i>
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                        </div>';}?>
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