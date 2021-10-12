<?php include"include/header.php"?>
<?php if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];

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
                                            <h5>My Contact</h5>
                                            <a class="btn btn-primary btn-round waves-effect waves-light" href="#"> Preview</a>

                                        </div>
                                        <?php
                                        $buid = $_SESSION['userloggedin'];
                                     
                                        // $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `web_form` WHERE `buid` = '$cid'"));
                                        $sql =mysqli_query($con, "SELECT * FROM web_form  WHERE buid='$buid'");
                                        $data=mysqli_fetch_assoc($sql);?>
                                        <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                <h6>Address </h6>
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">Addressee Name</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control form-control-round" name="aname" placeholder="Enter Addressee Name" value="<?php echo $data['ad_name'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">Plot/Office No.</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control form-control-round" name="aplotname" placeholder="Enter Plot/Office No." value="<?php echo $data['ad_plot'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">Street Name</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control form-control-round" name="asname" placeholder="Enter Street Name" value="<?php echo $data['ad_street'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">Area Name</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control form-control-round" name="arname" placeholder="Enter Area Name" value="<?php echo $data['ad_area'] ;?>"></div>
                                                </div>

                                                <div class="form-group row"><label class="col-sm-2 col-form-label">City Name</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control form-control-round" name="acname" placeholder="Enter City Name" value="<?php echo $data['ad_city'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">Pincode</label>
                                                    <div class="col-sm-10"><input type="number" maxlength="6" class="form-control form-control-round" name="apcode" placeholder="Enter Pincode" value="<?php echo $data['ad_pincode'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">State</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control form-control-round" name="astname" placeholder="Enter State" value="<?php echo $data['ad_state'] ;?>"></div>
                                                </div>
                                                
                                                <?php if($data['contact1'] != null){ ?>
                                                    <div id="dynamic_field">
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">Contact</label>
                                                    <div class="col-sm-10"><input type="number" maxlength="6" class="form-control form-control-round" name="contact" placeholder="Enter  contact Number" value="<?php echo $data['contact'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label class="col-sm-2 col-form-label">Contact1</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control form-control-round" name="contact1" placeholder="Enter contact Number" value="<?php echo $data['contact1'] ;?>" pattern="[6789][0-9]{9}" title="Enter 10 digit Mobile No."></div>
                                                </div>
                                                <?php }else{?>
                                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Contact</label>
                                                        <div class="col-sm-8"><input type="tel" pattern="[6789][0-9]{9}" title="Enter 10 digit Mobile No." class="form-control form-control-round" name="contact" placeholder="Enter  contact Number" value="<?php echo $data['contact'] ;?>"></div>
                                                        <div class="col-sm-2"><button type="button" name="add" class="btn btn-success">Add More</button>
                                                        </div>
                                                        
                                                    </div>
                                                    <?php }?>
                                                </div>
                                                <h6>Google Map</h6>
                                                <div class="form-group row">
                                                    <a href="https://www.google.com/maps" class="col-sm-2 col-form-label text-primary">
                                                        Select Your Location
                                                    </a>
                                                    <div class="col-sm-10"><textarea class="form-control form-control-round" name="map" placeholder="Paste Your Embedded Map Code"><?php echo $data['map'] ;?></textarea> </div>
                                                </div>

                                                <hr>

                                                <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="submit">Submit</button>
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
<?php } ?>
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

<?php 
if(isset($_POST['submit'])) {
    $cid ;
   $ad_name = $_POST['aname'];
   $ad_plot = $_POST['aplotname'];
   $ad_street = $_POST['asname'];
   $ad_area = $_POST['arname'];
   $ad_city =  $_POST['acname'];
   $ad_pincode =  $_POST['apcode'];
   $ad_state =  $_POST['astname'];
   $number = $_POST['contact'];
   $map = $_POST['map'];
   $contact1=$_POST['contact1'];


    

    if($con->query("UPDATE web_form SET ad_name = '$ad_name',ad_plot = '$ad_plot',ad_street = '$ad_street',ad_area = '$ad_area',ad_city = '$ad_city',`contact` = '$number',`contact1` ='$contact1',`ad_pincode`= '$ad_pincode',ad_state = '$ad_state',map = '$map' where `web_form`.`buid` = '$uid'")){
        echo '<script>alert("Website Content updated Successful!");document.location="mycontact.php"</script>';
       } else {
       echo '<script>alert("Website Data Not Updated");document.location="mycontact.php"</script>';
       }
    
}   

?>
<?php include"include/footer.php"?>