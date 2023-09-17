
<?php

    include("connection.php");

   // $stand=$_POST["stand"];
   // echo $stand;

    //$name=$_POST["name"];
    //echo $name;
    /*$selected=$_POST["selected"];
    echo $selected;*/

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if 'name' and 'email' keys exist in the POST data
        if (isset($_POST['standId'])) {
            $standId = $_POST["standId"];
            $standText= $_POST["standText"];
            $selectedL=$_POST["selectedL"];
            // Do something with the data, for example, you can echo a response
            $cargaStand="UPDATE localidades SET numeromesa='".$standId."' WHERE nombreLocalidad='".$selectedL."'";
            $resCarga=mysqli_query($con,$cargaStand);   

        } else {
            echo "Missing data in POST request";
        }
    } else {
        echo "Invalid request method";
    }
    
?>