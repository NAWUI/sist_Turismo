<?php
include('session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Jornadas Turísticas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
            <!-- HEADER INICIO -->
                      <?php 
                include("header.php");
            ?>
            
        <!-- HEADER FIN -->


        <div class="custom-container">
    <h2>Formulario de Carga de Grupo</h2>
    <form>
        <div class="custom-form-group">
            <label for="nombreGrupo" class="custom-form-label">Nombre del grupo</label>
            <input type="text" class="custom-form-control" id="nombreGrupo" placeholder="Nombre del grupo">
        </div>
        <div class="custom-form-group">
            <label for="localidad" class="custom-form-label">Localidad asignada</label>
            <input type="text" class="custom-form-control" id="localidad" placeholder="Localidad asignada">
        </div>
        <div class="custom-form-group">
            <label for="division" class="custom-form-label">División</label>
            <input type="text" class="custom-form-control" id="division" placeholder="División">
        </div>
        <!-- Buttons to open modals for Students, Representante, and Professor -->
        <div class="custom-form-group">
            <label for="representante" class="custom-form-label">Representante (Alumno)</label>
            <input type="text" class="custom-form-control" id="nombreALR" placeholder="Nombre">
            <input type="text" class="custom-form-control" id="apellidoALR" placeholder="Apellido">
            <input type="text" class="custom-form-control" id="cursoALR" placeholder="Curso">
          </div>
        <div class="custom-form-group">
            <label for="cargaAlumnos1" class="custom-form-label">Alumno 1</label>
            <input type="text" class="custom-form-control" id="nombreAL1" placeholder="Nombre">
            <input type="text" class="custom-form-control" id="apellidoAL1" placeholder="Apellido">
            <input type="text" class="custom-form-control" id="cursoAL1" placeholder="Curso">
          </div>
        <div class="custom-form-group">
            <label for="cargaAlumnos2" class="custom-form-label">Alumno 2</label>
            <input type="text" class="custom-form-control" id="nombreAL2" placeholder="Nombre">
            <input type="text" class="custom-form-control" id="apellidoAL2" placeholder="Apellido">
            <input type="text" class="custom-form-control" id="cursoAL2" placeholder="Curso">
          </div>
        <div class="custom-form-group">
            <label for="cargaAlumnos3" class="custom-form-label">Alumno 3</label>
            <input type="text" class="custom-form-control" id="nombreAL3" placeholder="Nombre">
            <input type="text" class="custom-form-control" id="apellidoAL3" placeholder="Apellido">
            <input type="text" class="custom-form-control" id="cursoAL3" placeholder="Curso">
          </div>
        <div class="custom-form-group">
            <label for="profesorReferente" class="custom-form-label">Profesor referente</label>
            <input type="text" class="custom-form-control" id="nombrePR" placeholder="Nombre">
            <input type="text" class="custom-form-control" id="apellidoPR" placeholder="Apellido">
            <input type="text" class="custom-form-control" id="emailPR" placeholder="Email">
            <input type="tel" class="custom-form-control" id="telefonoPR" placeholder="Telefono" pattern="[0-9]{10}" required>
        </div>

        <div class="custom-form-group">
            <label for="evaluadores" class="custom-form-label">Evaluadores a cargo</label>
            <select class="custom-form-control" name="evaluadores" id="evaluadores" aria-label="Default select example">
                                <option value="">Seleccione un Evaluador</option>
                                <?php
                                include('connection.php');
                                $sql = "SELECT nombre, id FROM usuarios";
                                $consulta = mysqli_query($conn, $sql);
                                while ($vec = mysqli_fetch_row($consulta)) {
                                    $usuario="$vec[0]";
                                    $id_usuarios = "$vec[1]";
                                    echo "<option value='$id_usuarios'>$usuario</option>";
                                }
                                ?>
                            </select>
        </div>
        <br>
        <div class="custom-btn-container"> <!-- Contenedor para el botón -->
                <button type="button" id="Enviar" class="custom-btn-primary">Enviar</button>
        </div>
    </form>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="js/script.js"></script>
<script src="js/carga_grupo.js"></script>


</html>
