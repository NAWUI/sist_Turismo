<?php
    include('connection.php');

    $idStand = $_POST['idStand'];
    $response = "";

    $query = "SELECT * FROM `localidades` WHERE `numeromesa` = '$idStand'";
    $result = mysqli_query($conn, $query);

    $result = mysqli_query($conn, $query);

        // Verifica si hay resultados
        if ($result) {
            // Recorre los resultados y agrega el código a la variable de respuesta
            while ($row = mysqli_fetch_assoc($result)) {
                $response .= "
                <div class='mb-3'>
                    <h3>".$row["nombreLocalidad"]."</h3>
                </div>";
            }
        } else {
            $response = "<p>No se encontraron resultados</p>";
        };

        // Imprime la variable de respuesta como resultado de la solicitud AJAX
        echo $response;

?>