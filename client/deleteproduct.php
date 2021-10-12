<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "DELETE from `subcategory` WHERE `scid` = '$id'")){
          echo '<script>alert("Data Deleted Successfull");document.location="products.php"</script>';  
        }
        else {
            echo '<script>alert("Unable To Delete Data");document.location="products.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="products.php"</script>';
}
?>