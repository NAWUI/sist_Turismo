<?php
include("connection.php");

$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$password = $_POST['password'];
$correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);

if (empty($nombre) || empty($correo) || empty($password)) {
    echo "Rellene los campos faltantes.";
} else {
    $correo_check_query = "SELECT id FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($correo_check_query);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "El correo electrónico ya está asociado a otro usuario";
    } else {
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO usuarios (nombre, contrasenia, correo) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sss", $nombre, $password, $correo);

        if ($stmt->execute()) {
            echo "Usted se ha registrado correctamente.";
        } else {
            echo "Ocurrió un error durante el registro. Por favor, inténtelo de nuevo más tarde.";
        }
    }
    $stmt->close();
}

$conn->close();
?>