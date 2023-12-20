$(document).ready(function() {
    // Oculta el div con el select al cargar la página
    $('#divConSelect').hide();

    let divVisible = false;
    // Maneja el clic en el botón "Cambiar Localidad"
    $('#cambiarlocal').click(function() {
        // Muestra el div con el select
        if (!divVisible) {
        $('#divConSelect').show();
        divVisible = true;
        } else {
        let localidad = $("#evaluadores").val();
        let nombre_localidad = $("#nombre_localidad").val();

                $.ajax({
                method: "POST",
                url: "action_cambiarlocalidad.php",
                data: { nombre_localidad: nombre_localidad,
                        localidad: localidad},
                success: function (data) {
                    console.log(data)
                    if (data === "La localidad se ha actualizado correctamente.") {
                    Swal.fire({
                        icon: "success",
                        title: data,
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        // Redirigir después de cerrar SweetAlert
                        window.location = "map.php";
                    });
                    } else if (data === "Para cambiar la localidad, tiene que estar seleccionada una localidad.") {
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
                }
                });
                }
    });

});
