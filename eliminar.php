<?php
include('connection.php');

if (!isset($_POST['id'])) {
    echo 'Error';
    exit(); // Exit the script to prevent further execution
}

$id_localidad = $_POST['id'];

// Use prepared statement to prevent SQL injection
$query = "DELETE FROM `localidades` WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id_localidad);

if (mysqli_stmt_execute($stmt)) {
    echo 'Localidad eliminada';
} else {
    echo 'Vuelva a intentar';
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
