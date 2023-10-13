<?php
include("connection.php");

$nombreGrupo = filter_input(INPUT_POST, 'nombreGrupo', FILTER_SANITIZE_STRING);
$localidad = filter_input(INPUT_POST, 'localidad', FILTER_SANITIZE_STRING);
$division = filter_input(INPUT_POST, 'division', FILTER_SANITIZE_STRING);
$nombreALR = filter_input(INPUT_POST, 'nombreALR', FILTER_SANITIZE_STRING);
$apellidoALR = filter_input(INPUT_POST, 'apellidoALR', FILTER_SANITIZE_STRING);
$cursoALR = filter_input(INPUT_POST, 'cursoALR', FILTER_SANITIZE_STRING);
$nombreAL1 = filter_input(INPUT_POST, 'nombreAL1', FILTER_SANITIZE_STRING);
$apellidoAL1 = filter_input(INPUT_POST, 'apellidoAL1', FILTER_SANITIZE_STRING);
$cursoAL1 = filter_input(INPUT_POST, 'cursoAL1', FILTER_SANITIZE_STRING);
$nombreAL2 = filter_input(INPUT_POST, 'nombreAL2', FILTER_SANITIZE_STRING);
$apellidoAL2 = filter_input(INPUT_POST, 'apellidoAL2', FILTER_SANITIZE_STRING);
$cursoAL2 = filter_input(INPUT_POST, 'cursoAL2', FILTER_SANITIZE_STRING);
$nombreAL3 = filter_input(INPUT_POST, 'nombreAL3', FILTER_SANITIZE_STRING);
$apellidoAL3 = filter_input(INPUT_POST, 'apellidoAL3', FILTER_SANITIZE_STRING);
$cursoAL3 = filter_input(INPUT_POST, 'cursoAL3', FILTER_SANITIZE_STRING);
$nombrePR = filter_input(INPUT_POST, 'nombrePR', FILTER_SANITIZE_STRING);
$apellidoPR = filter_input(INPUT_POST, 'apellidoPR', FILTER_SANITIZE_STRING);
$emailPR = filter_input(INPUT_POST, 'emailPR', FILTER_SANITIZE_EMAIL);
$telefonoPR = filter_input(INPUT_POST, 'telefonoPR', FILTER_SANITIZE_STRING);
$evaluadores = filter_input(INPUT_POST, 'evaluadores', FILTER_SANITIZE_STRING);
$nombreCompleto = $nombrePR . " " . $apellidoPR;

if (
    empty($nombreGrupo) || empty($localidad) || empty($division) || 
    empty($nombreALR) || empty($apellidoALR) || empty($cursoALR) || 
    empty($nombreAL1) || empty($apellidoAL1) || empty($cursoAL1) || 
    empty($nombreAL2) || empty($apellidoAL2) || empty($cursoAL2) || 
    empty($nombreAL3) || empty($apellidoAL3) || empty($cursoAL3) || 
    empty($nombrePR) || empty($apellidoPR) || empty($emailPR) || empty($telefonoPR) || empty($evaluadores)
) {
    echo "Rellene todos los campos.";
} else {
    // Las variables de cadena deben rodearse de comillas simples en las consultas SQL

    $insert_queryLOC = "INSERT INTO `localidades`(`numeromesa`, `nombreLocalidad`, `profesorACargo`, `cursos`, `id_evaluador`) VALUES ('No definido','$localidad','$nombreCompleto','$cursoALR', '$evaluadores')";
    $resultLOC = mysqli_query($conn, $insert_queryLOC);

    $sql = "SELECT id FROM localidades where nombreLocalidad = '$localidad' AND profesorACargo = '$nombreCompleto'";
    $consulta = mysqli_query($conn, $sql);
    $vec = mysqli_fetch_row($consulta);
    $id_localidad = "$vec[0]";
    // Insertar datos de ALR
    $insert_queryALR = "INSERT INTO personas (`id_localidad`,`nombre`, `apellido`, `cursos`, `alumnoOProfesor`, `representante`) VALUES ('$id_localidad','$nombreALR', '$apellidoALR', '$cursoALR', 0, 1)";
    $resultALR = mysqli_query($conn, $insert_queryALR);

    // Insertar datos de AL1
    $insert_queryAL1 = "INSERT INTO personas (`id_localidad`,`nombre`, `apellido`, `cursos`, `alumnoOProfesor`, `representante`) VALUES ('$id_localidad','$nombreAL1', '$apellidoAL1', '$cursoAL1', 0, 0)";
    $resultAL1 = mysqli_query($conn, $insert_queryAL1);

    // Insertar datos de AL2
    $insert_queryAL2 = "INSERT INTO personas (`id_localidad`,`nombre`, `apellido`, `cursos`, `alumnoOProfesor`, `representante`) VALUES ('$id_localidad','$nombreAL2', '$apellidoAL2', '$cursoAL2', 0, 0)";
    $resultAL2 = mysqli_query($conn, $insert_queryAL2);

    // Insertar datos de AL3
    $insert_queryAL3 = "INSERT INTO personas (`id_localidad`,`nombre`, `apellido`, `cursos`, `alumnoOProfesor`, `representante`) VALUES ('$id_localidad','$nombreAL3', '$apellidoAL3', '$cursoAL3', 0, 0)";
    $resultAL3 = mysqli_query($conn, $insert_queryAL3);

    // Insertar datos de PR
    $insert_queryPR = "INSERT INTO personas (`id_localidad`,`nombre`, `apellido`, `telefono`, `email`, `alumnoOProfesor`) VALUES ('$id_localidad','$nombrePR', '$apellidoPR', '$telefonoPR', '$emailPR', 1)";
    $resultPR = mysqli_query($conn, $insert_queryPR);



    if ($resultALR && $resultAL1 && $resultAL2 && $resultAL3 && $resultPR && $resultLOC) {
        echo "Carga de Proyecto Correcta.";
    } else {
        echo "Error en la inserción de datos: " . mysqli_error($conn);
    }
}

$conn->close();
?>
