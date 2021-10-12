<?php
/*$input_image="sample.jpg";
$output_image="output.jpg";

$img=imagecreatefromjpeg($input_image);
imagejpeg($img,$output_image,10);*/
if(isset($_POST['submit'])){
    $info=getimagesize($_FILES['image']['tmp_name']);
        print_r($info);
    $img_size=$_FILES['image']['size'];
    if(isset($img_size)){
    echo "$img_size";
}
    if(isset($info['mime'])){
        if($info['mime']=="image/jpeg"){
            $img=imagecreatefromjpeg($_FILES['image']['tmp_name']);
        }elseif($info['mime']=="image/png"){
            $img=imagecreatefrompng($_FILES['image']['tmp_name']);
        }else{
            echo "Only select jpg or png image";
        }
        if(isset($img)){
            $output_image=time().'.jpg';
            imagejpeg($img,$output_image,0);
            echo "Processing done";
        }
    }else{
        echo "Only select jpg or png image";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="image" required />
    <input type="submit" name="submit" />
</form>


<!--
                                        <?php
                                        if(isset($errors)){
                                        ?>
                                        <div class="alert alert-danger text-center" data-animation-in="animated fadeIn" data-animation-out="animated fadeOut">
                                        <?php
                                        foreach($errors as $showerror){
                                            echo $showerror;
                                        }
                                        ?>
                                        </div>
                                        <?php } ?>
                                       <?php 
                                       if(isset($msg)){
                                        echo $msg;
                                       }
                                       ?>
-->








$data =mysqli_query($con,"select * from subcategory");
while($r1 = mysqli_fetch_assoc($data)){
echo '
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://localhost/fourty60.com/</loc>
        <lastmod>2021-06-23T07:40:20+02:00</lastmod>
        <priority>1</priority>
    </url>
    <url>
        <loc>http://localhost/fourty60.com/'<?php isset($r1['slug'])?> echo'</loc>
        <lastmod>2021-06-23T07:40:20+02:00</lastmod>
        <priority>0.5</priority>
    </url>
</urlset>'
}
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://localhost/fourty60.com/</loc>
        <lastmod>2021-06-23T07:40:20+02:00</lastmod>
        <priority>1</priority>
    </url>
    <url>
        <loc>http://localhost/fourty60.com/<?php isset($r1['slug'])?></loc>
        <lastmod>2021-06-23T07:40:20+02:00</lastmod>
        <priority>0.5</priority>
    </url>
</urlset>







$baseUrl = 'http://localhost/fourty60.com/';
echo '
<?xml version="1.0" encoding="UTF-8"?>'. PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'. PHP_EOL;
    $datas = array();
    $data =mysqli_query($con,"select * from subcategory");
    while($r1 = mysqli_fetch_assoc($data)) {
    $url = $r1['slug'];
    $date = str_replace('/', '-', $r1['created']);
    echo '<url>';
        echo '<loc>'.$baseUrl.$url.'</loc>'. PHP_EOL;
        echo '<lastmod>'.date("Y-m-d", strtotime($date)).'T'.date("H-i-s", strtotime($date)).'Z</lastmod>'. PHP_EOL;
        echo '</url>';
    }
    echo '</urlset>'. PHP_EOL;
?>





$baseUrl = 'http://localhost/fourty60.com/';
echo '
<?xml version="1.0" encoding="UTF-8"?>'. PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'. PHP_EOL;
    $datas = array();
    $data =mysqli_query($con,"select * from subcategory");
    while($r1 = mysqli_fetch_assoc($data)) {
    $url = $r1['slug'];
    $date = str_replace('/', '-', $r1['created']);
    echo '<url>';
        echo '<loc>'.$baseUrl.$url.'</loc>'. PHP_EOL;
        echo '<lastmod>'.date("Y-m-d", strtotime($date)).'T'.date("H-i-s", strtotime($date)).'Z</lastmod>'. PHP_EOL;
        echo '</url>';
    }
    echo '</urlset>'. PHP_EOL;







<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-12">
                    <img src="products/zs.png" style="width:280px;height:280px;">
                    <!--                                                    <h6 class="text-muted m-b-0 text-center">Product Pages</h6>-->
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-primary btn-round waves-effect waves-light" href="addclients.php">View Theme</a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success btn-round waves-effect waves-light" href="addclients.php">Add Theme</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
