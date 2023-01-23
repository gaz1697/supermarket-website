<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Products-Sallaty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<?php
// open mysql connection
$con = mysqli_connect("localhost", "root", "", "sallatydb");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//get all products from products table
$result = mysqli_query($con, "SELECT * FROM product");
echo "<table border='1'>
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Product Description</th>
<th>Product Image</th>
<th>Product Category_id</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Product_id'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "<td>" . $row['Description'] . "</td>";
    echo "<td>" . $row['Image'] . "</td>";
    echo "<td>" . $row['Category_id'] . "</td>";
    echo "</tr>";
    
}
echo "</table>";
// close the connection
mysqli_close($con);
?>
<?php
    //connect to database
    $conn = mysqli_connect("localhost", "root", "", "sallatydb");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    //retrieve data from the database
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);

    //loop through the result set and display the information
    while($row = mysqli_fetch_assoc($result)) {
?>
        <div class="product">
            <div class="product-content">
                <div class="product-img">
                    <img src="<?php echo $row['Image']; ?>" width="200px" height="200px">
                </div>
                <div class="product-btns">
                    <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                    </button>
                </div>
            </div>
            <div class="product-info">
                <div class="product-info-top">
                    <h2 class="sm-title"><?php echo $row['Description']; ?></h2>
                </div>
                <p class="product-name"><?php echo $row['Name']; ?></p>
                <p class="product-price">SAR <?php echo $row['Price']; ?></p>
            </div>
        </div>
<?php
    }
    mysqli_close($conn);
?>
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
                        <li><a href="Products.html">Products</a></li>
                        <li><a href="Contact.html">Contact us</a></li>
                        <li><a href="Administrator.html">Administrator</a></li>
                        <li><a href="Account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="Cart.html"><img src="images/Cart.png" width="50px" height="50px"></a>
            </div>
        </div>
    </div>





    <div class="products">
        <div class="container">
            <h1 class="lg-title">Sallaty products</h1>
            <p class="text-light">We offer a wide selection of fresh produce, meats, pantry staples, and household
                essentials.</p>

            <div class="product-items">
                <!-- product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="images/meat.png" width="200px" height="200px">
                        </div>
                        <div class="product-btns">
                            <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                            </button>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">Meat & Poultry</h2>
                        </div>
                        <p class="product-name">Tanmiah Fresh Chicken Thighs 450g</p>
                        <p class="product-price">SAR 10</p>
                    </div>
                </div>
                <!--START-->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="images/Oreo.jpg" width="200px" height="200px">
                        </div>
                        <div class="product-btns">
                            <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">Biscuits, Crackers & Cakes</h2>
                        </div>
                        <p class="product-name">Oreo Classic 38g× 16</p>
                        <p class="product-price">SAR 20</p>
                    </div>
                </div>
                <!--END-->
                <!--START-->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="images/PHILIPS COFFEE.jpg" width="200px" height="200px">
                        </div>
                        <div class="product-btns">
                            <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">Electronics & Appliances</h2>
                        </div>
                        <p class="product-name">Philips coffee maker, HD7432/2</p>
                        <p class="product-price">SAR 300</p>
                    </div>
                </div>
                <!--END-->
                <!--START-->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="images/Rice.png" width="200px" height="200px">
                        </div>
                        <div class="product-btns">
                            <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">Rice, Pasta & Pulses</h2>
                        </div>
                        <p class="product-name">Al Walimah Style Indian Basmati Rice Longgrain 5kg</p>
                        <p class="product-price">SAR 45</p>
                    </div>
                </div>
                <!--END-->
                <!--START-->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="images/Saudi Milk.jpg" width="200px" height="200px">
                        </div>
                        <div class="product-btns">
                            <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">Milk & Laban</h2>
                        </div>
                        <p class="product-name">Saudia Long Life Full Fat Milk 1L × 12 Pieces</p>
                        <p class="product-price">SAR 61</p>
                    </div>
                </div>
                <!--END-->
                <!--START-->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="images/Nova.jpg" width="200px" height="200px">
                        </div>
                        <div class="product-btns">
                            <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">Water</h2>
                        </div>
                        <p class="product-name">Nova Water 550ml ×24 </p>
                        <p class="product-price">SAR 20</p>
                    </div>
                </div>
                <!--END-->
                <!--START-->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="images/Fryer.jpg" width="200px" height="200px">
                        </div>
                        <div class="product-btns">
                            <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">ELECTRONICS & APPLIANCES</h2>
                        </div>
                        <p class="product-name">Nikai NAF788A Air Fryer 3L</p>
                        <p class="product-price">SAR 238</p>
                    </div>
                </div>
                <!--END-->
                <!--START-->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img src="images/Chicken.jpg" width="200px" height="200px">
                        </div>
                        <div class="product-btns">
                            <a href="Cart.html"><button type="button" class="btn-cart"> add to cart</a>
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-info-top">
                            <h2 class="sm-title">MEAT & POULTRY</h2>
                        </div>
                        <p class="product-name">Alyoum Premium Fresh Chicken Chilled 1kg</p>
                        <p class="product-price">SAR 19</p>
                    </div>
                </div>
                <!--END-->
            </div>
        </div>
    </div>
</body>

</html>