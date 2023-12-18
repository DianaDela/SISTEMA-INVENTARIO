<?php
    include('../../../bd/conexion.php');

    if (isset($_POST['guardar'])) {
        $status = $_POST['status'];
        $query = "INSERT INTO status(status) VALUES ('$status')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: status.php');
    }
?>