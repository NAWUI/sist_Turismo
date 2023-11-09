$(document).ready(function(){
    // Función para manejar el evento keyup del campo de correo
    $("#evaluadores").keyup(function(event) {
        if (event.which === 13) {
            $("#Enviar").click();
        };
    });
    
    // Función para manejar el evento click del botón enviar
    $("#Enviar").click(function() {
        // Obtener valores de los campos de entrada
    
        var localidad = $("#localidad").val();
  
        
        var nombreALR = $("#nombreALR").val();
        var apellidoALR = $("#apellidoALR").val();
        var cursoALR = $("#cursoALR").val();
        
        var nombreAL1 = $("#nombreAL1").val();
        var apellidoAL1 = $("#apellidoAL1").val();
        var cursoAL1 = $("#cursoAL1").val();
        
        var nombreAL2 = $("#nombreAL2").val();
        var apellidoAL2 = $("#apellidoAL2").val();
        var cursoAL2 = $("#cursoAL2").val();
        
        var nombreAL3 = $("#nombreAL3").val();
        var apellidoAL3 = $("#apellidoAL3").val();
        var cursoAL3 = $("#cursoAL3").val();
        
        var nombrePR = $("#nombrePR").val();
        var apellidoPR = $("#apellidoPR").val();
        var emailPR = $("#emailPR").val();
        var telefonoPR = $("#telefonoPR").val();
        var evaluadores = $("#evaluadores").val();
        
        // Realizar una solicitud AJAX con los valores recopilados
        $.ajax({
            method: "POST",
            url: "actioncarga_grupo.php",
            data: {
                localidad: localidad,
   
                nombreALR: nombreALR,
                apellidoALR: apellidoALR,
                cursoALR: cursoALR,
                nombreAL1: nombreAL1,
                apellidoAL1: apellidoAL1,
                cursoAL1: cursoAL1,
                nombreAL2: nombreAL2,
                apellidoAL2: apellidoAL2,
                cursoAL2: cursoAL2,
                nombreAL3: nombreAL3,
                apellidoAL3: apellidoAL3,
                cursoAL3: cursoAL3,
                nombrePR: nombrePR,
                apellidoPR: apellidoPR,
                emailPR: emailPR,
                telefonoPR: telefonoPR,
                evaluadores: evaluadores
            },
            success: function(data) {
                console.log(data);
                // Manejar la respuesta según las condiciones
                if (data === "Carga de Proyecto Correcta.") {
                    // Mostrar una alerta de éxito
                    Swal.fire({
                        icon: 'success',
                        title: data,
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function(){
                        // Redirigir a la página deseada
                        window.location = "map.php";
                    })    
                } else if (data === "Error en la carga de Proyectos") {
                    // Mostrar una alerta de error
                    Swal.fire({
                        icon: 'error',
                        title: data,
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else if (data === "Rellene los campos faltantes.") {
                    // Mostrar una alerta de error
                    Swal.fire({
                        icon: 'error',
                        title: data,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        });
    });
});
