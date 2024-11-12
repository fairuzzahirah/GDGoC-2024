<?php
// add_to_cart.php
include 'conn.php'; // file untuk koneksi database

$data = json_decode(file_get_contents("php://input"), true);
$product_id = $data['product_id'];

// Cek apakah produk sudah ada di cart
$query = $conn->prepare("SELECT * FROM cart WHERE product_id = ?");
$query->bind_param("i", $product_id);
$query->execute();
$result = $query->get_result();
$item = $result->fetch_assoc();

if ($item) {
    // Jika sudah ada, update quantity
    $query = $conn->prepare("UPDATE cart SET quantity = quantity + 1 WHERE product_id = ?");
    $query->bind_param("i", $product_id);
    $success = $query->execute();
} else {
    // Jika belum ada, masukkan produk baru ke cart
    $query = $conn->prepare("INSERT INTO cart (product_id, quantity) VALUES (?, 1)");
    $query->bind_param("i", $product_id);
    $success = $query->execute();
}

echo json_encode(['success' => $success]);
?>
