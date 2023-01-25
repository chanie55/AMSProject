<?php
include "dbconn.php";

if (isset($_POST['submit-tenant'])) {
    $user_name = $_POST['username'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $password = $_POST['password'];
    $contactNo = $_POST['contactNo'];

    $sql = "INSERT INTO tenant_profile(username, firstname, lastname, password, contactNo)
                VALUES ('$user_name', '$first_name', '$last_name', '$password', '$contactNo')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: tenantProfile.php?msg=Tenant added successfully");
    } else {
        echo "Failed" ;
    }
}
?>