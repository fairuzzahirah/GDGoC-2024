<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gossamer Gardens</title>
  <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<!-- start navbar -->
<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">Gossamer gardens</a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Gossamer gardens</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="aboutus.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="allproducts.php">All Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="cart.php">Cart</a>
          </ul>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!-- end navbar -->
  <!-- start carousel -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="Flower Website Assets/Hero/carousel-img-1.svg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <h1 class="carousel-caption-header mt-5 display-1 fw-bolder">Gossamer gardens</h1>
          <p>Discover delicate beauty and enchanting blooms that tell a story, and believe in the magic that flowers bring to every moment.</p>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="Flower Website Assets/Hero/carousel-img-2.svg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <h1 class="carousel-caption-header mt-5 display-1 fw-bolder">Bring your memories</h1>
          <p>Explore our collection and discover flowers that whisper tales of love, friendship, and renewal. Whether it's the mystical transparency of the Skeleton Flower or the timeless elegance of a rose, each petal carries a story, waiting to be part of your cherished memories.</p>
          <button class="btn btn-primary px-4 py-2 mt=5">Explore now</button>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="Flower Website Assets/Hero/carousel-img-3.svg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <h2 class="carousel-caption-header mt-5 display-1 fw-bolder">Some flowers waiting to blooms</h2>
          <button class="btn btn-primary px-4 py-2 mt=5">Check out</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->
  <!-- card categoriea -->
  <div class="container mt-4 fw-bolder">
    <h1 class="h1">each categories</h1>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="Flower Website Assets/Hero/Vector.svg" class="d-block w-100 h-100 r-img">
            <div class="overlay">
              <button class="btn btn-primary px-4 py-2 mt=5 caption">Check out</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="Flower Website Assets/Hero/Vector-1.svg" class="d-block w-100 h-100 r-img">
            <div class="overlay">
              <button class="btn btn-primary px-4 py-2 mt=5 caption">Check out</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="Flower Website Assets/Hero/Vector-2.svg" class="d-block w-100 h-100 r-img">
            <div class="overlay">
              <button class="btn btn-primary px-4 py-2 mt=5 caption">Check out</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="Flower Website Assets/Hero/Vector-3.svg" class="d-block w-100 h-100 r-img">
            <div class="overlay">
              <button class="btn btn-primary px-4 py-2 mt=5 caption">Check out</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end card categories -->
  <!-- start about us -->
  <!-- end about us -->
  <script>
    // JavaScript to add the 'show' class after a delay
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.querySelector('.thumbnail').classList.add('show');
        }, 300); // Adjust delay as needed
    });
</script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
  <script src="scripts.js"></script>
</body>
</html>