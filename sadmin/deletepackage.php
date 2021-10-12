<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "DELETE from `package` WHERE `id` = '$id'")){
          echo '<script>alert("Package Deleted Successfull");document.location="package.php"</script>';  
        }
        else {
            echo '<script>alert("Unable To Delete Data");document.location="package.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="package.php"</script>';
}
?>