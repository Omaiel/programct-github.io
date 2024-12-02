<?php
include 'db.php';

$sugerencia = $_POST['sugerencia'];

$stmt = $conexion->prepare("INSERT INTO sugerencias (sugerencia) VALUES (?)");
$stmt->bind_param("s", $sugerencia);

if ($stmt->execute()) {
    echo "Sugerencia guardada exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
