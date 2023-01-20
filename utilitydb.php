<?php
include "dbconn.php";

if (isset($_POST['add-utility'])) {
    $name = $_POST['name'];
    $water = $_POST['water'];
    $electricity = $_POST['electricity'];
    $rate = $_POST['rate'];

    $sql = "INSERT INTO utility_bills(name, water, electricity, rate)
    VALUES ('$name', '$water', '$electricity', '$rate')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: utility.php?msg=Bills added successfully");
    } else {
        echo "Failed";
    }
}
?>