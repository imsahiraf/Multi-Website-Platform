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
                                <h5 class="m-b-10">Blog</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Write Blog</a>
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
                                            <h5>Write Blog</h5>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Blog Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Blog Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">                                                 
                                                   <label class="col-sm-2 col-form-label">Blog Image</label>
                                                    <div class="col-sm-10"><input type="file" class="form-control form-control-round" name="logoimg" id="catimg"></div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Blog Description</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="description" placeholder="Enter Blog Description" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Blog Keywords</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="keyword" placeholder="Enter Blog Keywords" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">UniQue Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="slug" placeholder="Enter UniQue Name " required>
                                                    </div>
                                                </div>  
                                                 <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Page Content</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor1" name="content" ></textarea>
                                                    </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Add Blog</button>
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
        $keyword=$_POST["keyword"];
        $description=$_POST["description"];
        $content=$_POST["content"];
        $buid = $uid;
        $uname = $uname;
     if(isset($_FILES['logoimg']) && $_FILES['logoimg']['name'] !="") {
        $target_dir="../$domain/img/blog/";
        $target_file=$target_dir . basename($_FILES["logoimg"]["name"]);
        $uploadOk=1;
        $imageFileType=pathinfo($target_file, PATHINFO_EXTENSION);

        if ($_FILES["logoimg"]["size"] > 18000000) {
            $msg="Sorry, your file is too large.";
            $uploadOk=0;
        }

        $extallowed=array("jpg", "jpeg", "png");

        if ( !in_array(strtolower($imageFileType), $extallowed)) {
            $msg="Sorry,For jpg & png extension files are allowed";
            $status=false;
            $uploadOk=0;
        }

        $logoimg=$_FILES['logoimg']['name'];
        $filepath=$target_dir.$logoimg;

        if ($uploadOk !=0) {
            if (move_uploaded_file($_FILES["logoimg"]["tmp_name"], $filepath)) {
                $update_str="logoimg='$logoimg'";
            }

            else {
                $uploadOk=0;
                $msg="Sorry, your file was not uploaded.";
            }
        }
 }
        $noti = 'New Blog '.$name.' has been Added by '.$uname.'.';
        $slug_check = "SELECT * FROM blog WHERE slug = '$slug' and cuid = $uid";
        $res = mysqli_query($con, $slug_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script>alert("Change UniQue Name It Already exists!");document.location="addblog.php"</script>';
            exit();
            }
        if($_SESSION['userloggedin']){
            $mb = $con->query("select * from blog where cuid = $uid")->num_rows;
            $sb = $con->query("select * from subcategory where cuid = $uid")->num_rows;
            $page = $mb + $sb;
        
            if($page < $pages){
            if($con->query("insert into blog(`name`,`img`,`buid`,`keyword`,`description`,`slug`,`content`,`cuid`) values('$name','$logoimg','$buid','$keyword','$description','$slug','$content','$uid')")){
            $con->query("insert into noti(`content`,`seen`) values('$noti','1')"); 
            echo '<script>alert("Blog Added Successful!");document.location="myblog.php"</script>';
            } else {
                echo '<script>alert("Data Not Inserted");document.location="addblog.php"</script>';
            }
        }
        else{
            echo '<script>alert("Your Limit Has Been Exceeded. Please Update Your Package To Add More!");document.location="index.php"</script>';

        } 
        } elseif ($_SESSION['staffloggedin']){
            $mb = $con->query("select * from blog where cuid = $suser")->num_rows;
            $sb = $con->query("select * from subcategory where cuid = $suser")->num_rows;
            $page = $mb + $sb;
            if($page < $spages){
               if($con->query("insert into blog(`name`,`buid`,`keyword`,`description`,`slug`,`content`,`cuid`) values('$name','$buid','$keyword','$description','$slug','$content','$csid')")){
            $con->query("insert into noti(`content`,`seen`) values('$noti','1')"); 
            echo '<script>alert("Blog Added Successful!");document.location="myblog.php"</script>';
            } else {
                echo '<script>alert("Data Not Inserted");document.location="addblog.php"</script>';
            }  
            } else {
                echo '<script>alert("Your Limit Has Been Exceeded. Please Tell Your Manager To Update Package!'.$spages.'");document.location="index.php"</script>';
            }
            
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