$(document).ready(function() {

    // Manejar clic en el botón "Guardar Criterio"
    $('#guardarCri').on('click', function() {
        var idStand = $('#id_stand').val();
// Obtener los valores de los criterios y sus nombres
var criterios = $('.evaluador').map(function(index) {
    var valor = $(this).val();
    var nombre = $(this).closest('div').find('h5').attr('id'); // Buscar el h5 dentro del div padre

    // Ignorar casos en los que el nombre y el valor estén vacíos
    if (nombre !== undefined && valor !== "") {
        return {
            nombre: nombre,
            valor: valor
        };
    }
}).get();


        // Mostrar información en la consola para depuración
        console.log("Criterios:", criterios);

        // Verificar si hay criterios sin valores
        var emptyCriteria = criterios.filter(criterio => criterio.valor === "");

        // Si todos los criterios están vacíos, mostrar advertencia y salir de la función
        if (criterios.length === 0 || emptyCriteria.length === criterios.length) {
            console.log("Advertencia: Ningún criterio asignado");
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'No hay criterios asignados. Por favor, asigna valores a los criterios antes de guardar.'
            });
            return;
        }

        // Mostrar el modal de confirmación
        Swal.fire({
            title: 'Confirmar Guardar Criterios',
            html: '¿Estás seguro de guardar los siguientes criterios?<br>' +
                '<ul>' + criterios.map((criterio) => `<li>${criterio.nombre}: ${criterio.valor}</li>`).join('') + '</ul>',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Sí, guardar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            console.log(result);
            console.log(criterios);
            if (result.isConfirmed) {
                // Enviar datos al servidor mediante AJAX
                $.ajax({
                    type: 'POST',
                    url: 'guardar_crit.php',
                    data: { criterios: criterios, idStand: idStand  },
                    success: function(response) {
                        console.log(response);
                        // Manejar la respuesta del servidor si es necesario
                        Swal.fire('Guardado', 'Los criterios se han guardado correctamente.', 'success')
                            .then(() => {
                                // Recargar la página después de cerrar el mensaje de éxito
                                location.reload();
                            });
                    },
                    error: function() {
                        // Manejar errores si es necesario
                        Swal.fire('Error', 'Se produjo un error al guardar los criterios.', 'error');
                    }
                });
            }
        });
    });
});
