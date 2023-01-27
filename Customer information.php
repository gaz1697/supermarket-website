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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style type="">
        .add-product{
            width: 100%;
            height: 100%;
            background-color: #f2f2f2;
            padding: 50px 0;
        } 
        .add-product .container{
            width: 80%;
            height: 100%;
            margin: 0 auto;
        }
        .add-product .add-product-title{
            width: 100%;
            height: 100%;
            text-align: center;
            padding: 10px;
        }
        .add-product .add-product-form{
            width: 100%;
            height: 100%;
            padding: 10px;
        }
        .add-product .add-product-form-row{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 20px 0;
        }
        .add-product .add-product-form-col{
            width: 45%;
            height: 100%;
            padding: 10px;
        }
        .add-product .add-product-form-col label{
            width: 100%;
            height: 100%;
            display: block;
            margin-bottom: 10px;
        }
        .add-product .add-product-form-col input{
            width: 100%;
            height: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .add-product .add-product-form-col textarea{
            width: 100%;
            height: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .add-product .add-product-form-col select{
            width: 100%;
            height: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .add-product .add-product-form-col button{
            width: 100%;
            height: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #b26a3e;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
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

    <div class="add-product">
        <div class="container">
            <div class="add-product-title">
                <h1>Enter Your Information </h1>
            </div>
            <div class="add-product-form">
                <form action="submitCustomer.php" method="post" onsubmit="return validateForm()">
                    <div class="add-product-form-row">
                        <div class="add-product-form-col">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="add-product-form-col">
                            <label for="age">Age</label>
                            <input type="number" name="age" id="age" placeholder="Enter your Age" pattern="[0-9]*" min="1" max="120" required>
                        </div>
                    </div>
                    <div class="add-product-form-row">
                        <div class="add-product-form-col">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">
                        </div>

                        <div class="add-product-form-col">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" placeholder="Enter your Phone" pattern="^\+966\d{9}$" title="Please enter a valid Saudi Arabia phone number starting with +966">
                        </div>
                    </div>
                    <div class="add-product-form-row">
                        <div class="add-product-form-col">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter your Address">
                        </div>
                    </div>
                    <div class="add-product-form-row">
                        <div class="add-product-form-col">
                            <input type="submit" name="submit" value="Enter">
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