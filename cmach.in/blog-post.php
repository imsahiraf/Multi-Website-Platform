<?php include"header.php"?>
<?php
    if(isset($_GET['slug']) && !empty($_GET['slug'])){
        $id = $_GET['slug'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `blog` WHERE `slug` = '$id' and `cuid`='$cid'"));

    }
?>

<section id="page-title" data-bg-parallax="images/parallax/14.jpg">
    <div class="parallax-container img-loaded" data-bg="images/parallax/14.jpg" data-velocity="-.140"
        style="background: url(&quot;images/parallax/14.jpg&quot;);" data-ll-status="loaded"></div>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="page-title">
            <h1 class="text-uppercase text-medium">Blog Post</h1>
            <span><?php echo isset($data['name'])?$data['name']:''?></span>
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
                                <a href="">
                                    <img alt="" src="../cmach.in/img/blog/<?php echo $data['img']; ?>">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><?php echo isset($data['name'])?$data['name']:''?></h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i
                                            class="icon-clock"></i><?php echo $data['created'] ?></span>
                                    <div class="post-meta-share">
                                        <span class="post-meta-date"><i
                                                class="fa fa-eye"></i><?php echo $data['views'] ?></span>
                                    </div>
                                </div>
                                <p><?php echo isset($data['content'])?$data['content']:''?></p>
                            </div>
                            <div class="widget widget-tags">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tags">
                                    <a href="#">Design</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Digital</a>
                                    <a href="#">Branding</a>
                                    <a href="#">HTML</a>
                                    <a href="#">Clean</a>
                                    <a href="#">Peace</a>
                                    <a href="#">Love</a>
                                    <a href="#">CSS3</a>
                                    <a href="#">jQuery</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="sidebar sticky-sidebar col-lg-3">
                <div class="widget">
                    <div class="tabs">
                        <div class="tab-content" id="tabs-posts-content">
                            <?php 
                    $qry = $con->query("SELECT * FROM blog order by unix_timestamp(created) desc limit 3");
                    while($row=$qry->fetch_assoc()):
                ?>

                            <div class="tab-pane fade show active" id="popular" role="tabpanel"
                                aria-labelledby="popular-tab">
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="images/blog/thumbnail/4.jpg">
                                        <div class="post-thumbnail-content" style="white-space: nowrap;">
                                            <a
                                                href="blog-<?php echo $row['slug']; ?>.html"><?php echo $row['name'] ?></a>
                                            <span class="post-date"><i
                                                    class="icon-clock"></i><?php echo date("M d, Y h:i A",strtotime($row['created'])) ?></span>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include"footer.php"?>