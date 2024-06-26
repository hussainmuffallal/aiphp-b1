<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
      body {
        background-color: rgb(252, 248, 226);          
      }

      .hero-text {
            text-align: center;
            color: #333;
            font-size: 3rem;
            margin-top: 5vh;
            font-weight: 50;
        }
        
        .navbar-brand img {
            border-radius: 5px;
        }

        .form-control {
            border-radius: 20px;
        }

        .container-md {
            background-color: rgb(255, 255, 255);
            border-radius: 20px;
            margin-bottom: 40px;
        }

        .form-text {
            margin-bottom: 25px;
        }
        
        .img-src {
            border-radius: 15px;
        }
    </style>
</head>
  <body>

    <?php
      include_once('nav-common.php');
    ?>
      
      <div class="container-md text-center mt-5" style="max-width: 400px;">
        <div class="mb-4 hero-text">Sign In</div>
        <img src="img/Human Profile Logo.jpg" class="img-src" width="250px" height="250px" alt="logo">
        <form action="dblogin.php" method="POST">
            <div class="mb-3 mt-3">
                <input type="email" name="email" class="form-control text-center fs-5 fw-light" id="exampleInputEmail1" onfocus="hideAlertBox()" aria-describedby="emailHelp" placeholder="Email address" required>
            </div>
            <div class="mb-3">
                <input type="password" name="pass" class="form-control text-center fs-5 fw-light" id="password" onfocus="hideAlertBox()" placeholder="Password" required>
            <div class="form-text">
                <a href="#">Forgot Password?</a>
            </div>
            </div class="container">
            <button type="submit" class="btn btn-primary fs-5 fw-light">Login</button>
            
        </form>
        <div class="text-center mt-2">
          Don't have an account? <a href="register.php">Register</a>
        </div>

        <?php

        if(isset($_GET['error1'])) {
          echo('
            <div id="alertbox" class="alert alert-danger mt-3" role="alert">
              Invalid email or user does not exist.
          </div>');
        }
        
        if(isset($_GET['error2'])) {
          echo('
            <div id="alertbox" class="alert alert-danger mt-3" role="alert">
              Invalid password. Please try again.  
          </div>');
        }
        
        ?>

      </div>
      
      <script>
        function hideAlertBox() {
          const alertBox = document.getElementById("alertbox");
          alertBox.style.display = "none";
        }
      </script>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

  </body>
</html>
