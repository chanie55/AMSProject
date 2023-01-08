<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "css\aDashboard.css"/>

        <style>
            <?php
                include "CSS/invoice.css"
            ?>
        </style>

    </head>
    <body>
        <header>
            <h3>
                Invoice
            </h3>
        </header>

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
                <li><a href="tenantProfile.php" class="menu">
                    <img src="photos\tenant.png" alt=""> <i class="ams profile"></i>
                    <span class="nav-item">Tenant's Profile</span>
                </a> </li>
                <li><a href="room.php" class="menu">
                    <img src="photos\room.png" alt=""> <i class="ams room"></i>
                    <span class="nav-item">Room Management</span>
                </a> </li>
                <li><a href="utility.php" class="menu">
                    <img src="photos\bill.png" alt=""> <i class="ams bills"></i>
                    <span class="nav-item">Utility Bills</span>
                </a> </li>
                <li><a href="noticeBoard.php" class="menu">
                    <img src="photos\notice.png" alt=""> <i class="ams board"></i>
                    <span class="nav-item">Notice Board</span>
                </a> </li>
                <li><a href="invoice.php" class="menu">
                    <img src="photos\invoice.png" alt=""> <i class="ams invoice"></i>
                    <span class="nav-item">Invoice</span>
                </a> </li>
                <li><a href="paymentHistory.php" class="menu">
                    <img src="photos\history.png" alt=""> <i class="ams history"></i>
                    <span class="nav-item">Payment History</span>
                </a> </li>
                <li><a href="index.php" class="menu logout">
                    <img src="photos\logout.png" alt=""> <i class="ams logout"></i>
                    <span class="nav-item">Logout</span>
                </a> </li>
            </ul>
        </nav>

        <h2> </h2>
    </body>
</html>