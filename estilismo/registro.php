<?php
include('db.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo']; 

$sql_check = "SELECT * FROM menu WHERE id = ?";
$stmt_check = $conexion->prepare($sql_check);
$stmt_check->bind_param("s", $id);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    $sql_update = "UPDATE menu SET nombre = ?, precio = ?, tipo = ? WHERE id = ?";
    $stmt_update = $conexion->prepare($sql_update);
    $stmt_update->bind_param("sdss", $nombre, $precio, $tipo, $id);

    if ($stmt_update->execute()) {
        echo "Producto actualizado exitosamente.";
    } else {
        echo "Error al actualizar el producto: " . $conexion->error;
    }
} else {
    $sql_insert = "INSERT INTO menu (id, nombre, precio, tipo) VALUES (?, ?, ?, ?)"; 
    $stmt_insert = $conexion->prepare($sql_insert);
    $stmt_insert->bind_param("ssds", $id, $nombre, $precio, $tipo);

    if ($stmt_insert->execute()) {
        echo "Producto registrado exitosamente.";
    } else {
        echo "Error al registrar el producto nuevo: " . $conexion->error;
    }
}

$conexion->close();
?>
