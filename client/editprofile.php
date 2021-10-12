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
                                <h5 class="m-b-10">Edit Profile</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Edit Profile</a>
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
                                            <h5>Edit Profile</h5>
                                        </div>
                                        <?php $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `buid` = '$uid'"));?>
                                        <div class="card-block">
                                            <div class="col-sm-12 col-xl-12">
                                                <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Your Name" value="<?php echo isset($data['name'])?$data['name']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-round" name="email" placeholder="Enter Your Email" value="<?php echo isset($data['email'])?$data['email']:''?>">
                                                    </div>
                                                </div>                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">User</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="user" placeholder="Enter Your UniQue User Name " value="<?php echo isset($data['user'])?$data['user']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Confirm Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control form-control-round" name="password" placeholder="Enter Your Password To Update Your Profile">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Update Profile</button>
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
</div>
<?php
if(isset($_POST['add'])){
$name=$_POST["name"];
$email=$_POST["email"];                                          
$user=$_POST["user"];
$password=$_POST["password"];
$user_check = "SELECT * FROM user WHERE user = '$user' and buid != '$uid'";
$res = mysqli_query($con, $user_check);
if(mysqli_num_rows($res) > 0){
echo '<script>alert("Change UniQue User Name It Already exists!");document.location="editprofile.php"</script>';
exit();
}
$pass_check = "SELECT * FROM user WHERE buid = '$uid' and password = '$password'";
        $res = mysqli_query($con, $pass_check);
        if(mysqli_num_rows($res) > 0){
            if($con->query("update user set `name`='$name',`email`='$email',`user`='$user' where buid = '$uid'")){
            echo '<script>alert("User Updated Successful!");document.location="profile.php"</script>';
            } else {
            echo '<script>alert("Cannot Be Added!");document.location="editprofile.php"</script>';
            }
        } else {
            echo '<script>alert("Enter Correct Password!");document.location="editprofile.php"</script>';
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
