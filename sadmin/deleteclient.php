<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "DELETE from `user` WHERE `buid` = '$id'")){
          echo '<script>alert("Client Deleted Successfull");document.location="client.php"</script>';  
        }
        else {
            echo '<script>alert("Unable To Delete Data");document.location="client.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="client.php"</script>';
}
?>
