<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Stop. Employee Cloud.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
      body {
        background-color: bisque;
      }

      .hero-text {
            text-align: center;
            color: #333;
            font-size: 3rem;
            margin-top: 5vh;
            margin-bottom: 10vb;
            font-weight: 50;
        }

        .carousel-item {
            text-align: center;
            border-image-width: auto; 
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }

        .carousel-item img {
            border-radius: 25px;
            
        }

        .navbar-brand img {
            border-radius: 5px;
        }

        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 42px;
        }

        .card img {
            width: 100%;
            height: 100%;
        }
            

        .form-control {
            border: #333 solid 1px;
            border-radius: 20px;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: black;
            border-color: black;
        }

  </style>
  </head>
  <body>

      <?php
        include_once('nav-common.php');
      ?>

    <div class="container">
      <div class="hero-text">
        One Stop. Employee Cloud.
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Carousel/1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome</h5>
            <p>Creating a Comfortable Work Environment for a Sustainable Future.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Carousel/2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Get Trained From Us</h5>
            <p>Engage on our Training Program to Adapt to the Dynamic Environment.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Carousel/3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>About Us</h5>
            <p>Get to know about us and what we do.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" style="color: black;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" style="color: black;" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" style="color: black;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" style="color: black;" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container">
      <div class="hero-text">
        What We Offer
    </div>

    <div class="row">
      
        <div class="card" style="width: 18rem;">
          <img src="img/What We Offer/A.jpg" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title">Our Solutions</h5>
            <p class="card-text">Explore our solutions to find the best fit for you. So you can choose what suits you.</p>
            <a href="#" class="btn btn-primary">Find</a>
          </div>
        </div>
      

      
        <div class="card" style="width: 18rem;">
          <img src="img/What We Offer/B.jpeg" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title">Our Services</h5>
            <p class="card-text">Go through all the Services that we provide so that you can get started.</p>
            <a href="#" class="btn btn-primary">Explore</a>
          </div>
        </div>
      

      
        <div class="card" style="width: 18rem;">
          <img src="img/What We Offer/C.jpg" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title">Our Development Process</h5>
            <p class="card-text">Take a look of our development process so that you can get a better understanding of we develop it.</p>
            <a href="#" class="btn btn-primary">Look</a>
          </div>
        </div>
    </div>
   

  

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

    </body>
</html>