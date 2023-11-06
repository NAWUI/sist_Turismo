$("#enviar_micro").click(function () {
    var nombrelocalidad = $("#nombre_localidad").val();
    var idStand = $("#id_stand").val();
    var titulo = $("#titulo").val();
    var descripcion = $("#descripcion").val();
    var calificacion = $("#calificacion").val();
    console.log(nombrelocalidad);
    console.log(idStand);
    console.log(titulo);
    console.log(descripcion);
    console.log(calificacion);
    $.ajax({
        type: "POST",
        url: "microemprendimiento_action.php",
        data: {
                nombrelocalidad: nombrelocalidad,
                idStand: idStand,
                titulo: titulo,
                descripcion: descripcion,
                calificacion:calificacion },
        success: function (data) {
            console.log(data)
            if (data === "El microemprendimiento se ha guardado correctamente.") {
            Swal.fire({
                icon: "success",
                title: data,
                showConfirmButton: false,
                timer: 1500,
            });
            } else if (data === "Error al guardar el microemprendimiento.") {
            Swal.fire({
                icon: "error",
                title: data,
                showConfirmButton: false,
                timer: 2500,
            });
            }else if(data === "Faltan parámetros en la solicitud."){
                Swal.fire({
                icon: "error",
                title: data,
                showConfirmButton: false,
                timer: 2500,
            }); 
            }else{
                Swal.fire({
                icon: "error",
                title: data,
                showConfirmButton: false,
                timer: 2500,
            }); 
            };
        },
    });
});