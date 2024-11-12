<?php
include 'conn.php'; // file untuk koneksi database

$data = json_decode(file_get_contents("php://input"), true);
$product_id = $data['product_id'];

$query = $conn->prepare("DELETE FROM cart WHERE product_id = ?");
$query->bind_param("i", $product_id);
$success = $query->execute();

echo json_encode(['success' => $success]);
?>
