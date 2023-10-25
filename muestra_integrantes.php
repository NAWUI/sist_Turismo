<?php
    include('connection.php');

    $idStand = $_POST['idStand'];
    $response = "";

    $query = "SELECT * FROM `alumnos` WHERE `id_localidades` = '$idStand'";
    $result = mysqli_query($conn, $query);

    $query1 = "SELECT * FROM `alumnos` WHERE `id_localidades` = '$idStand' AND `representante` = 1";
    $result1 = mysqli_query($conn, $query1);
    $row1 = mysqli_fetch_assoc($result1);

    $result = mysqli_query($conn, $query);

        // Verifica si hay resultados
        if ($result) {
            // Recorre los resultados y agrega el código a la variable de respuesta
            while ($row = mysqli_fetch_assoc($result)) {
                $response .= "
                                    <div class='mb-3'>
                                        <form>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='opcion' value='opcion1'>
                                                <label class='form-check-label'>
                                                    ".$row["nombre"]."
                                                </label>
                                            </div>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='opcion' value='opcion2'>
                                                <label class='form-check-label'>
                                                    ".$row["nombre"]."
                                                </label>
                                            </div>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='opcion' value='opcion3'>
                                                <label class='form-check-label'>
                                                    ".$row["nombre"]."
                                                </label>
                                            </div>
                                        </form>
                                        <label class='mt-3'>Representante: ".$row1["nombre"]."</label>
                                    </div>";
            }
        } else {
            $response = "<p>No se encontraron resultados</p>";
        };

        // Imprime la variable de respuesta como resultado de la solicitud AJAX
        echo $response;

?>