<?php
// Establecer la conexión a la base de datos
$server = "";
$username = "Sportanet";
$password = "";
$database = "Sportanet";

// Crear la conexión
$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>