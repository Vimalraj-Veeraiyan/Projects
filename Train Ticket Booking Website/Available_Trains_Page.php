<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Trains - Indian Railways</title>
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style_available.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        function goToLogin() {
            window.location.href = "./index.html";
        }
    </script>
</head>
<body>
    <header>
        <img src="./img/indianRailways.jpg" alt="" height="250px" width="250px" class="logo">
        <div class="title">
            <h1>INDIAN RAILWAYS</h1>
            <img src="./img/rail1.png" alt="" height="150px">
            <div class="menudiv">
                <a href="./home.php"><i class="fa fa-home" style="padding-right: 8px;"></i>Home</a>
                <a href="./Available_Trains_Page.php"><i class="fa fa-train" style="padding-right: 8px;"></i>Available Trains</a>
                <a href="./Reservation_Page.php"><i class="fa fa-calendar-check-o" style="padding-right: 8px;"></i>Reservation</a>
                <a href="./Cancel_Page.php"><i class="fa fa-remove" style="padding-right: 8px;"></i>Cancel Ticket</a>
                <a href="./index.html" class="user" id="user"><i class="fa fa-user" style="padding-right: 8px;"></i><?php session_start(); $var = $_SESSION['variable']; echo($var); ?>
                    <div onclick="goToLogin()">
                        Logout
                    </div>
                </a>
            </div>
        </div>
    </header>
    <div class="available">
        <img src="./img/bg4.jpg" alt="" width="100%" style="position: absolute; z-index:-1; filter:brightness(50%)">
        <h1 style="text-align: center; color:white; font-size:50px; padding:20px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Available Trains</h1>
        <table class="table-trains" border="2px" width=100% height=1000px>
            <tr>
                <th>Train Number</th>
                <th>Train Name</th>
                <th>Departure</th>
                <th>Arrival</th>
            </tr>
            <tr>
                <td>12723</td>
                <td>Andhra Pradesh Express</td>
                <td>Hyderabad Decan</td>
                <td>New Delhi</td>
            </tr>
            <tr>
                <td>22416</td>
                <td>Andhra Pradesh Sampark Kranti</td>
                <td>Tirupati</td>
                <td>H Nizamuddin</td>
            </tr>
            <tr>
                <td>6029</td>
                <td>Bangalore Express</td>
                <td>Chennai Central</td>
                <td>Bangalore Cy Junction</td>
            </tr>
            <tr>
                <td>12829</td>
                <td>Bhubaneswar Express</td>
                <td>Chennai Central</td>
                <td>Bhubaneswar</td>
            </tr>
            <tr>
                <td>6626</td>
                <td>Cbe Mas Express</td>
                <td>Coimbatore Junction</td>
                <td>Coimbatore Junction</td>
            </tr>
            <tr>
                <td>6060</td>
                <td>Chennai Express</td>
                <td>Velankanni</td>
                <td>Chennai Egmore</td>
            </tr>
            <tr>
                <td>6616</td>
                <td>Chennai Superfast Express</td>
                <td>Coimbatore Junction</td>
                <td>Chennai Central</td>
            </tr>
            <tr>
                <td>6618</td>
                <td>Coimbatore Express</td>
                <td>Nagercoil Junction</td>
                <td>Nagercoil Junction</td>
            </tr>
            <tr>
                <td>15629</td>
                <td>Guwahati Express</td>
                <td>Chennai Egmore</td>
                <td>Guwahati</td>
            </tr>
            <tr>
                <td>22917</td>
                <td>Haridwar Express</td>
                <td>Bandra Terminus</td>
                <td>Haridwar Junction</td>
            </tr>
            <tr>
                <td>12227</td>
                <td>Indore Duronto</td>
                <td>Mumbai Central</td>
                <td>Indore Junction Bg</td>
            </tr>
            <tr>
                <td>12967</td>
                <td>Jaipur Express</td>
                <td>Chennai Central</td>
                <td>Jaipur</td>
            </tr>
            <tr>
                <td>22638</td>
                <td>West Coast Express</td>
                <td>Mangalore Cntl</td>
                <td>Chennai Central</td>
            </tr>
            <tr>
                <td>6745</td>
                <td>Tirunelveli Express</td>
                <td>Chennai Egmore</td>
                <td>Tirunelveli</td>
            </tr>
            <tr>
                <td>12635</td>
                <td>Vaigai Express</td>
                <td>Chennai Egmore</td>
                <td>Madurai Junction</td>
            </tr>
            <tr>
                <td>16105</td>
                <td>Tiruchendur Express</td>
                <td>Chennai Egmore</td>
                <td>Tiruchendur</td>
            </tr>
            <tr>
                <td>12769</td>
                <td>Seven Hills Express</td>
                <td>Tirupati</td>
                <td>Secunderabad Junction</td>
            </tr>
            <tr>
                <td>6057</td>
                <td>Tiruchi Express</td>
                <td>Chennai Egmore</td>
                <td>Trichy</td>
            </tr>
        </table>
    </div>
    <footer>
        <h1>&copy; Indian Railways 2024</h1>
        <img src="./img/indianRailways.png" alt="" height="90px">
        <h1>All Rights Reserved</h1>
        <div class="social-media">
            <a href="https://www.facebook.com/RailMinIndia/" target="_blank" style="text-decoration: none;"><p class="fa fa-facebook" id="icons" style="color: white; background-color: blue;"></p></a>
            <a href="https://www.youtube.com/IndianRailways" target="_blank" style="text-decoration: none;"><p class="fa fa-youtube" id="icons" style="color: white; background-color: red;"></p></a>
            <a href="https://x.com/railminindia" target="_blank" style="text-decoration: none;"><p class="fa fa-twitter" id="icons" style="color: skyblue; background-color: white;"></p></a>
            <a href="https://www.instagram.com/railminindia/?hl=en" target="_blank" style="text-decoration: none;"><p class="fa fa-instagram" id="icons" style="color: magenta; background-color: white;"></p></a>
        </div>
    </footer>
</body>
</html>