<?php
    include('../../../bd/conexion.php');

    if (isset($_POST['guardar'])) {
        $id_activo = $_POST['id_activo'];
        $id_categoria = $_POST['id_categoria'];
        $categoria = $_POST['categoria'];
        $serie = $_POST['serie'];
        $id_unidad = $_POST['id_unidad'];
        $unidad = $_POST['unidad'];
        $descripcion = $_POST['descripcion'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $adquisicion = $_POST['adquisicion'];
        $estatus = $_POST['estatus'];
        $id_departamento = $_POST['id_departamento'];
        $departamento = $_POST['departamento'];
        $colaborador = $_POST['colaborador'];
        $resguardo = $_POST['resguardo'];
        $iniciales = $_POST['iniciales'];
        $puesto = $_POST['puesto'];
        $fecha = $_POST['fecha'];
        $query = "INSERT INTO general(id_activo,
                                    id_categoria,
                                    categoria,
                                    serie,
                                    id_unidad,
                                    unidad,
                                    descripcion,
                                    marca,
                                    modelo,
                                    adquisicion,
                                    estatus,
                                    id_departamento,
                                    departamento,
                                    colaborador,
                                    resguardo,
                                    iniciales,
                                    puesto,
                                    fecha) VALUES ('$id_activo',
                                                    '$id_categoria',
                                                    '$categoria',
                                                    '$serie',
                                                    '$id_unidad',
                                                    '$unidad',
                                                    '$descripcion',
                                                    '$marca',
                                                    '$modelo',
                                                    '$adquisicion',
                                                    '$estatus',
                                                    '$id_departamento',
                                                    '$departamento',
                                                    '$colaborador',
                                                    '$resguardo',
                                                    '$iniciales',
                                                    '$puesto',
                                                    '$fecha')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: general.php');
    }
?>