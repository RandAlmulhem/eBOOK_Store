<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "raff_bstore";

    $con = mysqli_connect($host, $user, $password, $database);

    if(!$con ){
        die("ERROR: Could not connect. " . $mysqli_connect_error());
    }
    session_start(); 
?>