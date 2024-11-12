<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gossamer Gardens</title>
  <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<!-- start navbar -->
<body class="body">
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
              <a class="nav-link mx-lg-2" aria-current="page" href="gossamergarden.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="aboutus.php">About</a>
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
  <!-- start about us -->
  <div class="heading">
    <h1 class="mt-2">About Us</h1>
    <p>Inspired by the ethereal beauty of Diphylleia grayi, we are dedicated to bringing nature's delicate charm into your life.</p>
    <div class="container">
      <section class="about">
        <div class="about-img">
          <img src="Flower Website Assets/Hero/about us 2.jpg" alt="">
        </div>
        <div class="about-content">
          <h2 class="fw-bolder">We believe that flowers capture moments</h2>
          <p>Flowers are nature's poetry, a silent language that speaks of beauty, love, and the ephemeral nature of life. They are the delicate whispers of the earth, blooming with vibrant colors and enchanting fragrances. Each petal unfurls a story, capturing moments of joy, hope, and serenity. In their transient existence, flowers remind us of the fleeting beauty of each moment, urging us to pause, breathe, and appreciate the wonders around us. They are the soul's delight, a gift from nature that brightens our days and adorns our lives with grace and elegance.</p>
        </div>
      </section>
    </div>
    <div class="container">
      <section class="about-2">
        <div class="about-content-2">
          <h2 class="fw-bolder">Our representative and start</h2>
          <p>Gossamer Gardens was born from a moment of sheer wonder when we discovered the enchanting Skeleton Flower, 
            scientifically known as Diphylleia grayi. This rare and magical bloom captivated our hearts with its delicate 
            white petals that possess a truly unique trait – when touched by rain, these petals turn translucent, 
            revealing a fragile, skeletal structure that seems almost otherworldly. Found in the cool, wooded mountainsides 
            of Japan, China, and the Appalachian Mountains, the Skeleton Flower thrives in the shadows, its beauty often 
            hidden from the bustling world. This ephemeral transformation, where the petals regain their white hue as they dry, 
            speaks to the transient and delicate nature of beauty itself. Inspired by this mystical bloom, we founded Gossamer 
            Gardens as a haven where the magic of nature’s most exquisite flowers can be cherished and shared. 
            Here, we celebrate the extraordinary in the ordinary, inviting you to explore a realm where every petal tells a story of grace, resilience, and wonder.</p>
        </div>
        <div class="about-img-2">
          <img src="Flower Website Assets/Hero/skeleton flower.jpg" alt="">
        </div>
      </section>
    </div>
  </div>
  <!-- start footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Gossamer gardens</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">All Product</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Affiliate Program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Order Status</a></li>
            <li><a href="#">Payment Options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Online Shop</h4>
          <ul>
            <li><a href="#">Special Featured Product</a></li>
            <li><a href="#">Real Flowers</a></li>
            <li><a href="#">Artificial Flowers</a></li>
            <li><a href="#">Flowers Bouquet</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow Us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a> 
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
  <script src="scripts.js"></script>
</body>
</html>