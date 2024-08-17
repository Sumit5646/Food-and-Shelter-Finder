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
                width: 400px;
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
            <form action="shelterregis1.php" method="post"><br>
                <h2 >Enter the details</h2>
                <p><b>House Name</b></p>
                <input type="text" name="hname">
                <p class="inside"><b>House/Flat Description</b></p>
                <input type="text" name="hdis" placeholder="Write Here">
                <p><b>Address</b></p>
                <input type="text" name="haddress" placeholder="Address">
                <p><b>Location link</b></p>
                <input type="text" name="hlocation" placeholder="Link of Location">
                <p><b>Enter Contact details</b></p>
                <input type="integer" name="hphone" placeholder="phone number">
                <p><b>Image Link</b></p>
                <input type="text" name="image" placeholder="Image link">
            </br>
            <br><br>
                <p><button class="button"><b>Register</b></p>

            </div>
            </form>



            <marquee direction="Right"><a style="color: aliceblue;size: 16%;" class="navbar-brand" href="#">!!"Register Now"!!</a></marquee>        </nav>

            
    </body>
</html>