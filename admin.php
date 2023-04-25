<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px #ccc;
			max-width: 400px;
			margin: 0 auto;
		}
		input[type=text], input[type=password], input[type=email], input[type=tel] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		button {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		button:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
<?php
// Set the database credentials
$server= "localhost";
$username = "root";
$password = "amal@2002";
$dbname = "User_Reg";

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password entered in the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a SQL query to check if the username and password exist in the database
    $sql = "SELECT * FROM admins WHERE Name='$username' AND password='$password'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if there is a row in the result set, which means the username and password were found
    if (mysqli_num_rows($result) == 1) {
        // Redirect to the adminDetail.php page
        header("Location: adminDetial.php");
        exit();
    } else {
        // If the username and password were not found, show an error message on the login form
        $login_err = "Invalid username or password";
    }
}
// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		<h2>Login</h2>
		<label for="username"><b>Admin name</b></label>
		<input type="text" placeholder="Enter Username" name="username" required>
		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" required maxlength="8">
		<button type="submit">Login</button>
		<?php if (isset($login_err)) { ?>
            <div><?php echo $login_err; ?></div>
        <?php } ?>
	</form>
</body>
</html>

