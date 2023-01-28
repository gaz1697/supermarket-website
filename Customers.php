<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<head>
  <meta charset="UTF-8">
  <title>Login-Sallaty</title>
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

  <!--Display Customers-->
  <div class="Display-Orders">
    <h1>Customers Information</h1>
    <table class="Table-Orders">
      <thead>
        <tr>
          <th>
            <h1>Customer ID</h1>
          </th>
          <th>
            <h1>Name</h1>
          </th>
          <th>
            <h1>Age</h1>
          </th>
          <th>
            <h1>Email</h1>
          </th>
          <th>
          <h1>Phone</h1>
          </th>
          <th>
            <h1>Address</h1>
          </th>
          <th>
            <h1>Created at</h1>
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
        $query = "SELECT * FROM customer";
        $result = mysqli_query($conn, $query);
        //loop through the result set and display the information
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
          </tr>
        <?php
        }
        mysqli_close($conn);
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>
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
