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
                    <a href = "invoice.php" class = "list-group-item second-text active">
                        <i class = "fas fa-file-invoice-dollar me-2"> </i> Invoice
                    </a>
                    <a href = "collectibles.php" class = "list-group-item second-text active">
                        <i class = "fas fa-dollar-sign me-2"> </i> Collectibles
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
                                <i class = "fas fa-user me-2"></i> User 
                            </a> 
                            <ul class = "dropdown-menu" aria-labelledby = "navbarDropdown">
                                <li> <a href = "#" class = "dropdown-item"> Profile </a></li>
                                <li> <a href = "index.php" class = "dropdown-item"> Logout </a></li> 
                            </ul>

                        </li>

                    </ul> 

                </div>
            </nav>

            <div class = "table-container">

            <div class="search_wrap search_wrap_1">
                    <div class="search_box">
                        <input type="text" class="input" placeholder="Search....">
                        <div class="btn btn_common">
                            <i class="fas fa-search" style="font-size:20px"></i>
                        </div>
                    </div>
                </div>
                            
                <a href="signup.php" class = "btn btn-add mb-5"> 
                    <i class="fa fa-user-plus"style="font-size:23px;float:left"></i> Add New 
                </a>

                <div class = "table-border">
                <table class = "table text-center">
                    <thread>
                        <tr class = "table-header">
                            <th scope = "col"> Name</th>
                            <th scope = "col"> Contact No. </th>
                            <th scope = "col"> Address </th>
                            <th scope = "col"> Action </th>
                        </tr> 
                    </thread>
                    <tbody> 
                        <tr class = "data-row"> 
                        <td scope = "row"> Khytryn Faye Carcillar </td>
                            <td> 09123456789 </td>
                            <td> D.Lotilla, Isulan, Sultan, Kudarat </td>
                            <td>
                                <a href = "#" class = "action-icon link-dark">
                                    <i class = "fa-solid fa-eye fs-5 me-3"> </i>
                                </a>
                                <a href = "#" class = "action-icon link-dark">
                                    <i class = "fa-solid fa-trash fs-5"></i>
                                </a> 
                            </td>
                        </tr>
                    </tbody> 
                </table>
                </div>
            </div>
        </div>
    </div>
        
    </body>
</html>