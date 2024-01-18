<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['username'];
if($varsesion== null || $varsesion=''){
    header("location: ");
    die();
}

?>

<?php
include("../../../bd/conexion.php");

$id_activo = '';
$id_categoria = '';
$categoria = '';
$serie = '';
$id_unidad = '';
$unidad = '';
$descripcion = '';
$marca = '';
$modelo = '';
$adquisicion = '';
$estatus = '';
$id_departamento = '';
$departamento = '';
$colaborador = '';
$resguardo = '';
$iniciales = '';
$puesto = '';
$fecha = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM general WHERE id = $id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_activo = $row['id_activo'];
    $id_categoria = $row['id_categoria'];
    $categoria = $row['categoria'];
    $serie = $row['serie'];
    $id_unidad = $row['id_unidad'];
    $unidad = $row['unidad'];
    $descripcion = $row['descripcion'];
    $marca = $row['marca'];
    $modelo = $row['modelo'];
    $adquisicion = $row['adquisicion'];
    $estatus = $row['estatus'];
    $id_departamento = $row['id_departamento'];
    $departamento = $row['departamento'];
    $colaborador = $row['colaborador'];
    $resguardo = $row['resguardo'];
    $iniciales = $row['iniciales'];
    $puesto = $row['puesto'];
    $fecha = $row['fecha'];
  }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $new_id_activo = $_POST['new_id_activo'];
    $new_id_categoria = $_POST['new_id_categoria'];
    $new_categoria = $_POST['new_categoria'];
    $new_serie = $_POST['new_serie'];
    $new_id_unidad = $_POST['new_id_unidad'];
    $new_unidad = $_POST['new_unidad'];
    $new_descripcion = $_POST['new_descripcion'];
    $new_marca = $_POST['new_marca'];
    $new_modelo = $_POST['new_modelo'];
    $new_adquisicion = $_POST['new_adquisicion'];
    $new_estatus = $_POST['new_estatus'];
    $new_id_departamento = $_POST['new_id_departamento'];
    $new_departamento = $_POST['new_departamento'];
    $new_colaborador = $_POST['new_colaborador'];
    $new_resguardo = $_POST['new_resguardo'];
    $new_iniciales = $_POST['new_iniciales'];
    $new_puesto = $_POST['new_puesto'];
    $new_fecha = $_POST['new_fecha'];

    $query = "UPDATE general SET id_activo = '$new_id_activo', id_categoria = '$new_id_categoria', serie = '$new_serie', id_unidad = '$new_id_unidad', unidad = '$new_unidad',
    descripcion = '$new_descripcion', marca = '$new_marca', modelo = '$new_modelo', adquisicion = '$new_adquisicion', estatus = '$new_estatus', id_departamento = '$new_id_departamento', 
    departamento = '$new_departamento', colaborador = '$new_colaborador', resguardo = '$new_resguardo', iniciales = '$new_iniciales', puesto = '$new_puesto', fecha = '$new_fecha' WHERE id = $id";
    $result_update = mysqli_query($conexion, $query);
    
    if ($conexion->query($query) === TRUE) {
        header('location: general.php');
    } else {
        echo "Error al cambiar el dato.";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Piasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="title text-center">
        <h1>Modificar datos</h1>
    </div>
    <br>
    <div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="mb-3">
            <label>id_activo</label>
                <input type="text" class="form-control" name="new_id_activo" value="<?php echo $id_activo; ?>">
            </div>
            <div class="mb-3">
                                <label for="id_categoria" class="form-label">ID_Categoria</label>
                                <select class="form-select mb-3" name="new_id_categoria" id="new_id_categoria">
                                  <option selected><?php echo $id_categoria; ?></option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM categorias");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['id']."'>".$resultado['categorias']."</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="categoria" class="form-label">Categoria</label>
                                <select class="form-select mb-3" name="new_categoria" id="categoria">
                                  <option selected><?php echo $categoria; ?></option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM categorias");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['categorias']."'>".$resultado['categorias']."</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="serie" class="form-label">Serie</label>
                                <input type="text" class="form-control" name="new_serie" id="serie" value="<?php echo $serie; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="id_unidad" class="form-label">ID_Unidad</label>
                                <select class="form-select mb-3" name="new_id_unidad" id="id_unidad">
                                  <option selected><?php echo $id_unidad; ?></option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM unidad");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['id']."'>".$resultado['unidad']."</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="unidad" class="form-label">Unidad</label>
                                <select class="form-select mb-3" name="new_unidad" id="unidad">
                                  <option selected><?php echo $unidad; ?></option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM unidad");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['unidad']."'>".$resultado['unidad']."</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="new_descripcion" id="descripcion" value="<?php echo $descripcion; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" class="form-control" name="new_marca" id="marca" value="<?php echo $marca; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" class="form-control" name="new_modelo" id="modelo" value="<?php echo $modelo; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="adquisicion" class="form-label">adquisición</label>
                                <input type="text" class="form-control" name="new_adquisicion" id="adquisicion" value="<?php echo $adquisicion; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="estatus" class="form-label">Estatus</label>
                                <select class="form-select mb-3" name="new_estatus" id="estatus">
                                  <option selected><?php echo $estatus; ?></option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM status");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['id']."'>".$resultado['status']."</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="id_departamento" class="form-label">ID_Departamento</label>
                                <select class="form-select mb-3" name="new_id_departamento" id="id_departamento">
                                  <option selected><?php echo $estatus; ?></option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM depto");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['id']."'>".$resultado['depto']."</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="departamento" class="form-label">Departamento</label>
                                <select class="form-select mb-3" name="new_departamento" id="departamento">
                                  <option selected><?php echo $departamento; ?></option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM depto");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['depto']."'>".$resultado['depto']."</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="colaborador" class="form-label">Colaborador</label>
                                <select class="form-select mb-3" name="new_colaborador" id="colaborador">
                                <option selected><?php echo $colaborador; ?></option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM empleados");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['colaborador']."'>".$resultado['colaborador']."</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="resguardo" class="form-label">Resguardo</label>
                                <select class="form-select mb-3" name="new_resguardo" id="resguardo">
                                <option selected><?php echo $resguardo; ?></option>
                                  <option value="R">Responsable</option>
                                  <option value="T">Titular</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="iniciales" class="form-label">Iniciales</label>
                                <input type="text" class="form-control" name="new_iniciales" id="iniciales" value="<?php echo $iniciales; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="puesto" class="form-label">Puesto</label>
                                <input type="text" class="form-control" name="new_puesto" id="puesto" value="<?php echo $puesto; ?>">
                              </div>
                              <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="new_fecha" id="fecha" value="<?php echo $fecha; ?>">
                              </div>
            <a type="submite" class="btn btn-danger" href="general.php">Cancelar</a>
            <button class="btn btn-success" name="update">
                Actualizar
            </button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>