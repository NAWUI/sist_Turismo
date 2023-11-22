    //Eliminacion de comentarios
    $(document).ready(function () {
        $(document).on("click", ".eliminarCom", function() {

            let id = $(this).attr("id");

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
                        })
                    window.location = "map.php";
                } else {
                    swal.fire({
                        icon: "error",
                        text: (data),
                        })
                }
            },
            });
        });
    });


 