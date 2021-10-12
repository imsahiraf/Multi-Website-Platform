<?php include"include/header.php"?>
<?php if(isset($_GET['id']) && !empty($_GET['id'])){
$id = $_GET['id'];
//added
$link =$_SERVER['HTTP_HOST'];
$domain = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `domain` = '$link'"));
$cid = isset($domain['buid']);
} ?>


<div class="pcoded-main-container">
<div class="pcoded-wrapper"><?php include"include/sidebar.php"?><div class="pcoded-content">
<div class="page-header">
<div class="page-block">
<div class="row align-items-center">
<div class="col-md-8">
<div class="page-header-title">
<h5 class="m-b-10">Website Builder</h5>
</div>
</div>
<div class="col-md-4">
<ul class="breadcrumb-title">
<li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="#">Website Builder</a></li>

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
<?php if($_SESSION['userloggedin']){?>
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Website Builder</h5>
</div>
<div class="card-block">
<form method="POST" enctype="multipart/form-data">
<div class="form-group row">                                                 
<label class="col-sm-2 col-form-label">Upload Logo</label>
<div class="col-sm-10"><input type="file" class="form-control form-control-round" name="logoimg" id="catimg"></div>
</div>
<hr>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Heading</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-round slug-ouput" name="heading" placeholder="Enter Heading" id="slug-target">
</div>
</div>

<div class="text"></div>
<div class="form-group row"><label class="col-sm-2 col-form-label">Subheading</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="sheading" placeholder="Enter Subheading"></div>
</div>
<hr>
<div class="form-group row"><label class="col-sm-2 col-form-label">Upload Image</label>
<div class="col-sm-10"><input type="file" class="form-control form-control-round" name="image1" id="catimg"></div>
</div>
<hr>
<div class="form-group row"><label class="col-sm-2 col-form-label">Subtitle</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="wsubtitle" placeholder="Enter Subtitle"></div>
</div>
<div class="form-group row"><label class="col-sm-2 col-form-label">Subtitle Heading</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="wheading" placeholder="Enter Subtitle Heading"></div>
</div>
<div class="form-group row"><label class="col-sm-2 col-form-label">Subtitle Content</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="wcontent" placeholder="Enter Subtitle Content"></div>
</div>
<hr>
<h6>About-us Page</h6>
<div class="form-group row"><label class="col-sm-2 col-form-label">About-us Heading</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="a_heading" placeholder="Enter About-us Heading"></div>
</div>
<div class="form-group row"><label class="col-sm-2 col-form-label">About-us Description</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="a_desc" placeholder="Enter About-us Description"></div>
</div>
<hr>
<h6>Address </h6>
<div class="form-group row"><label class="col-sm-2 col-form-label">Addressee Name</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="aname" placeholder="Enter Addressee Name"></div>
</div>
<div class="form-group row"><label class="col-sm-2 col-form-label">Plot/Office No.</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="aplotname" placeholder="Enter Plot/Office No."></div>
</div>


<div class="form-group row"><label class="col-sm-2 col-form-label">Street Name</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="asname" placeholder="Enter Street Name"></div>
</div>
<div class="form-group row"><label class="col-sm-2 col-form-label">Area Name</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="arname" placeholder="Enter Area Name"></div>
</div>

<div class="form-group row"><label class="col-sm-2 col-form-label">City Name</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="acname" placeholder="Enter City Name"></div>
</div>
<div class="form-group row"><label class="col-sm-2 col-form-label">Pincode</label>
<div class="col-sm-10"><input type="number" maxlength="6" class="form-control form-control-round" name="apcode" placeholder="Enter Pincode"></div>
</div>
<div class="form-group row"><label class="col-sm-2 col-form-label">State</label>
<div class="col-sm-10"><input type="text" class="form-control form-control-round" name="astname" placeholder="Enter State"></div>
</div>
<div id="dynamic_field">
<div class="form-group row"><label class="col-sm-2 col-form-label">Contact</label>
<div class="col-sm-8"><input type="tel" pattern="[6789][0-9]{9}" title="Enter 10 digit Mobile No." class="form-control form-control-round" name="contact" placeholder="Enter  contact Number" ></div>
<div class="col-sm-2"><button type="button" name="add" id="add" class="btn btn-success">Add More</button>
</div>
</div>
</div>

<h6>Google Map</h6>
<div class="form-group row">
<a href="https://www.google.com/maps" target="_blank" class="col-sm-2 col-form-label text-primary">
Select Your Location
</a>
<div class="col-sm-10"><textarea class="form-control form-control-round" name="map" placeholder="Paste Your Embedded Map Code"></textarea> </div>
</div>

<hr>
<button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="submit">Submit</button>
</form>
<?php }
?>

<?php if(isset($_POST['submit'])) {
$heading=$_POST["heading"];
$sheading=$_POST["sheading"];
$wsubtitle=$_POST["wsubtitle"];
$wheading=$_POST["wheading"];
$wcontent=$_POST["wcontent"];
$a_heading=$_POST['a_heading'];
$a_desc=$_POST['a_desc'];  
$ad_name = $_POST['aname'];
$ad_plot = $_POST['aplotname'];
$ad_street = $_POST['asname'];
$ad_area= $_POST['arname'];
$ad_city =  $_POST['acname'];
$ad_pincode =  $_POST['apcode'];
$ad_state =  $_POST['astname'];
$contact = $_POST['contact'];
$contact1 = $_POST['contact1'];
$map = $_POST['map'];
$buid=$_SESSION['userloggedin'];
if(isset($_FILES['logoimg']) && $_FILES['logoimg']['name'] !="") {
$target_dir="../$domain/img/logo/";
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
if(isset($_FILES['image1']) && $_FILES['image1']['name'] !="") {
$target_dir="../$domain/img/products/";
$target_file=$target_dir . basename($_FILES["image1"]["name"]);
$uploadOk=1;
$imageFileType=pathinfo($target_file, PATHINFO_EXTENSION);

if ($_FILES["image1"]["size"] > 18000000) {
$msg="Sorry, your file is too large.";
$uploadOk=0;
}

$extallowed=array("jpg", "jpeg", "png");

if ( !in_array(strtolower($imageFileType), $extallowed)) {
$msg="Sorry,For jpg & png extension files are allowed";
$status=false;
$uploadOk=0;
}

$filename1=$_FILES['image1']['name'];
$filepath=$target_dir.$filename1;

if ($uploadOk !=0) {
if (move_uploaded_file($_FILES["image1"]["tmp_name"], $filepath)) {
$update_str="image1='$filename1'";
}

else {
$uploadOk=0;
$msg="Sorry, your file was not uploaded.";
}
}
}
if($con->query("insert into web_form(`logoimg`,`heading`,`s_heading`,`img`,`w_subtitle`,`w_heading`,`w_content`,`a_heading`,`a_desc`,`ad_name`,`ad_plot`,`ad_street`,`ad_area`,`ad_city`,`ad_pincode`,`ad_state`,`contact`,`contact1`,`map`,`buid`)values('".$logoimg."','".$heading."','".$sheading."','".$filename1."','".$wsubtitle."','".$wheading."','".$wcontent."','".$a_heading."','".$a_desc."','".$ad_name."','".$ad_plot."','".$ad_street."','".$ad_area."','".$ad_city."','".$ad_pincode."','".$ad_state."','".$contact."','".$contact1."','".$map."','".$buid."')")) {
echo '<script>alert("Website Content Added Successful!");document.location="websitebuilder.php"</script>';
} else {
echo '<script>alert("Website Data Not Inserted");document.location="web_form.php"</script>';
}

}   

?>
<script>
$(document).ready(function(){
var i=1;
var maxField = 2;
$('#add').click(function(){
if(i < maxField){ 
i++;
$('#dynamic_field').append('<div class="form-group row" id="row'+i+'"><label class="col-sm-2 col-form-label">Contact'+i+'</label><div class="col-sm-8"><input type="tel" pattern="[6789][0-9]{9}" title="Enter 10 digit Mobile No." class="form-control form-control-round" name="contact1" placeholder="Enter  contact Number" value="<?php echo $data['contact1'] ;?>"></div><div class="col-sm-2"><button type="button" name="add" id="'+i+'" class="btn btn-remove">Remove</button></div></div>');
}
});

$(document).on('click', '.btn-remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
i--;
});
});
</script>
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