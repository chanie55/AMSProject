<?php
/*
    $uname = $_POST['username'];
    $pass = $_POST['password'];

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
            
            <form method = "POST" action="login.php">
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