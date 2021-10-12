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
                                <?php
$dir = "../Theme/";
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
        if ($file != "." && $file != "..") {
            echo '<div class="col-xl-4 col-md-7">
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col-12 c">
                                                    <img src="'.$dir.'/'. $file .'/thumb.png" style="width:100%;height:15vw;" class="image">
<!--                                                    <h6 class="text-muted m-b-0 text-center">Product Pages</h6>-->
                                                    <div class="row mt-2">
                                            
                                                        <div class="col-7 middle1">
                                                        <a class="btn btn-outline-primary btn-round waves-effect waves-light" href="'.$dir.''. $file .'"  target=”_blank” >Desktop</a>
                                                        </div>
                                                        <div class="col-5 middle2">
                                                        <a class="btn btn-outline-info btn-round waves-effect waves-light" href="Mobile-preview-'. $file .'"  target=”_blank” >Mobile</a>
                                                        </div>
                                                    </div>
                                                    <b >'. $file . '</b>
                                                    <a class="btn btn-success btn-round waves-effect waves-light float-right" href="setting-up-theme-'. $file .'">Add</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
            if(isset($_POST['add'])) {    
           $zip = new ZipArchive;
if ($zip->open(''.$dir.'/'. $file .'/theme.zip') === TRUE) {
	$zip->extractTo('../'.$domain.'/');
	$zip->close();
	echo '<script>alert("Theme Added Successfull <br> Fill Your Website Content");document.location="web_form.php"</script>';
} else {
	echo '<script>alert("Theme cannot Be Added");document.location="theme.php"</script>';
}
            }

        }
    }
    closedir($dh);
  }
}
?>
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