<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
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
                <a class="nav-link mx-lg-2" aria-current="page" href="gossamergarden.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link mx-lg-2" href="aboutus.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="allproducts.php">All Products</a>
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
    <div class="heading">
        <h1 class="mt-2">Our Blooming Flowers</h1>  
    </div>
    <div class="button-product col-md-8">
        <button class="btn-button-product">See all</button>
        <button class="btn-button-product">Natural Flowers</button>
        <button class="btn-button-product">Artificial Flowers</button>
        <button class="btn-button-product">Featured Products</button>
    </div>

    <main class="container-product my-4">
        <div class="grid-product">
            <?php
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card-product'>";
                        echo "<img src='" . $row['product_image'] . "' alt='" . 
                        $row['product_name'] . "'>";
                        echo "<h2>" . $row['product_name'] . "</h2>";
                        echo "<p>IDR " . $row['price'] . "</p>";
                        echo "<button class='btn-product' data-product-id='" . 
                        $row['product_id'] . "'>Add to cart</button>";
                        echo "</div>";
                    }
                } else {
                    echo "No products found.";
                }

                $conn->close();
            ?>
        </div>
    </main>
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
          </ul>44
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
    <script>
        // JavaScript untuk menangani event klik tombol
        document.querySelectorAll('.btn-product').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                addToCart(productId);
            });
        });

        function addToCart(productId) {
            fetch('add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ product_id: productId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Product added to cart');
                } else {
                    console.error('Failed to add product to cart');
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>





