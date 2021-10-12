<?php include "header.php"?>
<?php
    $q1 = mysqli_query($con,"SELECT * from blog where cuid=$cid");

?>
<section id="page-title" data-bg-parallax="images/parallax/14.jpg"><div class="parallax-container img-loaded" data-bg="images/parallax/14.jpg" data-velocity="-.140" style="background: url(&quot;images/parallax/14.jpg&quot;);" data-ll-status="loaded"></div>
<div class="bg-overlay"></div>
<div class="container">
<div class="page-title">
<h1 class="text-uppercase text-medium">Blog</h1>
<span>Work is easy when you have all tools around you!</span>
</div>
</div>
</section>
<section id="page-content">
    <div class="container">


        <div class="page-title">
            <h1>Blogs</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </div>


        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            <?php
            while($r1= mysqli_fetch_assoc($q1)){
            ?>
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="blog-<?php echo $r1['slug']; ?>.html">
                            <img alt="" src="../cmach.in/img/blog/<?php echo $r1['img']; ?>">
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


        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul>

    </div>

</section>
<?php include"footer.php"?>