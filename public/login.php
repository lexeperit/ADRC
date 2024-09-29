<?php
$titulo = 'Iniciar Sesión';
include '../templates/header.php';
?>

<div class="container mt-5">
    <h1>Iniciar Sesión</h1>
    <form action="/src/includes/procesar-login.php" method="post">
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
</div>

<?php
include '../templates/footer.php';
?>
