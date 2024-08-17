<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM regis WHERE id = $id";

    if ($conn->query($deleteQuery) === TRUE) {
        header("location:sample.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
