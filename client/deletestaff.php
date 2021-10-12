<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "DELETE from `user` WHERE `buid` = '$id'")){
          echo '<script>alert("Staff Deleted Successfull");document.location="staff.php"</script>';  
        }
        else {
            echo '<script>alert("Unable To Staff Data");document.location="staff.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="staff.php"</script>';
}
?>