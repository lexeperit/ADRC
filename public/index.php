<?php
// index.php

$titulo = 'Inicio';
include '../templates/header.php';
?>
<!-- AOS CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- Banner principal -->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-4">Bienvenidos a ADRC</h1>
        <p class="lead">Inspirando el interés por la ciencia y la tecnología</p>
    </div>
</div>

<!-- Secciones Destacadas -->
<div class="container section">
    <div class="row text-center">
        <!-- Revista -->
        <div class="col-md-4" data-aos="fade-up">
            <img src="/public/images/revista.png" alt="Revista" class="mb-3" style="width: 100px;">
            <h2>Revista</h2>
            <p>Explora nuestra última edición y sumérgete en el mundo de la ciencia.</p>
            <p><a class="btn btn-custom" href="revista.php" role="button">Leer más &raquo;</a></p>
        </div>
        <!-- Congresos -->
        <div class="col-md-4" data-aos="fade-up">
            <img src="/public/images/congreso.png" alt="Congresos" class="mb-3" style="width: 100px;">
            <h2>Congresos</h2>
            <p>Infórmate sobre nuestros próximos eventos y cómo participar.</p>
            <p><a class="btn btn-custom" href="congresos.php" role="button">Ver más &raquo;</a></p>
        </div>
        <!-- Cursos -->
        <div class="col-md-4" data-aos="fade-up">
            <img src="/public/images/cursos.png" alt="Cursos" class="mb-3" style="width: 100px;">
            <h2>Cursos</h2>
            <p>Inscríbete en nuestros cursos y talleres de capacitación.</p>
            <p><a class="btn btn-custom" href="cursos.php" role="button">Descubrir &raquo;</a></p>
        </div>
    </div>
</div>

<?php
include '../templates/footer.php';
?>
