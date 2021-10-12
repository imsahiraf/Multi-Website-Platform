<?php include "../include/db.php"?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        if(mysqli_query($con, "DELETE from `contacts` WHERE `id` = '$id'")){
          echo '<script>alert("Contact Deleted Successfull");document.location="client-contact.php"</script>';  
        }
        else {
            echo '<script>alert("Unable To Delete Contact");document.location="client-contact.php"</script>';
        }
    }
else{
    echo '<script>alert("Id Not Found");document.location="client-contact.php"</script>';
}
?>