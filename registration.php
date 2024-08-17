<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}

$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$umobile = $_POST['umobile'];
$upass = $_POST['upass'];

$sql = "INSERT INTO regis (uname, uemail, umobile, upass) VALUES ('$uname', '$uemail', '$umobile', '$upass')";

if($conn->query($sql) === TRUE)
{   
    header("location:login.html");
}else{
    echo "Error" . $sql, "<br>" . $conn->error;
}

$conn->close();

?>