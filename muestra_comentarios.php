<?php
include('connection.php');
include_once('session.php');

// Inicializa la variable $response
$response = "";

// Asegúrate de que idStand esté definida antes de usarla
if (isset($_POST['idStand'])) {

    $idStand = $_POST['idStand'];
    $queryid = "SELECT id FROM `localidades` WHERE `numeromesa` = '$idStand'";
    $resultid = mysqli_query($conn, $queryid);
    $rowid = mysqli_fetch_assoc($resultid);
    $id_localidad = $rowid['id'];
    // Evita posibles problemas de SQL injection utilizando prepared statements
    $query = "SELECT * FROM `comentarios` 
    INNER JOIN `localidades` ON comentarios.id_localidades = localidades.id 
    INNER JOIN `usuarios` ON comentarios.id_usuario = usuarios.id 
    WHERE `numeromesa` = ? AND localidades.id = ? 
    ORDER BY `hora` DESC";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'si', $idStand, $id_localidad);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


    if ($result) {
        // Recorre los resultados y agrega el código a la variable de respuesta
        while ($row = mysqli_fetch_assoc($result)) {
            $response .= "
        <div class='card mb-4 comment-style'>
        <div class='d-flex flex-row align-items-center'>
        <p class='comment-user mb-0'>" . $row['nombre'] . "</p>
        </div>
            <p>" . $row['comentario'] . "</p>
            <div class='d-flex justify-content-between'>
                <div class='d-flex flex-row align-items-center'>
                    <p class='small text-muted mb-0'>" . $row['hora'] . "</p>
                </div>
            </div>
        </div>
    </div>";
        }
    } else {
        $response = "<p>No se encontraron resultados</p>";
    }
    mysqli_stmt_close($stmt);
} else {
    $response = "<p>Stand no seleccionado</p>";
}

// Imprime la variable de respuesta como resultado de la solicitud AJAX
echo $response;
