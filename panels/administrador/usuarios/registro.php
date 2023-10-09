<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['username'];
if($varsesion== null || $varsesion=''){
    header("location: ../../../errors/error404.php");
    die();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Grupo Piasa</title>
    <link rel="shortcut icon" href="../../../img/logo_3.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assent/navbar.css">
</head>
<body>
    <div class="container" style="margin-left: -10px;">
    <div class="sidebar close" style="background-color: #681515;">
    <div class="logo-details">
    <i class='bx bx-home' ></i>
      <span class="logo_name">Grupo Piasa</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../home.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../home.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <a href="registro.php">
          <i class='bx bx-user'></i>
          <span class="link_name">Usuarios</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="registro.php">Usuarios</a></li>
        </ul>
      </li>
      <li>
        <a href="">
        <i class='bx bxs-file-doc' style='color: white;'></i>
          <span class="link_name">Historial</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Historial</a></li>
        </ul>
      </li>
      <li>
        <a href="">
        <i class='bx bx-edit-alt'></i>
          <span class="link_name">Movimientos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Movimientos</a></li>
        </ul>
      </li>
      <li>
        <a href="">
        <i class='bx bx-envelope'></i>
          <span class="link_name">Solicitudes</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Solicitudes</a></li>
        </ul>
      </li>
      <li>
        <a href="">
        <i class='bx bx-bell'></i>
          <span class="link_name">Notificaciones</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Notificaciones</a></li>
        </ul>
      </li>
      <li>
        <a href="../../destroy_session.php">
        <i class='bx bx-log-out' ></i>
          <span class="link_name">Cerrar Sesión</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../../destroy_session.php">Cerrar Sesión</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
      </div>
      <div class="name-job">
        <div class="profile_name">Administrador</div>
        <div class="job">T.I</div>
      </div>
      <i class='bx bx-user'></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' style="color: #681515;"></i>
      <span class="text">Registro de nuevo usuario</span>
    </div>
    <br>
    <div class="container-modal" style="margin-left: 50px;">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #681515; border-color: #681515;">
        <img src="../../../img/user-plus-solid-36 (1).png">
    </button>

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Nuevo calculo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" name="username"  >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="row justify-content-end">
                            <button type="submit" name="guardar" class="btn btn-success btn-block" style="width: 120px; margin-right: 12px;">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
  </section>
    </div>

    <script src="../../../js/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>