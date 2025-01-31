<style>
    .success-msg {
        height: 300px;
        width: 600px;
        background-color: rgba(138, 43, 226, 1);
        border-radius: 30px;
        position: absolute;
        top: 200px;
        left: 30%; 
        border: 5px solid black;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .success-msg h1 {
        text-align: center;
        color: white;
        font-size: 50px;
    }

    .success-msg h2 {
        color: white;
        font-size: 40px;
        text-align: center;
    }

    .success-msg button {
        width: fit-content;
        height: fit-content;
        padding: 10px;
        border-radius: 10px;
        background-color: darkgreen;
        color: white;
        font-size: 40px;
    }
</style>

<script>
    function close_popup() {
        document.getElementById('success-msg').style.display = 'none';
        window.location.href = "./Login_Page.php";
    }
</script>

<?php

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$number = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "IndianRailways");
$sql = "insert into register_info values('$fn', '$ln', '$number', '$address', '$username', '$email', '$pass')";
mysqli_query($conn, $sql);

include('./Register_Page.php');

echo("    
    <div class='success-msg' id='success-msg'>
        <br>
        <h1>Hi $username</h1><br>
        <h2>Registration Success!</h2> 
        <br><br><br>
        <button onclick='close_popup()'>OK</button>
    </div>
");

mysqli_close($conn);

?>