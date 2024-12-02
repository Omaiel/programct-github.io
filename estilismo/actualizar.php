<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $Estilista = $_POST['Estilista'];
    $Nomcliente = $_POST['Nomcliente'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Servicio = $_POST['Servicio'];

    $sql = "UPDATE estilismo SET Estilista='$Estilista', Nomcliente='$Nomcliente', Fecha='$Fecha', Hora='$Hora', Servicio='$Servicio' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>