<?php   
require_once('config.php');
unset($_SESSION["Cart"]);
session_destroy(); 
header("Location:index.php"); //to redirect back to "index.php" after logging out
exit();

?>