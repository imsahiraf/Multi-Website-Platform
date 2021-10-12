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
                                <h5 class="m-b-10">Contact Enquiry</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Contact Enquiry</a>
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
                                            <h5>Contact Enquiry</h5>
                                            <a class="btn btn-primary btn-round waves-effect waves-light" href="client-contact.php"> Client Contacts</a>
                                        </div>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Website Name</label>
                                                    <div class="col-sm-10">
                                                        <select name="cuid" class="form-control form-control-round">
                                                            <option value="">--Select--</option>
                                                            <?php
                                                        $category_list_array = array();
                                                        $selectpck = "SELECT * FROM `user` where access=0 and staff=0 ";
                                                        $sql = mysqli_query($con, $selectpck);
                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                $category_list_array[] = $row['buid'];
                                                                $selected = (isset($data['buid']) && $row['buid'] == $data['buid'])?'selected':'';
                                                        ?>
                                                            <option value="<?php echo $row['buid']; ?>" <?=$selected; ?>><?php echo $row['domain']; ?></option>>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Whatsapp Contact Details</label>
                                                    <div class="col-sm-10">
                                                        <input type="tel" pattern="[6789][0-9]{9}" title="Enter 10 digit Mobile No." class="form-control form-control-round" name="whatsapp" placeholder="Enter Whatsapp contact Number">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email Address Of Vendor</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-round" name="email" placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Calling Number</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round" name="number" placeholder="Enter Calling Number">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Add Contact Details</button>
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
        $site=$_POST["cuid"];
        $whatsapp=$_POST["whatsapp"];
        $email=$_POST["email"];
        $number=$_POST["number"];
        $contact_check = "SELECT * FROM `contactS` where site = '$site'";
        $res = mysqli_query($con, $contact_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script>alert("This Client COntact Is  Already Available!");document.location="contact.php"</script>';
            exit();
        }
    if ($con->query("insert into contacts(`site`,`whatsapp`,`email`,`number`)values('".$site."','".$whatsapp."','".$email."','".$number."')")){
        echo '<script>alert("Contact Details Added Succesfull!");document.location="client-contact.php"</script>';
        } else {
            echo '<script>alert("Cannot Add Due To Some Errors");document.location="contact.php"</script>';
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
