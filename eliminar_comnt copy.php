<?php
include_once('connection.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM `comentarios` WHERE `id_coment` = $id";


    if (mysqli_query($conn, $query)) {
      echo "exito";
    } else {
        echo "error";
    };
};

?>
