<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$conn = mysqli_connect($host, $user, $password, $db);
mysqli_select_db($conn, $db);

if(isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)){
        header("Location: index.php?error=Username is required");
        exit();
    } else if (empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM adminList WHERE username = '$uname' AND password = '$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $uname && $row['password'] === $pass) {
                    $_SESSION['username'] = $row['username'];
                    header("Location: adminDashboard.php");
                    exit();
                } else {
                    header("Location: index.php?error=Incorrect username or password");
                    exit();
                }

        } else {
            header("Location: index.php?error=Incorrect username or password");
            exit();
        }

    }

    /*
    $sql = "SELECT * FROM adminList WHERE username = '".$uname."' AND password = '".$password."' limit 1";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['username'] == $uname && $row['password'] == $password){
        echo '<a href = "adminDashboard.php">
        <input type = "submit"/>
        </a>';
    } else {
        echo "Incorrect!";
    } 
    */
} else {
    header("Location: index.php");
    exit();
}

?>





<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "css\style.css"/>
    </head>
    <body>
        <header>
            <h3>
                Apartment Management System
            </h3>
            <label for="show" class = "btnLogin"> LOGIN </label>
        </header>

        <input type="checkbox" id="show">
        <div class = "form">
            <label for="show" class="close" title="close">&times;</label>
            
            <form method = "POST" action="#">
                <h4>Login</h4>
                <?php if (isset($_GET['error'])) { ?>
                    <p class = "error">
                        <?php 
                            echo $_GET['error']; 
                        ?>
                    </p>
                   <?php } ?>

                <label>Username</label>
                <input type="text" name = "username">
                <label>Password</label>
                <input type="password" name = "password">
                <a href="#">Forgot Password?</a>
                <button type="submit" name = "login-submit" /*onclick="location.href='adminDashboard.html'"*/>Login</button>
            </form>
        </div>
    </body>
</html>