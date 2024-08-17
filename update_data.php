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

    $selectQuery = "SELECT * FROM regis WHERE id = $id";
    $result = $conn->query($selectQuery);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    $row = $result->fetch_assoc();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h2>Update Data</h2>
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label for="uname">User name:</label>
        <input type="text" name="uname" value="<?php echo $row['uname']; ?>" required><br>

        <label for="uemail">User Email:</label>
        <input type="email" name="uemail" value="<?php echo $row['uemail']; ?>" required><br>

        <label for="umobile">UserMobile:</label>
        <input type="number" name="umobile" value="<?php echo $row['umobile']; ?>" required><br>

        <label for="upass">New Password:</label>
        <input type="password" name="upass" value="<?php echo $row['upass']; ?>" required><br>
        </select><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
