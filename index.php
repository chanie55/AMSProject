<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
            <?php
                include "CSS/style.css"
            ?>
        </style>
</head>

<body>
	<img class="wave" src="photos/wave.png">
	<div class="container">
		<div class="img">
			
	    </div>
		<div class="login-container">
			<form id = "adminlogin" action="login.php" method = "POST">
				
				<img class="avatar" src="photos/avatar.svg">
				<h2>Welcome</h2>

				<div class = "button-box">
					<div id = "bbtn"> </div>
						<button type = "button" class = "toggle-button" onclick = "adminlogin()"> Admin </button>
						<button type = "button" class = "toggle-button" onclick = "tenantlogin()"> Tenant </button> 
				</div>
				
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
            	<a href="forgotpassword.php">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name = "login-submit">
            </form>


			<form id = "tenantlogin" action="tenantlogin.php" method = "POST">

			<img class="avatar" src="photos/avatar.svg">
				<h2>Welcome</h2>

				<div class = "button-box">
					<div id = "bbtn2"> </div>
						<button type = "button" class = "toggle-button adminbtn" onclick = "adminlogin()"> Admin </button>
						<button type = "button" class = "toggle-button tenantbtn" onclick = "tenantlogin()"> Tenant </button> 
				</div>
				
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
            	<a href="forgotpassword.php">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name = "login-submit2">
            </form>
        </div>
    </div>
    
    <script src="js/index.js"></script>

	<script>
		var x = document.getElementById("adminlogin");
		var y = document.getElementById("tenantlogin");
		var z = document.getElementById("bbtn");

		function tenantlogin() {
			x.style.left = "-500px";
			y.style.right = "-50px";
			z.style.left = "181px";
			x.style.display = "none";
			y.style.display = "block";
		}

		function adminlogin() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
			y.style.display = "none";
			x.style.display = "block";
		}
	</script>

</body>
</html>