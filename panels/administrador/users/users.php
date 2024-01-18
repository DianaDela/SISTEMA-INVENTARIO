<?php
  include '../../../bd/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Grupo piasa | IALMSA</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../../../assent/admin.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../home.php">
                <img src="../../../img/logo_3.png" alt="" srcset="" style="width: 20%;">
                Grupo Piasa
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar por..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../../destroy_session.php">Cerrar Session</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="../home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interfaz</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Autenticacion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages1" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="users.php">
                                        Usuarios
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Tablas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="../general/general.php">
                                        General
                                    </a>
                                    <a class="nav-link" href="../categorias/categorias.php">
                                        Categorias
                                    </a>
                                    <a class="nav-link" href="../unidad/unidad.php">
                                        Unidad Organizativa
                                    </a>
                                    <a class="nav-link" href="../status/status.php">
                                        Status
                                    </a>
                                    <a class="nav-link" href="../empleados/empleados.php">
                                        Empleados
                                    </a>
                                    <a class="nav-link" href="../departamentos/departamentos.php">
                                        Departamentos
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Inicio session como:</div>
                        Administrador
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Usuarios</h1>
                        <br>
                        <div class="row">
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 12%;">
                          <img src="../../../img/user-plus-solid-36 (1).png">Nuevo usuario
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Registro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form action="valUser.php" method="POST">
                              <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario">
                              </div>
                              <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Contraseña">
                              </div>
                              <div class="mb-3">
                                <label for="rol_id" class="form-label">Rol</label>
                                <select class="form-select mb-3" name="rol_id" id="rol_id">
                                  <option selected disabled>Selecciona una opción</option>
                                  <?php
                                      $sql = $conexion->query("SELECT * FROM roles");
                                      while ($resultado = $sql->fetch_assoc()) {
                                      echo "<option value='".$resultado['id']."'>".$resultado['rol']."</option>";
                                    }
                                  ?>
                                </select>
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
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabla usuarios
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Rol_ID</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Rol_ID</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                        $query = "SELECT * FROM usuarios";
                                        $result_task = mysqli_query($conexion, $query);

                                        while($row = mysqli_fetch_assoc($result_task)) { ?>
                                        <tr>
                                          <td><?php echo $row['id']; ?></td>
                                          <td><?php echo $row['username']; ?></td>
                                          <td><?php echo $row['password']; ?></td>
                                          <td><?php echo $row['rol_id']; ?></td>
                                          <td>
                                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning">
                                              Editar
                                            </a>
                                            <a href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm('Estas seguro que deseas eliminar este usuario?')" class="btn btn-danger">
                                              Eliminar
                                            </a>
                                          </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../../../js/datatables-simple-demo.js"></script>
    </body>
</html>