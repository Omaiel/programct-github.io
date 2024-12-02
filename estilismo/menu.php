<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <h1>Tabla de datos</h1>

    <form method="post" action="">
        <label for="busqueda">Buscar por ID:</label>
        <input type="text" id="busqueda" name="busqueda" required placeholder="Ingresa un ID">
        <button type="submit" name="buscar">Buscar</button>
    </form>


    <?php
    include('db.php');

    $busqueda = "";
    if (isset($_POST['buscar'])) {
        $busqueda = $_POST['busqueda'];
        $sql = "SELECT id, nombre, precio, tipo FROM menu WHERE id = '$busqueda'";
    } else {
        $sql = "SELECT id, nombre, precio, tipo FROM menu";
    }

    $resultado = mysqli_query($conexion, $sql);
    if (!$resultado) {
        die("Error al obtener datos: " . mysqli_error($conexion));
    }

    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Clase de producto</th></tr>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['precio'] . "</td>";
        echo "<td>" . $fila['tipo'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    mysqli_close($conexion);
    ?>

    <button onclick="window.location.href='actualizar.html'" class="producto-btn">Actualizar dato</button>
    <button onclick="window.location.href='borrar.html'" class="producto-btn">Borrar dato</button>
    <button onclick="window.history.back()" class="producto-btn">Regresar</button>

</body>
</html>
