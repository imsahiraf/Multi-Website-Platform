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
                            <?php echo isset($data['content'])?$data['content']:''?>
                            <div class="widget  widget-tags">
                                <div class="tags">
                                    <?php
                                    if(isset($data['keywords'])){
                                    foreach(explode(',', $data['keywords']  ) as $k => $v){
                                        echo "<a>$v</a>";
                                        }
                                    }
                                    ?>
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
                       <?php 
                        $category = $con->query("select * from category");
                        while($rows = $category->fetch_assoc()){
                           $id = $rows['cid'];
                        ?>
                        <li><b><?php echo $rows['name']; ?></b></li>
                        <?php
                        $query="select * from subcategory where menu = $id and cuid=$cid";
                       $subcategory = $con->query($query);
                        while($row = $subcategory->fetch_assoc()){
                        ?>
                        <li><a href="<?php echo $row['name']; ?>.html" style=" white-space: nowrap;"><?php echo $row['name']; ?></a>
                        <?php } ?>
                        <?php } ?>
                    </ul> 
                </div>
            </div>

        </div>
    </div>
</section>
<?php include "footer.php"?>
