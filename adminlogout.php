<?php   
require_once('config.php');
session_destroy(); 
header("Location:admin.php"); //to redirect back to "admin.php" after logging out
exit();
?>