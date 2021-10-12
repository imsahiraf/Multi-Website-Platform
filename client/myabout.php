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
                                            <h5>My About</h5>
                                            <a class="btn btn-primary btn-round waves-effect waves-light" href="#"> Preview</a>

                                        </div>
                                        <?php
                                        $buid = $_SESSION['userloggedin'];
                                        // $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `web_form` WHERE `buid` = '$cid'"));
                                        $sql =mysqli_query($con, "SELECT * FROM web_form  WHERE buid='$buid'");
                                        $data=mysqli_fetch_assoc($sql);?>
                                          <div class="card-block">
                                            <form method="POST" enctype="multipart/form-data">
                                               <div class="form-group row"><label
                                                        class="col-sm-2 col-form-label">About-us Heading</label>
                                                    <div class="col-sm-10"><input type="text"
                                                            class="form-control form-control-round" name="a_heading"
                                                            placeholder="Enter About-us Heading" value = "<?php echo $data['a_heading'] ;?>"></div>
                                                </div>
                                                <div class="form-group row"><label
                                                        class="col-sm-2 col-form-label">About-us Description</label>
                                                    <div class="col-sm-10"><textarea
                                                            class="form-control form-control-round" maxlength="300" name="a_desc"
                                                            placeholder="Enter About-us Description" ><?php echo $data['a_desc'] ;?></textarea></div>
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
  $a_heading=$_POST['a_heading'];
   $a_desc=$_POST['a_desc']; 

    if($con->query("UPDATE web_form SET a_heading='$a_heading', `a_desc`='$a_desc' where `web_form`.`buid` = '$cid'")){
        echo '<script>alert("Website Content updated Successful!");document.location="myabout.php"</script>';
       } else {
       echo '<script>alert("Website Data Not Updated");document.location="myabout.php"</script>';
       }
    
}   

?>
<?php include"include/footer.php"?>