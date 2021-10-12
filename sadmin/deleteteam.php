<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "DELETE from `admin` WHERE `id` = '$id'")){
          echo '<script>alert("Admin Deleted Successfull");document.location="teams.php"</script>';  
        }
        else {
            echo '<script>alert("Admin To Delete Data");document.location="teams.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="teams.php"</script>';
}
?>
