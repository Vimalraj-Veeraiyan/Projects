<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style_register_page.css" />
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
</head>
<body>
    <div id="register-page-paran">
        <img src="./img/bg8.jpg" alt=""class="bgimage">
        <div class="register">
            <form action="./Register_Process.php" method="post">
                <div class="infodiv">
                    <label for="firstname">First Name</label>
                    <input type="text" placeholder="Enter your first name" name="fn" required>
                    <label for="lastname">Last Name</label>
                    <input type="text" placeholder="Enter your last name" name="ln" required>
                    <label for="number">Phone No.</label>
                    <input type="text" placeholder="Enter your phone number" name="phone">
                    <label for="address">Address</label>
                    <input type="text" placeholder="Enter your address" name="address" required>
                    <label for="username">Username</label>
                    <input type="text" placeholder="Enter your username" name="username" required>
                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter email" name="email" required>
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter password" name="pass" required>
                </div>
                <div class="btns">
                    <input type="reset" value="Reset" class="reset-btn">
                    <input type="submit" value="Register" class="register-btn" onclick="blur()">
                </div>
            </form>
            <br><br>
            <hr><br>
            <footer>
                <br><br>
                <h1 class="copyright">&copy; Indian Railways 2024</h1>
                <h1>All rights reserved</h1>
            </footer>
        </div> 
    </div>
</body>
</html>