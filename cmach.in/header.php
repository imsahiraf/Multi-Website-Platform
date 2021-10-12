<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php include"../include/db.php"?>
<?php
    $link =$_SERVER['HTTP_HOST'];
    $domain = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `domain` = '$link'"));
    $cid = isset($domain['buid']);
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `subcategory` WHERE `slug` = '$id' and `cuid` = '$cid'"));
    } elseif(isset($_GET['slug']) && !empty($_GET['slug'])) {
        $slug = $_GET['slug'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `blog` WHERE `slug` = '$slug' and `cuid` = '$cid'"));
        $viewi = $data['views'] + 1;
        $con->query("UPDATE `blog` SET `views` = '$viewi' WHERE `slug` = '$slug' and `cuid` = '$cid'"); 
    }
$d= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `web_form` WHERE `buid` = '$cid'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo isset($data['name'])?$data['name']:'';?><?php echo isset($data['name'])?' - ':'';?><?php echo isset($domain['cname'])?$domain['cname']:'';?></title>
    <meta name="description" content="<?php echo isset($data['description'])?$data['description']:''?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo isset($data['keywords'])?$data['keywords']:''?>">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Review",
            "itemReviewed": {
                "@type": "Product",
                "image": "img/products/<?php echo isset($data['image'])?$data['image']:''?>",
                "name": "<?php echo isset($data['name'])?$data['name']:''?>",
                "description": "<?php echo isset($data['description'])?$data['description']:''?>",
                "priceRange": "$$$",
                "url": "<?php $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?"https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];echo $link;?>",
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "bestRating": "5",
                "worstRating": "1",
                "ratingCount": "365",
                "reviewCount": "1"
            },
            "review": {
                "@type": "Review",
                "reviewBody": "",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5",
                    "worstRating": "1"
                },
                "author": {
                    "@type": "Person",
                    "name": ""
                }
            }
        }

    </script>
</head>

<body>

    <div class="body-inner">

        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="index.html">
                           <?php if($d['logo'] !=''){?>
                            <span class="logo-default"><?php echo $d['logo'];?></span>
                           <span class="logo-dark"><?php echo $d['logo'];?></span>
                           <?php } else{?>
                            <img class="logo-default rounded-circle" src="img/logo/<?php echo $d['logoimg']; ?>">
                            <img class="logo-dark rounded-circle" src="img/logo/<?php echo $d['logoimg']; ?>">
                            <?php } ?>
                        </a>
                    </div>
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>


                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Products</a>
                                        <ul class="dropdown-menu">
                                       
                                        <?php 
                                                $rows = array();
                                                $category = $con->query("select * from subcategory where menu IS NULL and cuid=$cid order by sort");
                                                while($row = $category->fetch_assoc())
                                                $rows[] = $row;
                                                foreach($rows as $row){
                                                    $id = $row['scid'];
                                                    $name = $row['name'];
                                                    $slug = $row['slug'];
                                                ?>
                                        <li class="dropdown-submenu"><a
                                                href="<?php echo $row['slug']; ?>.html"><?php echo $row['name']; ?></a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                        $rows = array();
                                                        $category = $con->query("select * from subcategory where menu = $id and cuid=$cid");
                                                        while($row = $category->fetch_assoc())
                                                        $rows[] = $row;
                                                        foreach($rows as $row){
                                                            $id = $row['scid'];
                                                            $name = $row['name'];
                                                            $slug = $row['slug'];
                                                        ?>
                                                <li class="dropdown-submenu"><a
                                                        href="<?php echo $row['slug']; ?>.html"><?php echo $row['name']; ?></a>
                                                    <ul class="dropdown-menu">
                                                        <?php 
                                                            $rows = array();
                                                            $category = $con->query("select * from subcategory where menu = $id and cuid=$cid");
                                                            while($row = $category->fetch_assoc())
                                                            $rows[] = $row;
                                                            foreach($rows as $row){
                                                                $id = $row['scid'];
                                                                $name = $row['name'];
                                                                $slug = $row['slug'];
                                                            ?>
                                                        <li class="dropdown-submenu"><a
                                                                href="<?php echo $row['slug']; ?>.html"><?php echo $row['name']; ?></a>
                                                            <ul class="dropdown-menu">
                                                                <?php 
                                                                $rows = array();
                                                                $category = $con->query("select * from subcategory where menu = $id and cuid=$cid");
                                                                while($row = $category->fetch_assoc())
                                                                $rows[] = $row;
                                                                foreach($rows as $row){
                                                                    $id = $row['scid'];
                                                                    $name = $row['name'];
                                                                    $slug = $row['slug'];
                                                                ?>
                                                                <li class="dropdown-submenu"><a
                                                                        href="<?php echo $row['slug']; ?>.html"><?php echo    $row['name']; ?></a>
                                                                    <ul class="dropdown-menu">
                                                                        <?php 
                                                                    $rows = array();
                                                                    $category = $con->query("select * from subcategory where menu = $id and cuid=$cid");
                                                                    while($row = $category->fetch_assoc())
                                                                    $rows[] = $row;
                                                                    foreach($rows as $row){
                                                                        $id = $row['scid'];
                                                                        $name = $row['name'];
                                                                        $slug = $row['slug'];
                                                                    ?>
                                                                        <li class="dropdown-submenu"><a
                                                                                href="<?php echo $row['slug']; ?>.html"><?php echo    $row['name']; ?></a>
                                                                            <ul class="dropdown-menu">
                                                                                <?php 
                                                                        $rows = array();
                                                                        $category = $con->query("select * from subcategory where menu = $id and cuid=$cid");
                                                                        while($row = $category->fetch_assoc())
                                                                        $rows[] = $row;
                                                                        foreach($rows as $row){
                                                                            $id = $row['scid'];
                                                                            $name = $row['name'];
                                                                            $slug = $row['slug'];
                                                                        ?>
                                                                                <li class="dropdown-submenu"><a
                                                                                        href="<?php echo $row['slug']; ?>.html"><?php echo $row['name']; ?></a>
                                                                                </li>
                                                                                <?php }?>
                                                                            </ul>
                                                                        </li>
                                                                        <?php }?>
                                                                    </ul>
                                                                </li>
                                                                <?php }?>
                                                            </ul>
                                                        </li>
                                                        <?php }?>
                                                    </ul>
                                                </li>
                                                <?php }?>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="blog.html">Blog</a>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="about-us.html">About Us</a>
                                    </li>
                                    <li class="dropdown mega-menu-item"><a href="contact-us.html">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>