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

$fbname = $_POST['fbname'];
$fname = $_POST['fname'];
$fdis = $_POST['fdis'];
$fprice = $_POST['fprice'];
$fadd = $_POST['fadd'];
$image = $_POST['image'];
$fphone = $_POST['fphone'];
$fimage= $_POST['fimage'];

$sql = "INSERT INTO food (fbname, fname, fdis, fprice, fadd, image, fphone, fimage) VALUES ('$fbname', '$fname', '$fdis', '$fprice', '$fadd', '$image', '$fphone', '$fimage')";



if($conn->query($sql) === TRUE)
{   
   echo "Uploaded sucessfully";
}else{
    echo "Error" . $sql, "<br>" . $conn->error;
}

$conn->close();

?>