<?php include"include/header.php"?>
<?php include"include/slugify.php"?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <?php include"include/sidebar.php"?>
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Client Blogs</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Client Blogs</a>
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
                            <div class="card">
                                <div class="card-header">
                                    <h5>Client Blogs</h5>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Client User</th>
                                                    <th>Content Name</th>
                                                    <th>Tools</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $i=0;
                                                    $q1 = mysqli_query($con,"SELECT * from blog where access = 0");
                                                    while($r1 = mysqli_fetch_assoc($q1))
                                                    {  $i++;
                                                ?>
                                                <tr id="name">
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $r1['user'];?></td>
                                                    <td><img src="<?php echo '../img/products/'.$r1['image'];?>" style="height:50px; width:80px;"></td>
                                                    <td>
                                                        <a class="btn btn-xs btn-info" href="editblog.php?id=<?php echo $r1['id'];?>"><i class="fa fa-eye"></i> View</a>&nbsp;
                                                        <a class="btn btn-xs btn-info" href="editblog.php?id=<?php echo $r1['id'];?>"><i class="fa fa-eye"></i> View</a>&nbsp;
                                                        <a class="btn btn-xs btn-danger deleteproduct" href="deleteproduct.php?id=<?php echo $r1['scid'];?>" title="Delete" data-id="<?php echo $r1['id']; ?>"><i class="fa fa-trash"> </i>Delete</a>&nbsp;
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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
        $slug=slugify($name);
        $keywords=$_POST["keywords"];
        $description=$_POST["description"];
        $cid=$_POST["cid"];
        $menu=$_POST["menu"];
        $content=$_POST["content"];
        if(isset($_FILES['image1']) && $_FILES['image1']['name'] != ""){
        $target_dir = "../img/products/";
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

        $filename=$_FILES['image1']['name'];
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
