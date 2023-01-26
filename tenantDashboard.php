
<?php
session_start();

?>

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
            <link rel = "styelsheet" href = "css\tenantDashboard.css">
        <style>
            <?php
                include "CSS/tenantDashboard.css"
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
                    <a href = "tenantDashboard.php" class = "list-group-item second-text active">
                        <i class = "fas fa-home-alt me-2"> </i> Home
                    </a>
                    <a href = "tenantNotice.php" class = "list-group-item second-text active">
                        <i class = "fas fa-warning me-2"> </i> Notice
                    </a>
                    <a href = "tenantPayment.php" class = "list-group-item second-text active">
                        <i class = "fas fa-money-check-dollar me-2"> </i> Payment Transaction
                    </a>
                    <a href = "tenantHistory.php" class = "list-group-item second-text active">
                        <i class = "fas fa-receipt me-2"> </i> Payment History
                    </a>
                    <a href = "tenantSuggestion.php" class = "list-group-item second-text active">
                        <i class = "fas fa-commenting me-2"> </i> Suggestion
                    </a>

                </div>
            </div>

        <!--end-->

        <div id = "page-content-wrapper">
            <nav class = "navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class = "d-flex align-items-center"> 
                    <h2 class = "fs-2 m-0"> Dashboard </h2>
                </div>

                <div class = "navbar-collapse">
                    <ul class = "navbar-nav ms-auto mb-2 mb-lg-0"> 
                        <li class = "navbar-item-dropdown">
                            <a href = "#" class = "nav-link dropdown-toggle second-text fw-bold" id = "navbarDropdown" role = "button"
                                data-bs-toggle = "dropdown" aria-expanded = "false">
                                <i class = "fas fa-user me-2"></i> Tenant
                            </a> 
                            <ul class = "dropdown-menu" aria-labelledby = "navbarDropdown">
                                <li> <a href = "tenantProfileSettings.php" class = "dropdown-item"> Edit Profile </a></li>
                                <li> <a href = "#" class = "dropdown-item" onclick = "openForm()"> Logout </a></li> 
                            </ul>

                        </li>

                    </ul> 

                </div>
            </nav>

            <div class = "container-fluid px-4">

                <div class = "row g-3 my-2 ">
                    <div class = "col-md-4 box-width">
                        <div class = "p-3 bg-white border = 2 shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div> 
                                <h3 class = "fs-2"> ₱4,879.25</h3>
                                <p class = "fs-5 box"> Balance </p>
                            </div> 
                            <i class = "fas fa-coins fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class = "col-md-4 box-width">
                        <div class = "p-3 bg-white border = 2 shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div> 
                                <h3 class = "fs-2">₱4,879.25</h3>
                                <p class = "fs-5 box"> Payments </p>
                            </div> 
                            <i class = "fas fa-money-check fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
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
    </body>
</html>