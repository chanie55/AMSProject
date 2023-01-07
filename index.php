
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

        <!--PICTURES NGA MUDAGAN -->
        
        <div class="body">
            <div class="back"></div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                  <img src="photos/bh1.jpg" style="height: 300px; width: 500px;">
                </div>

                <div class="mySlides fade">
                  <img src="CP2.jpg" style="height: 300px; width: 500px;">
                </div>

                <div class="mySlides fade">
                  <img src="" style="height: 300px; width: 500px;">
                </div>
				
				 <div class="mySlides fade">
                  <img src="" style="height: 300px; width: 500px;">
                </div>
				
		

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <br>

                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
				  <span class="dot" onclick="currentSlide(4)"></span> 
			
				  
                </div>
            </div>
            <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";  
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                }
				
					var time = null;
					function setTimer() {
						timer=setInterval(function() {	
							plusSlides(1) ; } , 5000) ;
						}
						setTimer();
				
            </script>
        </div>

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
                <button type="submit" class= "loginbtn" name = "login-submit">Login</button>
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
        
        <!--gais tempo lang nang naga dagan dagan na pic akoa lang gi push para di mawala huhuehueh -->

    </body>
</html>