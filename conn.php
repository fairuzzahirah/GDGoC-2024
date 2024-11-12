<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gossamergardens";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
