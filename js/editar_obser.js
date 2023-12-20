//Modificacion de comentarios
$(document).ready(function () {
    $(document).on("click", ".editarobser", function() {
        
        
        let obser = $("#edicion").val();
        let id = $(this).attr("id");

       $.ajax({
        method: 'POST',
        url: 'editar_obser.php',
        data: {
            id: id,
            obser: obser,
        },
        success: function (data) {
            if (data == "exito") {
                swal.fire({
                    icon: "success",
                    text: "Observacion modificada",
                    })
                window.location = "map.php";
            } else if (data == 'vacio') {
                swal.fire({
                    icon: "error",
                    text: "Escriba una observacion",
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
