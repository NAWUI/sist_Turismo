<?php
include_once('connection.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $observacion = $_POST['obser'];

    if (!empty($coment)) {
      $query = "UPDATE `observaciones` SET `observacion`='$observacion' WHERE `id`= $id";

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
