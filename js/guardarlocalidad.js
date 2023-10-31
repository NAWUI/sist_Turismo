$(document).ready(function () {
    $("#password").keypress(function (event) {
      if (event.which === 13) {
        $("#enviar").click();
      }
    });
  
    $("#'guard_local").click(function () {
      var localida = $("#evaluadores").val();
      $.ajax({
        method: "POST",
        url: "login_action.php",
        data: {
          localida: localida,
        },
        success: function (data) {
          if (data === "Bienvenido") {
            Swal.fire({
              icon: "success",
              title: data,
              showConfirmButton: false,
              timer: 1500,
            }).then(function () {
              window.location = "session_login.php";
            });
          } else if (data === "Nombre o Contraseña incorrecta") {
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
  });
  
  