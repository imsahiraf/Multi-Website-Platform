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
                                            <h5>My Header</h5>
                                            <a class="btn btn-primary btn-round waves-effect waves-light text-white" > Preview</a>

                                        </div>
                                        <?php
                                        $buid = $_SESSION['userloggedin'];
                                        // $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `web_form` WHERE `buid` = '$cid'"));
                                        $sql =mysqli_query($con, "SELECT * FROM web_form  WHERE buid='$buid'");
                                        $data=mysqli_fetch_assoc($sql);?>
                                          <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                                  
                                               
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Upload Logo</label>
                                                    <div class="col-sm-8">
                                                        <input type="file" class="form-control form-control-round" name="logoimg" id="catimg" value="<?php echo $data['logoimg'] ;?>"></div> 
                                                    
                                                 <!-- to show selected img in update from -->
                                                            <div class="col-sm-2 "> <img src="../<?php echo $domain ;?>/img/logo/<?php echo $data['logoimg'] ;?>" alt="<?php echo $data['logoimg'] ;?>" title="" class="img-responsive rounded-circle" style=" width: 58px;height: 58px;"></div>
                                                </div>
                                                            <!-- write $domain on place of cmach.in -->
                                                
                                                <hr>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Heading</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-round slug-ouput" name="heading" placeholder="Enter Permanent URL"  value = "<?php echo $data['heading'] ;?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="text"></div>
                                                <div class="form-group row"><label
                                                        class="col-sm-2 col-form-label">Subheading</label>
                                                    <div class="col-sm-10"><input type="text"
                                                            class="form-control form-control-round" name="s_heading"
                                                            placeholder="Enter Subheading" value = "<?php echo $data['s_heading'] ;?>"></div>
                                                </div>
                                                <hr>
                                                <div class="form-group row"><label
                                                        class="col-sm-2 col-form-label">Image</label>
                                                    <div class="col-sm-8"><input type="file"
                                                            class="form-control form-control-round" name="img"
                                                            placeholder="Enter Subtitle Content" value = "../<?php echo $domain?>/img/products/<?php echo $data['img'] ;?>"></div>
                                                         <!-- to show selected img in update from -->
                                                            <div class="col-sm-2"> <img src="../cmach.in/img/products/<?php echo $data['img'] ;?>" alt="<?php echo $data['heading'] ;?>" title="" class="img-responsive rounded-circle" style=" width: 58px;height: 58px;"></div>
                                                            <!-- write $domain on place of cmach.in -->
                                                           
                                                </div>
                                                <hr>
                                                <div class="form-group row"><label
                                                        class="col-sm-2 col-form-label">Subtitle</label>
                                                    <div class="col-sm-10"><input type="text"
                                                            class="form-control form-control-round" name="w_subtitle"
                                                            placeholder="Enter Subtitle" value = "<?php echo $data['w_subtitle'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label
                                                        class="col-sm-2 col-form-label">Subtitle Heading</label>
                                                    <div class="col-sm-10"><input type="text"
                                                            class="form-control form-control-round" name="w_heading"
                                                            placeholder="Enter Subtitle Heading" value = "<?php echo $data['w_heading'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label
                                                        class="col-sm-2 col-form-label">Subtitle Content</label>
                                                    <div class="col-sm-10"><textarea
                                                            class="form-control form-control-round" maxlength="300" name="w_content"
                                                            placeholder="Enter Subtitle Content" ><?php echo $data['w_content'] ;?></textarea></div>
                                                </div>
                                                    
                                              <hr>           
                                                <button type="submit"
                                                    class="btn btn-primary btn-round waves-effect waves-light"
                                                    name="submit">Submit</button>
                                                   
                                        </div>
                                    </div></div></div></div></div></div></div></div></div></div>           
                                                     <?php }
                                                    ?>

   <?php 
if(isset($_POST['submit'])) {
    $cid ;
   $heading=$_POST['heading'];
   $s_heading=$_POST['s_heading'];
   $w_subtitle=$_POST['w_subtitle'];
   $w_heading=$_POST['w_heading'];
   $w_content=$_POST['w_content'];
  

//    $_FILES['img']['name'] !=0 isnted of null we put 0 to avoid update img blank
   if(isset($_FILES['img']) and $_FILES['img']['name'] !=0) {
    $target_dir="../cmach.in/img/products/";//write $domain on place of cmach.in
    $target_file=$target_dir . basename($_FILES["img"]["name"]);
    $uploadOk=1;
    $imageFileType=pathinfo($target_file, PATHINFO_EXTENSION);

    if ($_FILES["img"]["size"] > 18000000) {
        $msg="Sorry, your file is too large.";
        $uploadOk=0;
    }

    $extallowed=array("jpg", "jpeg", "png");

    if ( !in_array(strtolower($imageFileType), $extallowed)) {
        $msg="Sorry,For jpg & png extension files are allowed";
        $status=false;
        $uploadOk=0;
    }

    $filename1=isset($_FILES['img']['name']);
    $filepath=$target_dir.$filename1;

    if ($uploadOk !=0) {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $filepath)) {
            $update_str="img='$filename1'";
        }

        else {
            $uploadOk=0;
            $msg="Sorry, your file was not uploaded.";
        }
    }
       
}
//for logo image
 if(isset($_FILES['logoimg']) && $_FILES['logoimg']['name'] !='') {
        $target_dir="../cmach.in/img/logo/";
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
    if($con->query("UPDATE web_form SET logoimg='$logoimg', heading='$heading' ,`s_heading`='$s_heading',img = '$filename1',w_subtitle='$w_subtitle',w_heading='$w_heading',
     w_content='$w_content' where `web_form`.`buid` = '$cid'")){
        echo '<script>alert("Website Content updated Successful!");document.location="myheader.php"</script>';
       } else {
       echo '<script>alert("Website Data Not Updated");document.location="myheader.php"</script>';
       }
    
}   

?>
<?php include"include/footer.php"?>