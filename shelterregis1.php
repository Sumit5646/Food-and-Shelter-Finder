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

$hname = $_POST['hname'];
$hdis = $_POST['hdis'];
$haddress = $_POST['haddress'];
$hphone = $_POST['hphone'];
$hlocation = $_POST['hlocation'];
$image = $_POST['image'];

$sql = "INSERT INTO shelter (hname, hdis, haddress, hphone, hlocation, image) VALUES ('$hname', '$hdis', '$haddress', '$hphone', '$hlocation', '$image')";



if($conn->query($sql) === TRUE)
{   
    header("location:admin1.php");
}else{
    echo "Error" . $sql, "<br>" . $conn->error;
}

$conn->close();

?>