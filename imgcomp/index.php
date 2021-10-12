
<form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='imagefile' >
  <input type='submit' value='Upload' name='upload'> 
</form>

<?php
if(isset($_POST['upload'])){

  // Getting file name
  $filename = $_FILES['imagefile']['name'];
 
  // Valid extension
  $valid_ext = array('png','jpeg','jpg');

  // Location
  $location = "images/".$filename;

  // file extension
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
  $file_size = $_FILES["imagefile"]["size"];

  // Check extension
  if(in_array($file_extension,$valid_ext)){
      //checking file and then compressing the image
      if($file_size < 500000){
          echo "50kb ke andar hai";
        compressImage($_FILES['imagefile']['tmp_name'],$location,60);
        }
      elseif($file_size > 499000  && $file_size < 1000000){
          echo "1mb ke andar hai";
      compressImage($_FILES['imagefile']['tmp_name'],$location,50);
       }
      elseif($file_size > 999000  && $file_size < 1500000){
          echo "1.5mb ke andar hai";
          compressImage($_FILES['imagefile']['tmp_name'],$location,40);

      }
      elseif($file_size > 1499000  && $file_size < 2000000){
          echo"2mb ke andar";  
          compressImage($_FILES['imagefile']['tmp_name'],$location,25);
      }
      else{
         compressImage($_FILES['imagefile']['tmp_name'],$location,15);   
      }
      
  }else{
    echo "Invalid file type.";
  }
}


function compressImage($source, $destination, $quality) {
   list( $width, $height, $type, $attr ) = getimagesize( $source );
       

        switch( image_type_to_mime_type( $type ) ){
            case 'image/jpeg':
                $image = imagecreatefromjpeg( $source );
                imagejpeg( $image, $destination, $quality );
            break;
            case 'image/png':
                 $quality=$quality > 9 ?  : $quality;
                $image = imagecreatefrompng( $source );
                $bck   = imagecolorallocate( $image , 0, 0, 0 );
                imagecolortransparent( $image, $bck );//makes the background color traansparent
                imagealphablending( $image, false );
                imagesavealpha( $image, true );
                imagepng( $image, $destination, $quality );
            break;
            default:
                exit( $type );
            break;              
        }
        imagedestroy( $image );
    }


?>