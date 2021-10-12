<?php include"header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `subcategory` WHERE `slug` = '$id'"));

    }
?>
<main>
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/products/<?php echo isset($data['image'])?$data['image']:''?>)" loading="lazy">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2><?php echo isset($data['name'])?$data['name']:''?></h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo isset($data['name'])?$data['name']:''?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- choose-area -->
    <section class="choose-area pt-100 pb-100 p-relative">
        <div class="container">
            <div class="row">
                <!-- rightside -->
                <?php echo isset($data['content'])?$data['content']:''?>
                <div class="widget mb-40">
                    <div class="widget-title text-center">
                        <h4>Tags</h4>
                    </div>
                    <div class="widget__tag">
                        <ul>
                            <?php
                                    if(isset($data['keywords'])){
                                    foreach(explode(',', $data['keywords']  ) as $k => $v){
                                        echo "<li><a>$v</a></li>";
                                    }
                                    }
                            ?>


                        </ul>
                    </div>
                </div>
                <!-- rightside -->
                <!-- leftside -->

                <!-- /leftside -->
            </div>
        </div>
    </section>
    <!-- choose-area-end -->
</main>

<?php include"footer.php"?>
