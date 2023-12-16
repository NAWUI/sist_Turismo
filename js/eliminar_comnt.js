// Eliminacion de comentarios
$(document).ready(function () {
    $(document).on("click", ".eliminarCom", function() {
        let id = $(this).attr("id");

        // Mostrar SweetAlert de confirmación
        swal.fire({
            title: "¿Estás seguro?",
            text: "Esta acción no se puede deshacer",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Sí, eliminar",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, realizar la eliminación con AJAX
                $.ajax({
                    method: 'POST',
                    url: 'eliminar_comnt.php',
                    data: {
                        id: id,
                    },
                    success: function (data) {
                        if (data == "exito") {
                            swal.fire({
                                icon: "success",
                                text: "Comentario eliminado",
                            }).then(() => {
                                // Redirigir después de cerrar SweetAlert
                                window.location = "map.php";
                            });
                        } else {
                            swal.fire({
                                icon: "error",
                                text: (data),
                            });
                        }
                    },
                });
            }
        });
    });
});
