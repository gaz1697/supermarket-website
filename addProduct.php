<!DOCTYPE html>
<html>
<?php
// check if user is logged in
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

?>
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
    
    <div class="add-product">
        <div class="container">
            <div class="add-product-title">
                <h1>Add Product</h1>
            </div>
            <div class="add-product-form">
                <form action="productAdded.php" method="POST" enctype="multipart/form-data">
                    <div class="add-product-form-row">
                        <div class="add-product-form-col">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter product name">
                        </div>
                        <div class="add-product-form-col">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" placeholder="Enter product price">
                        </div>
                    </div>
                    <div class="add-product-form-row">
                        <div class="add-product-form-col">
                            <label for="category">Category</label>
                            <select name="category" id="category" placeholder="Enter product category">
                            <?php
                                //connect to database
                                 $conn = mysqli_connect("localhost", "root", "", "sallatydb");
                                 if (mysqli_connect_errno()) {
                                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                  }
                                //retrieve data from the database
                                $query = "SELECT * FROM category";
                                $result = mysqli_query($conn, $query);
                                //display data
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                                }
                            ?>
                           </select>
                        </div>
                        <div class="add-product-form-col">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                    </div>
                    <div class="add-product-form-row">
                        <div class="add-product-form-col">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter product description"></textarea>
                        </div>
                    </div>
                    <div class="add-product-form-row">
                        <div class="add-product-form-col">
                            <input type="submit" name="submit" value="Add Product">
                        </div>
                    </div>
                </form>
            </div>
        </div>
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