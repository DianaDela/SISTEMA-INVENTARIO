<?php
    include('../../../bd/conexion.php');

    if (isset($_POST['guardar'])) {
        $colaborador = $_POST['colaborador'];
        $iniciales = $_POST['iniciales'];
        $puesto = $_POST['puesto'];
        $departamento = $_POST['departamento'];
        $query = "INSERT INTO empleados(colaborador,
                                        iniciales,
                                        puesto,
                                        departamento) VALUES ('$colaborador',
                                                                '$iniciales',
                                                                '$puesto',
                                                                '$departamento')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: empleados.php');
    }
?>