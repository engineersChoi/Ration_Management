<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cardnumber = $_POST["cardnumber"];
    $cardtype = $_POST["cardtype"];
    $phone = $_POST["phone"];

    // Insert the data into the database
    $sql = "INSERT INTO users(username, password, cardNumber, cardType, phoneNumber)VALUES ('$username', '$password', '$cardnumber', '$cardtype', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location: log.html");
exit();
}
// Close the database connection
mysqli_close($conn);
?>
