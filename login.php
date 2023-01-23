<!DOCTYPE html>
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

if (isset($_POST['loginUser']) && isset($_POST['loginPassword'])) {
  //retrieve user information from the database
  $query = "SELECT * FROM admin WHERE email='" . $_POST['loginUser'] . "' AND Password='" . $_POST['loginPassword'] . "'";
  $result = mysqli_query($conn, $query);

  //if a match is found, set a session variable to indicate that the user is logged in
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $user['username'];
    header("Location: Administrator.php");
  } else {
    echo "Invalid username or password";
  }
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
            <li><a href="Products.php">Products</a></li>
            <li><a href="Contact.html">Contact us</a></li>
            <li><a href="Administrator.php">Administrator</a></li>
          </ul>
        </nav>
        <a href="Cart.html"><img src="images/Cart.png" width="50px" height="50px"></a>
      </div>
    </div>
  </div>
  <div class="account">
    <form action="login.php" method="post" class="form">
      <h2>Login</h2>
      <label for="loginUser">Username</label>
      <div class="input-group">
        <input type="text" name="loginUser" id="loginUser" placeholder="Username" required>
      </div>
      <label for="loginPassword">Password</label>
      <div class="input-group">
        <input type="password" name="loginPassword" id="loginPassword" placeholder="Password" required>
      </div>
      <input type="submit" value="Login" class="submit-btn">
    </form>
  </div>


</body>

</html>