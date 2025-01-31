<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style_login_page.css" />
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
</head>
<body>
    <div id="register-page-paran">
        <img src="./img/bg8.png" alt=""class="bgimage">
        <div class="register">
            <form action="./Login_Process.php" method="post">
                <div class="infodiv">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter email" name="email">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter password" name="password">
                </div>
                <div class="btns">
                    <input type="reset" value="Cancel" class="reset-btn">
                    <input type="submit" value="Login" class="register-btn" onclick="blur()">
                </div>
            </form>
            <h1 style="font-size: 20px; color:white; position:relative; top: 66px; left: 130px;">Don't have an account? <a href="./Register_Page.php" style="color: green; text-decoration: none;">Register</a> now</h1>
            <br><br><br><br>
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