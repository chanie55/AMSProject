<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="photos/wave.png">
	<div class="container">
		<div class="img">
			
	    </div>
		<div class="login-container">
			<form action="login.php" method = "POST">
				
				<img class="avatar" src="photos/avatar.svg">
				<h2>Welcome</h2>
				<?php
					if(isset($_GET['error'])) { ?>
					<p class = "error">
						<?php
							echo $_GET['error']; ?>
				<?php } ?>
           		<div class="input-div one ">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input class="input" type="text" name = "username">
           		   </div>
           		</div>
           		<div class="input-div two ">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input class="input" type="password" name = "password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name = "login-submit">
            </form>
        </div>
    </div>
    
    <script src="js/index.js"></script>
</body>
</html>