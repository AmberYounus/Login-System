<?php
// session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['logggedin'] != true){
//     header("location : login.php");
//     exit;
// }
session_start();
session_unset();
session_destroy();
header("location : login.php");
     exit;
?>