
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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
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
                        <i class = "fas fa-user-alt me-2"> </i> Manage Tenant
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
                        <i class = "fas fa-file-invoice-dollar me-2"> </i> Statement of Account
                    </a>
                    <a href = "paymentSent.php" class = "list-group-item second-text active">
                        <i class = "fas fa-file-invoice-dollar me-2"> </i> Payment Sent by Tenants
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
                    <h2 class = "fs-2 m-0"> Manage Tenant </h2>
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

                    if (isset($_POST['form-control'])) {
                        $searchKey = $_POST['search'];
                        $sql = "SELECT * FROM users WHERE firstname LIKE '%$searchKey%'";
                    } else {
                        $sql = "SELECT * FROM users";

                        $result = mysqli_query($conn, $sql);
                    }
                ?>
                    
                          ADD NEW BUTTON --> 
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
                        <th scope="col">Name</th>
                        <th scope="col">Contact No.</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>    
                <tbody>
                    <?php
                            include "dbconn.php";
                            
                            if(isset($_GET['page']) && $_GET['page'] !== "") {
                                $page = $_GET['page'];
                            } else {
                                $page = 1;
                            }

                            $limit = 7;
                            $offset = ($page - 1) * $limit;

                            $previous = $page - 1;
                            $next = $page + 1;

                            $sql = "SELECT contactNo, CONCAT(firstname,' ', lastname) AS fullName FROM tenant_profile LIMIT $offset, $limit";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class = "data-row"> 
                                        <td> <?php echo $row['fullName'] ?> </td>
                                        <td> <?php echo $row['contactNo'] ?> </td>
                                        <td>
                                            
                                            <a href="#" class = "action-icon link-dark" onclick = "openView()">
                                            <i class = "fa-solid fa-eye fs-5 me-3" > </i>
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
                    <?php

                    $query =  "SELECT COUNT(*) FROM tenant_profile";
                    $result_count = mysqli_query($conn, $query);
                    $records = mysqli_fetch_row($result_count);
                    $total_records = $records[0];

                    $total_pages = ceil($total_records / $limit);
                    $link = "";

                    ?>
                

                    <?php
                        if ($page >= 2) {
                            echo "<li class = 'page-item'>
                            <a class = 'page-link' href = 'tenantProfile.php?page=".($page-1)."'> 
                            <i class = 'fa fa-angle-double-left'> </i> </a> </li>";
                        }

                         for ($counter = 1; $counter <= $total_pages; $counter++){
                            if ($counter == $page) {
                                $link .= "<li class = 'page-item active'>
                                <a class = 'page-link' href= 'tenantProfile?page="
                                .$counter."'>".$counter." </a></li>";
                            } else {
                                $link .= "<li class = 'page-item'>
                                <a class = 'page-link' href='tenantProfile.php?page=".$counter."'> ".$counter." </a> </li>";
                            }
                        };

                        echo $link;

                        if($page < $total_pages) {
                            echo "<li class = 'page-item'>
                            <a class = 'page-link' href='tenantProfile.php?page=".($page+1)."'>
                            <i class = 'fa fa-angle-double-right'></i> </a></li>";
                        }
                    ?>

                    <div class="hint-text">Showing <b> <?= $page; ?> </b> out of <b> <?= $total_pages; ?></b> page</div>
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
                <div class="response">
                </div>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" id="username" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>First name:</label>
                    <input type="text"  name="firstname" id="firstname" class="form-control" pattern="[A-Za-z]{1,}" required="" >
                </div>
                <div class="form-group">
                    <label>Last name:</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" pattern="[A-Za-z]{1,}" required="">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Contact Number:</label>
                    <input type="text" name="contactNo" id="contactNo" class="form-control" pattern="[0-9]*"  required="">
                </div>
                <br>
                <div class="text-right">
                    <button class="btn btn-cancel cancel" onclick="closeAdd()">Cancel</button>
                    <button class="btn btn-primary" onclick="" name = "submit-tenant">Add</button>
                </div>
            </div>
        </form>
        </div>

    <div class="overlay2" id = "actionView">
        <div class="popup2" id = "popupView">
            <div class="container d-flex justify-content-center">
                <div class="box card shaodw-lg  card-1">
                    <div class="card-header pt-3 pb-0 ml-auto border-0 ">
                        <a href="#" onclick="closeView()">
                            <svg class=" cursor-pointer" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                            <path d="M33.73372,23.59961l-10.13411,10.13411l52.26628,52.26628l-52.26628,52.26628l10.13411,10.13411l52.26628,-52.26628l52.26628,52.26628l10.13411,-10.13411l-52.26628,-52.26628l52.26628,-52.26628l-10.13411,-10.13411l-52.26628,52.26628z"></path>
                            </g>
                            </g>
                            </svg>
                        </a>
                    </div>
                    <div class="card-body  d-flex pt-0">
                        <div class="nsize row no-gutters  mx-auto justify-content-start flex-sm-row flex-column">
                            <div class="col-md-4  text-center"> <img src="photos/user-icon.png" width="150" height="150"></div>
                                <div class="col-md-8 ">
                                    <div class="bsize card border-0">
                                        <div class="card-body">
                                            <h5 class="card-title "><b>Tenant's Profile</b></h5>
                                            <span class="font-weight-bold" style="font-size: 16px;">Name: </span>
                                            <span class="text-black-50" style="font-size: 15px;" >Jv Laroco</span><span> </span><br>
                                            <span class="font-weight-bold" style="font-size: 16px;">Contact: </span>
                                            <span class="text-black-50" style="font-size: 15px;" >09073670354</span><span> </span><br>
                                            <span class="font-weight-bold" style="font-size: 16px;">Address: </span>
                                            <span class="text-black-50" style="font-size: 15px;" >Purok Barnyard San Jose</span><span> </span><br>
                                            <span class="font-weight-bold" style="font-size: 16px;">Email Address: </span>
                                            <span class="text-black-50" style="font-size: 15px;" >jvlaroco@gmail.com</span><span> </span><br>
                                            <span class="font-weight-bold" style="font-size: 16px;">Room: </span>
                                            <span class="text-black-50" style="font-size: 15px;" >Room 18</span>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div> 
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
    <script>
        function openView() {
            document.getElementById("actionView").style.visibility = "visible";
            document.getElementById("popupView").style.visibility = "visible";
        }
        function closeView() {
            document.getElementById("actionView").style.visibility = "hidden";
            document.getElementById("popupView").style.visibility = "hidden";
        }

    </script>  
    </body>
</html>