
<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "css\style.css"/>

        <style> 
            <?php
                include "CSS/style.css"
            ?>
        </style>

    </head>
    <body>
        <header>
            <h3>
                Apartment Management System
            </h3>
            <button id = "show-login" class = "btnLogin"> LOGIN </button>
        </header>

    
    <!-- LOGIN FORM -->
        <div class = "form">
            <label class="close" title="close">&times;</label>
            
            <form id = "form1" name = "formlogin" method = "POST" action="login.php">
                <h4>Login</h4>
                    <?php
                        if (isset($_GET['error'])) { ?>
                            <p class = "error">
                                <?php 
                                    echo $_GET['error']; ?>
                            </p>
                        <?php } ?>
                <label>Username</label>
                <input type="text" name = "username">
                <div id = "uname-error"> Username is required </div>
                <label>Password</label>
                <input type="password" name = "password">
                <div id = "pass-error"> Password is required </div>
                <br>
                <a href="#">Forgot Password?</a>
                <button type="submit" id = "pop" class= "loginbtn" name = "login-submit">Login</button>
            </form>
        </div> 
        
        <script defer scr = "validation.js"> 
            document.querySelector("#show-login").addEventListener("click", function() {
                document.querySelector(".form").classList.add("active"); 
            })

            document.querySelector(".form .close").addEventListener("click", function() {
                document.querySelector(".form").classList.remove("active");
            })
        </script> 
        
      

    </body>
</html>