<?php include "../include/db.php"?>
<?php
error_reporting(0);
session_start();
if (isset($_SESSION['adminloggedin'])) {
   $uid= $_SESSION['adminloggedin'];
 }else{
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>LOGIN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">   
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <body themebg-pattern="theme1">
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                        <form method="post" class="md-float-material form-material">
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Sign In</h3>
                                        </div>
                                    </div>
                                    
                                    <?php if($_SESSION['not']!=""){?> 
                                      <p style="color:red;"><?php echo($_SESSION['not']);?></p>
                                    <p style="color:red;"><?php echo($_SESSION['not']="");?></p>
                                   <?php } ?>
                                    <div class="form-group form-primary">
                                        <input type="text" name="user" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">UserName</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" name="login" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
<?php
 if(isset($_POST['login']))
{
    $user = $_POST['user'];
    $password = $_POST['password'];

    $query = $con->query("SELECT * from admin where user = '$user' AND password='$password' ");
    $count= mysqli_num_rows($query);
    if($count == 1)
    {
       $row= mysqli_fetch_assoc($query);
       $_SESSION['adminloggedin']  = $row['id'];
       $_SESSION['ausername'] = $row['user'];
       $_SESSION['start'] = time();//for exprie session

       $_SESSION['expire']=$_SESSION['start']+(1*60);//one min convert into second
       $_SESSION['success']="Login Successfull!";
         echo '<script>document.location="index.php"</script>';
         exit();
    }
     else{
         $_SESSION['not']="Login Failed!";
         echo '<script>document.location="login.php"</script>';
         exit();
     }
 }     
?>
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>     
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/pages/waves/js/waves.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.html"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.html"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.html"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.html"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>
</html>
