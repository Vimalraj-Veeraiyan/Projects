<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canel Ticket - Indian Railways</title>
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style_reservation.css">
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
    <div class="reservation">
        <h1 style="text-align: center; color:white; font-size:50px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; padding:30px;">Cancel Train Ticket</h1>
        <?php include('./Fetch_data.php') ?>
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