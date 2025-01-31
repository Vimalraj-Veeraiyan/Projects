<?php
$name_book = $_POST['name_book'];
$phone_book = $_POST['phone_book'];
$from_book = $_POST['from'];
$to_book = $_POST['to'];

$conn = mysqli_connect("localhost", "root", "", "IndianRailways");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO ticket_info VALUES ('$name_book', '$phone_book', '$from_book', '$to_book')";

if (mysqli_query($conn, $sql)) {
    echo("<script>
    window.alert('Hi $name_book, your Train Ticket has been booked successfully from $from_book to $to_book');  
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

include('./Reservation_Page.php');

mysqli_close($conn);
?>
