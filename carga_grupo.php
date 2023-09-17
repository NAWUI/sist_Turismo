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
            <label for="profesor" class="custom-form-label">Profesor a cargo</label>
            <input type="text" class="custom-form-control" id="profesor" placeholder="Profesor a cargo">
        </div>
        <div class="custom-form-group">
            <label for="division" class="custom-form-label">División</label>
            <input type="text" class="custom-form-control" id="division" placeholder="División">
        </div>
        <div class="custom-form-group">
            <label for="cargaAlumnos" class="custom-form-label">Carga de alumnos</label>
            <input type="text" class="custom-form-control" id="cargaAlumnos" placeholder="Carga de alumnos">
        </div>
        <div class="custom-form-group">
            <label for="profesorReferente" class="custom-form-label">Profesor referente</label>
            <input type="text" class="custom-form-control" id="profesorReferente" placeholder="Profesor referente">
        </div>
        <div class="custom-form-group">
            <label for="evaluadores" class="custom-form-label">Evaluadores a cargo</label>
            <input type="text" class="custom-form-control" id="evaluadores" placeholder="Evaluadores a cargo">
        </div>
        <div class="custom-form-group">
            <label for="criteriosEvaluativos" class="custom-form-label">Criterios evaluativos</label>
            <input type="text" class="custom-form-control" id="criteriosEvaluativos" placeholder="Criterios evaluativos">
        </div>
        <div class="custom-form-group">
            <label for="microemprendimientos" class="custom-form-label">Microemprendimientos</label>
            <input type="text" class="custom-form-control" id="microemprendimientos" placeholder="Microemprendimientos">
        </div>
        <br>
        <div class="custom-btn-container"> <!-- Contenedor para el botón -->
                <button type="submit" class="custom-btn-primary">Enviar</button>
        </div>
    </form>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</html>