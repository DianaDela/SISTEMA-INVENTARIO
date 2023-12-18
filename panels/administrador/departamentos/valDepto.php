<?php
    include('../../../bd/conexion.php');

    if (isset($_POST['guardar'])) {
        $depto = $_POST['depto'];
        $query = "INSERT INTO depto(depto) VALUES ('$depto')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: departamentos.php');
    }
?>