<?php include "../include/db.php"?>
<?php
if(isset($_GET['domain']) && !empty($_GET['domain'])){
        $id = $_GET['domain'];
        if($query = $con->query("SELECT * from user where domain = '$id'")){
          $count= mysqli_num_rows($query);
            if($count == 1)
            {
               $row= mysqli_fetch_assoc($query);
                 $_SESSION['userloggedin']  = $row['buid'];
                 echo '<script>document.location="../client/login.php?id='.$_SESSION['userloggedin'].'"</script>';
                 unset($_SESSION['userloggedin']);
                 exit();
            }  
        }   
        else {
            echo '<script>alert("Unable To Redirect Client Panel");document.location="client.php"</script>'; 
        }
    }
else{
    echo '<script>alert("No Such client Panel Found");document.location="client.php"</script>';
}
?>