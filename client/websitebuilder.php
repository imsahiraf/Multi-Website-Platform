<?php include"include/header.php"?>
<?php if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];

} ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <?php include"include/sidebar.php"?>
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">My Website Builder</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">My Website Builder</a>
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
                            <div class="col-xl-3 col-md-4">
                        <div class="card">
                        <a href="myheader.php">
                           <div class="card-block">
                              <div class="row align-items-center">
                                 <div class="col-8">
                                    
                                    <h6 class="text-muted m-b-0">Header</h6>
                                 </div>
                                 <div class="col-4 text-right">
                                    <i class="ti-angle-up f-28"></i>
                                 </div>
                              </div>
                           </div>
                           </a>
                        </div>
                     </div>
                        <div class="col-xl-3 col-md-4">
                        <div class="card">
                        <a href="myabout.php">
                           <div class="card-block">
                              <div class="row align-items-center">
                                 <div class="col-8">                                    
                                    <h6 class="text-muted m-b-0">About</h6>
                                 </div>
                                 <div class="col-4 text-right">
                                    <i class="ti-id-badge f-28"></i>
                                 </div>
                              </div>
                           </div>
                           </a>
                        </div>

                        </div>
                        <div class="col-xl-3 col-md-4">
                        <div class="card">
                        <a href="mycontact.php">
                           <div class="card-block">
                              <div class="row align-items-center">
                                 <div class="col-8">
                                    
                                    <h6 class="text-muted m-b-0">Contact-Us</h6>
                                 </div>
                                 <div class="col-4 text-right">
                                    <i class="ti-mobile f-28"></i>
                                 </div>
                              </div>
                           </div>
                           </a>
                        </div></div>
                           <div class="col-xl-3 col-md-4">
                        <div class="card">
                        <a href="theme.php">
                           <div class="card-block">
                              <div class="row align-items-center">
                                 <div class="col-8">
                                    
                                    <h6 class="text-muted m-b-0">Theme</h6>
                                 </div>
                                 <div class="col-4 text-right">
                                    <i class="ti-layers-alt f-28"></i>
                                 </div>
                              </div>
                           </div>
                           </a>
                        </div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </div><?php include"include/footer.php"?>
    