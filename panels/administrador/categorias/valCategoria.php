<?php
    include('../../../bd/conexion.php');

    if (isset($_POST['guardar'])) {
        $categoria = $_POST['categoria'];
        $query = "INSERT INTO categorias(categorias) VALUES ('$categoria')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: categorias.php');
    }
?>