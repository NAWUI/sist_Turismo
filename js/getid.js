      //Funcion que toma la id de los div stand
              function getId(clicked_id){
                
                let idStand = clicked_id;
                console.log(idStand);

                $.ajax({
                    method: "POST",
                    url: "localidad_mod.php", // Deja esto en blanco o coloca el nombre de este archivo PHP si es el mismo
                    data: { idStand: idStand },
                    success: function (response) {
                        console.log(response);
                        $('#lcalidad_dec').html(response);
                        // Handle the response if needed
                    },
                    error: function (error) {
                        console.error("Error in AJAX request: " + error);
                    }
                });

                $.ajax({
                    method: "POST",
                    url: "localidad_micro.php", // Deja esto en blanco o coloca el nombre de este archivo PHP si es el mismo
                    data: { idStand: idStand },
                    success: function (response) {
                        console.log(response);
                        $('#microempredimiento').html(response);
                        // Handle the response if needed
                    },
                    error: function (error) {
                        console.error("Error in AJAX request: " + error);
                    }
                });
                $('#guardarlocal').click(function (){
                let localidad = $("#evaluadores").val();

                $.ajax({
                method: "POST",
                url: "action_guardarlocalidad.php",
                data: { idStand: idStand,
                        localidad: localidad},
                success: function (data) {
                    console.log(data)
                    if (data === "La localidad se ha actualizado correctamente.") {
                    Swal.fire({
                        icon: "success",
                        title: data,
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(function () {
                        window.location.reload;
                    });
                    } else if (data === "Para guardar una localidad, tiene que estar seleccionada una localidad.") {
                    Swal.fire({
                        icon: "error",
                        title: data,
                        showConfirmButton: false,
                        timer: 2500,
                    });
                    }else if(data === "Para guardar una localidad, tiene que estar seleccionado un stand."){
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
            });
            
            $(document).ready(function() {
                var comentariosVisibles = false;
            
                $('#vercoment').click(function (){
                    // Si los comentarios no están visibles, mostrarlos
                    if (!comentariosVisibles) {
                        // Envía idStand al servidor PHP usando AJAX
                        $.ajax({
                            method: "POST",
                            url: "muestra_comentarios.php", // Deja esto en blanco o coloca el nombre de este archivo PHP si es el mismo
                            data: { idStand: idStand },
                            success: function (response) {
                                $('#comentarios').html(response);
                                comentariosVisibles = true; // Cambia el estado a visible
                            },
                            error: function (error) {
                                console.error("Error en la solicitud AJAX: " + error);
                            }
                        });
                    } else {
                        // Si los comentarios están visibles, ocultarlos
                        $('#comentarios').empty(); // Vaciar el contenido del contenedor de comentarios
                        comentariosVisibles = false; // Cambia el estado a no visible
                    }
                });
            });
            

            $("#emprendi").click(function () {
                var nombrelocalidad = $("#nombre_localidad").val();
                var idStand = $("#id_stand").val();
            
                // Construye la URL con los parámetros GET
                var href = "microemprendimiento.php?nombre_localidad=" + encodeURIComponent(nombrelocalidad) + "&id_stand=" + encodeURIComponent(idStand);
            
                // Redirige al usuario al hacer clic en el botón
                window.location.href = href;
            });
            
            };