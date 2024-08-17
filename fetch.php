
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
$selectQuery = "SELECT * FROM regis";
$result = $conn->query($selectQuery);

if (!$result)
{
    die("Query failed:" . $conn->error);
}

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    </head>
    <body>
        <h2>User data</h2>
        <table border = "1">
            <tr>
                <th>UserID</th>
                <th>Username</th>
                <th>UserEmail</th>
                <th>UserMobile</th>
                <th>UserPassword</th>
            </tr>
            <?php
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>{$row["id"]}</td>";
                    echo "<td>{$row["uname"]}</td>";
                    echo "<td>{$row["uemail"]}</td>";
                    echo "<td>{$row["umobile"]}</td>";
                    echo "<td>{$row["upass"]}</td>";
                    echo "<td><a href='delete_data.php?id={$row['id']}'>Delete</a></td>";          
                    echo "</tr>";
                }
            ?>
            </table>
    </body>
</html>

<?php
$conn->close();
?>