<body>
    <!-- header -->
    <header class="header-area">
        <div class="header-top second-header d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 d-none  d-md-block">
                        <div class="header-cta">
                            <ul>
                                <li>
                                    <i class="icon dripicons-mail"></i>
                                    <span>info@example.com</span>
                                </li>
                                <li>
                                    <i class="icon far fa-clock"></i>
                                    <span>Mon - Sat 8:00 - 18:00. Sunday CLOSE</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-none d-lg-block">
                        <div class="header-social text-right">
                            <span>
                                <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 d-none d-md-block">
                        <a href="#" class="top-btn">Appointment</a>


                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">

                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                 <ul>
                                            <?php 
                                                $rows = array();
                                                $category = $con->query("select * from subcategory where menu IS NULL order by sort");
                                                while($row = $category->fetch_assoc())
                                                $rows[] = $row;
                                                foreach($rows as $row){
                                                    $id = $row['scid'];
                                                    $name = $row['name'];
                                                    $slug = $row['slug'];
                                                ?>
                                            <li class="has-sub"><a href="<?php echo $row['slug']; ?>.html"><?php echo $row['name']; ?></a>
                                                <ul>
                                                    <?php
                                                        $rows = array();
                                                        $category = $con->query("select * from subcategory where menu = $id");
                                                        while($row = $category->fetch_assoc())
                                                        $rows[] = $row;
                                                        foreach($rows as $row){
                                                            $id = $row['scid'];
                                                            $name = $row['name'];
                                                            $slug = $row['slug'];
                                                        ?>
                                                    <li class="has-sub"><a href="<?php echo $row['slug']; ?>.html"><?php echo $row['name']; ?></a>
                                                        <ul>
                                                            <?php 
                                                            $rows = array();
                                                            $category = $con->query("select * from subcategory where menu = $id");
                                                            while($row = $category->fetch_assoc())
                                                            $rows[] = $row;
                                                            foreach($rows as $row){
                                                                $id = $row['scid'];
                                                                $name = $row['name'];
                                                                $slug = $row['slug'];
                                                            ?>
                                                            <li class="has-sub"><a href="<?php echo $row['slug']; ?>.html"><?php echo    $row['name']; ?></a>
                                                                <ul>
                                                                    <?php 
                                                                $rows = array();
                                                                $category = $con->query("select * from subcategory where menu = $id");
                                                                while($row = $category->fetch_assoc())
                                                                $rows[] = $row;
                                                                foreach($rows as $row){
                                                                    $id = $row['scid'];
                                                                    $name = $row['name'];
                                                                    $slug = $row['slug'];
                                                                ?>
                                                                    <li class="has-sub"><a href="<?php echo $row['slug']; ?>.html"><?php echo    $row['name']; ?></a>
                                                                        <ul>
                                                                            <?php 
                                                                    $rows = array();
                                                                    $category = $con->query("select * from subcategory where menu = $id");
                                                                    while($row = $category->fetch_assoc())
                                                                    $rows[] = $row;
                                                                    foreach($rows as $row){
                                                                        $id = $row['scid'];
                                                                        $name = $row['name'];
                                                                        $slug = $row['slug'];
                                                                    ?>
                                                                            <li class="has-sub"><a href="<?php echo $row['slug']; ?>.html"><?php echo    $row['name']; ?></a>
                                                                                <ul>
                                                                                    <?php 
                                                                        $rows = array();
                                                                        $category = $con->query("select * from subcategory where menu = $id");
                                                                        while($row = $category->fetch_assoc())
                                                                        $rows[] = $row;
                                                                        foreach($rows as $row){
                                                                            $id = $row['scid'];
                                                                            $name = $row['name'];
                                                                            $slug = $row['slug'];
                                                                        ?>
                                                                                    <li class="has-sub"><a href="<?php echo $row['slug']; ?>.html"><?php echo    $row['name']; ?></a></li>
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
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="right-menu">
                                <ul>
                                    <!--
                                    <li>
                                        <div class="menu-search text-right">
                                            <a href="#" data-toggle="modal" data-target=".popup1"><i class="fas fa-search"></i></a>
                                        </div>
                                    </li>
-->
                                    <li>
                                        <div class="icon"><img src="img/bg/top-m-icon.png" alt="top-m-icon.png"></div>
                                        <div class="text">
                                            <span>Call Now !</span>
                                            <strong>9619851252 / 9833890642</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->