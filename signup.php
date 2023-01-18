<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Tenant</title>
	<link rel="stylesheet" href="css\signup.css">
  <style>
    <?php
    include "CSS/signup.css"
    ?>
    </style>
</head>
<body>

<div class="wrapper">
    <div class="title">
      Add Tenant
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" required placeholder="" id="firstname" name="firstname" >
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" required placeholder="" id="lastname" name="lastname" >
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" required placeholder="" id="password" name="password"> 
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" required placeholder="" id="password" name="cfpassword"> 
       </div> 
        <div class="inputfield">
          <label>Contact No.</label>
          <input type="text" class="input" required placeholder="" id="contactno." name="contactno">
       </div> 

      
      <div class="inputfield">
        <a href="#popup1"><input type="submit" value="Register" class="btn" name = "Add"></a>
      </div>

<div id="popup1" class="overlay">
	<div class="popup">
    <h1> Register Successfully </h1>
		<a class="close" href="#">&times;</a>
		<div class="content">
      <a href="tenantProfile.php" class="btn"> Oki </a>
		</div>
	</div>
</div>


    </div>
</div>	
	
</body>
</html>