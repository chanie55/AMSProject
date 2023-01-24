<?php
include "dbconn.php";

if (isset($_POST['add-room'])){
    $name = $_POST['name'];
    $roomno = $_POST['roomno'];
    $bedno = $_POST['bedno'];
    $monthly = $_POST['monthly'];
    $startdate = $_POST['startdate'];

    $sql = "INSERT INTO room_acc(name, roomno, bedno, monthly, startdate)
    VALUES ('$name', '$roomno', '$bedno', '$monthly', '$startdate')";

    $result = mysqli_query($conn, $sql);


    if($result) {
        header("Location: room.php?msg=Room details added succesfully");
    } else {
        echo "Failed";
    }
}
?>