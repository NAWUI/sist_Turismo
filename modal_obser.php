<?php
include('connection.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT observaciones.*, usuarios.id AS id_usuarios FROM observaciones INNER JOIN usuarios ON observaciones.id_usuario = usuarios.id WHERE observaciones.id = $id; ";
    $result = mysqli_query($conn, $query);

    if (!empty($result)) {
        $row = mysqli_fetch_array($result);
       ?>
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar observacion</h5>
      </div>
       <div class="modal-body">
        <textarea name="edicion" id="edicion" cols="50" rows="3"><?php echo $row['observacion']; ?></textarea>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="<?php echo $row['id']; ?>" class="editarobser btn btn-primary">Listo</button>
      </div>
       <?php
        
    } else {
        echo 'error2';
    };

} else {
    echo 'error1';
};

?>