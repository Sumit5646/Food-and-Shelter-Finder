<?php
    require_once 'connection.php';
    $sql = "SELECT * FROM  shelter";
    $all_food = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="shelter.css">




      </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="homepage.html">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://docs.google.com/forms/d/e/1FAIpQLSf_atuhjHkJv73_GU4anFoZhE0iuOgPaFDY3c_BhOHyzIjL_A/viewform?usp=sf_link">Feedback</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSejhxy64WiwnrJamIRRY2Ra7T2cXpE1W9P8eHJStK7q6G78QA/viewform?usp=sf_link">ContactUs</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sort by
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Rating</a></li>
                      <li><a class="dropdown-item" href="#">Distance</a></li>
                      
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">High to Low</a></li>
                    </ul></li></ul>
                  
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
<main>
   
          <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="zoom-in">
          <?php
        while($row = mysqli_fetch_assoc($all_food)){

        
    ?>
            <div class="col">
              <div class="card">
                <img class="life"  src="<?php echo $row["image"]; ?>"alt="...">
                    <div class="card-body">
                    <h4>House Name: <?php echo $row["hname"]; ?></h4>
                    <p class="card-text"><?php echo $row["hdis"]; ?></p>
                    <details>Address: <?php echo $row["haddress"]; ?> <h6>Phone Number: <?php echo $row["hphone"]; ?></h6><h6><a href="<?php echo $row ["hlocation"];?>">Location</a></h6></details>
                   
                </div>
              </div>
            </div>
           
          <?php 
                }
          ?>
</main>
          
         
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script> 
       <script>
        AOS.init();
      </script>
    </body>
</html>

