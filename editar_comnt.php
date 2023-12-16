<?php
include_once('connection.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $coment = $_POST['coment'];

    if (!empty($coment)) {
      $query = "UPDATE `comentarios` SET `comentario`='$coment' WHERE `id`= $id";

      if (mysqli_query($conn, $query)) {
        echo "exito";
      } else {
          echo "error2";
      };
    } else {
      echo 'vacio';
    }


} else {
  echo 'error';
};

?>
