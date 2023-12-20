$(document).ready(function() {

    // Manejar clic en el botón "Guardar Asistencia"
    $('#guardarAsis').on('click', function() {
        // Obtener el valor de id_stand
        var idStand = $('#id_stand').val();

        // Obtener todas las personas disponibles
        var allPeople = [];
        $('input[name="opcion"]').each(function() {
            var id_persona = $(this).data('id'); // Obtener el id de la persona
            allPeople.push({
                id: id_persona,
                nombre: $(this).val(),
                asistio: $(this).prop('checked') ? 1 : 0
            });
        });

        // Mostrar el modal de confirmación
        Swal.fire({
            title: 'Confirmar asistencia',
            html: '¿Estás seguro de guardar la asistencia para los siguientes participantes?<br>' +
                '<ul>' + allPeople.map(person => `<li>${person.nombre} - ${person.asistio ? 'Asistió' : 'No asistió'}</li>`).join('') + '</ul>',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Sí, guardar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Enviar datos al servidor mediante AJAX
                $.ajax({
                    type: 'POST',
                    url: 'guardar_Asist.php',
                    data: { allPeople: allPeople, idStand: idStand }, // Incluir idStand en los datos enviados
                    success: function(response) {
                        console.log(response);
                        // Manejar la respuesta del servidor si es necesario
                        Swal.fire('Guardado', 'La asistencia se ha guardado correctamente.', 'success')
                            .then(() => {
                                // Recargar la página después de cerrar el mensaje de éxito
                                location.reload();
                            });
                    },
                    error: function() {
                        // Manejar errores si es necesario
                        Swal.fire('Error', 'Se produjo un error al guardar la asistencia.', 'error');
                    }
                });
            }
        });
    });
});
