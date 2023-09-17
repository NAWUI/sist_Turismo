$(document).ready(function () {
  $("#password").on(function (event) {
    if (event.which === 13) {
      $("#enviar").on();
    }
  });
  $("#enviar").click(function () {
    var nombre = $("#nombre").val();
    var password = $("#password").val();
    $.ajax({
      method: "POST",
      url: "action/login_action.php",
      data: {
        nombre: nombre,
        password: password,
      },

      success: function (data) {
        console.log(data);
        // alert(data);
        if (data == "Bienvenido") {
          Swal.fire({
            icon: "success",
            title: data,
            showConfirmButton: false,
            timer: 1500,
          }).then(function () {
            window.location = "action/session.php";
          });
        } else if (data == "Nombre o Contraseña incorrecta") {
          Swal.fire({
            icon: "error",
            title: data,
            showConfirmButton: false,
            timer: 1500,
          });
        }
      },
    });
  });
});
