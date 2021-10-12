<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "DELETE from `blog` WHERE `id` = '$id'")){
          echo '<script>alert("Blog Deleted Successfull");document.location="index.php"</script>';  
        }
        else {
            echo '<script>alert("Unable To Delete Blog");document.location="index.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="index.php"</script>';
}
?>