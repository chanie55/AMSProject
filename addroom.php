<?php
include "dbconn.php";

if (isset($_POST['add-room'])){
    $name = $_POST['name'];
    $roomno = $_POST['roomno'];
    $bedno = $_POST['bedno'];
    $monthly = $_POST['monthly'];

    $sql = "INSERT INTO room_acc(name, roomno, bedno, monthly)
    VALUES ('$name', '$roomno', '$bedno', '$monthly')";

    $result = mysqli_query($conn, $sql);


    if($result) {
        header("Location: room.php?msg=Room details added succesfully");
    } else {
        echo "Failed";
    }
}
?>