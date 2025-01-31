<style>
    .table-cancel {
        width: 80%;
        margin: 0 auto;
        color: white;
        font-size: 30px;
    }

    .table-cancel tr th {
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: white;
        font-size: 30px;
        background-color: blue;
    }

    .table-cancel tr td {
        text-align: center;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        padding: 10px 0;
    }

    .table-cancel tr td form input {
        font-size: 25px;
        background-color: red;
        color: white;
        border: 0;
        padding: 3px;
        border-radius: 10px;
    }
</style>

<?php
$conn = mysqli_connect("localhost", "root", "", "IndianRailways");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $name_book = $_POST['name_book'];
    $phone_book = $_POST['phone_book'];
    $from_book = $_POST['from'];
    $to_book = $_POST['to'];

    $delete_sql = "DELETE FROM ticket_info WHERE Name='$name_book' AND Phone='$phone_book' AND from_book='$from_book' AND to_book='$to_book'";

    if (mysqli_query($conn, $delete_sql)) {
        echo("<script>
            window.alert('Ticket Cancelled Successfully!');  
            </script>");
    } else {
        echo "Error cancelling ticket: " . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM ticket_info";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' class='table-cancel'>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>From</th>
                <th>To</th>
                <th>Action</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['Name'] . "</td>
                <td>" . $row['Phone'] . "</td>
                <td>" . $row['from_book'] . "</td>
                <td>" . $row['to_book'] . "</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='name_book' value='" . $row['Name'] . "'>
                        <input type='hidden' name='phone_book' value='" . $row['Phone'] . "'>
                        <input type='hidden' name='from' value='" . $row['from_book'] . "'>
                        <input type='hidden' name='to' value='" . $row['to_book'] . "'>
                        <input type='submit' name='delete' value='Cancel Ticket'>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo ("<h1 style='color:white; font-size:25px; text-align: center; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;'>No tickets booked yet.</h1>");
}

mysqli_close($conn);
?>
