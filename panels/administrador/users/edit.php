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

$username = '';
$password = '';
$rol_id = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuarios WHERE id = $id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $username = $row['username'];
    $password = $row['password'];
    $rol_id = $row['rol_id'];
  }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];
    $new_rol_id = $_POST['new_rol_id'];
    $query = "UPDATE usuarios SET username = '$new_username', password = '$new_password', rol_id = '$new_rol_id' WHERE id = $id";
    $result_update = mysqli_query($conexion, $query);
    
    if ($conexion->query($query) === TRUE) {
        header('location: users.php');
    } else {
        echo "Error al cambiar el nombre de usuario.";
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
            <label>Usuario</label>
            <input type="text" class="form-control" name="new_username" value="<?php echo $username; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
            <label>Password</label>
            <input type="text" class="form-control" name="new_password" value="<?php echo $password; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
                <label>Rol_id</label>
                <select class="form-select mb-3" aria-label="Default select example" name="new_rol_id">
                <option selected><?php echo $rol_id; ?></option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM roles");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID']."'>".$resultado['rol']."</option>";
                              }
                            ?>
                </select>
            </div>
            <a type="submite" class="btn btn-danger" href="users.php">Back</a>
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