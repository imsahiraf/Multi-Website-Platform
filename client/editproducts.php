<?php include"include/header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `subcategory` WHERE `scid` = '$id'"));

    }
?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <?php include"include/sidebar.php"?>
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Edit Product</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Edit Product</a>
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
                                            <h5>Edit Product</h5>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Product Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Product Name" value="<?php echo isset($data['name'])?$data['name']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Permanent Link URL</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="slug" placeholder="Enter Permanent URL" value="<?php echo isset($data['slug'])?$data['slug']:''?>">
                                                    </div>
                                                </div>                                                
<!--
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Upload File</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control form-control-round" name="image1" id="catimg" value="1213<?php echo isset($data['image'])?$data['image']:''?>">
                                                    </div>
                                                </div>
-->
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Page Content</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor1"  name="content" value="<?php echo isset($data['content'])?$data['content']:''?>"></textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="recordid" value="<?php echo isset($cid) ? ($cid):'' ?>">
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Edit Product</button>
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
<script type="text/javascript">
    CKEDITOR.replace('editor1');
</script>
<?php 
if(isset($_POST['add'])){
        $name=$_POST["name"];
        $slug=$_POST["slug"];
        $scid=$_GET['id'];
        $content=$_POST['content'];
//        if(isset($_FILES['image1']) && $_FILES['image1']['name'] != ""){
//        $target_dir = "../img/products/";
//        $target_file = $target_dir . basename($_FILES["image1"]["name"]);
//        $uploadOk = 1;
//        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//        if ($_FILES["image1"]["size"] > 18000000) {
//            $msg=  "Sorry, your file is too large.";
//            $uploadOk = 0;
//        }
//        $extallowed = array("jpg","jpeg","png");
//        if (!in_array(strtolower($imageFileType),$extallowed)){
//            $msg = "Sorry,For jpg & png extension files are allowed";
//            $status = false;
//            $uploadOk = 0;
//        }
//
//        $filename=$_FILES['image1']['name'];
//        $filepath=$target_dir.$filename;
//        if ($uploadOk != 0) {
//            if (move_uploaded_file($_FILES["image1"]["tmp_name"], $filepath)) {
//                $update_str="image1='$filename'";
//            } else {
//                $uploadOk = 0;
//                $msg = "Sorry, your file was not uploaded.";
//            }
//        }
//    }
        $con->query("UPDATE subcategory SET `name`='$name' , slug='$slug' , content='$content'  where `subcategory`.`scid` = '$scid'");
        echo '<script>alert("Product Edited Successful!");document.location="products.php"</script>';
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
<script src="../../www.amcharts.com/lib/3/amcharts.js"></script>
<script src="assets/pages/widget/amchart/gauge.js"></script>
<script src="assets/pages/widget/amchart/serial.js"></script>
<script src="assets/pages/widget/amchart/light.js"></script>
<script src="assets/pages/widget/amchart/pie.min.js"></script>
<script src="../../www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
