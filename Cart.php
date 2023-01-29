<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user'] !== true) {
    header("Location: login user.php");
    exit;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Products-Sallaty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="header">
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
                        <li><a href="Customers Orders.php">Previous Orders</a></li>
                        <li><a href="Administrator.php">Administrator</a></li>
                    </ul>
                </nav>
                <a href="Cart.php"><img src="images/Cart.png" width="50px" height="50px"></a>
            </div>
        </div>
    </div>
    <!--Cart Items-->
    <div class="small-container">
        <table class="Cart-Table">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/PHILIPS COFFEE.jpg">
                        <div class="cart-Name-Price">
                            <p>PHILIPS COFFEE MAKER, HD7432/2</p>
                            <small>price: 300 SAR</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>300 SAR</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/Saudi Milk.jpg">
                        <div class="cart-Name-Price">
                            <p>Saudia Long Life Full Fat Milk 1L × 12 Pieces</p>
                            <small>price: 61 SAR</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>61 SAR</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/Oreo.jpg">
                        <div class="cart-Name-Price">
                            <p>Oreo Classic 38g× 16</p>
                            <small>price: 20 SAR</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>20 SAR</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>381 SAR</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>57.15 SAR</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>438.15 SAR</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>