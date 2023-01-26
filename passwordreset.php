

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
			<form id = "validate_form" action="#" method = "POST">
			<input type = "hidden" name = "email" value = "<?php echo $email; ?>" />
				<img class="avatar" src="photos/avatar.svg">
				<h2>Reset Password</h2>
           		<div class="input-div one ">
           		   <div class="i">
           		   		<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Password</h5>
           		   		<input id = "pwd" class="input form-control" type="password" name = "pwd" required
                        data-parsley-type = "pwd" data-parsley-trigger = "keyup" >
           		   </div>
           		</div>
           		<div class="input-div two ">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id = "cpwd" class="input form-control" type="password" name = "cpwd" required
                        data-parsley-type = "cpwd" data-parsley-trigger = "keyup" >
            	   </div>
            	</div>
            	<input type="submit" id = "login" class="btn btn-success" value="Submit" name = "pwdrst">
                <p class = "error">
			        
		        </p>
            </form>
        </div>
    </div>

    <script src="js/index.js"></script>
</body>
</html>