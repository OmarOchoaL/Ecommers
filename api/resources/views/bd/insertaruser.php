<?php
include('conexion.php');
$fechaHoy = new DateTime();
$fechaHoy->modify('+30 days');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['nombre'];
    $password = $_POST['pass'];
    $email = $_POST['correo'];
    $plan_id=$_POST['plan'];
    $end_Plan = $_POST[$fechaHoy];
    

    $stmt = $conn->prepare("INSERT INTO users (nombre, pass, correo, plan, $fechaHoy) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $username, $password, $email, $plan_id, $end_Plan); // "sssi" -> string, string, string, integer

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Nuevo usuario registrado correctamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}
?>
