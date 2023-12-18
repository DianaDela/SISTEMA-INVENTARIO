<?php
    include('../../../bd/conexion.php');

    if (isset($_POST['guardar'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rol_id = $_POST['rol_id'];
        $query = "INSERT INTO usuarios(username,
                                        password,
                                        rol_id) VALUES ('$username',
                                                        '$password',
                                                        '$rol_id')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: users.php');
    }
?>