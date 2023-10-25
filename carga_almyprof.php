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
           <div class="headerA">
            <!-- HEADER QUE SE MUESTRA DE BASE -->
            <nav class="navbar navbar-light bg-customBlue" style="z-index: 1;">
                <div class="container-fluid" id="menuToggle">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarToggleExternalContent2"
                        aria-controls="navbarToggleExternalContent1"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        id="open"
                    >
                        <i class="fas fa-bars text-light"></i>
                
                </button>
                <!-- BOTON DE CERRAR SESION -->
                    <a href="index.html"><button class="button-28" role="button">Cerrar Sesión</button></a>    
                <!-- BOTON DE CERRAR SESION FIN-->
                </div>
            </nav>
            <!-- HEADER QUE SE MUESTRA DE BASE FIN -->
    
            <!-- DIV DE OSCURIDAD -->
            <div id="oscuro" class="test" style="display: none;"></div>
            <!-- DIV DE OSCURIDAD  FIN-->
    
            <!-- SIDEBAR QUE APARECE -->
            <div id="mySidenav" class="sidenav" style="z-index: 3;">
                <div class="sidenav-content" id="sidenavContent">
                    <a class="closebtn" id="close">&times;</a>
                    <h1 class="sidenav-title">Sistema de Jornadas Turísticas</h1>
                    <br>                    
                    <div class="sideButtonsContainer">
                        <a class="sideButtons " href="map.php">Mapa</a>

                        <a class="sideButtons " href="registro.php">Registro</a>

                        <a class="sideButtons " href="localidades.php">Lista de localidades</a>

                        <a class="sideButtons " href="carga_grupo.php">Inscripción de Proyectos</a>

                        <a class="sideButtons " href="carga_almyprof.php">Carga de Alumnos y Profesores</a>
                    </div>
                </div>
            </div>
            <!-- SIDEBAR QUE APARECE FIN -->
    
        </div>
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