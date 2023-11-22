<?php
include('connection.php');
include_once('session.php');

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
            <div class='d-flex justify-content-between align-items-center'>
                <p class='small text-muted mb-0'>" . $row['nombre'] . "</p>
                <div class='d-flex'>
                    <!-- Botón de edición -->
                    " . ($row['id_usuario'] == $id_usr ? "
                    <button id='" . $row['id_coment'] . "' value='" . $row['id_coment'] . "' type='button' class='open btn btn-link text-dark' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                        <i class='fas fa-edit mr-2'></i> Editar
                    </button>" : "") . "
                    <!-- Botón de eliminación -->
                    " . ($row['id_usuario'] == $id_usr ? "
                    <button type='button' class='eliminarCom btn btn-link text-danger' id='" . $row['id_coment'] . "'>
                        <i class='eliminarCom fas fa-trash-alt'></i> Eliminar
                    </button>" : "") . "
                </div>
            </div>
            <p>" . $row['comentario'] . "</p>
            <div class='d-flex justify-content-between'>
                <div class='d-flex flex-row align-items-center'>
                    <p class='small text-muted mb-0'>" . $row['hora'] . "</p>
                </div>
            </div>
        </div>
    ";
    
  ;
    }
} else {
    $response = "<p>No se encontraron resultados</p>";
}
;

// Imprime la variable de respuesta como resultado de la solicitud AJAX
echo $response;

?>