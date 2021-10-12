<?php include"header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `subcategory` WHERE `slug` = '$id'"));

    }
?>
<main>
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
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
        
        <div class="chosse-img" data-animation="fadeInRight animated" data-delay=".2s"></div>
        <div class="container">
            <div class="row">
                <!-- rightside -->
                <?php 
                $myfile = fopen("testfile.html", "w");
                $txt = isset($data['content']);
                fwrite($myfile, isset($data['content']));
                fclose($myfile);
                $myfile = fopen("testfile.html", "r");
                $depth = 6;
	            $html_string = fread($myfile, filesize('testfile.html'));
                fclose($myfile);
                echo $html_string;
	            //get the headings down to the specified depth
	            $pattern = '/<h[2-'.$depth.']*[^>]*>.*?<\/h[2-'.$depth.']>/';
	            $whocares = preg_match_all($pattern,$html_string,$winners);
 
	            //reformat the results to be more usable
	            $heads = implode("\n",$winners[0]);
	            $heads = str_replace('<a name="','<a href="#',$heads);
	            $heads = str_replace('</a>','',$heads);
	            $heads = preg_replace('/<h([1-'.$depth.'])>/','<li class="toc$1">',$heads);
	            $heads = preg_replace('/<\/h[1-'.$depth.']>/','</a></li>',$heads);
 
	            //plug the results into appropriate HTML tags
	            $contents = '<div id="toc"> 
	            <p id="toc-header">Table of Contents</p>
	            <ul>
	            '.$heads.'
	            </ul>
	            </div>';
	            echo $contents;
                unlink("testfile.html");
                ?>
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
