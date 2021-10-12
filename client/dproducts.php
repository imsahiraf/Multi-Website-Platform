<?php include "include/header.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
$id = $_GET['id'];
$mb = $con->query("select * from blog where cuid = $uid")->num_rows;
$sb = $con->query("select * from subcategory where cuid = $uid")->num_rows;
$page = $mb + $sb;
if($page < $pages){
if($con->query("INSERT INTO `subcategory` (`name`,`slug`,`keywords`,`description`,`cid`,`image`,`content`,`cuid`) SELECT `name`,`slug`,`keywords`,`description`,`cid`,`image`,`content`,`cuid` from subcategory WHERE `scid` = '$id';")){
$last_id = $con->insert_id;
echo '<script>alert("Product Duplicate Successful!");alert("Now Edit It Carefully!");document.location="aedit.php?id='.$last_id.'"</script>';
} else {
echo '<script>alert("Product Unable To Duplicate");document.location="addproducts.php"</script>';
} 
}else{
echo '<script>alert("Product Unable To Duplicate.Please Update Your Package!");document.location="products.php"</script>';   
}
}
?>