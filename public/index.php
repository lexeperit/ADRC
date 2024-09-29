<?php
// index.php

$titulo = 'Inicio';
include '../templates/header.php';
?>

<!-- Banner principal -->
<section class="hero-section d-flex align-items-center">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-3">Bienvenidos a ADRC</h1>
        <p class="lead">Inspirando el interés por la ciencia y la tecnología</p>
        <a href="#secciones" class="btn btn-primary btn-lg mt-4">Descubre más</a>
    </div>
</section>

<!-- Secciones Destacadas -->
<section id="secciones" class="py-5">
    <div class="container">
        <div class="row text-center">
            <!-- Revista -->
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card h-100 shadow-sm">
                    <img src="/public/images/revista.png" class="card-img-top" alt="Revista">
                    <div class="card-body">
                        <h5 class="card-title">Revista</h5>
                        <p class="card-text">Explora nuestra última edición y sumérgete en el mundo de la ciencia.</p>
                        <a href="revista.php" class="btn btn-outline-primary">Leer más &raquo;</a>
                    </div>
                </div>
            </div>
            <!-- Congresos -->
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card h-100 shadow-sm">
                    <img src="/public/images/congreso.jpg" class="card-img-top" alt="Congresos">
                    <div class="card-body">
                        <h5 class="card-title">Congresos</h5>
                        <p class="card-text">Infórmate sobre nuestros próximos eventos y cómo participar.</p>
                        <a href="congresos.php" class="btn btn-outline-primary">Ver más &raquo;</a>
                    </div>
                </div>
            </div>
            <!-- Cursos -->
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="card h-100 shadow-sm">
                    <img src="/public/images/cursos.jpg" class="card-img-top" alt="Cursos">
                    <div class="card-body">
                        <h5 class="card-title">Cursos</h5>
                        <p class="card-text">Inscríbete en nuestros cursos y talleres de capacitación.</p>
                        <a href="cursos.php" class="btn btn-outline-primary">Descubrir &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Valores -->
<section class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2>Nuestros Valores</h2>
            <p class="lead">Los pilares que nos guían en nuestra misión</p>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="100">
                <i class="fas fa-universal-access fa-3x mb-3 text-primary"></i>
                <h5>Accesibilidad</h5>
                <p>Hacemos que la ciencia sea comprensible y entretenida para personas de todas las edades.</p>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-lightbulb fa-3x mb-3 text-primary"></i>
                <h5>Innovación</h5>
                <p>Desarrollamos productos educativos innovadores como juegos de mesa y materiales interactivos.</p>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-delay="300">
                <i class="fas fa-handshake fa-3x mb-3 text-primary"></i>
                <h5>Colaboración</h5>
                <p>Trabajamos con universidades y sociedades científicas para expandir nuestra red de conocimiento.</p>
            </div>
        </div>
    </div>
</section>

<!-- Llamado a la Acción -->
<section class="cta-section text-white text-center py-5">
    <div class="container" data-aos="zoom-in">
        <h2>¿Listo para unirte a la aventura científica?</h2>
        <p class="lead">Sé parte de nuestra comunidad y descubre todo lo que ADRC tiene para ofrecerte.</p>
        <a href="contacto.php" class="btn btn-lg btn-outline-light mt-3">Contáctanos</a>
    </div>
</section>

<?php
include '../templates/footer.php';
?>
