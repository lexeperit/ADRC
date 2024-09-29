<?php
session_start();
include '../config/config.php';

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Consultar usuario
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$stmt->bind_param('s', $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    if (password_verify($password, $fila['password'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: /public/panel-usuario.php");
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "El usuario no existe.";
}

$stmt->close();
$conn->close();
?>
