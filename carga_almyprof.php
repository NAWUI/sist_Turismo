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
    <link rel="stylesheet" href="js/node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="js/node_modules/bootstrap/dist/css/bootstrap.min.css">
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
                    <div class="sideButtonsBorder2">
                        <a class="sideButtons " href="index.html">Inicio</a>
                    </div>
                    <div class="sideButtonsBorder1">
                        <a class="sideButtons " href="registro.php">Registro</a>
                    </div>
                    <div class="sideButtonsBorder1">
                        <a class="sideButtons " href="carga_almyprof.php">Carga de Alumnos y Profesores</a>
                    </div>
                    <div class="sideButtonsBorder1">
                        <a class="sideButtons " href="carga_grupo.php">Inscripción de Proyectos</a>
                    </div>
                    <div class="sideButtonsBorder1">
                        <a class="sideButtons " href="map.php">Mapa</a>
                    </div>
                    <div class="sideButtonsBorder1">
                        <a class="sideButtons " href="localidades.php">Lista de localidades</a>
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
            <label for="almnyprof" class="custom-form-label">Alumno o Profesor</label>
                <select class="custom-form-control" name="almnyprof" id="almnyprof"aria-label="Default select example">
                    <option selected>Seleccione un grupo</option> 
                    <option value="1">Alumno</option>
                    <option value="2">Profesor</option>
                </select>
        </div>
        <div class="custom-form-group">
            <label for="nombre" class="custom-form-label">Nombre</label>
            <input type="text" class="custom-form-control" id="nombre" placeholder="Nombre">
        </div>
        <div class="custom-form-group">
            <label for="apellido" class="custom-form-label">Apellido</label>
            <input type="text" class="custom-form-control" id="apellido" placeholder="Apellido">
        </div>
        <div class="custom-form-group">
        <label for="localidad" class="custom-form-label">Localidad</label>
            <select class="custom-form-control" name="localidad" id="localidad"aria-label="Default select example">
            <option selected>Seleccione una localidada</option> 
                        <?php 
                                include('connection.php');
                                $sql = "SELECT id.localidades, nombreLocalidaes FROM `localidades` ";
                                // $consulta = mysqli_query($conexion, $sql);
                                // while ($vec = mysqli_fetch_row($consulta)) {
                                    
                                //     echo "<option value='$escuelaP'>$vec[2]-N°$vec[3]</option>";
                                // }
                        ?>
                    <option value="1234">+ Añadir localidad</option>
            </select>
            <!-- <label for="grupo" class="custom-form-label">Grupo</label> -->
            <!-- <input type="text" class="custom-form-control" id="grupo" placeholder="Grupo"> -->
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
        <label for="cursos" class="custom-form-label">Cursos</label>
            <select class="custom-form-control" name="cursos" id="cursos"aria-label="Default select example">
            <option selected>Seleccione un curso</option> 
                        <?php 
                                // include('connection.php');
                                // $sql = "SELECT id.nombre FROM `alumnos` WHERE NOT cue = $escuela";
                                // $consulta = mysqli_query($conexion, $sql);
                                // while ($vec = mysqli_fetch_row($consulta)) {
                                    
                                //     echo "<option value='$escuelaP'>$vec[2]-N°$vec[3]</option>";
                                // }
                        ?>
                    <option value="5">+ Añadir curso</option>
            </select>
        </div>
        <div class="custom-form-group">
        <label for="representante" class="custom-form-label">Representante</label>
            <select class="custom-form-control" name="representante" id="representante"aria-label="Default select example">
            <option selected>Seleccione un Representante</option> 
                        <?php 
                                // include('connection.php');
                                // $sql = "SELECT id.nombre FROM `alumnos` WHERE NOT cue = $escuela";
                                // $consulta = mysqli_query($conexion, $sql);
                                // while ($vec = mysqli_fetch_row($consulta)) {
                                    
                                //     echo "<option value='$escuelaP'>$vec[2]-N°$vec[3]</option>";
                                // }
                        ?>
                    <option value="1">Representante</option>
            </select>
        </div>
        <br>
        <div class="custom-btn-container"> <!-- Contenedor para el botón -->
                <button type="button" id='enviar' class="custom-btn-primary">Enviar</button>
        </div>
    </form>
</div>
    
</body>
<script src="js/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/node_modules/jquery/dist/jquery.min.js"></script>   
<script src="js/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="js/script.js"></script>
<script src="js/almyprof.js"></script>

</html>