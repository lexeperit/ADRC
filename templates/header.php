<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($titulo) ? $titulo . ' - ADRC' : 'ADRC'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <!-- Enlace a tu CSS personalizado -->
    <link rel="stylesheet" href="/public/css/estilos.css">
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <!-- Enlace a AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- Enlace a tu CSS personalizado -->
    <link rel="stylesheet" href="/public/css/estilos.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/public/index.php">ADRC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menú de navegación -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/public/index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/sobre-nosotros.php">Sobre Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/revista.php">Revista</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/congresos.php">Congresos y Eventos</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/juegos.php">Juegos de Mesa</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/cursos.php">Cursos y Talleres</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/contacto.php">Contacto</a></li>
            </ul>
        </div>
    </nav>
