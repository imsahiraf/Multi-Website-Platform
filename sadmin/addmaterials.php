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
                                <h5 class="m-b-10">Materials</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Materials</a>
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
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Material</h5>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Material Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Material Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Upload File</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control form-control-round" name="image1" id="catimg">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Add Materials</button>
                                            </form>
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
<?php 
if(isset($_POST['add'])){
        $name=$_POST["name"];
        if(isset($_FILES['image1']) && $_FILES['image1']['name'] != ""){
        $target_dir = "../img/materials/";
        $target_file = $target_dir . basename($_FILES["image1"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image1"]["size"] > 18000000) {
            $msg=  "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        $extallowed = array("jpg","jpeg","png");
        if (!in_array(strtolower($imageFileType),$extallowed)){
            $msg = "Sorry,For jpg & png extension files are allowed";
            $status = false;
            $uploadOk = 0;
        }

        $filename=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename;
        if ($uploadOk != 0) {
            if (move_uploaded_file($_FILES["image1"]["tmp_name"], $filepath)) {
                $update_str="image1='$filename'";
            } else {
                $uploadOk = 0;
                $msg = "Sorry, your file was not uploaded.";
            }
        }
    }
        $con->query("insert into category(`name`,`image`)values('".$name."','".$filename."')");
        echo '<script>alert("Material Added Successful!");document.location="materials.php"</script>';
}
?>
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/pages/widget/excanvas.js"></script>
<script src="assets/pages/waves/js/waves.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<script src="assets/pages/widget/amchart/gauge.js"></script>
<script src="assets/pages/widget/amchart/serial.js"></script>
<script src="assets/pages/widget/amchart/light.js"></script>
<script src="assets/pages/widget/amchart/pie.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
