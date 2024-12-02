<?php
include('db.php');
$action = $_GET['action'];

if ($action == 'registrarCita') {
    $estilista = $_POST['estilista'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $Fecha = $_POST['Fecha'];
    $hora = $_POST['hora'];
    $servicio = $_POST['servicio'];

    $sql_check = "SELECT * FROM citas WHERE estilista = ? AND Fecha = ? AND hora = ?";
    $stmt_check = $conexion->prepare($sql_check);
    $stmt_check->bind_param("sss", $estilista, $Fecha, $hora);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        echo "Ya existe una cita para este estilista en esa fecha y hora.";
    } else {
        $sql_insert = "INSERT INTO citas (estilista, nombre_cliente, Fecha, hora, servicio) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $conexion->prepare($sql_insert);
        $stmt_insert->bind_param("sssss", $estilista, $nombre_cliente, $Fecha, $hora, $servicio);

        if ($stmt_insert->execute()) {
            echo "Cita registrada exitosamente.";
        } else {
            echo "Error al registrar la cita: " . $conexion->error;
        }
    }
}

if ($action == 'buscarCita') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM citas WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode(null);
    }
}
if ($action == 'editarCita') {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $fecha = $data['fecha'];
    $nombre_cliente = $data['cliente'];
    $estilista = $data['estilista'];
    $hora = $data['hora'];
    $servicio = $data['servicio'];
    
    $sql = "UPDATE citas SET fecha = ?, cliente = ?, estilista = ?, hora = ?, servicio = ? WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssi", $fecha, $cliente, $estilista, $hora, $servicio, $id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $conexion->error]);
    }
}
if ($action == 'eliminarCita') {
    $id = $_GET['id'];
    $sql = "DELETE FROM citas WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $conexion->error]);
    }
}
$conexion->close();
?>