<!DOCTYPE html>
<html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login-Sallaty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<?php
session_start();

//connect to the database
$conn = mysqli_connect("localhost", "root", "", "sallatydb");

if (isset($_POST['loginPhone'])) {
    //retrieve user information from the database
    $query = "SELECT * FROM customer WHERE phone='" . $_POST['loginPhone'] . "'";
    $result = mysqli_query($conn, $query);

    //if a match is found, set a session variable to indicate that the user is logged in
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['logged_in_user'] = true;
        $_SESSION['phone'] = $user['phone'];
        header("Location: Products.php");
    } else {
        echo "<script>alert('Invalid phone number you have to register first');</script>";
    }
}

mysqli_close($conn);
?>


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
    <div class="account">
        <form action="Phone Check.php" method="post" class="form" onsubmit="return validateForm()">
            <h2>Login</h2>
            <label for="loginPhone">Phone</label>
            <div class="input-group">
                <input type="text" name="loginPhone" id="loginPhone" placeholder="Enter your Phone" pattern="^\+966\d{8}$" title="Please enter a valid Saudi Arabia phone number starting with +966">
            </div>
            <input type="submit" value="Login" class="submit-btn">
            <h3>Don't have an account? <a href="Register.php"><button type="button" class="btn-cart"> Register</a></button></h3>
        </form>
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
    <script>
        function validateForm() {
            var inputs = document.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].value == "") {
                    alert("All fields are required!");
                    return false;
                }
            }
            return true;
        }
    </script>

</body>

</html>