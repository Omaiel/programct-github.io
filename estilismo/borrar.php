<?php
include('db.php');

$id = $_POST['id'];

$sql_check = "SELECT * FROM menu WHERE id = ?";
$stmt_check = $conexion->prepare($sql_check);
$stmt_check->bind_param("s", $id);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    $sql_delete = "DELETE FROM menu WHERE id = ?";
    $stmt_delete = $conexion->prepare($sql_delete);
    $stmt_delete->bind_param("s", $id);

    if ($stmt_delete->execute()) {
        echo "Producto eliminado exitosamente.";
    } else {
        echo "Error al eliminar el producto: " . $conexion->error;
    }
} else {
    echo "El producto con el ID especificado no existe.";
}

$conexion->close();
?>