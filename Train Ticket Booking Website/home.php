<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Indian Railways</title>
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style_home.css">
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
                <a href="#" class="user" id="user"><i class="fa fa-user" style="padding-right: 8px;"></i><?php session_start(); $var = $_SESSION['variable']; echo($var); ?>
                    <div onclick="goToLogin()">
                        Logout
                    </div>
                </a>
            </div>
        </div>
    </header>
    <div class="home">
        <div class="image-row">
            <img src="./img/train1.jpg" alt="Image 1">
            <img src="./img/train2.jpg" alt="Image 2">
            <img src="./img/train3.jpg" alt="Image 3">
            <img src="./img/train4.jpg" alt="Image 4">
        </div>
        <div class="description">
            <h1 id="h1">Welcome to Indian Railways <br></h1>
            <h2 id="slogan"><q>Lifeline of the Nation</q></h2><br>
            <h1 id="slogan2"><q><b>Safe</b> and <b>Fast</b> Train Services at Affordable Cost</q></h1>
            <h1 class="des">
                <i class="fa fa-train"></i> Indian Railways is a statutory body under the ownership of the Ministry of Railways of the Government of India that operates India's national railway system. As of 2023, it manages the fourth largest national railway system by size with a track length of 132,310 km (82,210 mi), running track length of 106,493 km (66,172 mi) and route length of 68,584 km (42,616 mi) of which 63,971 km (39,750 mi) is electrified. With more than 1.2 million employees, it is the world's ninth-largest employer and India's second largest employer.
            </h1>
            <h1 class="des">
                <i class="fa fa-train"></i> In 1951, the Indian Railways was established by the amalgamation of 42 different railway companies operating in the country, spanning a total of 55,000 km (34,000 mi). The railway network across the country was reorganized into six regional zones in 1951–52 for administrative purposes, which was gradually expanded to 18 zones over the years.
            </h1>
            <h1 class="des">
                <i class="fa fa-train"></i> The first steam operated railway operated in 1837 in Madras with the first passenger operating in 1853 between Bombay and Thane. In 1925, the first electric train ran in Bombay on DC traction. The first locomotive manufacturing unit was commissioned in 1950 at Chittaranjan with the first coach manufacturing unit set-up at Madras in 1955.
            </h1>
            <h1 class="des">
                <i class="fa fa-train"></i> Indian Railways runs various classes of express, passengers and suburban trains. In 2018–19, it operated 13,523 trains on average daily covering 7,325 stations and carried 8.44 billion passengers. Indian Railways also operates different classes of rail freight transport. In 2022–23, it operated 8,479 trains on average daily and transported 1418.1 million tonnes of freight. Indian Railways operates multiple classes of rolling stock, manufactured by self-owned coach-production facilities. As of March 2023, Indian Railways' rolling stock consisted of 318,196 freight wagons and 84,863 passenger coaches. As of December 2023, Indian Railways had 10,238 electric and 4,543 diesel locomotives amongst others.
            </h1>
        </div>
        <div class="image-row">
            <img src="./img/train5.jpg" alt="Image 5">
            <img src="./img/train6.jpg" alt="Image 6">
            <img src="./img/train7.jpg" alt="Image 7">
            <img src="./img/train8.jpg" alt="Image 8">
        </div>
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