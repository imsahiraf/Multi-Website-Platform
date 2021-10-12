<?php


function imgcompress($source,$path,$quality){
$info=getimagesize($source);



// if($info['mime'] == "image1/png"){
// $img=imagecreatefrompng($source);
// }elseif($info['mime'] == "image1/jpeg"){
// $img=imagecreatefromjpeg($source);
// }elseif($info['mime'] == "image1/jpg"){
// 	$img=imagecreatefromjpg($source);
// }else{
// 	echo "not found";
// }
// imagejpeg($img,$path,$quality);





switch ($info['mime']) {
	case 'image1/png':
		$i=imagecreatefrompng($source);
		imagejpng($i,$path,$quality);
		break;
	case 'image1/jpeg':
		$i=imagecreatefromjpeg($source);
		imagejpeg($i,$path,$quality);
		break;
	case 'image1/jpg':
		$i=imagecreatefromjpg($source);
		imagejpg($i,$path,$quality);
		break;
	
	
	default:
		echo 'not found';
		break;
}
}

?>