<!DOCTYPE html>
<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style>
            input:focus{
                background-color: rgb(164, 206, 166);
            }
            </style>
        <title>Registration Form</title>
        <link rel="stylesheet" herf="komal.css">
        <style>
            img{
                height: 100%;
                width: 100%;
                position: absolute;
                left: 0px;
                top: 0px;
                z-index: -1;
            }
            form{
                display: inline-block;
                border: 2px solid #301010;
                width: 500px;
                height: 600px;
                border-style:initial;
                align-items: center;
                color: rgb(154, 154, 154);
                background-color: rgb(219, 227, 236);
                background: transparent;
                backdrop-filter:blur(20px);
                

                

            

            }

            input[type=text],input[type=password]
            {
            
                border: 1px solid #144d03;
                 box-sizing: border-box;
            }
            div{
                text-align: center;
                
            }
            button{
                width: 30%;
                height: 3%;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a style="color: aliceblue;" class="navbar-brand" href="front.html">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <marquee direction="left"><a style="color: aliceblue;" class="navbar-brand" href="#">!!"Welcome To Food And Shelter Finder"!!</a></marquee>        
            </div>
        </nav>
        
        <div>
            <img src="./l-intro-1645057933.jpg"  class="img">
            <form action="foodregis.php" method="post">
                <h2 >Enter the details</h2>
                <p><b>Business Name</b></p>
                <input type="text" name="fbname">
                <p class="inside"><b>Food Name</b></p>
                <input type="text" name="fname">
                <p><b>Food Details</b></p>
                <input type="text" name="fdis" >
                <p><b>food Price</b></p>
                <input type="text" name="fprice" placeholder="Price">
                <p><b>Address</b></p>
                <input type="text" name="fadd" placeholder="Address">
                <p><b>Location</b></p>
                <input type="text" name="image" placeholder="Link of Location">
                <p><b>Enter Contact details</b></p>
                <input type="integer" name="fphone" placeholder="phone number">
                <p><b>Image</b></p>
                <input type="integer" name="fimage" placeholder="image link">
            </br>
                <p><button class="button"><b>Register</b></p>

            </div>
            </form>



            <marquee direction="Right"><a style="color: aliceblue;size: 16%;" class="navbar-brand" href="#">!!"Register Now"!!</a></marquee>        </nav>

            
    </body>
</html>