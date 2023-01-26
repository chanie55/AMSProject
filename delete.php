<?php

include "dbconn.php"; // Using database connection file here

$name = $_GET['name']; // get id through query string

$query = "DELETE FROM contacts WHERE name={$_POST['name']} LIMIT 1"; // delete query

if($query)
{
  
    header("room.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>