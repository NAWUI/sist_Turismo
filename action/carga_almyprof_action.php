<?php
include("connection.php");

$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
$localidad = filter_input(INPUT_POST, 'localidad', FILTER_SANITIZE_STRING);
$telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
$correoAlumno = filter_input(INPUT_POST, 'correoAlumno', FILTER_SANITIZE_EMAIL);
$alumnoProfesor = filter_input(INPUT_POST, 'alumnoProfesor', FILTER_SANITIZE_STRING);
$representante = filter_input(INPUT_POST, 'representante', FILTER_SANITIZE_STRING);
$cursos = filter_input(INPUT_POST, 'cursos', FILTER_SANITIZE_STRING);

if (empty($nombre) || empty($apellido) || empty($localidad) || empty($telefono) || empty($correoAlumno) || empty($alumnoProfesor) || empty($representante) || empty($cursos)) {
    echo "Rellene todos los campos.";
} else {
    $correo_check_query = "SELECT id FROM alumnos WHERE email = ?";
    $stmt = $conn->prepare($correo_check_query);
    $stmt->bind_param("s", $correoAlumno);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "El correo electrónico del alumno ya está registrado.";
    } else {
        // Aquí podrías realizar un hashing seguro para almacenar la contraseña del alumnoProfesor si es necesario

        $insert_query = "INSERT INTO alumnos (`nombre`, `apellido`, `id_cursos`, `id_localidades`, `telefono`, `email`, `alumnoOProfesor`, `representante`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("ssssssss", $nombre, $apellido, $cursos, $localidad, $telefono, $correoAlumno, $alumnoProfesor, $representante);
        
        if ($stmt->execute()) {
            echo "Carga completa.";
        } else {
            //echo $stmt->execute();
            echo $stmt -> error;
        }
    }
    $stmt->close();
}

$conn->close();
?>
