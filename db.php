<?php
$host = "localhost";
$user = "root";
$password = "amal@2002";
$database = "User_Reg";

// Create a connection to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

