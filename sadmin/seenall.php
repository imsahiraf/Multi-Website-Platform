<?php include "../include/db.php"?>
<?php
if(mysqli_query($con, "UPDATE `noti` SET `seen` = '0'")){
    echo '<script>document.location="noti.php"</script>';  
} 
?>