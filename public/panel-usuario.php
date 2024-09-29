<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$titulo = 'Panel de Usuario';
include '../templates/header.php';
?>

<div class="container mt-5">
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?></h1>
    <!-- Contenido personalizado -->
    <p>Aquí puedes acceder a tus cursos, descargar materiales y más.</p>
    <!-- Enlace para cerrar sesión -->
    <a href="/src/includes/logout.php">Cerrar Sesión</a>
</div>

<h2>Subir Documento</h2>
<form action="/src/includes/subir.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="archivo">Selecciona un archivo:</label>
        <input type="file" class="form-control-file" id="archivo" name="archivo">
    </div>
    <button type="submit" class="btn btn-primary">Subir</button>
</form>

<?php
include '../templates/footer.php';
?>
