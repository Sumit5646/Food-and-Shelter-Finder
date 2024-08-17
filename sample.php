<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="sample.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="admin1.php">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
        </ul>
      </div>
      <h3 style="margin-right:38%">The Food and Shelter finder</h3>
    </div>
  </nav>

<div class="container text-center" style="margin-left:1%;">
  <div class="row">
    <div class="col-2" style="background-color: gray" style="margin">
   
        <a href="sample.php">User Data<br><br></a> 
        <a href="registration.html">User Register<br><br></a>
        
        <a href="foodmeal.php">Food Meal Data<br><br></a>
        <a href="foodregis1.php">Food Meal registration<br><br></a>

        <a href="shelterfetch.php">Shelter Data<br><br></a>
        <a href="shelterregis.php">Shelter Registration<br><br></a>
        <style>
          a{
            text-decoration: none;
            font-family: 'Courier New', Courier, monospace;
            color: black;
            
          }
          a:hover{
            color: black;
          }
          row{
            margin-left:10%;
          }
        </style>

    </div>
    <div class="col-9">
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
<h2>User data</h2>
        <table style="margin-left: 30%;"  >
        <style>table, th, td {
          border: 2px solid black;
          border-collapse: collapse;

          tr:nth-child(even) 
          {
          background-color: grey;
          }

          th:nth-child(even),td:nth-child(even)
          {
          background-color: grey;
          }

          table, th, td{
            width:20%;
          }


        }
        </style>
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
    </div>
    
  </div>
</div>
</body>
</html>