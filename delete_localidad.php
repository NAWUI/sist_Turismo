<?php
    include("connection.php");
    include('session.php');

    // Comprueba si se ha enviado el ID
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Realiza la consulta para eliminar el registro de la localidad y las personas relacionadas
        $query = "DELETE localidades, personas FROM localidades INNER JOIN personas ON personas.cursos = localidades.cursos WHERE localidades.id = '$id'";
        $result = mysqli_query($conn, $query);

        // Comprueba si la consulta fue exitosa
        if ($result) {
            echo "<script>alert('La localidad y las personas relacionadas se han eliminado exitosamente.'); window.location = 'localidades.php';</script>";
        } else {
            echo "Error: No se pudo realizar la consulta.";
        }
    } else {
        echo "Error: No se proporcionó ningún ID.";
    }
?>
