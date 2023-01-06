<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "css\aDashboard.css"/>
    </head>
    <body>
        <header>
            <h3>
                Apartment Management System
            </h3>

              <a> <img src="photos\header.png"> </a>
        </header>

        <section class="body">

            <nav>
                <ul>
                    <li>
                        <a href="#" class="logo">
                            <img src="photos\menuu.png" alt="">
                            <span class="nav-item">Menu</span>
                        </a>
                    </li>
                    <li><a href="adminDashboard.php" class="menu">
                        <img src="photos\home.png" alt=""> <i class="ams home"></i>
                        
                        <span class="nav-item">Home</span>
                    </a> </li>
                    <li><a href="tenantProfile.html" class="menu">
                        <img src="photos\tenant.png" alt=""> <i class="ams profile"></i>
                        <span class="nav-item">Tenant's Profile</span>
                    </a> </li>
                    <li><a href="room.html" class="menu">
                        <img src="photos\room.png" alt=""> <i class="ams room"></i>
                        <span class="nav-item">Room Management</span>
                    </a> </li>
                    <li><a href="utility.html" class="menu">
                        <img src="photos\bill.png" alt=""> <i class="ams bills"></i>
                        <span class="nav-item">Utility Bills</span>
                    </a> </li>
                    <li><a href="noticeBoard.html" class="menu">
                        <img src="photos\notice.png" alt=""> <i class="ams board"></i>
                        <span class="nav-item">Notice Board</span>
                    </a> </li>
                    <li><a href="invoice.html" class="menu">
                        <img src="photos\invoice.png" alt=""> <i class="ams invoice"></i>
                        <span class="nav-item">Invoice</span>
                    </a> </li>
                    <li><a href="paymentHistory.html" class="menu">
                        <img src="photos\history.png" alt=""> <i class="ams history"></i>
                        <span class="nav-item">Payment History</span>
                    </a> </li>
                    <li><a href="index.php" class="menu logout">
                        <img src="photos\logout.png" alt=""> <i class="ams logout"></i>
                        <span class="nav-item">Logout</span>
                    </a> </li>
                </ul>
            </nav>
 
    <!-- 3 notification buttons basta ana  -->
            <section class="section-body">
                <h2> Dashboard </h2>
                <div class="flex-container">
                    <div class="card tenant">
                        <img src="photos\tenants.png" alt="tenant"> 
                    
                        <div class="text tenants">
                        <p>No. of Tenants</p>
                        <p class="value">0</p>

                    </div> 
                    </div>

                    <div class="card roomNo">
                        <img src="photos\number of room.png" alt="room">
                        
                        <div class="text rooms">
                            <p>No. of Rooms</p> 
                            <p class="value">0</p>
                        </div> 
                    </div>

                    <div class="card bed">
                        <img src="photos\beds.png" alt="beds">
                        
                        <div class="text beds">
                            <p>No. of Beds</p>
                            
                            <p class="value">0</p>
                        </div> 
                    </div>
                </div>
            </section>
            
            
        </section>
    </body>
</html>