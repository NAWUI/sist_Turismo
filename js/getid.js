//Funcion que toma la id de los div stand
function getId(clicked_id) {

  let idStand = clicked_id;
  console.log(idStand);

  $.ajax({
    method: "POST",
    url: "localidad_mod.php", // Deja esto en blanco o coloca el nombre de este archivo PHP si es el mismo
    data: { idStand: idStand },
    success: function (response) {
      //console.log(response);
      $("#lcalidad_dec").html(response);
      // Handle the response if needed
    },
    error: function (error) {
      console.error("Error in AJAX request: " + error);
    },
  });

  $.ajax({
    method: "POST",
    url: "localidad_micro.php", // Deja esto en blanco o coloca el nombre de este archivo PHP si es el mismo
    data: { idStand: idStand },
    success: function (response) {
      //console.log(response);
      $("#microempredimiento").html(response);
      // Handle the response if needed
    },
    error: function (error) {
      console.error("Error in AJAX request: " + error);
    },
  });



        //Envio de comentarios por medio de ajax
        $('#btn-coment').click(function () {
          let comentario = $("#comentTextbox").val();
          let localidad = idStand;


          $.ajax({
              method: "POST",
              url: "carga_coment.php",
              data: {
                  comentario,
                  localidad
              },
              success: function (data) {
                  if (data === "Comentario subido") {
                      Swal.fire({
                          icon: "success",
                          title: data,
                          showConfirmButton: false,
                          timer: 1500,
                      }).then(function () {
                          window.location.reload();
                      });
                  } else if (data === "Error") {
                      Swal.fire({
                          icon: "error",
                          title: data,
                          showConfirmButton: false,
                          timer: 1500,
                      });
                  };
              }
          });
      });

      //Envio de observacion por medio de ajax
      $('#btn-observ').click(function () {
          let observacion = $("#observTextbox").val();
          let localidadobser = idStand;
          console.log(localidadobser);


          $.ajax({
              method: "POST",
              url: "carga_obser.php",
              data: {
                  observacion,
                  localidadobser
              },
              success: function (data) {
                  if (data === "Observacion subida") {
                    
                      Swal.fire({
                          icon: "success",
                          title: data,
                          showConfirmButton: false,
                          timer: 1500,
                      }).then(function () {
                          window.location.reload();
                      });
                  } else if (data === "Error") {
                      Swal.fire({
                          icon: "error",
                          title: data,
                          showConfirmButton: false,
                          timer: 1500,
                      });
                  };
              }
          });
          idStand = null;
      });

  $.ajax({
    method: "POST",
    url: "muestra_comentarios.php",
    data: { idStand: idStand },
    success: function (response) {
      // Vacía el contenido antes de cargar nuevos comentarios
      $("#comentarios").empty();
      $("#comentarios").html(response);
      comentariosVisibles = true;
    },
    error: function (error) {
      console.error("Error en la solicitud AJAX: " + error);
    },
  });

  $.ajax({
    method: "POST",
    url: "muestra_obser.php",
    data: { idStand: idStand },
    success: function (response) {
      // Vacía el contenido antes de cargar nuevos comentarios
      $("#observaciones").empty();
      $("#observaciones").html(response);
      observacionesVisibles = true;
    },
    error: function (error) {
      console.error("Error en la solicitud AJAX: " + error);
    },
  });
  
}


function microstand() {
  var nombrelocalidad = $("#nombre_localidad").val();
  var idStand = $("#id_stand").val();

  // Construye la URL con los parámetros GET
  var href =
    "microemprendimiento.php?nombre_localidad=" +
    encodeURIComponent(nombrelocalidad) +
    "&id_stand=" +
    encodeURIComponent(idStand);

  // Redirige al usuario al hacer clic en el botón
  window.location.href = href;
}
