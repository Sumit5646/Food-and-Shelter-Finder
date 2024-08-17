<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $umobile = $_POST['umobile'];
    $upass = $_POST['upass'];

    $updateQuery = "UPDATE regis SET
        uname = '$uname',
        uemail = $uemail,
        umobile = '$umobile',
        upass = '$upass'
        WHERE id = $id";

    if ($conn->query($updateQuery) === TRUE) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
