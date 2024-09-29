<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: /public/login.php");
    exit();
}

if (isset($_FILES['archivo'])) {
    $nombreArchivo = basename($_FILES['archivo']['name']);
    $rutaTemporal = $_FILES['archivo']['tmp_name'];
    $rutaDestino = '../../uploads/' . $nombreArchivo;

    // Validar tipo de archivo y tamaño
    $tipoArchivo = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));
    $tamañoArchivo = $_FILES['archivo']['size'];

    $extensionesPermitidas = ['pdf', 'doc', 'docx', 'jpg', 'png'];
    $tamañoMaximo = 5 * 1024 * 1024; // 5 MB

    if (in_array($tipoArchivo, $extensionesPermitidas) && $tamañoArchivo <= $tamañoMaximo) {
        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            echo "Archivo subido con éxito.";
            // Puedes guardar información en la base de datos si es necesario
        } else {
            echo "Error al subir el archivo.";
        }
    } else {
        echo "Archivo no permitido o demasiado grande.";
    }
}
?>
