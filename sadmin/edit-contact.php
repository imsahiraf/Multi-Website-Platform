<?php include"include/header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user`,contacts where access=0 and staff=0 and user.buid= '$id' and contacts.site='$id'"));

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
                                <h5 class="m-b-10">Edit Contact</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Edit Contact</a>
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
                                            <h5>Edit Contact</h5>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" >
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Whatsapp Number</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="whatsapp" title="enter 10 digit"  pattern="[1-9]{1}[0-9]{9}" value="<?php echo isset($data['whatsapp'])?$data['whatsapp']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">E-mail</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="email"  value="<?php echo isset($data['email'])?$data['email']:''?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Number</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="number" title="enter 10 digit"  pattern="[1-9]{1}[0-9]{9}" value="<?php echo isset($data['number'])?$data['number']:''?>">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Edit Contact</button>
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
        $whatsapp=$_POST["whatsapp"];
        $email=$_POST["email"];
        $number=$_POST["number"];
        $buid=$_GET['id'];
        $email_check = "SELECT * FROM contacts WHERE email = '$email'";
        $res = mysqli_query($con, $email_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script>alert("Email Already exists!");document.location="edit-client.php"</script>';
            exit();
        }
         $con->query("UPDATE contacts SET contacts.whatsapp='$whatsapp',contacts.email='$email' ,contacts.number='$number'  where contacts.id= '$id'");
   echo '<script>alert("Contact Edited Successful!");document.location="client-contact.php"</script>';
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
