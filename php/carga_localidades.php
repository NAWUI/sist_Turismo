<?php 

    include("connection.php");

?>
<html>

    <!DOCTYPE html>

    <head>



    </head>

    <body>

    <form action="carga_localidades_v.php" method="POST">

        <input type="number" id="numeromesa" name="numeromesa" placeholder="Numero de mesa"> <br><br>
        <input type="text" id="nombreLocalidad" name="nombreLocalidad" placeholder="Nombre de localidad"> <br><br>
        <input type="text" id="profesorACargo" name="profesorACargo" placeholder="Profesor a cargo"> <br><br>
        <select id="id_curso" name="id_curso" placeholder="curso">
            
        </select> <br><br>
        <input type="submit" id="enviar" name="enviar" value="enviar">

    </form>

    </body>

</html>