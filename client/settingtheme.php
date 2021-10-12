<?php include "include/header.php";?>
<?php
if(isset($_GET['file']) && !empty($_GET['file'])){
$fil = $_GET['file'];
if (count(scandir('../'.$domain)) >= 10){
$dir = '../'.$domain;
$di = new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS);
$ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);
foreach ( $ri as $file ) {
    if($file->isDir() ?  rmdir($file) : unlink($file)){
        
    }
        else {
            echo '<script>alert("Theme unable to delete!");document.location="theme.php"</script>';
        }
}
//return true;
}

$zip = new ZipArchive;
if ($zip->open('../Theme/'.$fil.'/theme.zip') === TRUE) {
	$zip->extractTo('../'.$domain.'/');
	$zip->close();
	echo '<script>alert("Theme Added Successfully!!  Fill Your Website Details");document.location="web_form.php"</script>';
} else {
	echo '<script>alert("No Such Theme Found! Select Other");document.location="theme.php"</script>';
}
    }
else{
    echo '<script>alert("No Such Folder Theme Found!");document.location="theme.php"</script>';
}
?>