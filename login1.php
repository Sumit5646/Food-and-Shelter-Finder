<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}

$uname = $_POST['uname']; 
$upass = $_POST['upass']; 

$sql = "SELECT * FROM regis WHERE uname = '$uname'";
$ab=$conn->query($sql);
$result =$ab ;

// You should use > 0 instead of < 0 to check if there are any rows returned
if($result-> num_rows > 0)
{
    $rows = $result->fetch_assoc();
    if(isset($upass, $rows['upass']))
    {
        
        header("location:admin1.php");
    }
    else
    {
        echo "Invalid password";
    }
}
else
{
    echo "User not found";
}

$conn->close();
?>
