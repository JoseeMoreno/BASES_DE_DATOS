$(document).ready(function() {
    cargarGeneros();
    cargarProfesiones();
    cargarDatos();

    $('#form-usuario').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: 'guardar.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert(response);
                $('#form-usuario')[0].reset();
                cargarDatos();
            }
        });
    });

    $('#form-genero').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: 'guardar_genero.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert(response);
                $('#form-genero')[0].reset();
                cargarGeneros();
            }
        });
    });

    $('#form-profesion').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: 'guardar_profesion.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert(response);
                $('#form-profesion')[0].reset();
                cargarProfesiones();
            }
        });
    });

    $(document).on('click', '.delete-btn', function() {
        var userId = $(this).data('id');

        if (confirm('¿Estás seguro de que quieres eliminar este usuario?')) {
            $.ajax({
                url: 'eliminar_usuario.php',
                method: 'POST',
                data: { id: userId },
                success: function(response) {
                    alert(response);
                    cargarDatos();
                }
            });
        }
    });
});

function cargarGeneros() {
    $.ajax({
        url: 'obtener_generos.php',
        method: 'GET',
        success: function(data) {
            $('#genero').html(data);
        }
    });
}

function cargarProfesiones() {
    $.ajax({
        url: 'obtener_profesiones.php',
        method: 'GET',
        success: function(data) {
            $('#profesion').html(data);
        }
    });
}

function cargarDatos() {
    $.ajax({
        url: 'mostrar_datos.php',
        method: 'GET',
        success: function(data) {
            $('#datos').html(data);
        }
    });
}
