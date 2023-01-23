<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
//rest of your code
?>


<head>
    <meta charset="UTF-8">
    <title>Login-Sallaty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style type="">
        .content{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 20px;
     
       }
         .side-admin-menu{
          width: 20%;
          height: 100%;
          background-color: #b26a3e;
          padding: 50px;
         }
         .side-admin-menu .admin-info{
          
          justify-content: space-between;
          margin: 0 auto;
          width: 100%;
          border-radius: 30px;
          height: 100%;

         } 
            .side-admin-menu .admin-info .admin-image{
            width: 100%;
            height: 100%;
            text-align: center;
            
            padding: 10px;
            }
            .side-admin-menu .admin-info .admin-name{
            width: 100%;
            height: 100%;
            
            text-align: center;
            padding: 10px;
            margin-bottom: 30px;
            }
            .side-admin-menu ul{    
            list-style-type: none;
            padding: 0px;
            }
            .side-admin-menu ul li{
            padding: 40px 0;
            border-bottom: 1px solid #bbb;
            }
            .side-admin-menu ul li a{
            text-decoration: none;
            color: #000;
            }
            .side-admin-menu ul li a:hover{
            color: #ffffff;
            }
            .side-admin-menu ul li:last-child{
            border-bottom: none;
            }
            .side-admin-menu ul li.active{
            background-color: #4CAF50;
            color: white;
            }
            .side-admin-menu .logout-btn{
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            }
            .side-admin-menu .logout-btn a{
            text-decoration: none;
            color: #000;
            }
            .side-admin-menu .logout-btn a:hover{
            color: #ff523b;
            }
            .Dashboard{
            width: 80%;
            height: 100%;
            background-color: #f1f1f1;
            padding-top: 40px;
            padding-left: 25px;
            padding-bottom: 0;
            
            border-left: 1px solid #bbb;
            }
            .Dashboard h1{
            font-size: 30px;
            font-weight: 500;
            font-family: 'Open Sans', sans-serif;


            }
            .dashboard-content{
            display: flex;
            flex-direction: row;
           
            margin-top: 20px;
            }
            .dashboard-content .dashboard-box-row{
            width: 30%;
            height: 100%;
            margin-left: 120px;
            border-radius: 10px;
            padding: 50px;
            }
            .dashboard-content .dashboard-box-row h2{
            font-size: 30px;
            font-weight: 500;
            }
            .dashboard-content .dashboard-box-row p{
            font-size: 20px;
            font-weight: 400;
            }
            .dashboard-content .dashboard-box-row .icon{
            width: 100%;
            height: 100%;
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            }
            .dashboard-content .dashboard-box-row .icon img{
            width: 100px;
            height: 100px;
            }
            .dashboard-content .dashboard-box-row .btn{
            width: 100%;
            height: 100%;
            background-color: #ff523b;
            border-radius: 5px;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            }
            .dashboard-content .dashboard-box-row .btn a{
            text-decoration: none;
            color: #000;
            }
            .dashboard-content .dashboard-box-row .btn a:hover{
            color: #ff523b;
            }
            .dashboard-content .dashboard-box-row .dashboard-box {
            width: 140%;    
            height: 100%;
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
            padding-top: 100px;
            padding-bottom: 100px;
            
            margin-bottom: 77px;
            
           

          
            }
            

            
    
     </style>
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
                <a href="Cart.html"><img src="images/Cart.png" width="50px" height="50px"></a>
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

                        <a href="#">Go to Customers</a>
                    </div>

                </div>
                <div class="dashboard-box-row">
                    <div class="dashboard-box">
                        <div class="box-icon">
                            <img src="images/money.png" width="50px" height="50px">

                        </div>
                        <h2>Revnue</h2>

                        <a href="#">Go to Revnue</a>
                    </div>
                    <div class="dashboard-box">
                        <div class="box-icon">
                            <img src="images/clipboard.png" width="50px" height="50px">

                        </div>
                        <h2>Orders</h2>

                        <a href="#">Go to Orders</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>