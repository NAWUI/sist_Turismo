
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
    $query = "SELECT observaciones.*, localidades.id AS id_localidad, usuarios.id AS id_usuario, usuarios.nombre, localidades.id_evaluador FROM observaciones INNER JOIN localidades ON observaciones.id_localidades = localidades.id INNER JOIN usuarios ON observaciones.id_usuario = usuarios.id 
    WHERE localidades.id = ? 
    ORDER BY `hora` DESC";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id_localidad);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


    if ($result) {
        // Recorre los resultados y agrega el código a la variable de respuesta
        while ($row = mysqli_fetch_assoc($result)) {
            $response .= "
        <div class='card mb-4 comment-style'>
        <div class='d-flex flex-row align-items-center'>
        <p class='comment-user mb-0'>" . $row['nombre'] . "</p>
        <div class='d-flex'>
                            <!-- Botón de edición -->
                    " . ($row['id_usuario'] == $id_usr ? "
                    <button id='" . $row['id'] . "' value='" . $row['id_usuario'] . "' type='button' class='openobser btn btn-link text-dark' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                        <i class='fas fa-edit mr-2'></i> Editar
                    </button>" : "") . "
                    <!-- Botón de eliminación -->
                    " . ($row['id_usuario'] == $id_usr ? "
                    <button type='button' class='eliminarCom btn btn-link text-danger' id='" . $row['id'] . "'>
                        <i class='eliminarCom fas fa-trash-alt'></i> Eliminar
                    </button>" : "") . "
                    </div>
                    </div>
        

            <p>" . $row['observacion'] . "</p>
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


