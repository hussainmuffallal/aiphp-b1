
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
      body {
            background-image: url(img/Building.jpg);
            background-repeat: no-repeat;
            background-size: cover;
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

        .container-md{
            backdrop-filter: blur(25px);
            border-radius: 20px;
            margin-bottom: 40px;
        }

        .btn2 {
            margin-top: 8px;
            padding: 5px;
            border: #333 solid 1px;
            background-color: none;
            border-radius: 5px;
        }
        
        .btn2:hover {
            background-color: #333;
            color: white;
        }
        
    </style>
</head>
  <body>

    <?php
      include_once('nav-common.php');
    ?>
      

      <div class="container-md text-center mt-5" style="max-width: 400px;">
        <div class="mb-4 hero-text">Let's Get Registered!</div>
        <form action="dbregister.php" method="POST">
            <div class="mb-3 ">
                <input type="email" class="form-control text-center fs-5 fw-light" id="exampleInputEmail1" onfocus="hideAlertBox()" aria-describedby="emailHelp" name="email" placeholder="Email address" required>
                <div id="emailHelp" class="form-text" style="color:white">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="firstName" name="firstName" placeholder="First Name" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="lastName" name="lastName" placeholder="Last Name" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="phone" name="phone" placeholder="Phone" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-center fs-5 fw-light" id="salary" name="salary" placeholder="Salary" required>
            </div>
            <div class="mb-3">
                <input type="date" class="form-control text-center fs-5 fw-light" id="dob" name="dateOfBirth" placeholder="Date Of Birth" required>
            </div>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="m" checked>
                    <label class="form-check-label fs-5 fw-light" for="male" style="color:white">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="f">
                    <label class="form-check-label fs-5 fw-light" for="female" style="color:white">Female</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary fs-5 fw-light">Register</button><br>
            <button type="reset" class="btn2 btn-primary">Clear</button>
        </form>
        <div class="text-center" style="color:white">
          Already have an account? <a href="login.php">Login</a>
        </div>
        <?php

        if(isset($_GET['error'])) {
          echo('
            <div id="alertbox" class="alert alert-danger mt-3" role="alert">
              User with this email already exists
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
