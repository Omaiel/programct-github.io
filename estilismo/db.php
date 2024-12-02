<?php
// Configuración de la base de datos
$host = "localhost";  // Dirección del servidor de base de datos (localhost si está en el mismo servidor)
$usuario = "root";    // Usuario de la base de datos (generalmente es 'root' en servidores locales)
$clave = "";          // Contraseña del usuario (dejar vacío si no se requiere)
$base_datos = "estilismo"; // Nombre de la base de datos 'estetica'

// Crear la conexión a la base de datos
$conexion = new mysqli($host, $usuario, $clave, $estetica);

// Verificar si la conexión es exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);  // Muestra el error si no se puede conectar
}
?>
