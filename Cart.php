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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
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
    <!-- product -->
    <?php




    //connect to database
    $conn = mysqli_connect("localhost", "root", "", "sallatydb");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }



    ?>
    <div class="small-container">
        <table class="Cart-Table">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <?php
                // subtotal
                $subtotal = 0;
                foreach ($_SESSION['cart'] as $pid => $quan) {

                    //if user changed the quantity of a product in the cart
                    if (isset($_POST['update'])) {
                        $quan = $_POST[$pid];

                        if ($quan == 0) {
                            unset($_SESSION['cart'][$pid]);
                        } else {
                            $_SESSION['cart'][$pid] = $quan;
                        }
                    }

                    $sql = "SELECT * FROM product WHERE Product_id = $pid";

                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['Name'];
                    $price = $row['Price'];
                    $image = $row['Image'];
                    $total = $price * $quan;
                    $subtotal += $total;

                    echo "<tr> <td> <div class='cart-info'> <img src='$image'> <div> <p>$name</p> <small>Price: $price SAR</small> <br> <a href='Cart.php?
                    product_id=$pid&quantity=0'>Remove</a> </div> </div> </td> <td><input type='number' name='$pid' form='update-form' value='$quan' min='1'></td>
                     <td>$total SAR</td> </tr>";
                }


                ?>


        </table>
        <div class="total-price">




            <table>

                <tr>
                    <td>Subtotal</td>
                    <td> <?php echo $subtotal ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td><?php echo ($subtotal * 1.15) - $subtotal ?> SAR</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php echo ($subtotal * 1.15) ?> SAR</td>
                </tr>
                <tr>
                    <td>
                        <form action="<?php filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL) ?>" id="update-form" method="POST">
                            <input type="hidden" name="update" value="<?php echo $pid ?>">
                            <button href="submit" name="update" class="btn-cart">upadate quantity</button>
                        </form>
                    </td>
                    <td> <a href="checkout.php"> <button class="btn-cart">Checkout</button> </a> </td>
                </tr>

            </table>


        </div>
    </div>
</body>

</html>