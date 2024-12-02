<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busqueda = $_POST['busqueda'];
    $sql = "SELECT * FROM estilismo WHERE Estilista LIKE '%$busqueda%' OR Nomcliente LIKE '%$busqueda%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Estilista: " . $row["Estilista"]. " - Cliente: " . $row["Nomcliente"]. " - Fecha: " . $row["Fecha"]. " - Hora: " . $row["Hora"]. " - Servicio: " . $row["Servicio"]. "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
}
?>

<form method="POST">
    Buscar Estilista o Cliente: <input type="text" name="busqueda">
    <input type="submit" value="Buscar">
</form>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
</body>
</html>