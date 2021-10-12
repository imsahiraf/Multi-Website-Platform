<?php include"header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `subcategory` WHERE `slug` = '$id' and cuid=$cid"));

    }
?>
<section id="page-title" data-bg-parallax="images/parallax/5.jpg">
    <div class="container">
        <div class="page-title">
            <h1><?php echo isset($data['name'])?$data['name']:''?></h1>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a> </li>
                <li><a href="index.php">Products</a> </li>
                <li class="active"><a href="#"> <?php echo isset($data['name'])?$data['name']:''?></a> </li>
            </ul>
        </div>
    </div>
</section>


<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">

            <div class="content col-lg-9">

                <div id="blog" class="single-post">

                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/1.jpg">
                                </a>
                            </div>
                            mpus varius lacus ac pharetra. Curabitur ultricies euismod condimentum. Duis nisi mi, auctor at fermentum in, mollis vitae tellus. Proin lacinia, ex vitae fringilla vehicula, ante tellus tempor dui, ac viverra quam lorem eget elit.

                            Praesent nec tellus ut nunc iaculis hendrerit vel ut odio. Phasellus rutrum facilisis mauris sed bibendum. Morbi vitae pellentesque nisl. Cras mollis ultricies velit id aliquet. Aliquam ultricies ullamcorper dolor, sed pulvinar nulla auctor ut. Vivamus consequat mauris in odio placerat gravida. Proin non gravida lorem. Suspendisse condimentum, sem in eleifend ullamcorper, massa velit interdum turpis, nec posuere nibh tortor ut massa. Nullam sit amet condimentum erat. Fusce id ullamcorper orci. Nunc ut tortor non lacus euismod sollicitudin. Duis consectetur nunc accumsan laoreet hendrerit. Donec quis mi sit amet nisl maximus porta sed id elit. Cras vel turpis mi.

                            Etiam vel ipsum at erat tristique finibus. Vivamus pharetra volutpat eros nec luctus. Integer non iaculis velit. Cras feugiat enim nec ex ornare, vel eleifend sem aliquet. Ut ornare, metus vel ultrices porttitor, dui lorem gravida nunc, a pretium dui mi eget arcu. Pellentesque elementum eros a porta ullamcorper. In non sodales est. Sed ut placerat urna. Proin interdum ligula nisi, sit amet commodo erat tincidunt vitae. Duis ultrices diam justo, in lacinia purus cursus vel. Sed id turpis eget augue suscipit rhoncus ac in arcu. Nulla facilisi. Maecenas fermentum lorem eget dui tempor, sit amet fringilla tellus tincidunt.
                            <div class="widget  widget-tags">
                                <div class="tags">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="sidebar sticky-sidebar col-md-3">
                <div class="widget clearfix widget-categories">
                    <h4 class="widget-title">More Products</h4>
                    <ul class="list list-arrow-icons">

                        <li><b>About us</b></li>

                            <li>Basic</li>
                        
                            <li>extended</li>
                    </ul>
                    <ul class="list list-arrow-icons">

                        <li><b>Contact us</b></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include "footer.php"?>
