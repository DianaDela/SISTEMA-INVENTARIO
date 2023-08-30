<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="shortcut icon" href="../img/logo2.jfif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<!-- Navbar -->    
<nav class="navbar" style="background: gray;">
  <div class="container-fluid" style="margin-left: 32%;">
    <img src="../img/logo.png" alt="" srcset="">
  </div>
</nav>

    <!-- Card -->
    <div class="container" style="width: 500px;">
    <br><br>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <i class='bx bxs-error flex-shrink-0 me-2' width="24" height="24" role="img" aria-label="Danger:" style="margin-left: 89px;"></i>
        <div>
            Usuario y/o contraseña incorrecto
        </div>
    </div>
        <div class="card text-center" style="margin: 50px;">
            <div class="card-header">
                <h4>
                    Login
                </h4>
            </div>
            <div class="card-body">
                <form action="../validar.php" method="POST">
                    <br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">
                        <i class='bx bxs-user'></i>
                    </span>
                    <input type="text" name="username" id="password" class="form-control" placeholder="Username" required>
                </div><br>
                <br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">
                        <i class='bx bxs-lock-alt'></i>
                    </span>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <br>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" style="margin: 12px;">Ingresar</button>
                </div>                
                </form>
                <a href="../recuperacionPass/page.php">¿Haz olvidado tu contraseña?</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>