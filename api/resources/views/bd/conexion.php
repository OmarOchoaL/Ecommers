<?php
$servername = "localhost";  // O la dirección de tu servidor de base de datos
$username = "root";         // Tu nombre de usuario de MySQL
$password = "";             // Tu contraseña de MySQL
$dbname = "tecflix";  // El nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos"; // Mostrar un mensaje si la conexión es exitosa
}
?>
