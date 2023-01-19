<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
            <link rel = "styelsheet" href = "css\noticeBoard.css">
        <style>
            <?php
                include "CSS/noticeBoard.css"
            ?>
        </style>
    </head>
    <body>

    <div class = "d-flex" id = "wrapper">
            <!--sidebar-->
            <div id = "sidebar-wrapper">

                <div class = "sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border = bottom">
                    <i class = "fs-2 m-0"> </i> Welcome
                </div>

                <div class = "list-group">
                    <a href = "adminDashboard.php" class = "list-group-item second-text active">
                        <i class = "fas fa-home-alt me-2"> </i> Home
                    </a>
                    <a href = "tenantProfile.php" class = "list-group-item second-text active">
                        <i class = "fas fa-user-alt me-2"> </i> Tenant's Profile
                    </a>
                    <a href = "room.php" class = "list-group-item second-text active">
                        <i class = "fas fa-door-open me-2"> </i> Room Management
                    </a>
                    <a href = "utility.php" class = "list-group-item second-text active">
                        <i class = "fas fa-money-check-dollar me-2"> </i> Utility Bills
                    </a>
                    <a href = "noticeBoard.php" class = "list-group-item second-text active">
                        <i class = "fas fa-commenting me-2"> </i> Notice Board
                    </a>
                    <a href = "sfTenants.php" class = "list-group-item second-text active">
                        <i class = "fas fa-commenting me-2"> </i> Suggestion From Tenants
                    </a>
                    <a href = "invoice.php" class = "list-group-item second-text active">
                        <i class = "fas fa-file-invoice-dollar me-2"> </i> Invoice
                    </a>
                    <a href = "collectibles.php" class = "list-group-item second-text active">
                        <i class = "fas fa-dollar-sign me-2"> </i> Income Reports
                    </a>
                </div>
            </div>
            

        <!--end-->
       

        <div id = "page-content-wrapper">
            <nav class = "navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class = "d-flex align-items-center"> 
                    <h2 class = "fs-2 m-0"> Notice Board </h2>
                </div>

                <div class = "navbar-collapse">
                    <ul class = "navbar-nav ms-auto mb-2 mb-lg-0"> 
                        <li class = "navbar-item-dropdown">
                            <a href = "#" class = "nav-link dropdown-toggle second-text fw-bold" id = "navbarDropdown" role = "button"
                                data-bs-toggle = "dropdown" aria-expanded = "true">
                                <i class = "fas fa-user me-2"></i> Admin 
                            </a> 
                            <ul class = "dropdown-menu" aria-labelledby = "navbarDropdown">
                                <li> <a href = "#" class = "dropdown-item"> Profile </a></li>
                                <li> <a href = "#" class = "dropdown-item" onclick = "openForm()"> Logout </a></li> 
                            </ul>

                        </li>

                    </ul> 

                </div>
            </nav>  

           <!-- Button trigger modal -->
          <button type="button" class="btn btn-add mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class="fa fa-pen-to-square" style="font-size:20px;float:left;" ></i>New Post 
          </button>
        

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    
  
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form>
            <div class ="label">   
            <label for="fname">Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" id="fname" name="fname"><br><br>
            </div>

            <div class="label">
            <label for="Date">Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="date" id="date" name="date">
            </div>
  
            <div class ="label"> 
            <label for="ftitle">Title:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" id="ftitle" name="ftitle"><br><br>
            </div>

            <div class="label">
            <label for="lname">Content:</label>
            <textarea id="fcontent" name="fcontent" rows="4" cols="50"></textarea>
            </div>
           

            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Post</button>
      </div>

     <!-- <div class="modal-footer">
        <form method="POST" class="btn btn-secondary" data-bs-dismiss="modal" action="noticeBoard.php"> </form>
      </div> -->
    </div>
  </div>
</div>
 



        <script>
            function openForm() {
                document.getElementById("modal").style.display = "block";
            }

            function closeForm(){
                document.getElementById("modal").style.display = "none";
            }
        </script>
                       <!--Notice Board-->
        <!--
            <div class="myDiv">
            <form>
            <div class ="label">   
            <label for="fname">Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" id="fname" name="fname"><br><br>
            </div>

            <div class ="label"> 
            <label for="lname">Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" id="fdate" name="fdate"><br><br>
            </div>

            <div class ="label"> 
            <label for="ftitle">Title:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" id="ftitle" name="ftitle"><br><br>
            </div>

            <div class="label">
            <label for="lname">Content:</label>
            <textarea id="fcontent" name="fcontent" rows="4" cols="50"></textarea>
            </div>
            <input type="post" value="Post" float = right;> 

            </form> -->
            <style>
                .col{
                    padding: 20px;
                    display: flex;
                    column-gap: 10px;
                    row-gap: 10px;
                    flex-wrap: wrap;
                }
                .cont{
                    background: #ddd;
                    padding: 20px;
                    width: 300px;
                    height: 200px;
                    border-radius: 10px;
                    box-shadow: 1px 1px 3px 0px black;
                }
                .cont2{
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                }
            </style>
            <div class="col">
                <div class="cont">
                    <div class="cont2">
                        <div class="name">
                            Mica
                        </div>
                        <div class="date" style="text-align: right;">
                            2023, 01, 15
                        </div>
                    </div><br>
                    <div>
                        Notes:
                        <p>sss</p>
                    </div>
                </div>
                
                <div class="cont">
                    <div class="cont2">
                        <div class="name">
                            Mica
                        </div>
                        <div class="date" style="text-align: right;">
                            2023, 01, 15
                        </div>
                    </div><br>
                    <div>
                        Notes:
                        <p>sss</p>
                    </div>
                </div>
                
            </div>


            </div>


                </div>   
                      
        </div>
        
    </div>
<<<<<<< HEAD

         
=======
        
    <div class="overlay" id = "popup-msg">
        <div class="popup" id = "popup">
            <p>Are you sure you want to log out?</p>
            <div class="text-right">
                <button class="btn btn-cancel" onclick="closeForm()">Cancel</button>
                <button class="btn btn-primary" onclick="location.href='index.php'">Yes</button>
            </div>
        </div>
    </div>

<script>
    function openForm() {
    document.getElementById("popup-msg").style.display = "block";
    document.getElementById("popup").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popup-msg").style.display = "none";
        document.getElementById("popup").style.display = "none";
    }
</script>
>>>>>>> aad2a0e4e780542ace93c605e47bfc97112817ab
    </body>
</html>