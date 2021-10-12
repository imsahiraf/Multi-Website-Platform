<?php include "../include/db.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
if($con->query("INSERT INTO `subcategory` (`name`,`slug`,`keywords`,`description`,`cid`,`image`,`content`) SELECT `name`,`slug`,`keywords`,`description`,`cid`,`image`,`content` from subcategory WHERE `scid` = '$id';")){
echo '<script>alert("Product Duplicate Successful!");document.location="products.php"</script>';
} else {
echo '<script>alert("Product Unable To Duplicate");document.location="addproducts.php"</script>';
}
    }
?>