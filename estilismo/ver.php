<?php
include('connection.php');

$sql = "SELECT * FROM estilismo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Estilista: " . $row["Estilista"] . " - Cliente: " . $row["Nomcliente"] . " - Fecha: " . $row["Fecha"] . " - Hora: " . $row["Hora"] . " - Servicio: " . $row["Servicio"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <h1> Visualiza todas tus citas dando click aqui</h1>
</body>
</html>