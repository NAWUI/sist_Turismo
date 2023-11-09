<?php
include('connection.php');

$idStand = $_POST['idStand'];
$response = "";

$queryid = "SELECT id FROM `localidades` WHERE `numeromesa` = '$idStand'";
$resultid = mysqli_query($conn, $queryid);
$rowid = mysqli_fetch_assoc($resultid);
$id_localidad = $rowid['id'];

$query = "SELECT * FROM `comentarios` INNER JOIN `localidades` ON comentarios.id_localidades = localidades.id INNER JOIN `usuarios` ON comentarios.id_usuario = usuarios.id WHERE `numeromesa` = '$idStand' AND localidades.id = $id_localidad ORDER BY `hora` DESC;";

$result = mysqli_query($conn, $query);

// $result = mysqli_query($conn, $query);

// Verifica si hay resultados
if ($result) {
    // Recorre los resultados y agrega el código a la variable de respuesta
    while ($row = mysqli_fetch_assoc($result)) {
        $response .= "
                      <div class='card mb-4'>
                      <div class='d-flex flex-row align-items-center'>
                      <p class='small text-muted mb-0'>" . $row['nombre'] . "</p>
                    </div>
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
}
;

// Imprime la variable de respuesta como resultado de la solicitud AJAX
echo $response;

?>