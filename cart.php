<?php
require_once "conn.php";
$sql = "SELECT c.cart_id, c.product_id, p.product_name, p.price, p.product_image, c.quantity
        FROM product p
        JOIN cart c ON p.product_id = c.product_id";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gossamer Gardens</title>
  <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
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
                <a class="nav-link active" href="cart.php">Cart</a>
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
        <h1 class="mt-4">Your cart</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Periksa hasil query
            if ($result->num_rows > 0) {
                // Output data dari setiap baris
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><img src='" . $row["product_image"] . "' width='50'></td>";
                    echo "<td>" . $row["product_name"] . "</td>";
                    echo "<td> IDR " . $row["price"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td><button class='btn-remove' data-product-id='" . $row["product_id"] . "'> Remove </button></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada data yang ditemukan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
        $sql = "SELECT SUM(product.price * cart.quantity) AS total_amount
                FROM cart
                JOIN product ON cart.product_id = product.product_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='total-amount'>";
                echo "<p>Total Amount : IDR " . $row['total_amount'] . "</p>";
                echo "</div>";
           }
        } else {
            echo "No products found.";
        }

        $conn->close();
    ?>
    <div class="button-checkout">
        <button class="btn-checkout" onclick="Checkout()">Checkout</button>
    </div>
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
    <script>
    document.querySelectorAll('.btn-remove').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            removeFromCart(productId);
        });
    });

    function removeFromCart(productId) {
        fetch('remove_from_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ product_id: productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Product removed from cart');
                location.reload(); // Reload halaman untuk memperbarui daftar produk
            } else {
                console.error('Failed to remove product from cart');
            }
        });
     }
    function Checkout() {
        alert("Mohon maaf, fitur ini belum tersedia!");
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
