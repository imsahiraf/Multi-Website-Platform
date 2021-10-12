<?php
include"../include/db.php";
session_start(); 
if(isset($_SESSION['last_ative_time'])){
    //  print_r($_SESSION);
if((time() - $_SESSION['last_ative_time'])>1800){
    header("location: include/logout.php"); 
    die();
}
}
$_SESSION['last_ative_time'] =time();
error_reporting(E_ERROR | E_PARSE);
if((!isset($_SESSION['sadminloggedin'])))
{
    header("location: login.php");  
}

else
{
    $adminloggedin = isset($_SESSION['adminloggedin'])?$_SESSION['adminloggedin']:'';
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>Super Admin - Fourty60</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <link rel="icon" href="assets/images/admin.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="bxslider-4-4.2.12/src/css/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="bxslider-4-4.2.12/src/js/jquery.bxslider.js"></script>

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
                                <a href="#" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right" style="display: block;">
                           <?php $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * from noti where seen= 1"));?>
                            <li class="header-notification">
                                <a href="#" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <?php echo isset($data['id'])?'<span class="badge bg-c-red"></span>':'';?>
                                    
                                </a>
                                <ul class="show-notification" style="display: none;">
                                    <li>
                                        <h6>Notifications</h6>
                                        <?php echo isset($data['id'])?'<label class="label label-danger">New</label>':'';?>
                                        
                                    </li>
                                    <?php
                                    $q1 = mysqli_query($con,"SELECT * from noti where seen= 1");
                                    while($r1 = mysqli_fetch_assoc($q1))
                                    {  $i++;
                                    ?>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <a href="noti.php"><div class="media-body">
                                                <p class="notification-msg">
                                                    <?php echo $r1['content'];?>
                                                    </p>
                                            </div></a>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="user-profile header-notification">
                                <a href="#" class="waves-effect waves-light">
                                    <span>Admin</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification" style="display: none;">
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
