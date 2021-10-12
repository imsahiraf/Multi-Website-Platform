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
                                <h5 class="m-b-10">Write Blogs</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Write Blogs</a>
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
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Blog Name" id="slug-source">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Slug Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="slug" placeholder="Enter Slug Name" id="slug-target">
                                                    </div>
                                                </div>
                                                <button type="button" onClick="myFunction()">
                                                    Convert
                                                </button>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Blog Content</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor1" name="content"></textarea>
                                                    </div>
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
<script>
    function myFunction() {

        var a = document.getElementById("slug-source").value;

        var b = a.toLowerCase().replace(/ /g, '-')
            .replace(/[^\w-]+/g, '');

        document.getElementById("slug-target").value = b;

        document.getElementById("slug-target-span").innerHTML = b;
    }

</script>
<?php 
if(isset($_POST['add'])){
        $name=$_POST["name"];
        $slug=$_POST["slug"];
        $access=1;
        $buid=$_SESSION["seologgedin"];
        $verify=1;
        $content=$_POST["content"];
        $slug_check = "SELECT * FROM blog WHERE slug = '$slug'";
        $res = mysqli_query($con, $slug_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script>alert("Change Slug It Already exists!");document.location="write.php"</script>';
        }
        if($con->query("insert into blog(`name`,`slug`,`buid`,`access`,`verify`,`content`)values('".$name."','".$slug."','".$buid."','".$access."','".$verify."','".$content."')")){
        echo '<script>alert("Blog Added Successful!");document.location="blog.php"</script>';
        } else {
            echo '<script>alert("Data Not Inserted");document.location="write.php"</script>';
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
