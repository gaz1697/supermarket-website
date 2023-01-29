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
    <style type="">
    
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
    <div class="product-items">
                <!-- product -->
                <?php
                     //connect to database
                     $conn = mysqli_connect("localhost", "root", "", "sallatydb");
                     if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    // loop over all checked checkboxes from the form and delete the product

                    if (!empty($_POST['delete'])) {

                        foreach ($_POST['delete'] as $value) {
                           
                             //delete data from the database
                                $query = "DELETE FROM product WHERE Product_id = '$value'";
                                $result = mysqli_query($conn, $query);
                        }
                        echo 'Item(s) deleted successfully.';

                    } else {
                        echo 'No items were selected.';
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