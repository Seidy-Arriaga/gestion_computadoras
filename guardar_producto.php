<?php
require 'db_connect.php';

// Retrieve POST data
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$categoria_id = $_POST['categoria'];

// Insert into database
$sql = "INSERT INTO producto (nombre, tipo, precio, cantidad, categoria_id) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssdis', $nombre, $tipo, $precio, $cantidad, $categoria_id);

if ($stmt->execute()) {
    header("Location: productos.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>