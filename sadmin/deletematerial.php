<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "DELETE from `category` WHERE `cid` = '$id'")){
          echo '<script>alert("Material Deleted Successfull");document.location="materials.php"</script>';  
        }
        else {
            echo '<script>alert("Unable To Delete Data");document.location="materials.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="materials.php"</script>';
}
?>