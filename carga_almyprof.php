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
    <h2>Formulario de Carga de Alumno y Profesores</h2>
    <form>
        <div class="custom-form-group">
            <label for="nombre" class="custom-form-label">Nombre</label>
            <input type="text" class="custom-form-control" id="nombre" placeholder="Nombre">
        </div>
        <div class="custom-form-group">
            <label for="apellido" class="custom-form-label">Apellido</label>
            <input type="text" class="custom-form-control" id="apellido" placeholder="Apellido">
        </div>
        <div class="custom-form-group">
            <label for="grupo" class="custom-form-label">Grupo</label>
            <input type="text" class="custom-form-control" id="grupo" placeholder="Grupo">
        </div>
        <div class="custom-form-group">
            <label for="telefono" class="custom-form-label">Número de teléfono</label>
            <input type="tel" class="custom-form-control" id="telefono" placeholder="Número de teléfono">
        </div>
        <div class="custom-form-group">
            <label for="correoAlumno" class="custom-form-label">Correo electrónico</label>
            <input type="email" class="custom-form-control" id="correoAlumno" placeholder="Correo electrónico">
        </div>
        <div class="custom-form-group">
            <label for="alumnoProfesor" class="custom-form-label">Alumno o profesor</label>
            <input type="text" class="custom-form-control" id="alumnoProfesor" placeholder="Alumno o profesor">
        </div>
        <div class="custom-form-group">
            <label for="escuela" class="custom-form-label">Escuela</label>
            <input type="text" class="custom-form-control" id="escuela" placeholder="Escuela">
        </div>
        <div class="custom-form-group">
            <label for="curso" class="custom-form-label">Curso</label>
            <input type="text" class="custom-form-control" id="curso" placeholder="Curso">
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