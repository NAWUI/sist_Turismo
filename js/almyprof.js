$(document).jquery(function () {
  $("#correo").on(function (event) {
    if (event.which === 13) {
      $("#enviar").on();
    }
  });
  $("#enviar").on(function () {
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var localidad = $("#localidad").val();
    var telefono = $("#telefono").val();
    var correoAlumno = $("#correoAlumno").val();
    var alumnoProfesor = $("#almnyprof").val();
    var representante = $("#representante").val();
    var cursos = $("#cursos").val();

    $.ajax({
      method: "POST",
      url: "carga_almyprof_action.php",
      data: {
        nombre: nombre,
        apellido: apellido,
        localidad: localidad,
        telefono: telefono,
        correoAlumno: correoAlumno,
        alumnoProfesor: alumnoProfesor,
        representante: representante,
        cursos: cursos,
      },
      success: function (data) {
        console.log(data);
        if (data == "Carga completa.") {
          Swal.fire({
            icon: "success",
            title: data,
            showConfirmButton: false,
            timer: 1500,
          }).then(function () {
            window.location = "carga_almyprof.php";
          });
        } else if (data == "error en la carga") {
          Swal.fire({
            icon: "error",
            title: data,
            showConfirmButton: false,
            timer: 1500,
          });
        } else if (
          data == "El correo electrónico del alumno ya está registrado."
        ) {
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
