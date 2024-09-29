// scripts.js

//* Explicación de las mejoras:
//
//Navbar Dinámico: Se añade una clase al navbar cuando el usuario hace scroll para cambiar su estilo.
//Animaciones al Hacer Scroll: Integramos la librería AOS (Animate On Scroll) para aplicar animaciones a los elementos al aparecer en la pantalla.
//Efecto de Scroll Suave: Mejora la navegación interna en la página.
//Validación de Formularios: Se mantiene la validación básica para asegurar la entrada de datos.
//Nota: Para utilizar AOS, debemos incluir su archivo CSS y JS en nuestro proyecto.
//
// Esperar a que el documento esté listo
$(document).ready(function() {
    // Activar tooltips de Bootstrap
    $('[data-toggle="tooltip"]').tooltip();
  
    // Cambiar estilo del navbar al hacer scroll
    $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
        $('.navbar').addClass('scrolled');
      } else {
        $('.navbar').removeClass('scrolled');
      }
    });
  
    // Efecto de scroll suave para enlaces internos
    $('a.nav-link').on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
  
        var hash = this.hash;
  
        // Animación de scroll
        $('html, body').animate({
          scrollTop: $(hash).offset().top - 70
        }, 800);
      }
    });
  
    // Validación básica de formularios
    $('#form-contacto').submit(function(event) {
      var nombre = $('#nombre').val();
      var email = $('#email').val();
      var mensaje = $('#mensaje').val();
  
      if (nombre === "" || email === "" || mensaje === "") {
        alert("Todos los campos son obligatorios.");
        event.preventDefault();
      }
    });
  
    // Animaciones al hacer scroll (usando AOS)
    AOS.init({
      duration: 1000,
      once: true,
    });
  });
  