<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Estilista = $_POST['Estilista'];
    $Nomcliente = $_POST['Nomcliente'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Servicio = $_POST['Servicio'];

    $sql = "INSERT INTO estilismo (Estilista, Nomcliente, Fecha, Hora, Servicio) VALUES ('$Estilista', '$Nomcliente', '$Fecha', '$Hora', '$Servicio')";

    if ($conn->query($sql) === TRUE) {
        echo ".";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserción de Datos</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>

<div class="container">
<h1>Cita registrada correctamente</h1>
<button onclick="window.location.href='borrar.html';">Eliminar cita</button>
                <button onclick="window.location.href='actualizar.html';">Actualizar cita</button>
                <button onclick="window.location.href='buscar.php';">Buscar cita</button>
                <button onclick="window.location.href='ver.php';">Visualizar citas</button>
                <br>
        <button onclick="window.location.href='Estetica.html';">Regresar a la pagina principal</button>
    </div>

</body>
</html>