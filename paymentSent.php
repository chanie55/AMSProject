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
            <link rel = "styelsheet" href = "css\paymentSent.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            <?php
                include "CSS/paymentSent.css"
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
                    <h2 class = "fs-2 m-0"> Payment Sent by Tenants </h2>
                </div>

                <div class = "navbar-collapse">
                    <ul class = "navbar-nav ms-auto mb-2 mb-lg-0"> 
                        <li class = "navbar-item-dropdown">
                            <a href = "#" class = "nav-link dropdown-toggle second-text fw-bold" id = "navbarDropdown" role = "button"
                                data-bs-toggle = "dropdown" aria-expanded = "false">
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
  
        <!-- TABLE -->
    <div class="container-xl">
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
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Payment Amount</th>
                        <th>Date</th>
                        <th>Proof of Payment</th>
                        <th>Remarks</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>???4,879.25</td>
                        <td>01/18/2023</td>
                        <td>Reciept Screenshot</td>
                        <td>Acknowledged</td>
                        <td>Paid</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                        </td>
                    </tr>       
                </tbody>

                <tbody>
                    <tr>
                        <td>???6,909.25</td>
                        <td>01/17/2023</td>
                        <td>Reciept Screenshot</td>
                        <td>Acknowledged</td>
                        <td>Paid</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip" ><i class="material-icons">&#xE254;</i></a>

                        </td>
                    </tr>       
                </tbody>

                
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  
</div>
        </body>
</html>