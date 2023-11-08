$(document).ready(function () {
    $(".eliminar").on("click", function (event) {
        event.preventDefault(); // Prevent default form submission

        let id = $(this).val();

        // Show SweetAlert confirmation dialog
        swal.fire({
            title: "¿Estás seguro?",
            text: "Una vez que elimines la lista, no podrás recuperarla.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                // User clicked the confirm button, proceed with deletion
                $.ajax({
                    method: 'POST',
                    url: 'eliminar.php',
                    data: {
                        id: id,
                    },
                    success: function (data) {
                        swal.fire({
                            icon: "success",
                            text: data,
                        });
                        window.location = "localidades.php";
                    },
                    error: function () {
                        swal.fire({
                            icon: "error",
                            text: "Error occurred while processing your request.",
                        });
                    }
                });
            } else {
                // User clicked the cancel button, do nothing
                swal.fire("La lista no ha sido eliminada.");
            }
        });
    });
});
