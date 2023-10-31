$(document).ready(function () {
    $("#password").keypress(function (event) {
      if (event.which === 13) {
        $("#guardarlocal").click();
      }
    });
  
    $("#guardarlocal").click(function () {
      var localidad = $("#evaluadores").val();
      $.ajax({
        method: "POST",
        url: "action_guardarlocalidad.php",
        data: {
          localidad: localidad },
        success: function (data) {
            console.log(data)
          if (data === "Localidad actualizada correctamente.") {
            Swal.fire({
              icon: "success",
              title: data,
              showConfirmButton: false,
              timer: 1500,
            }).then(function () {
                window.location.reload;
            });
          }else if(data === "Por favor, selecciona una localidad para poder guardarla."){
            Swal.fire({
                icon: "error",
                title: data,
                showConfirmButton: false,
                timer: 1500,
              });
          }else{
            Swal.fire({
                icon: "error",
                title: data,
                showConfirmButton: false,
                timer: 1500,
              });
          }
        }
      });
    });
  });
  
  