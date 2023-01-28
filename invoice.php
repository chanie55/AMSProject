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
            <link rel = "styelsheet" href = "css\invoice.css">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <style>
            <?php
                include "CSS/invoice.css"
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
                    <h2 class = "fs-2 m-0"> Statement of Account </h2>
                </div>

                <div class = "navbar-collapse">
                    <ul class = "navbar-nav ms-auto mb-2 mb-lg-0"> 
                        <li class = "navbar-item-dropdown">
                            <a href = "#" class = "nav-link dropdown-toggle second-text fw-bold" id = "navbarDropdown" role = "button"
                                data-bs-toggle = "dropdown" aria-expanded = "false">
                                <i class = "fas fa-user me-2"></i> Admin
                            </a> 
                            <ul class = "dropdown-menu" aria-labelledby = "navbarDropdown">
                                <li> <a href = "#" class = "dropdown-item" onclick = "openForm()"> Logout </a></li> 
                            </ul>

                        </li>

                    </ul> 

                </div>
            </nav>

         <!--INVOICE-->
            

         <div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f;font-size: 20px;">Statement of Account >> <strong>Username: khytryn</strong></p>
        </div>
        <div class="col-xl-3 float-end">
          <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
              class="fas fa-print text-primary"></i> Print</a>
          <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
              class="far fa-file-pdf text-danger"></i> Export</a>
        </div>
        <hr>
      </div>

      <div class="container">
    

        </div>


        <div class="row">
          <div class="col-xl-8">
            <ul class="list-unstyled">
              <li class="text-muted">To: <span style="color:#5d9fc5 ;">Khytryn Faye Carcillar</span></li>
              <li class="text-muted"><i class="fas fa-phone"></i> 09091544666</li>
            </ul>
          </div>
          <div class="col-xl-4">
            <p class="text-muted">Statement of Account</p>
            <ul class="list-unstyled">
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Username:</span>khytryn</li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Creation Date: </span>January 01, 2023</li>
                  <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Due Date: </span>January 30, 2023</li>
            </ul>
          </div>
        </div>

        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#84B0CA ;" class="text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Appartment Fee</td>
                <td>₱3500</td>
                <td>₱3500</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Water</td>
                <td>₱210.15</td>
                <td>₱210.15</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Electricity</td>
                <td>₱1,169</td>
                <td>₱1,169</td>
              </tr>
            </tbody>

          </table>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <p class="ms-3">Add additional notes and payment information</p>

          </div>
          <div class="col-xl-3">
            <ul class="list-unstyled">
              <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>₱4,879.15</li>
              <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>₱731.87</li>
            </ul>
            <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                style="font-size: 25px;">₱4,147.28</span></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-2">
            <button type="button" class="btn btn-primary text-capitalize"
              style="background-color:#60bdf3 ;">Send</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
    
       <!-- CLOSE INVOICE -->
   











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