<?php
include "db.php";
// Get the username and password entered in the form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare a SQL query to check if the username and password exist in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if there is a row in the result set, which means the username and password were found
if (mysqli_num_rows($result) == 1) {
  // Redirect to the login-1.html page
  header("Location: login-1.php");
} else {
  // If the username and password were not found, show an error message on the login form
  echo '<script>alert("Invalid username or password");window.location.href="log.html";</script>';
}
// Close the database connection
mysqli_close($conn);
?>