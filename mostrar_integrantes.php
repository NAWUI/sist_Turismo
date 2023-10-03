<?php

include("connection.php");


 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Check if 'name' and 'email' keys exist in the POST data
     if (isset($_POST['standId'])) {
         $standId = $_POST["standId"];
         $standText= $_POST["standText"];
         $selectedL=$_POST["selectedL"];
         $q="SELECT * FROM localidades WHERE numeromesa='".$standId."' AND nombreLocalidad='".$selectedL."'";
         $s=mysqli_query($conn,$q);
         $r=mysqli_fetch_array($s);
         // Do something with the data, for example, you can echo a response
         
         
         $response = "";

    $query = "SELECT * FROM `personas` WHERE `id_localidades` = '".$r['id']."'";
    $result = mysqli_query($conn, $query);


        // Verifica si hay resultados
        if ($result) {
            // Recorre los resultados y agrega el código a la variable de respuesta
            while ($row = mysqli_fetch_assoc($result)) {
                $response .= "
                <div id='integrante1' name='integrante1'>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='opcion' value='opcion1'>
                        <label class='form-check-label'>
                            ".$row["nombre"]."
                        </label>
                    </div>
                </div>";
            }
        } else {
            $response .= "<div id='integrante1' name='integrante1'>
                    <p>No se encontraron resultados</p>
                        </div>";
        };

        // Imprime la variable de respuesta como resultado de la solicitud AJAX
        echo $response;

     } else {
         echo "Missing data in POST request";
     }
 } else {
     echo "Invalid request method";
 }

?>