<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "users";

$conn = mysqli_connect($host, $user, $password);
mysqli_select_db($conn, $db);

if(!$conn) {  
        echo "failed";
    } 
?>