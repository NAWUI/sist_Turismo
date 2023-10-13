document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myform");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Evita el envío predeterminado del formulario

        const formData = new FormData(form);

        // Enviar los datos al servidor mediante una solicitud POST
        fetch("microemprendimiento_action.php", {
            method: "POST",
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: "success",
                    title: "Los datos se han guardado correctamente.",
                    showConfirmButton: false,
                    timer: 1500,
                }).then(function(){
                    window.location = "map.php";
                   })

                // Aquí puedes redirigir o realizar otras acciones después de guardar los datos.
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Hubo un error al guardar los datos.",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        })
        .catch((error) => {
            console.error(error);
        });
    });
});
