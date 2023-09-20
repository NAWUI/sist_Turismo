document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Evita el envío predeterminado del formulario

        const formData = new FormData(form);

        // Enviar los datos al servidor mediante una solicitud POST
        fetch("guardar_datos.php", {
            method: "POST",
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Los datos se han guardado correctamente.");
                // Aquí puedes redirigir o realizar otras acciones después de guardar los datos.
            } else {
                alert("Hubo un error al guardar los datos.");
            }
        })
        .catch(error => {
            console.error("Error al enviar la solicitud:", error);
        });
    });
});
