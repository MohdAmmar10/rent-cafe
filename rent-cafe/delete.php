<?php
    setcookie("EMAIL","",time()- 3600);
    setcookie("PASSWORD","",time()- 3600);
    header("Location: login.php");
?>
