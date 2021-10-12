<?php include"header.php"?>
<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
    <?php 
    $q1 = mysqli_query($con,"SELECT * from zs_sliders_img where cuid='$cid' ");
        while($r1 = mysqli_fetch_assoc($q1)){?>
    <div class="slide kenburns" data-bg-image="img/sliders/<?php echo $r1['image'];?>">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                <h1 style="animation-name: <?php echo $r1['t_animation'];?>;"><?php echo $r1['title'];?></h1>
                <p style="animation-name: <?php echo $r1['c_animation'];?>;"><?php echo $r1['content'];?></p>
                <?php $button = '<div><a href="'.$r1['href'].'" class="btn scroll-to">'.$r1['button'].'</a></div>'?>
<!--                <div><a href="#welcome" class="btn scroll-to">Explore more</a></div>-->
                <?php if (($r1['button'])!=NULL){echo $button;}else{} ?>
            </div>
        </div>
    </div>
    <?php } ?>

<!--
    <div class="slide" data-bg-image="images/slider/103.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-left text-light">

                <h1>220+ Laytout Demos</h1>
                <p class="text-small">POLO is packed with 220+ pre-made layouts that allow you to quickly jumpstart your
                    project. Completely customizable for creating your own designs.</p>
                <div><a href="#welcome" class="btn scroll-to">Explore more</a></div>

            </div>
        </div>
    </div>
-->

</div>
<?php 
$sql =mysqli_query($con, "SELECT * from web_form where buid='$cid'");
$d=mysqli_fetch_assoc($sql);
?>
<section id="welcome" class="p-b-0">
    <div class="container">
        <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
            <h2><?php echo $d['heading'];?></h2>
            <span class="lead"><?php echo $d['s_heading'];?></span>
        </div>
        <div class="row" data-animate="fadeInUp">
            <div class="col-lg-12">
                <img class="img-fluid" src="img/products/<?php echo $d['img']; ?>" alt="Welcome to POLO">
            </div>
        </div>
    </div>
</section>


<section class="background-grey">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>WHAT WE DO</h2>
            <span class="lead"><?php echo $d['w_heading'];?></span>
        </div>
        <div class="row">
<!--        added while loop fecth -->
                    <div class="col-lg-12">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h3><?php echo $d['w_subtitle'];?></h3>
                    <p><?php echo $d['w_content'];?></p>
                </div>
            </div>
        </div>
    </div>
<section class="content background-grey">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>OUR BLOG</h2>
        </div>
       
        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
             <?php
        $q1 = mysqli_query($con,"SELECT * from blog where cuid=$cid limit 3"); 
         while($r1= mysqli_fetch_assoc($q1)){
        ?>
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="blog.php">
                            <img alt="" src="../cmach.in/img/blog/<?php echo $data['img']; ?>">
                        </a>
                        <span class="post-meta-category"><a href="#"><?php echo $r1['name'];?></a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $r1['created'];?></span>
                        <h2><a href="blog-<?php echo $r1['slug']; ?>.html"><?php echo $r1['name'];?>
                            </a></h2>
                       <a href="blog-<?php echo $r1['slug']; ?>.html" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
              <?php } ?>
              
        </div>
    </div>
</section>
<?php include"footer.php" ?>
