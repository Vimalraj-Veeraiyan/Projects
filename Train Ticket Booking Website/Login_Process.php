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
        z-index: 100;
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
    function close_popup(username) {
        document.getElementById('success-msg').style.display = 'none';
        window.location.href = "./home.php";
    }
</script>

<?php

$email = $_POST['email'];
$password = $_POST['password'];

$containsEmail = false;
$containsPass = false;

$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "IndianRailways");
$sql = "select email from register_info where Email = '$email'";
$sql_result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($sql_result);
if(!empty($user)) {
    $containsEmail = true;
}

$sql = "select email from register_info where Password = '$password'";
$sql_result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($sql_result);
if(!empty($user)) {
    if($containsEmail) {
        $containsPass = true;
    }
}

if($containsEmail and $containsPass) {
    $sql = "select UserName from register_info where Email = '$email' and Password = '$password'";
    $sql_result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($sql_result);
    $username = implode($user);
    session_start();
    $_SESSION['variable'] = $username;
    echo("
        <div class='success-msg' id='success-msg'>
            <br>
            <h1>Hi $username</h1><br>
            <h2>Login Success!</h2> 
            <br><br><br>
            <button onclick='close_popup()'>OK</button>
        </div>
    ");
} else if(!$containsEmail) {
    echo("<script>
    window.alert('Invalid Email');  
    </script>");
} else if(!$containsPass) {
    echo("<script>
    window.alert('Invalid Password');  
    </script>");
} 

include("./Login_Page.php");

mysqli_close($conn);

?>