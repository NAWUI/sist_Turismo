<?php
    include('connection.php');

    $comentario = $_POST['comentario'];
    $usu = $_POST['usu'];
    $localidad = $_POST['localidad'];
    $hora = date('H:i:s');

    $query = "INSERT INTO `comentarios`(`comentario`, `id_usuario`, `id_localidades`, SYSDATE()) VALUES ('".$comentario."','".$usu."','".$localidad."','".$hora."')";
    $result = mysqli_query($conn, $query);

    if ($result = 1) {
        echo 'Comentario subido';
    } else {
        echo 'Error';
    }

?>