<?php include"include/header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `buid` = '$id'"));
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
                                <h5 class="m-b-10"><?php echo isset($data['buid'])?'Edit Client Information':'Add Client Information';?></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"><?php echo isset($data['buid'])?'Edit Client Information':'Add Client Information';?></a>
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
                                            <h5><?php echo isset($data['buid'])?'Edit Client Information':'Add Client Information';?></h5>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Client Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="name" placeholder="Enter Client Name" value="<?php echo isset($data['name'])?$data['name']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Client Mail</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-round slug-ouput" name="email" placeholder="Enter Client Mail" id="slug-target" value="<?php echo isset($data['email'])?$data['email']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Client Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="user" placeholder="Enter Client Username" value="<?php echo isset($data['user'])?$data['user']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Client Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="password" placeholder="Enter Client Password" value="<?php echo isset($data['password'])?$data['password']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Client Brand Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="cname" placeholder="Enter Client Brand Name" value="<?php echo isset($data['cname'])?$data['cname']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Package</label>
                                                    <div class="col-sm-10">
                                                        <select name="package" class="form-control form-control-round">
                                                            <option value="<?php echo isset($data['package'])?$data['package']:''?>">--Select--</option>
                                                            <?php
                                                            $category_list_array = array();
                                                               $selectpck = "SELECT * FROM `package`";
                                                               $sql = mysqli_query($con, $selectpck);
                                                                    while ($row = mysqli_fetch_array($sql)) {
                                                                        $category_list_array[] = $row['id'];
                                                                        $selected = (isset($data['id']) && $row['id'] == $data['id'])?'selected':'';
                                                            ?>
                                                            <option value="<?php echo $row['id']; ?>" <?=$selected; ?>><?php echo $row['name']; ?></option>>

                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Client Domain Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="domain" placeholder="Enter Client Domain Name" value="<?php echo isset($data['domain'])?$data['domain']:''?>" <?php echo isset($data['domain'])?'disabled':''?>>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="<?php echo isset($data['buid'])?'edit':'add';?>"><?php echo isset($data['buid'])?'Edit Client Information':'Add Client Information';?></button>
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
        $email=$_POST["email"];
        $user=$_POST["user"];
        $password=$_POST["password"];
        $cname=$_POST["cname"];
        $package=$_POST["package"];
        $domain=$_POST["domain"];
        mkdir('../'.$domain, 0777);
        $email_check = "SELECT * FROM user WHERE email = '$email'";
        $res = mysqli_query($con, $email_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script>alert("Email Already exists!");document.location="addclients.php"</script>';
            exit();
        }
        $user_check = "SELECT * FROM user WHERE user = '$user'";
        $res = mysqli_query($con, $user_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script>alert("User Already exists!");document.location="addclients.php"</script>';
            exit();
        }
        if($con->query("insert into user(`name`,`email`,`user`,`password`,`cname`,`domain`,`package`,`access`,`staff`)values('".$name."','".$email."','".$user."','".$password."','".$cname."','".$domain."','".$package."',0,0)")){
        echo '<script>alert("Clients Added Successful!");document.location="client.php"</script>';
        } else {
            echo '<script>alert("Data Not Inserted");document.location="addclients.php"</script>';
        }
//        }
//        else{
//            echo '<script>alert("Domain Directory Already Created");document.location="addclients.php"</script>';
//        }
}
?>
<?php 
if(isset($_POST['edit'])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $user=$_POST["user"];
        $password=$_POST["password"];
        $cname=$_POST["cname"];
        $domain=$_POST["domain"];
        $email_check = "SELECT * FROM user WHERE email = '$email' and buid != '$id'";
        $res = mysqli_query($con, $email_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script>alert("Email Already exists!");document.location="addclients.php"</script>';
            exit();
        }
        $user_check = "SELECT * FROM user WHERE user = '$user' and buid != '$id'";
        $res = mysqli_query($con, $user_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script>alert("User Already exists!");document.location="addclients.php"</script>';
            exit();
        }
        if($con->query("update user set `name`='$name',`email`='$email',`user`='$user',`password`='$password',`cname`='$cname',`domain`='$domain',`package`='$package' where buid='$id'")){
        echo '<script>alert("Clients Updated Successful!");document.location="client.php"</script>';
        } else {
            echo '<script>alert("Data Not Inserted");document.location="addclients.php?id='.$buid.'"</script>';
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
