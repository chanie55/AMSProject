<?php
include "dbconn.php";

$username = $_GET['username'];
$sql = "DELETE FROM tenant_acc WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if ($result){
    header("Location: tenantProfile.php?ms=Record Deleted Successfully");
} else {
    echo "Failed: ";
}
?>