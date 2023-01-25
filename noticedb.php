<?php
include "dbconn.php";

if (isset($_POST['notice-db'])){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    

    $sql = "INSERT INTO notice_board(name, date, title, content)
    VALUES ('$name', '$date', '$title', '$content')";

    $result = mysqli_query($conn, $sql);


    if($result) {
        header("Location: room.php?msg=Room details added succesfully");
    } else {
        echo "Failed";
    }
}
?>