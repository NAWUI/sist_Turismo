<?php
    
    include("connection.php");

    if(isset($_POST["stand"])){$stand=$_POST["stand"];
    echo $stand;
    }
    $query="SELECT * FROM localidades WHERE 1";
    $sql=mysqli_query($con,$query);


?>
<html>

    <!DOCTYPE html>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

        
    </head>

    <body>

        <select id="select" name="select">

            <?php while($row=mysqli_fetch_array($sql)){
                ?>
                <option> <?php echo $row["nombreLocalidad"]; ?> </option>
            <?php } ?>

        </select> <br><br>

        <button id="enviar" name="enviar"> Enviar </button>


        <div id="resultado" name="resultado"> </div>
    </body>

</html>

<script type="text/javascript">

    function asignar(url){

    }

    var enviar=document.getElementById("enviar");
    enviar.addEventListener("click", function(){
        var texto=document.getElementById("select");
        var selected=texto.options[texto.selectedIndex].text;
        console.log(selected);

        var parametros={
                "selected":selected
            }
            $.ajax({
                data: parametros,
                dataType: 'json',
                url: 'php/asignar_localidades.php',
                type:'post',
                success: function(response){
                    $("#resultado").html(response);
                    console.log(parametros["selected"]);
                    
                }
            });
        
        })
        


</script>