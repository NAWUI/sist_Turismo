<?php
    include('connection.php');

    $idStand = $_POST['idStand'];
    $response = "";

    $query = "SELECT * FROM `comentarios` INNER JOIN `localidades` ON comentarios.id_localidades = localidades.id WHERE `numeromesa` = '$idStand' ORDER BY `hora` DESC";
    $result = mysqli_query($conn, $query);

    $result = mysqli_query($conn, $query);

        // Verifica si hay resultados
        if ($result) {
            // Recorre los resultados y agrega el código a la variable de respuesta
            while ($row = mysqli_fetch_assoc($result)) {
                $response .= "
                      <div class='card mb-4'>
                          <p>" . $row['comentario'] . "</p>
                          <div class='d-flex justify-content-between'>
                            <div class='d-flex flex-row align-items-center'>
                              <p class='small text-muted mb-0'>" . $row['hora'] . "</p>
                            </div>
                        </div>
                    </div>";
            }
        } else {
            $response = "<p>No se encontraron resultados</p>";
        };

        // Imprime la variable de respuesta como resultado de la solicitud AJAX
        echo $response;

?>