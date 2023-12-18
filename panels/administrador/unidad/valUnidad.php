<?php
    include('../../../bd/conexion.php');

    if (isset($_POST['guardar'])) {
        $unidad = $_POST['unidad'];
        $query = "INSERT INTO unidad(unidad) VALUES ('$unidad')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: unidad.php');
    }
?>