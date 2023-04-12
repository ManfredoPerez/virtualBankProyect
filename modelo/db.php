<?php
// Configuración de la base de datos
$host = "localhost";
$user = "root";
$password = "";
$dbname = "bancavirtual";

// Establecer conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Manejo de errores
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>