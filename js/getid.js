
  let comentariosVisibles = false; // Asegúrate de definir estas variables
  let observacionesVisibles = false;

  function getId(clicked_id) {
    let idStand = clicked_id;

    $.ajax({
      method: "POST",
      url: "localidad_mod.php",
      data: { idStand: idStand },
      success: function (response) {
        $("#lcalidad_dec").html(response);
      },
      error: function (error) {
        console.error("Error in AJAX request: " + error);
      },
    });

    $.ajax({
      method: "POST",
      url: "localidad_micro.php",
      data: { idStand: idStand },
      success: function (response) {
        $("#microempredimiento").html(response);
      },
      error: function (error) {
        console.error("Error in AJAX request: " + error);
      },
    });

    $.ajax({
      method: "POST",
      url: "localidad_eva.php",
      data: { idStand: idStand },
      success: function (response) {
        $("#evaluacion").html(response);
      },
      error: function (error) {
        console.error("Error in AJAX request: " + error);
      },
    });

    $('#btn-coment').off('click').on('click', function () {
      let comentario = $("#comentTextbox").val();
      let localidad = idStand;

      $.ajax({
        method: "POST",
        url: "carga_coment.php",
        data: { comentario, localidad },
        success: function (data) {
          handleAjaxResponse(data, "Comentario subido");
        },
      });
    });

    $('#btn-observ').off('click').on('click', function () {
      let observacion = $("#observTextbox").val();
      let localidadobser = idStand;

      $.ajax({
        method: "POST",
        url: "carga_obser.php",
        data: { observacion, localidadobser },
        success: function (data) {
          handleAjaxResponse(data, "Observacion subida");
          idStand = null;
        },
      });
      
    });

    $.ajax({
      method: "POST",
      url: "muestra_comentarios.php",
      data: { idStand: idStand },
      success: function (response) {
        $("#comentarios").empty().html(response);
        comentariosVisibles = true;
      },
      error: function (error) {
        console.error("Error in AJAX request: " + error);
      },
    });

    $.ajax({
      method: "POST",
      url: "muestra_obser.php",
      data: { idStand: idStand },
      success: function (response) {
        $("#observaciones").empty().html(response);
        observacionesVisibles = true;
      },
      error: function (error) {
        console.error("Error in AJAX request: " + error);
      },
    });
  }

  function handleAjaxResponse(data, successMessage) {
    if (data === successMessage) {
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
    }
  }

  function microstand() {
    var nombrelocalidad = $("#nombre_localidad").val();
    var idStand = $("#id_stand").val();

    var href =
      "microemprendimiento.php?nombre_localidad=" +
      encodeURIComponent(nombrelocalidad) +
      "&id_stand=" +
      encodeURIComponent(idStand);

    window.location.href = href;
  }