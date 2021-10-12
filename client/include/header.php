<?php
include"../include/db.php";
session_start(); 
error_reporting(0);
session_start(); 
if(isset($_SESSION['last_ative_time'])){
if((time() - $_SESSION['last_ative_time'])>1800){
    header("location: include/logout.php"); 
    die();
}
}
$_SESSION['last_ative_time'] =time();
if (isset($_SESSION['userloggedin']) or isset($_SESSION['staffloggedin'])) {
   $uid= $_SESSION['userloggedin'] or $uid= $_SESSION['staffloggedin'];
   $uname= $_SESSION['cusername'] or $uname= $_SESSION['stusername'];
   $domain = $_SESSION['domain'];
   $dir = '../'.$domain.'/';
   if (count(scandir($dir)) == 10){
       $scriptname = $_SERVER['SCRIPT_FILENAME'];
       if(stristr($scriptname,"theme")){ 
       }
       else{
           if($_SESSION['staffloggedin']){
               echo '<script>alert("Please Ask Your Manager To Add Theme First");document.location="include/logout.php"</script>';
           } else {
               echo '<script>alert("Please Select Your Theme First");document.location="theme.php"</script>';
           } 
       }
   }  
 }else{
   header("location: login.php");  
}
$client = mysqli_fetch_assoc(mysqli_query($con,"select * from user where buid = $uid"));
$csid = $client['csid'];
$pack = $client['package'];
if($_SESSION['userloggedin']){
$package = mysqli_fetch_assoc(mysqli_query($con,"select * from package where id = $pack"));
$pages = $package['pages'];
}
if($_SESSION['staffloggedin']){
$own = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `buid` = '$csid'"));
$suser = $own['buid'];
$myuser = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `buid` = '$suser'"));
$mypack = $myuser['package'];
$spackage = mysqli_fetch_assoc(mysqli_query($con,"select * from package where id = $mypack"));
$spages = $spackage['pages'];
};

//$own = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `buid` = '$csid'"));
//$suser = $own['buid'];
//$myuser = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `buid` = '$suser'"));
//$mypack = $myuser['package'];
//$spackage = mysqli_fetch_assoc(mysqli_query($con,"select * from package where id = $mypack"));
//$spages = $package['pages'];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title><?php echo $uname;?>- Fourty60</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">


                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <?php
                            if (isset($_SESSION['sadminloggedin'])){
                                echo '<li>
                                <marquee>Managing '.$_SESSION['domain'].'</marquee>
                                </li>';
                            }
                                ?>
                        </ul>
                        <ul class="nav-right" style="display: block;">
                            <li class="user-profile header-notification">
                                <a href="#" class="waves-effect waves-light">
                                    <span><?php echo $uname;?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification" style="display: none;">
                                   <li class="waves-effect waves-light">
                                        <a href="profile.php">
                                            <i class="ti-user"></i> MyProfile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="editprofile.php">
                                            <i class="ti-pencil-alt"></i> Edit Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="changepassword.php">
                                            <i class="ti-lock"></i> Change Password
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="include/logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
