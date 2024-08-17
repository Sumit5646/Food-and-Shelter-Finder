<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "mypro";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}

$Fullname = $_POST['Uname'];
$password = $_POST['Upass'];
$Email = $_POST['Uemail'];
$Mobile = $_POST['Umobile'];

$sql = "INSERT INTO signup (Uname, Upass, Uemail, Umobile) VALUES ('$Fullname','$password','$Email','$Mobile' )";

if($conn->query($sql) === TRUE) //Strictly equator
{
    echo "Registration sucessfull";
}else{
    echo "Error" . $sql, "<br>" . $conn->error;
}

$conn->close();

?>