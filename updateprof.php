<?php
include "dbconn.php";

if (isset($_POST['update-prof'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobilenum = $_POST['mobilenum'];
    $address = $_POST['address'];
    $emailadd = $_POST['emailadd'];
    $occupation = $_POST['occupation'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];

    $sql = "INSERT INTO tenant_prof(firstname, lastname, mobilenum, address, emailadd, occupation, gender, birthdate)
    VALUES ('$firstname, $lastname, $mobilenum, $address, $emailadd, $occupation, $gender, $birthdate')";

    $result = mysqli_query($conn, $sql);
    
    if($result) {
        header("Location: tenantProfileSettings.php?msg=Update Successfully");
    } else {
        echo "Failed";
    }
}
?>