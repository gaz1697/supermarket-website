<!DOCTYPE html>
<html>
<?php
//connect to the database
$conn = mysqli_connect("localhost", "root", "", "sallatydb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get the form data
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

//prepare the statement
$stmt = $conn->prepare("INSERT INTO customer (name, age, email, phone, address,created_at) VALUES (?,?,?,?,?,NOW())");
$stmt->bind_param("sisss", $name, $age, $email, $phone, $address);

//execute the statement
if ($stmt->execute() === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>
<?php header("Location: Products.php"); ?>
</html>