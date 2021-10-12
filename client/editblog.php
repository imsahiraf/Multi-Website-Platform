<?php include"include/header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `blog` WHERE `id` = '$id'"));

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
                                <h5 class="m-b-10">Edit Blog</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Edit Blog</a>
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
                                            <h5>Edit Blog</h5>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Blog Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Blog Name" value="<?php echo isset($data['name'])?$data['name']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row"><label
                                                        class="col-sm-2 col-form-label">Image</label>
                                                    <div class="col-sm-8"><input type="file"
                                                            class="form-control form-control-round" name="logoimg"
                                                            placeholder="Enter Subtitle Content" value = "../cmach.in/img/logo/<?php echo $data['img'] ;?>"></div>
                                                           
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">UniQue Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="slug" placeholder="Enter UniQue Name " value="<?php echo isset($data['slug'])?$data['slug']:''?>">
                                                    </div>
                                                </div>                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Page Content</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor1"  name="content" value="<?php echo isset($data['content'])?$data['content']:''?>"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Edit Blog</button>
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
        $id=$_GET['id'];
        $content=$_POST['content'];
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
        $con->query("UPDATE blog SET `name`='$name' , `img` = '$logoimg', slug='$slug' , content='$content'  where `blog`.`id` = '$id'");
        echo '<script type="text/javascript">$(document).ready(function(){
        Swal.fire({
                icon: "success",
                title: "Updated successfully",
                timer: "500",
                showConfirmButton: "false",
                
              });
              document.location="blog.php";
              });</script>';
}
?>
<!--alert("Blog Edited Successful!");document.location="myblog.php"<-->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
