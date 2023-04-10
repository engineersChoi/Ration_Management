<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ration-Management</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "" || password == "") {
        alert("Please fill in both the username and password fields.");
        if (username == "") {
            document.getElementById("username").style.border = "2px solid red";
        }
        if (password == "") {
            document.getElementById("password").style.border = "2px solid red";
        }
        return false;
    }
    return true;
}

    </script>
</head>
<body style="background-image: url(wp3441559-kerala-gods-own-country-wallpapers.jpg);
background-repeat: no-repeat;
background-size: cover;">
    <form method="post" action="login-1.php" onsubmit="return validateForm()">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">E-Ration</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                </ul>
            </div>
        </div> 
        <div class="content">
            <h1>Ration <br><span>Management</span> <br>System</h1>
            <p class="par">Ration Management System is to automate all operations in a Ration shop and SupplyCo.<br>
             </p>

                <button class="cn"><a href="#">CONTACT US</a></button>

                <div class="form">
                    <h2>Login Here</h2>
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="password" id="password" name="password" placeholder="Password" maxlength="8"><br>
                    <button class="btnn" type="submit" name="submit">Login</button>
                   <br><br><center><a href="forgot.php" id="i">Forgotten password?</a></center>
                    <p class="link">Don't have an account?<br>
                    <a href="userreg.html">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
