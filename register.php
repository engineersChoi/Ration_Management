<?php
// Set the database credentials
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cardnumber = $_POST["cardnumber"];
    $cardtype = $_POST["cardtype"];
    $phone = $_POST["phone"];

    // Insert the data into the database
    $sql = "INSERT INTO mytable (username, password, cardnumber, cardtype, phone) VALUES ('$username', '$password', '$cardnumber', '$cardtype', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
