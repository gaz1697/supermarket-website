<!DOCTYPE html>
<html>
<?php $Order_id = $_GET['Order_id']; ?>

<head>
    <meta charset="UTF-8">
    <title>Products-Sallaty</title>
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
                <a href="Cart.html"><img src="images/Cart.png" width="50px" height="50px"></a>
            </div>
        </div>
    </div>
    </div>
    <!--Display Orders-->
    <div class="Display-Orders">
    <a href="Orders.php" class="back-image"><img src="images/double arrow.png" width="50px" height="50px"></a>
        <table class="Table-Orders">
            <thead>
                <tr>
                    <th>
                        <h1>Image</h1>
                    </th>
                    <th>
                        <h1>Product Name</h1>
                    </th>
                    <th>
                        <h1>Category</h1>
                    </th>
                    <th>
                        <h1>Quantity</h1>
                    </th>
                    <th>
                        <h1>Price</h1>
                    </th>
                    <th>
                        <h1>Total Price</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                //connect to database
                $conn = mysqli_connect("localhost", "root", "", "sallatydb");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                //retrieve data from the database
                $sql1 = "SELECT Order_id FROM order_product WHERE Order_id = $Order_id";
                $result1 = mysqli_query($conn, $sql1);
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $Order_id = $row1['Order_id'];
                    $sql = "SELECT product.Image,product.Name,product.Category_name,order_product.Quantity,product.Price FROM product INNER JOIN order_product ON product.Product_id = order_product.Product_id WHERE order_product.order_id = '$Order_id'";
                    $result = mysqli_query($conn, $sql);
                }
                //loop through the result set and display the information
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><img class="product-image-Order" src="<?php echo $row['Image']; ?>"></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Category_name']; ?></td>
                        <td><?php echo $row['Quantity']; ?></td>
                        <td>SAR <?php echo $row['Price']; ?></td>
                        <td>SAR <?php echo $row['Price'] * $row['Quantity']; ?></td>
                    </tr>

                <?php
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>
<?php
