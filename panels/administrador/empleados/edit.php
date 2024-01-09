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

$colaborador = '';
$iniciales = '';
$puesto = '';
$departamento = '';



if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM empleados WHERE id = $id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $colaborador = $row['colaborador'];
    $iniciales = $row['iniciales'];
    $puesto = $row['puesto'];
    $departamento = $row['departamento'];
  }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $new_colaborador = $_POST['new_colaborador'];
    $new_iniciales = $_POST['new_iniciales'];
    $new_puesto = $_POST['new_puesto'];
    $new_departamento = $_POST['new_departamento'];

    $query = "UPDATE empleados SET colaborador = '$new_colaborador', iniciales = '$new_iniciales', puesto = '$new_puesto', departamento = '$new_departamento' WHERE id = $id";
    $result_update = mysqli_query($conexion, $query);
    
    if ($conexion->query($query) === TRUE) {
        header('location: empleados.php');
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
                                <label for="colaborador" class="form-label">Empleado</label>
                                <input type="text" class="form-control" name="new_colaborador" id="colaborador" value="<?php echo $colaborador; ?>">
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
            <a type="submite" class="btn btn-danger" href="empleados.php">Back</a>
            <button class="btn btn-success" name="update">
                Update
            </button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>