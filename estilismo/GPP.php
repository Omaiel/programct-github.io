<?php
include 'db.php';

$cliente_nombre = $_POST['cliente_nombre'];
$pedido = $_POST['pedido'];

$stmt = $conexion->prepare("INSERT INTO pedidos_personalizados (cliente_nombre, pedido) VALUES (?, ?)");
$stmt->bind_param("ss", $cliente_nombre, $pedido);

if ($stmt->execute()) {
    echo "Pedido guardado exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
