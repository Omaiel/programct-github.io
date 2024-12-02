<?php
include 'db.php';


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "SELECT cliente_nombre, pedido, fecha FROM pedidos_personalizados ORDER BY fecha DESC";
$result = $conexion->query($sql);

$pedidos = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pedidos[] = $row;
    }
} else {
    echo "No se encontraron pedidos.";
}

$conexion->close();

header('Content-Type: application/json');
echo json_encode($pedidos);
?>
