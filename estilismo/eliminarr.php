<?php
include('connection.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if (is_numeric($id)) {
        $sql = "DELETE FROM estilismo WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro con ID $id eliminado con éxito.";
        } else {
            echo "Error al eliminar el registro: " . $conn->error;
        }
    } else {
        echo "El ID ingresado no es válido.";
    }
} else {
    echo "Por favor, ingresa un ID para eliminar.";
}

$conn->close();
?>
