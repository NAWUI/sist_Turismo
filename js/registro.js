$(document).ready(function(){
    $("#correo").keyup(function(event) {
        if (event.which === 13) {
            $("#enviar").click();
        };
    });
    $("#enviar").click(function() {
        var nombre = $("#nombre").val();
        var password = $("#password").val();
        var correo = $("#correo").val();
        $.ajax({
            method: "POST",
            url: "registro_action.php",
            data: {
                nombre: nombre,
                password: password,
                correo: correo
            },
            
            success: function(data) {
                console.log(data);
                if ((data) == "Usted se ha registrado correctamente.") {
                    Swal.fire({
                        icon: 'success',
                        title: (data),
                        showConfirmButton: false,
                        timer: 1500
                      }).then(function(){
                         window.location = "carga_almyprof.php";
                        })    
                }else if((data) == "El correo electrónico ya está asociado a otro usuario"){
                    Swal.fire({
                        icon: 'error',
                        title: (data),
                        showConfirmButton: false,
                        timer: 1500
                      })
                }else if((data) == "Rellene los campos faltantes."){
                    Swal.fire({
                        icon: 'error',
                        title: (data),
                        showConfirmButton: false,
                        timer: 1500
                      })
                }
            }
        });
    });
});