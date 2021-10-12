<?php include"include/header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `package` WHERE `id` = '$id'"));
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
                                <h5 class="m-b-10"><?php echo isset($data['id'])?'Edit Package':'Add Package';?></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"><?php echo isset($data['id'])?'Edit Package':'Add Package';?></a>
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
                                            <h5><?php echo isset($data['id'])?'Edit Package':'Add Package';?></h5>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Package Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Package Name" value="<?php echo isset($data['name'])?$data['name']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Limitation For Products Pages</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round slug-ouput" name="pages" placeholder="Enter Limitation For Products Pages"value="<?php echo isset($data['pages'])?$data['pages']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Limitation For Sliders</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="slider" placeholder="Enter Limitation For Sliders" value="<?php echo isset($data['slider'])?$data['slider']:''?>">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="<?php echo isset($data['id'])?'edit':'add';?>"><?php echo isset($data['id'])?'Edit Package':'Add Package';?></button>
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
        $pages=$_POST["pages"];
        $slider=$_POST["slider"];
        if($con->query("insert into package(`name`,`pages`,`slider`)values('".$name."','".$pages."','".$slider."')")){
        echo '<script>alert("Package Added Successful!");document.location="package.php"</script>';
        } else {
            echo '<script>alert("Package Cannot Be Added");document.location="package-manager.php?id='.$id.'"</script>';
        }
}
?>
<?php 
if(isset($_POST['edit'])){
        $name=$_POST["name"];
        $pages=$_POST["pages"];
        $slider=$_POST["slider"];
        if($con->query("update package set `name`='$name',`pages`='$pages',`slider`='$slider' where id='$id'")){
        echo '<script>alert("Package Updated Successful!");document.location="package.php"</script>';
        } else {
            echo '<script>alert("Data Not Inserted");document.location="package-manager.php?id='.$id.'"</script>';
        }
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
