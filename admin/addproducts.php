<?php include"include/header.php"?>
<?php include"include/slugify.php"?>
<?php include"include/function.php"?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <?php include"include/sidebar.php"?>
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Products</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Products</a>
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
                                            <h5>Add Product</h5>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Product Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Product Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Product Meta Keywords</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="keywords" placeholder="Enter Product Meta Keywords">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Product Meta Description</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="description" placeholder="Enter Product Meta Description">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Material</label>
                                                    <div class="col-sm-10">
                                                        <select name="cid" class="form-control form-control-round">
                                                            <option value="">--Select--</option>
                                                            <?php
                                                            $category_list_array = array();
                                                               $selectpck = "SELECT * FROM `category`";
                                                               $sql = mysqli_query($con, $selectpck);
                                                                    while ($row = mysqli_fetch_array($sql)) {
                                                                        $category_list_array[] = $row['cid'];
                                                                        $selected = (isset($data['cid']) && $row['cid'] == $data['cid'])?'selected':'';
                                                            ?>
                                                            <option value="<?php echo $row['cid']; ?>" <?=$selected; ?>><?php echo $row['name']; ?></option>>

                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Menu Settings</label>
                                                    <div class="col-sm-10">
                                                        <select name="menu" class="form-control form-control-round">
                                                            <option value="">--Select--</option>
                                                            <option value="NULL">NULL</option>
                                                            <?php
                                                            $category_list_array = array();
                                                               $selectpck = "SELECT * FROM `subcategory`";
                                                               $sql = mysqli_query($con, $selectpck);
                                                                    while ($row = mysqli_fetch_array($sql)) {
                                                                        $category_list_array[] = $row['scid'];
                                                                        $selected = (isset($data['scid']) && $row['scid'] == $data['scid'])?'selected':'';
                                                            ?>
                                                            <option value="<?php echo $row['scid']; ?>" <?=$selected; ?>><?php echo $row['name']; ?></option>>

                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Upload File</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control form-control-round" name="image" id="catimg">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Page Content</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor1" name="content"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Add Products</button>
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
        $slug=slugify($name);
        $keywords=$_POST["keywords"];
        $description=$_POST["description"];
        $cid=$_POST["cid"];
        $menu=$_POST["menu"];
        $content=$_POST["content"];
	    $info=getimagesize($_FILES['image']['tmp_name']);
	    if(isset($info['mime'])){
	    	if($info['mime']=="image/jpeg"){
	    		$img=imagecreatefromjpeg($_FILES['image']['tmp_name']);
	    	}elseif($info['mime']=="image/png"){
	    		$img=imagecreatefrompng($_FILES['image']['tmp_name']);
	    	}else{
	    		echo "Only select jpg or png image";
	    	}
            $filename= $_FILES['image']['name'];
	    	if(isset($img)){
                $output_image=$_FILES['image']['name'];
                $path="../img/Products/";
	    		$output_image=$path.$output_image;
	    		imagejpeg($img,$output_image,40);
	    		echo "Processing done";
	    	}
	    }else{
	    	echo "Only select jpg or png image";
	    }
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
//        $path=$target_dir.$filename;
//        if ($uploadOk != 0) {
//            //if(imgcompress($filename,$filepath)){
//            if (imgcompress($_FILES['image1']['name'],"../img/products/",75)) {
//                $update_str="image1='$filename'";
//            }
//            else{
//                $uploadOk = 0;
//                echo '<script>alert("Image Compression Failed");
//                     
//                document.location="products.php"</script>';
//            }
//        }
//    }
        if($con->query("insert into subcategory(`name`,`slug`,`keywords`,`description`,`cid`,`menu`,`image`,`content`)values('".$name."','".$slug."','".$keywords."','".$description."','".$cid."','".$menu."','".$filename."','".$content."')")){
        echo '<script>alert("Product Added Successful!");document.location="products.php"</script>';
        } else {
            echo '<script>alert("Data Not Inserted");document.location="addproducts.php"</script>';
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
