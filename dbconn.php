<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "users";

$conn = mysqli_connect($host, $user, $password, $db);

if(!conn) {  
        echo "failed";
    } 
?>