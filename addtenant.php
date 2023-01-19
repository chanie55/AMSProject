<?php
include "dbconn.php";

if (isset($_POST['submit-tenant'])) {
    $user_name = $_POST['username'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $password = $_POST['password'];
    $conNum = $_POST['conNum'];

    $sql = "INSERT INTO tenant_acc(username, firstname, lastname, password, conNum)
                VALUES ('$user_name', '$first_name', '$last_name', '$password', '$conNum')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: tenantProfile.php?msg=Tenant added successfully");
    } else {
        echo "Failed" ;
    }
}
?>