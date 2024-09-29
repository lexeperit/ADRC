<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= isset($titulo) ? htmlspecialchars($titulo) . ' - ADRC' : 'ADRC'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="../public/images/favicon.ico" type="image/x-icon">
    <!-- Enlace a Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Fuente personalizada -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Enlace a Bootstrap CSS (versión más reciente) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Enlace a AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- Enlace a tu CSS personalizado -->
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Metadatos adicionales -->
    <meta name="description" content="Asociación para la Divulgación Recreativa de las Ciencias (ADRC) - Inspirando el interés por la ciencia y la tecnología.">
    <meta name="keywords" content="ADRC, ciencia, tecnología, educación, revista, congresos, cursos">
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="../public/images/ADRC-01.png" alt="Logo ADRC" width="40" height="40" class="me-2">
                    <span>ADRC</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Menú de navegación -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre-nosotros.php">Sobre Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="revista.php">Revista</a></li>
                        <li class="nav-item"><a class="nav-link" href="congresos.php">Congresos y Eventos</a></li>
                        <li class="nav-item"><a class="nav-link" href="juegos.php">Juegos de Mesa</a></li>
                        <li class="nav-item"><a class="nav-link" href="cursos.php">Cursos y Talleres</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
