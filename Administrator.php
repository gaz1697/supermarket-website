<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>


<head>
    <meta charset="UTF-8">
    <title>Login-Sallaty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="header" id="myHeader">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="images/logo-corp-prev.png" width="125px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="Products.php">Products</a></li>
                        <li><a href="Contact.html">Contact us</a></li>
                        <li><a href="Administrator.php">Administrator</a></li>
                    </ul>
                </nav>
                <a href="Cart.php"><img src="images/Cart.png" width="50px" height="50px"></a>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="side-admin-menu">
            <div class="admin-info">
                <div class="admin-image">
                    <img src="images/user.png" width="100px" height="100px">
                </div>
                <div class="admin-name">
                    <h3>Admin</h3>
                </div>


            </div>


            <ul>
                <li><a href="Administratordash.html">Dashboard</a></li>
                <li><a href="Productspag3.html">Products</a></li>
                <li><a href="Customers.html">Customers</a></li>
                <li><a href="Orders.html">Orders</a></li>
                <li><a href="Reports.html">Reports</a></li>
                <li><a href="settings.html">settings</a></li>
            </ul>
            <div class="logout-btn">
                <a href="logout.php">Logout</a>
            </div>


        </div>
        <div class="Dashboard">
            <h1>Dashboard</h1>
            <div class="dashboard-content">
                <div class="dashboard-box-row">
                    <div class="dashboard-box">
                        <div class="box-icon">
                            <img src="images/product.png" width="50px" height="50px">

                        </div>
                        <h2>Products</h2>

                        <a href="#">Go to Products</a>
                    </div>
                    <div class="dashboard-box">
                        <div class="box-icon">
                            <img src="images/user.png" width="50px" height="50px">

                        </div>
                        <h2>Customers</h2>

                        <a href="Customers.php">Go to Customers</a>
                    </div>

                </div>
                <div class="dashboard-box-row">
                    <div class="dashboard-box">
                        <div class="box-icon">
                            <img src="images/money.png" width="50px" height="50px">

                        </div>
                        <h2>Revnue</h2>

                        <a href="Revnue.php">Go to Revnue</a>
                    </div>
                    <div class="dashboard-box">
                        <div class="box-icon">
                            <img src="images/clipboard.png" width="50px" height="50px">

                        </div>
                        <h2>Orders</h2>

                        <a href="Orders.php">Go to Orders</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>