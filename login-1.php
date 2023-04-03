<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ration-Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('wp4836115-abstract-light-hd-wallpapers.jpg'); background-position: center;
background-repeat: no-repeat;
background-size: cover;">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Ration Management System</h2><br>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="log.html">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                </ul>
            </div>
            <div class="search">
                <br><input type="date" class="date-field">
            </div>
        </div>
        <div>
	<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Select</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="images.jpeg"></td>
            <td>Wheat(ഗോതമ്പ്)</td>
            <td>5kg</td>
            <td>20 Rs/kg</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td><img src="Untitled.jpeg"></td>
            <td>Kerosin(മണ്ണെണ്ണ)</td>
            <td>1 lit</td>
            <td>10 Rs / lit</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td><img src="WhatsApp-Image-2022-10-06-at-2.09.44-PM-696x391.jpeg"></td>
            <td>Sugar(പഞ്ചസാര)</td>
            <td>1 kg</td>
            <td>15 Rs/kg</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td><img src="itled.jpeg"></td>
            <td>White Rice(പച്ചരി)</td>
            <td>25 Kg</td>
            <td>2 Rs/Kg</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td><img src="Untitljjed.jpeg"></td>
            <td>Jaya Rice(ജയ അരി)</td>
            <td>20 Kg</td>
            <td>5 Rs/kg</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>Total Price </td>
            <td colspan="5"></td>
        </tr>
        <tr>

        
          <td><div>
           
            </div></td>
        </tr>
    </tbody>
</table>
<br><br><center><input type="submit" value="ADD TO CART" id="sub"></center>
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "User_Reg";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username, cardNumber, cardType, phoneNumber FROM users";
$result = mysqli_query($conn, $sql);

// Check if query returned any results
if (mysqli_num_rows($result) > 0) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th colspan="2">User Details</th>';
    echo '</tr>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>Name</td>';
        echo '<td>' . $row["username"] . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Card Number</td>';
        echo '<td>' . $row["cardNumber"] . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Card Type</td>';
        echo '<td>' . $row["cardType"] . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Phone Number</td>';
        echo '<td>' . $row["phoneNumber"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<style>
        .date-field {
          display: block;
          width: 230px;
          padding: 10px;
          font-size: 16px;
          border: 5px solid #ff7200;
          border-radius: 5px;
          transition: border-color 0.3s ease;
          margin-left: 60%;
          margin-top: 10%;
        }
        .date-field::-webkit-calendar-picker-indicator {
          background: transparent;
          color: #5da5e8;
          font-size: 20px;
        }
        table {
  font-size: 12px;
  width: 80%;
  margin: auto;
  margin-top:150px;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: center;
}

img {
  width: 50px;
  height: 50px;
}

input[type=checkbox] {
  transform: scale(1.5);
}
#button-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    #sub {
      background-color: #ff7200;
      color: white;
      font-size: 20px;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #sub:hover {
      background-color: #3e8e41;
    }
	</style>
</body>
</html>