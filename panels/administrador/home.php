<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['username'];
if($varsesion== null || $varsesion=''){
    header("location: ../../errors/error404.php");
    die();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Grupo Piasa</title>
    <link rel="shortcut icon" href="../../img/logo_3.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../assent/navbar.css">
</head>
<body>
    <div class="container">
    <div class="sidebar close" style="background-color: #681515;">
    <div class="logo-details">
    <i class='bx bx-home' ></i>
      <span class="logo_name">Grupo Piasa</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="home.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="home.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <a href="usuarios/registro.php">
          <i class='bx bx-user'></i>
          <span class="link_name">Usuarios</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="usuarios/registro.php">Usuarios</a></li>
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
      <span class="text">Dashboard</span>
    </div>
  </section>
    </div>

    <script src="../../js/navbar.js"></script>
</body>
</html>