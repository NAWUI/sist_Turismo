
<?php
include("connection.php");
include("session.php");

$idStand = $_POST["idStand"];



$calificacion = $_POST["calificacion"];
$descripcion = $_POST["descripcion"];
$titulo = $_POST["titulo"];
$stand = $_POST["stand"];
echo $stand;
$sqlStand="SELECT * FROM localidades WHERE numeromesa='$stand'";
$resultStand=mysqli_query($conn,$sqlStand);
if($resultStand){
    $arrayStand=mysqli_fetch_array($resultStand);
    if($arrayStand!=null){
        $localidades = $arrayStand["id"];
    }
}

$evaluador = $id_usr;

if (
    empty($calificacion) || empty($localidades) || 
    empty($titulo) || empty($descripcion)
) {
    echo "Rellene todos los campos.";
} else {
    // Las variables de cadena deben rodearse de comillas simples en las consultas SQL

    // Insertar datos de ALR
    $insert_queryMCE = "INSERT INTO `microemprendimientos`(`Titulo`, `Descripcion`, `id_localidades`, `id_evaluador`, `calificacion`) VALUES ('$titulo','$descripcion,'$localidades','$evaluador,'$calificacion')";
    $resultMCE = mysqli_query($conn, $insert_queryMCE);

    if ($resultMCE) {
        echo "Carga de Microemprendimietno Correcta.";
    } else {
        echo "Error en la inserción de datos: " . mysqli_error($conn);
    }
}

$conn->close();
?>
