$("#guardarlocal").click(function () {
    let localidad = $("#evaluadores").val();
    var idStand = $("#id_stand").val();
    console.log(idStand);


    $.ajax({
      method: "POST",
      url: "action_guardarlocalidad.php",
      data: { idStand: idStand, localidad: localidad },
      success: function (data) {
        console.log(data);
        if (data === "La localidad se ha actualizado correctamente.") {
          Swal.fire({
            icon: "success",
            title: data,
            showConfirmButton: false,
            timer: 1500,
          }).then(function () {
            window.location.reload;
          });
        } else if (
          data ===
          "Para guardar una localidad, tiene que estar seleccionada una localidad."
        ) {
          Swal.fire({
            icon: "error",
            title: data,
            showConfirmButton: false,
            timer: 2500,
          });
        } else if (
          data ===
          "Para guardar una localidad, tiene que estar seleccionado un stand."
        ) {
          Swal.fire({
            icon: "error",
            title: data,
            showConfirmButton: false,
            timer: 2500,
          });
        } else {
          Swal.fire({
            icon: "error",
            title: data,
            showConfirmButton: false,
            timer: 2500,
          });
        }
      },
    });
  });