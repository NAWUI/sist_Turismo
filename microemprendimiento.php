<?php
include('connection.php');
include('session.php');

$nombreLocalidad = mysqli_real_escape_string($conn, $_POST['nombrelocalidad']);
$idStand = mysqli_real_escape_string($conn, $_POST['idStand']);
echo $nombreLocalidad;
echo $idStand;
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

        <div class="form-group">
                        <select style="display: none;" class="form-select" id="nombre_localidad" name="nombre_localidad">
            <!-- Add options for the select element if needed -->
                        <option value<?php echo $nombreLocalidad; ?>selected><?php echo $nombreLocalidad; ?></option>
                    </select>
                    </div>
                    <div class="form-group">
                        <select style="display: none;" class="form-select" id="id_stand" name="id_stand">
            <!-- Add options for the select element if needed -->
                        <option value<?php echo $idStand; ?>selected><?php echo $idStand; ?></option>
                    </select>
                    </div>
        <div class="custom-container">
    <h2>Formulario de Carga de Grupo</h2>
    <form id="myform" action="microemprendimiento.php"  method="POST">
        <div class="custom-form-group">
            <label for="titulo" class="custom-form-label">Titulo del microemprendimiento</label>
            <input type="text" class="custom-form-control" id="titulo" placeholder="Titulo del microemprendimiento">
        </div>
        <div class="custom-form-group">
    <label for="descripcion" class="custom-form-label">Descripcion</label>
    <textarea class="custom-form-control" id="descripcion" placeholder="Descripcion"></textarea>
</div>
        <div class="custom-form-group">
            <label for="calificacion" class="custom-form-label">Calificacion</label>
            <select class="custom-form-control" id="calificacion" >
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
        </div>
    
        <br>

    </form>
    <div class="custom-btn-container"> <!-- Contenedor para el botón -->
                <button id='enviar_micro' class="custom-btn-primary">Enviar</button>
        </div>    
</div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/microemprendimiento.js"></script>
<script src="js/script.js"></script>
</html>