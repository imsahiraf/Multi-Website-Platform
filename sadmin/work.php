<?php 
include "../include/db.php"
    
if(isset($_POST['material'])){
        $cname = mysqli_real_escape_string($con,$_POST['material']);
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image1"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//        $fileName = $_FILES['image1']['tmp_name'];
//        $sourceProperties = getimagesize($fileName);
//        $resizeFileName = time();
//        $uploadPath = "category/";
//        $fileExt = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
//        $uploadImageType = $sourceProperties[2];
//        $sourceImageWidth = $sourceProperties[0];
//        $sourceImageHeight = $sourceProperties[1];
//		$new_width = $sourceImageWidth;
//        $new_height = $sourceImageHeight;
        switch ($uploadImageType) {
            case IMAGETYPE_JPEG:
                $resourceType = imagecreatefromjpeg($fileName); 
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                imagejpeg($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                break;

            case IMAGETYPE_GIF:
                $resourceType = imagecreatefromgif($fileName); 
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                imagegif($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                break;

            case IMAGETYPE_PNG:
                
                $resourceType = imagecreatefrompng($fileName); 
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$new_width,$new_height);
                imagepng($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                
                break;

            default:
                $imageProcess = 0;
                break;
        }
        
        $url = $uploadPath."thump_".$resizeFileName.".". $fileExt;
        $con->query("insert into category(`name`,`image`)values('".$cname."','".$url."')");
}
?>
?>







url
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . 
                $_SERVER['REQUEST_URI'];
  
echo $link;

script
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Pipe",
  "image": "image",
  "url": "url",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "1",
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
    "author": {"@type": "Person", "name": ""}
  }
}
</script>