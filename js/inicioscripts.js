document.addEventListener('DOMContentLoaded', function() {
    var btnInicio = document.querySelector('.btn-inicio button');

    btnInicio.addEventListener('click', function(event) {
        event.preventDefault();
        var targetElement = document.querySelector('.contenedor');
        window.scrollTo({
            top: targetElement.offsetTop,
            behavior: 'smooth'
        });

        // Cambiar estilos del botón al hacer clic
        btnInicio.style.backgroundColor = '#E991AE';
        btnInicio.style.color = '#FFFFFF';

        // Redirigir a login.php
        window.location.href = 'login.php';
    });
});
