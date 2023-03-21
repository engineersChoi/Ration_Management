<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "User_Reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the values submitted by the form
$username = $_POST['username'];
$password = $_POST['password'];
$cnum = $_POST['cnum'];
$ctype = $_POST['ctype'];
$phone = $_POST['phone'];

// Insert the values into the "users" table
$sql = "INSERT INTO users(username, password,cardNumber,cardType,phoneNumber) VALUES ('$username', '$password', '$cnum', '$ctype', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
