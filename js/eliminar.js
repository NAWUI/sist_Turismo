$(document).ready(function () {
    $(".delete-button").click(function () {
      var id = $(this).data("id");
  
      Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, borrarlo',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          // Realiza la llamada AJAX para eliminar la localidad de la base de datos
          $.ajax({
            method: "POST",
            url: "delete_localidad.php",
            data: { id: id },
            success: function (data) {
              // Maneja la respuesta del servidor
              Swal.fire(
                '¡Borrado!',
                'La localidad ha sido borrada.',
                'success'
              ).then(function () {
                // Puedes redirigir a otra página o hacer cualquier otra acción después de borrar
                window.location = 'localidades.php';
              });
            },
            error: function () {
              // Maneja el error si la llamada AJAX falla
              Swal.fire(
                'Error',
                'No se pudo realizar la operación de borrado.',
                'error'
              );
            }
          });
        }
      });
    });
  });
  