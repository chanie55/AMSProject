
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
            <link rel = "styelsheet" href = "css\tenantProfile.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            <?php
                include "CSS/tenantProfile.css"
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
                    <h2 class = "fs-2 m-0"> Tenant's Profile </h2>
                </div>

                <div class = "navbar-collapse">
                    <ul class = "navbar-nav ms-auto mb-2 mb-lg-0"> 
                        <li class = "navbar-item-dropdown">
                            <a href = "#" class = "nav-link dropdown-toggle second-text fw-bold" id = "navbarDropdown" role = "button"
                                data-bs-toggle = "dropdown" aria-expanded = "false">
                                <i class = "fas fa-user me-2"></i> Admin
                            </a> 
                            <ul class = "dropdown-menu" aria-labelledby = "navbarDropdown">
                                <li> <a href = "tenantProfileSettings.php" class = "dropdown-item"> Profile </a></li>
                                <li> <a href = "#" class = "dropdown-item" onclick = "openForm()"> Logout </a></li> 
                            </ul>

                        </li>

                    </ul> 

                </div>
            </nav>

            <!--<div class = "table-container">

            <div class="search_wrap search_wrap_1">

                <?php
                    include "dbconn.php";

                    if (isset($_POST['searchbutton'])) {
                        $searchKey = $_POST['search'];
                        $sql = "SELECT * FROM users WHERE name LIKE '%$searchKey%'";
                    } else {
                        $sql = "SELECT * FROM users";

                        $result = mysqli_query($conn, $sql);
                    }
                ?>
                    <div class="search_box">
                        <input name = "search" type="text" class="input" placeholder="Search....">
                        <div class="btn btn_common searchbutton">
                            <i class="fas fa-search" style="font-size:20px"></i>
                        </div>
                    </div>
                </div>
                            
                <a href="#" class = "btn btn-add mb-5" id = "modal-button" onclick = "openAdd()"> 
                    <i class="fa fa-user-plus" style="font-size:23px;float:left"></i> Add New 
                </a>

                <div class = "table-border">
                <table class = "table text-center">
                    <thread>
                        <tr class = "table-header">
                            <th scope = "col"> Firstname</th>
                            <th scope = "col"> LastName </th>
                            <th scope = "col"> Contact No. </th>
                            <th scope = "col"> Action </th>
                        </tr> 
                    </thread>
                    <tbody> -->

                         <!-- ADD NEW BUTTON --> 
            <div class="margin">   
            <a href="#" class = "btn btn-add mb-5" onclick = "openAdd()"> 
                    <i class="fa fa-user-plus"style="font-size:23px;float:left" ></i> Add New 
                </a>
            </div>


        <!-- TABLE -->
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                 <div class="row">
                        <div class="col-sm-4">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                             <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                      </div>
                 </div>
                </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Contact No.</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>    
                <tbody>
                <?php
                            include "dbconn.php";

                            $sql = "SELECT * FROM tenant_acc";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['firstname'] ?> </td>
                                        <td> <?php echo $row['lastname'] ?> </td>
                                        <td> <?php echo $row['conNum'] ?> </td>
                                        <td>
                                            <a href = "#" class = "action-icon link-dark">
                                            <i class = "fa-solid fa-eye fs-5 me-3"> </i>
                                            </a>
                                            <a hre  f = "" class = "action-icon link-dark" >
                                            <i class = "fa-solid fa-trash fs-5"></i>
                                            </a> 
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?> 
                </tbody>  
            </table>
            <div class="clearfix">
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                
                </ul>
            </div>
        </div>
    </div>  
</div>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
                       
                    </tbody> 
                </table>
                </div>
            </div>
        </div>
    </div>
                            
    <div class="overlay" id = "popup-msg">
        <div class="popup" id = "popup">
            <p>Are you sure you want to log out?</p>
            <div class="text-right">
                <button class="btn btn-cancel" onclick="closeForm()">Cancel</button>
                <button class="btn btn-primary" onclick="location.href='index.php'">Yes</button>
            </div>
        </div>
    </div>



    <div class="overlay1" id = "openAdd">
        <div class="popup1" id = "popupAdd">
            <p class = "formHeader">Add New Tenant</p>
            <form method="post" id="contactFrm" name="contactFrm" action = "addtenant.php">
                <div class="modal-body">
                    <div class="response"></div>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="username" id="username" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>First name:</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" required="" >
                    </div>
                    <div class="form-group">
                        <label>Last name:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Contact Number:</label>
                        <input type="text" name="conNum" id="conNum" class="form-control" required="">

                    </div>
                    <br>
                    </form>
            <div class="text-right">
                <button class="btn btn-cancel cancel" onclick="closeAdd()">Cancel</button>
                <button class="btn btn-primary" onclick="" name = "submit-tenant">Add</button>
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

<script>
    function openAdd() {
    document.getElementById("openAdd").style.visibility = "visible";
    document.getElementById("popupAdd").style.visibility = "visible";
    }

    function closeAdd() {
        document.getElementById("openAdd").style.visibility = "hidden";
    document.getElementById("popupAdd").style.visibility = "hidden";
    }
</script>   
    </body>
</html>