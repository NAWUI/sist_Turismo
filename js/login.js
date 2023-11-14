$(document).ready(function () {
  $("#password").keypress(function (event) {
    if (event.which === 13) {
      $("#enviar").click();
    }
  });

  $("#enviar").click(function () {
    var nombre = $("#nombre").val();
    var password = $("#password").val();
    $.ajax({
      method: "POST",
      url: "login_action.php",
      data: {
        nombre: nombre,
        password: password,
      },
      success: function (data) {
        if (data === "Bienvenido") {
          /*Swal.fire({
            icon: "success",
            title: data,

            showConfirmButton: false,
            timer: 1500,
          }).then(function () {
            window.location = "session_login.php";
          });*/
          Swal.fire({
            icon: 'success',
            title: '¡Bienvenido!',
            text: 'Inicio de sesión exitoso',
            showCancelButton: false,
            confirmButtonText: 'Ir a la página principal',
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirige a la página principal al hacer clic en el botón
                window.location = "session_login.php";
            }
        });
        } else if (data === "Nombre o Contraseña incorrecta") {
          /*Swal.fire({
            icon: "error",
            title: data,
            showConfirmButton: false,
            timer: 1500,
          });*/
          Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: 'Inicio de sesión fallido. Por favor, verifica tus credenciales.',
        });
        };
      }
    });
  });
});

