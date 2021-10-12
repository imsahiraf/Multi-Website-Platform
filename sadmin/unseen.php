<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "UPDATE `noti` SET `seen` = '1' WHERE `noti`.`id` = $id")){
          echo '<script>document.location="noti.php"</script>';  
        }
        else {
            echo '<script>alert("Not yet unseen");document.location="noti.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="noti.php"</script>';
}
?>
