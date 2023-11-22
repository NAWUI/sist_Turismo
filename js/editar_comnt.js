//Modificacion de comentarios
$(document).ready(function () {
    $(document).on("click", ".editarCom", function() {
        
        
        let coment = $("#edicion").val();
        let id = $(this).attr("id");

       $.ajax({
        method: 'POST',
        url: 'editar_comnt.php',
        data: {
            id: id,
            coment: coment,
        },
        success: function (data) {
            if (data == "exito") {
                swal.fire({
                    icon: "success",
                    text: "Comentario modificado",
                    })
                window.location = "map.php";
            } else if (data == 'vacio') {
                swal.fire({
                    icon: "error",
                    text: "Escriba un comentario",
                    text: (data),
                    })
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
