<!DOCTYPE html>
<html>
<?php $product_id = $_GET['product_id']; ?>

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
                <a href="Cart.php"><img src="images/Cart.png" width="50px" height="50px"></a>
            </div>
        </div>
    </div>
    <div class="small-container">
        <?php
        //connect to database
        $conn = mysqli_connect("localhost", "root", "", "sallatydb");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        //retrieve data from the database
        $sql = "SELECT * FROM product WHERE Product_id = $product_id";
        $result = mysqli_query($conn, $sql);
        $product = mysqli_fetch_assoc($result); {
        ?>
            <div class="product-container">
                <h1 class="product-name-one">
                    Name: <?php echo $product['Name']; ?>
                </h1>
                <img class="product-image" src="<?php echo $product['Image']; ?>" alt="<?php echo $product['Name']; ?>">
                <p class="product-Category-name">Category Name: <?php echo $product['Category_name']; ?></p>
                <p class="product-description">Description: <?php echo $product['Description']; ?></p>
                <p class="product-price">Price: <?php echo $product['Price']; ?></p>
            </div>

        <?php
        }
        mysqli_close($conn);
        ?>
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