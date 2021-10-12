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
                                <h5 class="m-b-10">Add Staff</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Add Staff</a>
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
                                            <h5>Add Staff</h5>
                                        </div>
                                       <?php if($_SESSION['user']!="")
                                       {?> 
                                       <div class="alert alert-danger waves-effect" data-animation-in="animated fadeIn" data-animation-out="animated fadeOut">
                                       <?php echo($_SESSION['user']);?>
                                       <?php echo($_SESSION['user']="");?>
                                       </div>
                                       <?php } ?>
                                       <?php if($_SESSION['email']!="")
                                       {?> 
                                       <div class="alert alert-danger waves-effect" data-animation-in="animated fadeIn" data-animation-out="animated fadeOut">
                                       <?php echo($_SESSION['email']);?>
                                       <?php echo($_SESSION['email']="");?>
                                       </div>
                                       <?php } ?>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                               <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Staff Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">User Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="user" placeholder="Enter User Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-round" name="email" placeholder="Enter Email Address" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control form-control-round" name="password" placeholder="Enter Password" required  >
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Add User</button>
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
        $user=$_POST["user"];
        $email=$_POST["email"];
        $password=$_POST['password'];
        $staff=1;
        $access=0;
        $user_check = "SELECT * FROM user WHERE user = '$user' and csid=$uid";
        $res = mysqli_query($con, $user_check);
        if(mysqli_num_rows($res) > 0){
         $_SESSION['user']="UserName Already Exist!";
         echo '<script>document.location="addstaff.php"</script>';
         exit();
        }
        $email_check = "SELECT * FROM user WHERE email = '$email' and csid=$uid";
        $res = mysqli_query($con, $email_check);
        if(mysqli_num_rows($res) > 0){
         $_SESSION['email']="Email Already Exist!";
         echo '<script>document.location="addstaff.php"</script>';
         exit();
        }
        if($con->query("insert into user(`name`,`user`,`email`,`staff`,`access`,`password`,`csid`)values('".$name."','".$user."','".$email."','".$staff."','".$access."','".$password."','".$uid."') ")){
            $_SESSION['add'] = "Staff Added Successful!";
        echo '<script>document.location="staff.php"</script>';
        } else {
            $_SESSION['not'] = "Oops!, Staff Not Added!";
            echo '<script>document.location="addstaff.php"</script>';
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
